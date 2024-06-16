import React, { useState, useEffect } from "react";
import "swiper/css";
import { Link } from "react-router-dom";

import danhmucApi from "../../api/danhmucApi";
import SanPhamTheoNhom from "../sanpham/sanpham_theonhom";

const Home = () => {
  window.scrollTo(0, 0);
  const [danhmuc, setDanhmuc] = useState([]);

  useEffect(() => {
    const danhmucHandle = async (e) => {
      try {
        const params = {
          phanloai: "msnhom",
        };
        const response = await danhmucApi.listdanhmuc(params);
        setDanhmuc(response);
      } catch (error) {
        console.log(error);
      }
    };
    danhmucHandle();
  }, []);

  return (
    <>
      <div className="bg_body">
        {/* Banner */}
        <div className="tablet:px-3 mobile:px-2">
          <div className="container mx-auto w-full bg-transparent">
            <div className="grid grid-cols-12 gap-4 mx-auto py-2 items-center ">
              <div className="col-span-8">
                <div
                  id="carouselExampleControls"
                  className="carousel slide relative"
                  data-bs-ride="carousel"
                >
                  <div
                    className="carousel-inner relative w-full overflow-hidden rounded-3x"
                    style={{
                      borderRadius: "1rem",
                    }}
                  >
                    <div className="carousel-item active relative float-left w-full ">
                      <img
                        src={require("../../assets/img/banner/quangcao1.jpg")}
                        className="block w-full "
                        alt="Wild Landscape"
                      />
                    </div>
                    <div className="carousel-item relative float-left w-full">
                      <img
                        src={require("../../assets/img/banner/quangcao2.jpg")}
                        className="block w-full"
                        alt="Camera"
                      />
                    </div>
                    <div className="carousel-item relative float-left w-full">
                      <img
                        src={require("../../assets/img/banner/quangcao3.jpg")}
                        className="block w-full"
                        alt="Exotic Fruits"
                      />
                    </div>
                  </div>
                  <button
                    className="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                  >
                    <span
                      className="carousel-control-prev-icon inline-block bg-no-repeat"
                      aria-hidden="true"
                    ></span>
                    <span className="visually-hidden">Previous</span>
                  </button>
                  <button
                    className="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="next"
                  >
                    <span
                      className="carousel-control-next-icon inline-block bg-no-repeat"
                      aria-hidden="true"
                    ></span>
                    <span className="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              <div className="col-span-4 ">
                <img
                  className="w-auto rounded-2xl my-2"
                  src={require("../../assets/img/banner/quangcao2.jpg")}
                ></img>
                <img
                  className="w-auto rounded-2xl my-2 "
                  src={require("../../assets/img/banner/quangcao3.jpg")}
                ></img>
              </div>
            </div>
          </div>
        </div>

        <div className="sessions_container mobile:pt-1 grid grid-cols-12 tablet:px-3">
          <div className="col-span-12">
            {/* Sản phẩm bán chạy*/}
            <div className="pb-[19px]">
              <div className="flex justify-between">
                <h1 className="title_sanpham">Sản phẩm bán chạy</h1>
                <button className="border px-2 border-[#f8d057] rounded-full bg-green-100">
                  Xem tất cả
                </button>
              </div>
              <div className="grid grid-cols-5 tablet:grid-cols-4 gap-3 pt-5 w-full container_sanpham ">
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-span-1">
                  <div className=" w-full  border bg-white hover:border-[green]">
                    <div>
                      <Link to="/sanpham" className="img_sanpham">
                        <img
                          src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                          alt="anhsanpham"
                        ></img>
                      </Link>
                      <div className=" px-3">
                        {/* Tên hàng hóa */}
                        <Link to="/sanpham" className="ten_sanpham">
                          Thực phẩm bảo vệ sức khỏe bổ mắt
                        </Link>
                        <div className=" chitiet_item">
                          {/* hàm lượng */}
                          <p>
                            <span>• Kháng sinh</span>
                            <span> | </span>
                            250mg
                          </p>
                          {/* quy cách */}
                          <p>• Hộp 24 gói x 1,5 g</p>
                          {/* tiêu chuẩn */}
                          <p>
                            • GMP
                            <span> | </span>
                            <span>GMPWO</span>
                            <span> | </span>
                            <span> GMPEU</span>
                          </p>
                          {/* nhà phân phối */}
                          <p className=" chitiet_item">
                            <span>• DHG</span>
                            <span> | </span>
                            <span>Việt Nam</span>
                          </p>
                          {/* nhóm */}
                          <p></p>
                        </div>
                        <div className="flex gap-2 pt-2">
                          <p className="text-[gray] giagoc">129.500</p>
                          <p className="text-[black]">-</p>
                          <div className="flex">
                            <p className="giaban">119.000</p>
                            <p className="giaban">/chai</p>
                          </div>
                        </div>
                      </div>
                      <div className="grid grid-cols-12 gap-2 p-3">
                        <div className="soluong">
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/minus.png")}
                              alt="minus"
                            ></img>
                          </button>
                          <input
                            className="w-10 text-center outline-none"
                            value={"10"}
                            readOnly
                          ></input>
                          <button className="">
                            <img
                              src={require("../../assets/img/icon/plus.png")}
                              alt="plus"
                            ></img>
                          </button>
                        </div>
                        <button className="btn_dathang">Thêm vào giỏ</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="container bg-[#102f49] h-auto p-[20px] rounded-lg flex justify-around items-center gap-5">
              <div className="bg-[#f1fafe] rounded-md h-[200px] w-1/4"></div>
              <div className="bg-[#f1fafe] rounded-md h-[200px] w-1/4"></div>
              <div className="bg-[#f1fafe] rounded-md h-[200px] w-1/4"></div>
              <div className="bg-[#f1fafe] rounded-md h-[200px] w-1/4"></div>
            </div>
            {/* Slide 2 */}
            <div>
              <div className="container mx-auto w-full bg-transparent">
                <div className="grid grid-cols-12 gap-4 mx-auto  py-2 items-center ">
                  <div className="col-span-8">
                    <div
                      id="carouselExampleControls"
                      className="carousel slide relative"
                      data-bs-ride="carousel"
                    >
                      <div
                        className="carousel-inner relative w-full overflow-hidden rounded-3x"
                        style={{
                          borderRadius: "1rem",
                        }}
                      >
                        <div className="carousel-item active relative float-left w-full ">
                          <img
                            src={require("../../assets/img/banner/quangcao1.jpg")}
                            className="block w-full "
                            alt="Wild Landscape"
                          />
                        </div>
                        <div className="carousel-item relative float-left w-full">
                          <img
                            src={require("../../assets/img/banner/quangcao2.jpg")}
                            className="block w-full"
                            alt="Camera"
                          />
                        </div>
                        <div className="carousel-item relative float-left w-full">
                          <img
                            src={require("../../assets/img/banner/quangcao3.jpg")}
                            className="block w-full"
                            alt="Exotic Fruits"
                          />
                        </div>
                      </div>
                      <button
                        className="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                        type="button"
                        data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev"
                      >
                        <span
                          className="carousel-control-prev-icon inline-block bg-no-repeat"
                          aria-hidden="true"
                        ></span>
                        <span className="visually-hidden">Previous</span>
                      </button>
                      <button
                        className="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                        type="button"
                        data-bs-target="#carouselExampleControls"
                        data-bs-slide="next"
                      >
                        <span
                          className="carousel-control-next-icon inline-block bg-no-repeat"
                          aria-hidden="true"
                        ></span>
                        <span className="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <div className="col-span-4 ">
                    <img
                      className="w-auto rounded-2xl my-2"
                      src={require("../../assets/img/banner/quangcao2.jpg")}
                    ></img>
                    <img
                      className="w-auto rounded-2xl my-2 "
                      src={require("../../assets/img/banner/quangcao3.jpg")}
                    ></img>
                  </div>
                </div>
              </div>
            </div>
            {/* Load group sản phẩm nổi bật */}
            <div className=" grid grid-cols-5 tablet:grid-cols-4 pt-5 gap-3 container_sanpham mobile:pt-2">
              <div className="col-span-1">
                <div className=" w-full  border bg-white hover:border-[green]">
                  <div>
                    <Link to="/sanpham" className="img_sanpham">
                      <img
                        src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                        alt="anhsanpham"
                      ></img>
                    </Link>
                    <div className=" px-3">
                      {/* Tên hàng hóa */}
                      <Link to="/sanpham" className="ten_sanpham">
                        Thực phẩm bảo vệ sức khỏe bổ mắt
                      </Link>
                      <div className=" chitiet_item">
                        {/* hàm lượng */}
                        <p>
                          <span>• Kháng sinh</span>
                          <span> | </span>
                          250mg
                        </p>
                        {/* quy cách */}
                        <p>• Hộp 24 gói x 1,5 g</p>
                        {/* tiêu chuẩn */}
                        <p>
                          • GMP
                          <span> | </span>
                          <span>GMPWO</span>
                          <span> | </span>
                          <span> GMPEU</span>
                        </p>
                        {/* nhà phân phối */}
                        <p className=" chitiet_item">
                          <span>• DHG</span>
                          <span> | </span>
                          <span>Việt Nam</span>
                        </p>
                        {/* nhóm */}
                        <p></p>
                      </div>
                      <div className="flex gap-2 pt-2">
                        <p className="text-[gray] giagoc">129.500</p>
                        <p className="text-[black]">-</p>
                        <div className="flex">
                          <p className="giaban">119.000</p>
                          <p className="giaban">/chai</p>
                        </div>
                      </div>
                    </div>
                    <div className="grid grid-cols-12 gap-2 p-3">
                      <div className="soluong">
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/minus.png")}
                            alt="minus"
                          ></img>
                        </button>
                        <input
                          className="w-10 text-center outline-none"
                          value={"10"}
                          readOnly
                        ></input>
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/plus.png")}
                            alt="plus"
                          ></img>
                        </button>
                      </div>
                      <button className="btn_dathang">Thêm vào giỏ</button>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-span-1">
                <div className=" w-full  border bg-white hover:border-[green]">
                  <div>
                    <Link to="/sanpham" className="img_sanpham">
                      <img
                        src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                        alt="anhsanpham"
                      ></img>
                    </Link>
                    <div className=" px-3">
                      {/* Tên hàng hóa */}
                      <Link to="/sanpham" className="ten_sanpham">
                        Thực phẩm bảo vệ sức khỏe bổ mắt
                      </Link>
                      <div className=" chitiet_item">
                        {/* hàm lượng */}
                        <p>
                          <span>• Kháng sinh</span>
                          <span> | </span>
                          250mg
                        </p>
                        {/* quy cách */}
                        <p>• Hộp 24 gói x 1,5 g</p>
                        {/* tiêu chuẩn */}
                        <p>
                          • GMP
                          <span> | </span>
                          <span>GMPWO</span>
                          <span> | </span>
                          <span> GMPEU</span>
                        </p>
                        {/* nhà phân phối */}
                        <p className=" chitiet_item">
                          <span>• DHG</span>
                          <span> | </span>
                          <span>Việt Nam</span>
                        </p>
                        {/* nhóm */}
                        <p></p>
                      </div>
                      <div className="flex gap-2 pt-2">
                        <p className="text-[gray] giagoc">129.500</p>
                        <p className="text-[black]">-</p>
                        <div className="flex">
                          <p className="giaban">119.000</p>
                          <p className="giaban">/chai</p>
                        </div>
                      </div>
                    </div>
                    <div className="grid grid-cols-12 gap-2 p-3">
                      <div className="soluong">
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/minus.png")}
                            alt="minus"
                          ></img>
                        </button>
                        <input
                          className="w-10 text-center outline-none"
                          value={"10"}
                          readOnly
                        ></input>
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/plus.png")}
                            alt="plus"
                          ></img>
                        </button>
                      </div>
                      <button className="btn_dathang">Thêm vào giỏ</button>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-span-1">
                <div className=" w-full  border bg-white hover:border-[green]">
                  <div>
                    <Link to="/sanpham" className="img_sanpham">
                      <img
                        src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                        alt="anhsanpham"
                      ></img>
                    </Link>
                    <div className=" px-3">
                      {/* Tên hàng hóa */}
                      <Link to="/sanpham" className="ten_sanpham">
                        Thực phẩm bảo vệ sức khỏe bổ mắt
                      </Link>
                      <div className=" chitiet_item">
                        {/* hàm lượng */}
                        <p>
                          <span>• Kháng sinh</span>
                          <span> | </span>
                          250mg
                        </p>
                        {/* quy cách */}
                        <p>• Hộp 24 gói x 1,5 g</p>
                        {/* tiêu chuẩn */}
                        <p>
                          • GMP
                          <span> | </span>
                          <span>GMPWO</span>
                          <span> | </span>
                          <span> GMPEU</span>
                        </p>
                        {/* nhà phân phối */}
                        <p className=" chitiet_item">
                          <span>• DHG</span>
                          <span> | </span>
                          <span>Việt Nam</span>
                        </p>
                        {/* nhóm */}
                        <p></p>
                      </div>
                      <div className="flex gap-2 pt-2">
                        <p className="text-[gray] giagoc">129.500</p>
                        <p className="text-[black]">-</p>
                        <div className="flex">
                          <p className="giaban">119.000</p>
                          <p className="giaban">/chai</p>
                        </div>
                      </div>
                    </div>
                    <div className="grid grid-cols-12 gap-2 p-3">
                      <div className="soluong">
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/minus.png")}
                            alt="minus"
                          ></img>
                        </button>
                        <input
                          className="w-10 text-center outline-none"
                          value={"10"}
                          readOnly
                        ></input>
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/plus.png")}
                            alt="plus"
                          ></img>
                        </button>
                      </div>
                      <button className="btn_dathang">Thêm vào giỏ</button>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-span-1">
                <div className=" w-full  border bg-white hover:border-[green]">
                  <div>
                    <Link to="/sanpham" className="img_sanpham">
                      <img
                        src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                        alt="anhsanpham"
                      ></img>
                    </Link>
                    <div className=" px-3">
                      {/* Tên hàng hóa */}
                      <Link to="/sanpham" className="ten_sanpham">
                        Thực phẩm bảo vệ sức khỏe bổ mắt
                      </Link>
                      <div className=" chitiet_item">
                        {/* hàm lượng */}
                        <p>
                          <span>• Kháng sinh</span>
                          <span> | </span>
                          250mg
                        </p>
                        {/* quy cách */}
                        <p>• Hộp 24 gói x 1,5 g</p>
                        {/* tiêu chuẩn */}
                        <p>
                          • GMP
                          <span> | </span>
                          <span>GMPWO</span>
                          <span> | </span>
                          <span> GMPEU</span>
                        </p>
                        {/* nhà phân phối */}
                        <p className=" chitiet_item">
                          <span>• DHG</span>
                          <span> | </span>
                          <span>Việt Nam</span>
                        </p>
                        {/* nhóm */}
                        <p></p>
                      </div>
                      <div className="flex gap-2 pt-2">
                        <p className="text-[gray] giagoc">129.500</p>
                        <p className="text-[black]">-</p>
                        <div className="flex">
                          <p className="giaban">119.000</p>
                          <p className="giaban">/chai</p>
                        </div>
                      </div>
                    </div>
                    <div className="grid grid-cols-12 gap-2 p-3">
                      <div className="soluong">
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/minus.png")}
                            alt="minus"
                          ></img>
                        </button>
                        <input
                          className="w-10 text-center outline-none"
                          value={"10"}
                          readOnly
                        ></input>
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/plus.png")}
                            alt="plus"
                          ></img>
                        </button>
                      </div>
                      <button className="btn_dathang">Thêm vào giỏ</button>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-span-1">
                <div className=" w-full  border bg-white hover:border-[green]">
                  <div>
                    <Link to="/sanpham" className="img_sanpham">
                      <img
                        src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                        alt="anhsanpham"
                      ></img>
                    </Link>
                    <div className=" px-3">
                      {/* Tên hàng hóa */}
                      <Link to="/sanpham" className="ten_sanpham">
                        Thực phẩm bảo vệ sức khỏe bổ mắt
                      </Link>
                      <div className=" chitiet_item">
                        {/* hàm lượng */}
                        <p>
                          <span>• Kháng sinh</span>
                          <span> | </span>
                          250mg
                        </p>
                        {/* quy cách */}
                        <p>• Hộp 24 gói x 1,5 g</p>
                        {/* tiêu chuẩn */}
                        <p>
                          • GMP
                          <span> | </span>
                          <span>GMPWO</span>
                          <span> | </span>
                          <span> GMPEU</span>
                        </p>
                        {/* nhà phân phối */}
                        <p className=" chitiet_item">
                          <span>• DHG</span>
                          <span> | </span>
                          <span>Việt Nam</span>
                        </p>
                        {/* nhóm */}
                        <p></p>
                      </div>
                      <div className="flex gap-2 pt-2">
                        <p className="text-[gray] giagoc">129.500</p>
                        <p className="text-[black]">-</p>
                        <div className="flex">
                          <p className="giaban">119.000</p>
                          <p className="giaban">/chai</p>
                        </div>
                      </div>
                    </div>
                    <div className="grid grid-cols-12 gap-2 p-3">
                      <div className="soluong">
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/minus.png")}
                            alt="minus"
                          ></img>
                        </button>
                        <input
                          className="w-10 text-center outline-none"
                          value={"10"}
                          readOnly
                        ></input>
                        <button className="">
                          <img
                            src={require("../../assets/img/icon/plus.png")}
                            alt="plus"
                          ></img>
                        </button>
                      </div>
                      <button className="btn_dathang">Thêm vào giỏ</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {/* Sản phẩm giá tốt*/}
            <div className="pt-[20px] mobile:px-2">
              <h1 className=" title_sanpham ">Sản phẩm giá tốt</h1>
              {danhmuc.map((danhmuc_item, key) => {
                return <SanPhamTheoNhom danhmuc_item={danhmuc_item} />;
              })}
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default Home;
