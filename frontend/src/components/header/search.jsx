import { useEffect, useState, useRef } from "react";
import { Link } from "react-router-dom";
import hanghoaApi from "../../api/hanghoaApi";

function Search() {
  //   const [searchValue, setSearchValue] = useState("");
  const [searchResult, setSearchResult] = useState([]);
  const [showResult, setShowResult] = useState(false);

  function useDebounce(value, delay) {
    const [debouncedValue, setDebouncedValue] = useState(value);

    useEffect(() => {
      const handler = setTimeout(() => setDebouncedValue(value), delay);

      return () => clearTimeout(handler);
      // eslint-disable-next-line react-hooks/exhaustive-deps
    }, [value]);

    return debouncedValue;
  }
  const [requestSearch, setRequestSearch] = useState("");
  const [searchValue, setSearchValue] = useState([]);

  const debounced = useDebounce(requestSearch, 500);
  const inputRef = useRef();
  const searchInput = (e) => {
    const valSeach = e.target.value;
    if (!valSeach.startsWith(" ")) {
      setRequestSearch(valSeach);
    }
  };
  useEffect(() => {
    if (!debounced.trim()) {
      setSearchResult([]);
      return;
    }

    const handleSearch = async (e) => {
      try {
        const params = {
          value: debounced,
        };
        const response = await hanghoaApi.list_search(params);
        setSearchValue(response);
      } catch (error) {
        console.log(error);
      }
    };
    handleSearch();
  }, [debounced]);
  const handleClear = () => {
    setRequestSearch("");
    setSearchValue([]);
    inputRef.current.focus();
  };
  const handleHideResult = () => {
    document.getElementById("form_resultSearch").classList.add("hidden");
  };
  const handleShowResult = () => {
    document.getElementById("form_resultSearch").classList.remove("hidden");
  };
  return (
    <>
      <div className="col-span-2 mobile:col-span-4">
        <div className="flex w-full justify-center ">
          <div className="w-full">
            <div
              onBlur={handleHideResult}
              className="relative flex flex-wrap items-stretch w-full"
            >
              <input
                ref={inputRef}
                onChange={(e) => searchInput(e)}
                onFocus={() => handleShowResult()}
                value={requestSearch}
                className="input_search h-10 rounded-3xl"
                placeholder="Bạn cần tìm tên thuốc hoặc hoạt chất"
                aria-label="Search"
                aria-describedby="button-addon2"
              />
              {!!requestSearch && (
                <button className="btn_search" onClick={handleClear}>
                  <img src={require("../../assets/img/icon/delete.png")} />
                </button>
              )}
              {/* Form result Search */}
              {searchValue.length > 0 ? (
                <ul id="form_resultSearch" className="list_search">
                  {searchValue.map((search_item, key) => {
                    return (
                      <Link to={"/sanpham/" + search_item.url}>
                        <li className="list_search_items">
                          <div className="col-span-2 mobile:col-span-4">
                            <img
                              className="rounded-sm"
                              src={require(`../../../../Backend/upload/sanpham/${search_item.path_image}`)}
                              alt=""
                            />
                          </div>
                          <div className="col-span-10 mobile:text-xs mobile:col-span-8">
                            <p>
                              {search_item.tenhh} ({search_item.quycach})
                            </p>
                            <p>{search_item.tenloai}</p>
                            <p>
                              {search_item.giabanmin
                                .toString()
                                .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
                              /{search_item.dvtmin} -{" "}
                              {search_item.giabanmax
                                .toString()
                                .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
                              /{search_item.dvtmax}
                            </p>
                          </div>
                        </li>
                      </Link>
                    );
                  })}
                </ul>
              ) : (
                ""
              )}
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default Search;
