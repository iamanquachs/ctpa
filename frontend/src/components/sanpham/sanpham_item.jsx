import React, { useState, useEffect, useContext, useCallback } from "react";
import dathangApi from "../../api/dathangApi";
import { Link } from "react-router-dom";
import { useDispatch } from "react-redux";
import { createGiohang } from "../../redux/actions";
import Cookies from "universal-cookie";

const SanphamItem = (prop) => {
  const cookies = new Cookies();
  const dispatch = useDispatch();
  const hanghoa_item = prop.hanghoa_item;
  const danhmuc_item = prop.danhmuc_item;
  const index = prop.index;
  const [soluong, setSoluong] = useState(1);
  const [openModal, setModalLogin] = useState(false);

  function soluong_tang(key, e) {
    const soluong_element = document
      .getElementsByClassName("sanpham_item")
      [key].getElementsByClassName("input_sl")[0];
    var soluong = soluong_element.value;
    var soluong_new = Number(soluong) + 1;
    soluong_element.value = soluong_new;
  }
  function soluong_giam(key, e) {
    const soluong_element = document
      .getElementsByClassName("sanpham_item")
      [key].getElementsByClassName("input_sl")[0];
    var soluong = soluong_element.value;
    if (soluong <= 1) {
    } else {
      var soluong_new = Number(soluong) - 1;
      soluong_element.value = soluong_new;
    }
  }
  function handleGiohang(e) {
    const params = {
      msdn: cookies.get("msdn"),
    };
    dispatch(createGiohang.createGiohangRequest(params));
  }

  function dathangline_add(index, e) {
    var ten_sanpham = e.tenhh,
      mshh = e.mshh,
      msnpp = e.msnpp,
      mshhnpp = e.mshhnpp,
      dvtmin = e.dvtmin,
      dvtmax = e.dvtmax,
      gianhap = e.gianhap,
      ptgiam = e.ptgiam,
      giagocmin = e.giabanmin,
      giagocmax = e.giabanmax,
      giabanmin = giagocmin - (giagocmin * ptgiam) / 100,
      giabanmax = giagocmax - (giagocmax * ptgiam) / 100,
      thuesuat = e.thuesuat;
    var soluong = document
      .getElementsByClassName("sanpham_item")
      [index].getElementsByClassName("input_sl")[0].value;
    var thanhtienmin = giabanmin * soluong;
    var thanhtienmax = giabanmax * soluong;
    var thanhtienvatmin = thanhtienmin - (thanhtienmin * thuesuat) / 100;
    var thanhtienvatmax = thanhtienmax - (thanhtienmax * thuesuat) / 100;
    var checked_giabanmin =
      document.getElementsByClassName("checked_giabanmin")[index];
    var checked_giabanmax =
      document.getElementsByClassName("checked_giabanmax")[index];
    if (cookies.get("msdn")) {
      // const [ktmshh, setKtmshh] = React.useState([]);

      if (checked_giabanmin.checked == true) {
        //Xử lý khi sản phẩm có trong giỏ hàng min

        const handleKTGH = async (e) => {
          try {
            const params = {
              msdn: cookies.get("msdn"),
              mshh: mshh,
              dvt: dvtmin,
            };
            const response = await dathangApi.list_kt_mshh_dathangline(params);
            if (response.length == 0) {
              const handleDathang = async (e) => {
                try {
                  const params = {
                    msdv: "",
                    msdn: cookies.get("msdn"),
                    mshh: mshh,
                    tenhh: ten_sanpham,
                    dvt: dvtmin,
                    mshhnpp: mshhnpp,
                    msnpp: msnpp,
                    ptgiam: ptgiam,
                    thuesuat: thuesuat,
                    soluong: soluong,
                    gianhap: gianhap,
                    giagoc: giagocmin,
                    giaban: giabanmin,
                    thanhtien: thanhtienmin,
                    thanhtienvat: thanhtienvatmin,
                  };
                  await dathangApi.dathangline_add(params);
                  handleGiohang();
                } catch (error) {
                  console.log(error);
                }
              };
              handleDathang();
            } else {
              const handleUpdate_dathangline = async (e) => {
                const soluongNew =
                  parseInt(response[0].soluong) + parseInt(soluong);
                const thanhtienNew = giabanmin * parseInt(soluongNew);
                const thanhtienvatNew =
                  thanhtienNew - (thanhtienNew * thuesuat) / 100;
                try {
                  const params = {
                    msdn: cookies.get("msdn"),
                    mshh: mshh,
                    soluong: soluongNew,
                    dvt: dvtmin,
                    thanhtien: thanhtienNew,
                    thanhtienvat: thanhtienvatNew,
                  };
                  await dathangApi.update_dathangline(params);
                } catch (error) {
                  console.log(error);
                }
              };
              handleUpdate_dathangline();
            }
          } catch (error) {
            console.log(error);
          }
        };
        handleKTGH();
      } else if (checked_giabanmax.checked == true) {
        //Xử lý khi sản phẩm có trong giỏ hàng max

        const handleKTGH = async (e) => {
          try {
            const params = {
              msdn: cookies.get("msdn"),
              mshh: mshh,
              dvt: dvtmax,
            };
            const response = await dathangApi.list_kt_mshh_dathangline(params);
            if (response.length == 0) {
              const handleDathang = async (e) => {
                try {
                  const params = {
                    msdv: "",
                    msdn: cookies.get("msdn"),
                    mshh: mshh,
                    tenhh: ten_sanpham,
                    dvt: dvtmax,
                    msnpp: msnpp,
                    mshhnpp: mshhnpp,
                    ptgiam: ptgiam,
                    thuesuat: thuesuat,
                    soluong: soluong,
                    gianhap: gianhap,
                    giagoc: giagocmax,
                    giaban: giabanmax,
                    thanhtien: thanhtienmax,
                    thanhtienvat: thanhtienvatmax,
                  };
                  await dathangApi.dathangline_add(params);
                } catch (error) {
                  console.log(error);
                }
              };
              handleDathang();
            } else {
              const handleUpdate_dathangline = async (e) => {
                const soluongNew =
                  parseInt(response[0].soluong) + parseInt(soluong);
                const thanhtienNew = giabanmax * parseInt(soluongNew);
                const thanhtienvatNew =
                  thanhtienNew - (thanhtienNew * thuesuat) / 100;
                try {
                  const params = {
                    msdn: cookies.get("msdn"),
                    mshh: mshh,
                    soluong: soluongNew,
                    dvt: dvtmax,
                    thanhtien: thanhtienNew,
                    thanhtienvat: thanhtienvatNew,
                  };
                  await dathangApi.update_dathangline(params);
                } catch (error) {
                  console.log(error);
                }
              };
              handleUpdate_dathangline();
            }
          } catch (error) {
            console.log(error);
          }
        };
        handleKTGH();

        //
      } else {
        alert("Bạn chưa chọn loại hàng");
      }
    } else {
      alert("Bạn chưa đăng nhập");
    }
  }

  return (
    <>
      <div className="col-span-1 sanpham_item">
        <div className=" w-full rounded-[5px] shadow-sm  border-[#e0f2f9] border bg-white hover:border-[green]">
          <div>
            <Link to={"/sanpham/" + hanghoa_item.url} className="img_sanpham">
              <img
                className="rounded-t-[5px]"
                src={require(`../../../../Backend/upload/sanpham/${hanghoa_item.path_image}`)}
                alt={hanghoa_item.tenhh}
              ></img>
            </Link>
            <div className=" px-3 ">
              {/* Tên hàng hóa */}
              <input hidden className="ma_sanpham" value={hanghoa_item.mshh} />
              <input hidden className="ms_npp" value={hanghoa_item.msnpp} />
              <Link to="/sanpham" className="ten_sanpham">
                {hanghoa_item.tenhh}
              </Link>
              <div className="chitiet_item mobile:text-xs">
                {/* hàm lượng */}
                <p>
                  <span>• {danhmuc_item.tenloai}</span>
                  <span> | </span>
                  {hanghoa_item.hamluong}
                </p>
                {/* quy cách */}
                <p>
                  • {hanghoa_item.dvtmax} {hanghoa_item.slquydoi}{" "}
                  {hanghoa_item.dvtmin}
                </p>
                {/* tiêu chuẩn */}
                <p>
                  • {hanghoa_item.tieuchuan} {hanghoa_item.theodon}
                </p>
                {/* nhà phân phối */}
                <p className="chitiet_item mobile:text-xs">
                  <span>• {hanghoa_item.tennhasx}</span>
                  <span> | </span>
                  <span>{hanghoa_item.msnuocsx}</span>
                </p>
                <p>
                  • <span className="ms_npp">{hanghoa_item.msnpp}</span>
                </p>
                {/* nhóm */}
                <p></p>
              </div>
              <div className="flex gap-2 pt-2 justify-end tablet:flex-col tablet:items-end tablet:gap-0 mobile:flex-col mobile:items-end mobile:gap-0">
                <p className="text-[gray] giagoc">
                  {hanghoa_item.giabangoc
                    .toString()
                    .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
                </p>
                <p className="text-[black] tablet:hidden mobile:hidden">-</p>
                <div className="flex gap-2">
                  <div className="flex ">
                    <p className="giaban giabanmin ">
                      {hanghoa_item.giabanmin
                        .toString()
                        .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
                    </p>
                    <p className="giaban dvt_min">/{hanghoa_item.dvtmin}</p>
                  </div>
                  <input
                    type="radio"
                    className="checked_giabanmin"
                    name={"giaban_" + hanghoa_item.mshh}
                    defaultChecked
                  />
                </div>
              </div>
              <div className="flex gap-2  justify-end">
                <div className="flex ">
                  <p className="giaban giabanmax">
                    {hanghoa_item.giabanmax
                      .toString()
                      .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
                  </p>
                  <p className="giaban dvt_max">/{hanghoa_item.dvtmax}</p>
                </div>
                <input
                  name={"giaban_" + hanghoa_item.mshh}
                  type="radio"
                  className="checked_giabanmax"
                />
              </div>
            </div>
            <div className="grid grid-cols-12 gap-2 p-3">
              <div className="soluong">
                <button className="" onClick={(e) => soluong_giam(index, e)}>
                  <img
                    src={require("../../assets/img/icon/minus.png")}
                    alt="minus"
                  ></img>
                </button>
                <input
                  onChange={(e) =>
                    setSoluong(e.target.value.replace(/[^0-9\.\,]/g, ""))
                  }
                  maxLength="4"
                  className=" input_sl w-10 text-center outline-none"
                  type="text"
                  value={soluong}
                ></input>
                <button onClick={(e) => soluong_tang(index, e)} className="">
                  <img
                    src={require("../../assets/img/icon/plus.png")}
                    alt="plus"
                  ></img>
                </button>
              </div>
              <button
                className="btn_dathang"
                onClick={(e) => dathangline_add(index, hanghoa_item)}
              >
                Thêm vào giỏ
              </button>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default SanphamItem;
