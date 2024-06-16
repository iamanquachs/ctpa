import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import GioHangItem from "./giohang_item";
import giohangApi from "../../api/giohangApi";
import thanhtoanApi from "../../api/thanhtoanApi";
import Cookies from "universal-cookie";
import { useSelector } from "react-redux";
import { giohangState$ } from "../../redux/selectors";

const Cart = () => {
  window.scrollTo(0, 0);
  const [isCheckAll, setIsCheckAll] = useState(false);
  const [giohang, setGiohangItem] = useState([]);
  const giohangthanhtien = useSelector(giohangState$);
  const [isCheck, setIsCheck] = useState([]);
  const sum = giohangthanhtien.reduce((thanhtien, item) => {
    for (let i = 0; i < isCheck.length; i++) {
      if (isCheck[i] === item.rowid) {
        return parseInt(thanhtien) + parseInt(item.thanhtien);
      }
    }
    if (isCheckAll) {
      return parseInt(thanhtien) + parseInt(item.thanhtien);
    }
    return parseInt(thanhtien);
  }, 0);
  const cookies = new Cookies();
  useEffect(() => {
    const handleGiohang = async (e) => {
      try {
        const params = {
          msdn: cookies.get("msdn"),
        };
        const response = await giohangApi.listgiohang(params);
        setGiohangItem(response);
      } catch (error) {
        console.log(error);
      }
    };
    handleGiohang();
  }, []);
  //todo Check input
  const handleClickAll = (e) => {
    setIsCheckAll(!isCheckAll);
    setIsCheck(giohang.map((item) => item.rowid));
    if (isCheckAll) {
      setIsCheck([]);
    }
  };
  const handleClick = (e) => {
    const { value, checked } = e.target;
    setIsCheck([...isCheck, value]);
    if (!checked) {
      setIsCheck(isCheck.filter((item) => item !== value));
    }
  };

  //todo Thanh toán
  const handleThanhtoan = (e) => {
    if (isCheck == "") {
      //*chưa có check sp nào cả
      alert("Bạn chưa chọn sản phẩm để thanh toán");
    } else {
      //*thỏa điều kiện thì cho mua hàng

      var soct = "ID" + Date.now() + Math.floor(1000 + Math.random() * 9000);
      const i = 0;
      const thanhtienvat = sum;

      const handleDathangHeader_add = async (e) => {
        try {
          const params = {
            msdv: "",
            msdn: cookies.get("msdn"),
            mskh: "",
            tenkhachhang: cookies.get("tendv"),
            tendaidien: cookies.get("tendaidien"),
            dienthoai: cookies.get("dienthoai"),
            diachi: cookies.get("diachi"),
            soct: soct,
            thanhtienvat: thanhtienvat,
          };
          await thanhtoanApi.dathangheader_add(params);
        } catch (error) {
          console.log(error);
        }
      };
      handleDathangHeader_add();

      while (i < isCheck.length) {
        const handleUpdateLine = async (e) => {
          try {
            const params = {
              msdn: cookies.get("msdn"),
              soct: soct,
              rowid: isCheck[i],
            };
            await thanhtoanApi.update_line_1(params);
          } catch (error) {
            console.log(error);
          }
        };
        handleUpdateLine();
        i++;
      }
    }
  };
  return (
    <>
      <div className="bg-[#eeebeb]">
        <div className="container mx-auto">
          <div className="grid grid-cols-12  py-3 gap-7 mobile:gap-2 mobile:px-2 tablet:gap-2 tablet:px-3">
            <div className="col-span-8 bg-white p-5 rounded-md tablet:col-span-12 mobile:p-2  mobile:col-span-12">
              <div className="flex justify-between">
                <p className="text-sm font-semibold text-[red]">Giỏ hàng</p>
                <p className="text-[green]">Xóa tất cả</p>
              </div>
              {/* Chi tiết giỏ hàng */}
              <div className="flex flex-col ">
                <div className="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div className="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div className="overflow-hidden">
                      <table className="min-w-full">
                        <thead className="border-b mobile:hidden">
                          <tr>
                            <th>
                              <input
                                className="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-center mr-2 cursor-pointer"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                                onClick={handleClickAll}
                                defaultChecked={isCheckAll}
                              />
                            </th>
                            <th
                              scope="col"
                              className="header_tb_giohang text-center"
                            >
                              Sản phẩm
                            </th>
                            <th scope="col" className="header_tb_giohang">
                              Đơn giá
                            </th>
                            <th scope="col" className="header_tb_giohang">
                              Số lượng
                            </th>
                            <th
                              scope="col"
                              className="header_tb_giohang whitespace-nowrap"
                            >
                              Thành tiền
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          {giohang.map((giohangItem, key) => {
                            return (
                              <GioHangItem
                                giohangItem={giohangItem}
                                index={key}
                                handleClick={handleClick}
                                isChecked={isCheck.includes(key)}
                                // isChecked={isCheckAll}
                              />
                            );
                          })}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {/* Thông tin khách hàng lấy api của A.Vi */}
            <div className="col-span-4 tablet:col-span-12 mobile:col-span-12">
              <div className=" bg-white p-5 rounded-md max-h-52">
                <div className="  text-xl ">
                  <div className="text-sm font-semibold text-[red]">
                    Khách hàng
                  </div>
                  <div className="text-[14px] pl-[30px] ">
                    <p className="py-1 flex items-center gap-2">
                      <div>
                        <img src={require("../../assets/img/icon/store.png")} />
                      </div>
                      <span>{cookies.get("tendv")}</span>
                    </p>
                    <p className="py-1 flex items-center gap-2">
                      <div>
                        <img src={require("../../assets/img/icon/user.png")} />
                      </div>
                      <span>{cookies.get("tendaidien")}</span>
                    </p>
                    <p className="py-1 flex items-center gap-2">
                      <div>
                        <img src={require("../../assets/img/icon/phone.png")} />
                      </div>
                      <span>{cookies.get("msdn")}</span>
                    </p>
                    <p className="py-1 flex items-center gap-2">
                      <div>
                        <img
                          src={require("../../assets/img/icon/address.png")}
                        />
                      </div>
                      <span>{cookies.get("diachi")}</span>
                    </p>
                  </div>
                </div>
                <div className="flex justify-around pt-10"></div>
              </div>
              <div className=" bg-white p-5 mobile:mt-2 tablet:mt-[8px] mt-5 rounded-md max-h-52">
                <div className="flex justify-between  font-semibold">
                  <p className="text-[red] text-sm font-semibold">Tổng tiền</p>
                  <div className="flex items-end">
                    <p className="text-sm text-[red] font-semibold">
                      {sum
                        .toString()
                        .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}{" "}
                      đ
                    </p>
                  </div>
                </div>
                <div className="flex justify-around pt-10">
                  <Link
                    onClick={handleThanhtoan}
                    // to={"/thanhtoan"}
                    className="bg-[green] w-full text-center text-white p-3 rounded-lg"
                  >
                    Đặt hàng
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};
export default Cart;
