import React, { useEffect, useRef, useState } from "react";
import { Link, useNavigate } from "react-router-dom";
import Cookies from "universal-cookie";
import danhmucApi from "../../api/danhmucApi";
import hangsxApi from "../../api/hangsxApi";
import { useDispatch, useSelector } from "react-redux";
import { createGiohang } from "../../redux/actions";
import { giohangState$ } from "../../redux/selectors";
import {
  hangsx_filter,
  tieuchuan_filter,
  nuocsx_filter,
  nhomsp_filter,
} from "../home/index";
import Search from "./search";
import LoginForm from "./login_form";

const Header = (prop) => {
  const cookies = new Cookies();
  const danhmuc = prop.danhmuc;
  const [tieuchuan, settieuchuan] = useState([]);
  const [nuocsx, setNuocsx] = useState([]);
  const [hangsx, setHangsx] = useState([]);
  const dispatch = useDispatch();
  const giohang = useSelector(giohangState$).length;

  //todo danh muc hang sx
  useEffect(() => {
    const handleHangsx = async (e) => {
      try {
        const params = {
          loai: "hsx",
        };
        const response = await hangsxApi.listhangsx(params);
        setHangsx(response);
      } catch (error) {
        console.log(error);
      }
    };
    handleHangsx();
  }, []);

  //todo danh muc nuoc san xuat
  useEffect(() => {
    const handleNuocsx = async (e) => {
      try {
        const params = {
          msdv: "",
          phanloai: "nuocsx",
        };
        const response = await danhmucApi.listdanhmuc(params);
        setNuocsx(response);
      } catch (error) {
        console.log(error);
      }
    };
    handleNuocsx();
  }, []);
  //todo Danh  muc tieu chuan
  useEffect(() => {
    const handleTieuchuan = async (e) => {
      try {
        const params = {
          msdv: "",
          phanloai: "tieuchuan",
        };
        const response = await danhmucApi.listdanhmuc(params);
        settieuchuan(response);
      } catch (error) {
        console.log(error);
      }
    };
    handleTieuchuan();
  }, []);

  useEffect(() => {
    const handleGiohang = (e) => {
      const params = {
        msdn: cookies.get("msdn"),
      };
      dispatch(createGiohang.createGiohangRequest(params));
    };
    handleGiohang();
  }, []);

  return (
    <>
      <div className="sticky z-[999]  top-0 shadow-md">
        <div className="bg-white w-auto h-auto  ">
          <div className="container mx-auto text-black py-2 tablet:px-3">
            <div className="grid grid-cols-6 gap-5 mobile:px-2 mobile:gap-2 ">
              <div className="col-span-1 mobile:flex mobile:items-center tablet:flex tablet:items-center">
                <Link to="/">
                  <img
                    className="max-w-full mobile:hidden"
                    src={require("../../assets/img/banner/Logo_TPSPharma.png")}
                  ></img>
                  <img
                    className="max-w-full fullscreen:hidden tablet:hidden"
                    src={require("../../assets/img/banner/Logo_TPSPharma_mini.png")}
                  ></img>
                </Link>
              </div>
              {/* Search */}
              <Search />
              <div className="col-span-3 mobile:col-span-1">
                <ul className="flex gap-2 h-10  items-center justify-end mobile:justify-center text-[black]">
                  <li className="flex gap-2 items-center  mobile:hidden">
                    <img src={require("../../assets/img/icon/phone.png")} />
                    <p>0901 09 09 17 • </p>
                  </li>
                  <li className=" mobile:hidden">
                    <LoginForm />
                  </li>
                  <li>
                    <Link to="/cart">
                      <div className="flex relative">
                        <button className=" rounded-md text-[red] tablet:hidden mobile:hidden">
                          GIỎ HÀNG ({giohang})
                        </button>
                        <button className=" rounded-md text-[red] fullscreen:hidden mobile:relative ">
                          <p className="mobile:absolute mobile:right-[-6px] mobile:top-[-14px] mobile:text-sm tablet:absolute tablet:right-[-6px] tablet:top-[-14px] tablet:text-sm">
                            ({giohang})
                          </p>
                          <img
                            className=""
                            src={require("../../assets/img/icon/cart_mobile.png")}
                          />{" "}
                        </button>
                      </div>
                    </Link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div className="bg-[#103c19] ">
          <ul className="items_nhomsp container mx-auto text-[14px] h-[40px] flex justify-between items-center text-white tablet:text-sm tablet:overflow-x-scroll tablet:whitespace-nowrap tablet:gap-3 tablet:px-3">
            {danhmuc.map((danhmuc_item, key) => {
              return (
                <li
                  onClick={(e) => nhomsp_filter(e)}
                  className="h-full flex items-center "
                >
                  <Link
                    to={
                      "/" +
                      danhmuc_item.tenloai
                        .replaceAll(" ", "-")
                        .normalize("NFD")
                        .replace(/[\u0300-\u036f]/g, "")
                        .replace(/[đĐ]/g, (m) => (m === "đ" ? "d" : "D"))
                        .toLowerCase()
                    }
                  >
                    {danhmuc_item.tenloai}
                  </Link>
                </li>
              );
            })}
          </ul>
        </div>
        <div className="bg-[#f1fafe] ">
          <ul className="items_nsx container mx-auto h-[40px] flex justify-between items-center text-black ">
            {hangsx.map((hangsx_item, key) => {
              return (
                <li
                  onClick={(e) => hangsx_filter(e)}
                  className="hover:bg-orange-400 px-2 rounded-md text-sm mobile:text-xs"
                >
                  {hangsx_item.tenviettat}
                </li>
              );
            })}
          </ul>
        </div>
        <div className="bg-[#f1fafe] list_nsx_nuocsx">
          <div className=" flex container mx-auto">
            <ul className=" items_tieuchuan container mx-auto h-[40px] gap-5 flex justify-start items-center text-black ">
              {tieuchuan.map((tieuchuan_item, key) => {
                return (
                  <Link to="/">
                    <li
                      onClick={(e) => tieuchuan_filter(e)}
                      className="hover:bg-orange-400 px-2 rounded-md text-sm mobile:text-xs"
                    >
                      {tieuchuan_item.tenloai}
                    </li>
                  </Link>
                );
              })}
            </ul>
            <ul className=" items_nuocsx container mx-auto h-[40px] gap-5 flex justify-end items-center text-black ">
              {nuocsx.map((nuocsx_item, key) => {
                return (
                  <Link to="/">
                    <li
                      onClick={(e) => nuocsx_filter(e)}
                      className="hover:bg-orange-400 px-2  rounded-md text-sm mobile:text-xs"
                    >
                      {nuocsx_item.tenloai}
                    </li>
                  </Link>
                );
              })}
            </ul>
          </div>
        </div>
      </div>
      {/* Modal */}
      {/* Modal Login */}
    </>
  );
};
export default Header;
