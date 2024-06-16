import React, { useState, useEffect } from "react";
import { Routes, Route } from "react-router-dom";
import Footer from "./components/footer/footer";
import Header from "./components/header/header";
import Home from "./components/home/home";
import Cart from "./components/giohang/giohang";
import Sanpham_Chitiet from "./components/sanpham/sanpham_chitiet";
import Thanhtoan from "./components/thanhtoan/thanhtoan";
import DanhSachNhomSP from "./components/sanpham/nhom_sanpham_filter";
import danhmucApi from "./api/danhmucApi";

function App() {
  const [danhmuc, setDanhmuc] = useState([]);

  //Danh muc nhom san pham
  useEffect(() => {
    const danhmucHandle = async (e) => {
      try {
        const params = {
          msdv: "",
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
      <Header danhmuc={danhmuc} />
      <Routes>
        <Route path={"/"} element={<Home />} />
        <Route path={"/sanpham/:url_sanpham"} element={<Sanpham_Chitiet />} />
        <Route path={"/cart"} element={<Cart />} />
        <Route path={"/thanhtoan"} element={<Thanhtoan />} />
        <Route
          path={"/:msnhom"}
          element={<DanhSachNhomSP danhmuc={danhmuc} />}
        />
      </Routes>
      <Footer />
    </>
  );
}

export default App;
