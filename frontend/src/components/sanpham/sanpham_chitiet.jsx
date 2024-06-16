import React, { useState, useEffect } from "react";
import { Link, useParams } from "react-router-dom";
import hanghoaApi from "../../api/hanghoaApi";
import MoTaSanPham from "./mota_sanpham";

const Sanpham = () => {
  window.scrollTo(0, 0);
  let { url_sanpham } = useParams();
  const [ctHanghoa, setctHanghoa] = useState([]);
  const [soluong, setSoluong] = useState(1);
  //get chi tiết hàng hóa
  useEffect(() => {
    const handleHanghoa = async (e) => {
      try {
        const params = {
          url: url_sanpham,
        };
        const response = await hanghoaApi.listchitietsp(params);
        setctHanghoa(response);
      } catch (error) {
        console.log(error);
      }
    };
    handleHanghoa();
  }, []);
  function soluong_tang() {
    const soluong_element = document.getElementsByClassName("input_sl")[0];
    var soluong = soluong_element.value;
    var soluong_new = Number(soluong) + 1;
    soluong_element.value = soluong_new;
  }
  function soluong_giam() {
    const soluong_element = document.getElementsByClassName("input_sl")[0];
    var soluong = soluong_element.value;
    if (soluong <= 1) {
    } else {
      var soluong_new = Number(soluong) - 1;
      soluong_element.value = soluong_new;
    }
  }
  return (
    <>
      <div className="bg-[#eeebeb]">
        <div className="bg-white">
          <div className="container mx-auto">
            <div className="grid grid-cols-12 py-10 gap-10 mobile:gap-0 mobile:py-5 mobile:px-2 tablet:px-3">
              <div className="col-span-5 mobile:col-span-12">
                <div className="border rounded-xl flex justify-center ">
                  <img
                    className="rounded-xl"
                    src={require("../../assets/img/anhsanpham/anhsanpham.jpg")}
                    alt="anhsanpham"
                  />
                </div>
              </div>
              {/* Chi tiết sản phẩm */}
              {ctHanghoa.map((cthanghoa_item, key) => {
                return (
                  <div className="col-span-7 mobile:col-span-12">
                    <div>
                      <h1 className="font-bold text-2xl text-[green] mobile:text-xl">
                        {cthanghoa_item.tenhh}
                      </h1>
                    </div>
                    <div className="grid grid-cols-12 gap-5 pt-5">
                      <div className="col-span-7 tablet:col-span-12 mobile:col-span-12">
                        <div className="mb-3 grid grid-cols-12 ">
                          <div className="col-span-4">
                            <p>• Hoạt chất</p>
                          </div>
                          <div className="col-span-8 ">
                            <p>{cthanghoa_item.tenhoatchat}</p>
                          </div>
                        </div>
                        <div className="mb-3 grid grid-cols-12 ">
                          <div className="col-span-4">
                            <p>• Hàm lượng</p>
                          </div>
                          <div className="col-span-8 ">
                            <p>{cthanghoa_item.hamluong}</p>
                          </div>
                        </div>
                        <div className="mb-3 grid grid-cols-12 ">
                          <div className="col-span-4">
                            <p>• Quy cách</p>
                          </div>
                          <div className="col-span-8 ">
                            <p>{cthanghoa_item.quycach}</p>
                          </div>
                        </div>
                        <div className="mb-3 grid grid-cols-12 ">
                          <div className="col-span-4">
                            <p>• Tiêu chuẩn</p>
                          </div>
                          <div className="col-span-8 ">
                            <p>{cthanghoa_item.tieuchuan}</p>
                          </div>
                        </div>
                        <div className="mb-3 grid grid-cols-12 ">
                          <div className="col-span-4">
                            <p>• Nhà sản xuất</p>
                          </div>
                          <div className="col-span-8 ">
                            <p>{cthanghoa_item.msnsx}</p>
                          </div>
                        </div>
                        <div className="mb-3 grid grid-cols-12 ">
                          <div className="col-span-4">
                            <p>• Nước sản xuất</p>
                          </div>
                          <div className="col-span-8 ">
                            <p>{cthanghoa_item.msnuocsx}</p>
                          </div>
                        </div>

                        <div className="grid grid-cols-12 gap-5 items-end mobile:px-2">
                          <div className="col-span-5">
                            <div className="col-span-2 pt-5 flex items-right justify-start">
                              <input className="mr-2" type="radio" />
                              <p className="text-[red]  text-2xl">
                                {cthanghoa_item.giabanmin
                                  .toString()
                                  .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
                                đ
                              </p>
                              <p className="text-2xl text-[red] pr-2">
                                /{cthanghoa_item.dvtmin}
                              </p>
                            </div>
                            <div className="flex col-span-2 items-center justify-start mb-5 mt-2">
                              <input className="mr-2" type="radio" />
                              <p className="text-[red]  text-2xl">
                                {cthanghoa_item.giabanmax
                                  .toString()
                                  .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
                                đ
                              </p>
                              <p className="text-2xl text-[red] pr-2">
                                /{cthanghoa_item.dvtmax}
                              </p>
                            </div>
                            <div className="flex items-center justify-between w-full p-1 border-2 border-gray-400 rounded-lg">
                              <button onClick={soluong_giam} className="">
                                <img
                                  src={require("../../assets/img/icon/minus.png")}
                                  alt="minus"
                                ></img>
                              </button>
                              <input
                                onChange={(e) =>
                                  setSoluong(
                                    e.target.value.replace(/[^0-9\.\,]/g, "")
                                  )
                                }
                                className="input_sl w-10 text-lg text-center outline-none"
                                value={soluong}
                                readOnly
                              ></input>
                              <button onClick={soluong_tang} className="">
                                <img
                                  src={require("../../assets/img/icon/plus.png")}
                                  alt="plus"
                                ></img>
                              </button>
                            </div>
                          </div>
                          <div className="col-span-7">
                            <button className=" bg-[green] w-[60%] mobile:w-full text-white rounded-lg px-3 ml-3 py-2">
                              Thêm vào giỏ
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                );
              })}
            </div>
          </div>
        </div>

        <div className="container mx-auto py-5 tablet:px-5">
          <div className="bg-white rounded-xl">
            {ctHanghoa.map((cthanghoa_item, key) => {
              return <MoTaSanPham mota_sanpham={cthanghoa_item} />;
            })}
          </div>
          <div className="bg-white rounded-xl mt-5">
            <div className="p-5">
              <div className="font-bold text-[black]">Sản phẩm tương tự</div>
              <div className="pt-5">
                <div className="grid grid-cols-5 gap-3 pt-5 tablet:grid-cols-3">
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
                            <p>• 250mg</p>
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
                            <p>
                              <span>• Kháng sinh</span>
                            </p>
                          </div>
                          <div className="flex gap-2 pt-2">
                            <p className="text-[gray] giagoc">129.500</p>
                            <p className="text-[black]">-</p>
                            <div className="flex">
                              <p className="text-[red]">119.000</p>
                              <p className="text-[red]">/chai</p>
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
                              value={"1"}
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
            </div>
          </div>
        </div>
      </div>
    </>
  );
};
export default Sanpham;
