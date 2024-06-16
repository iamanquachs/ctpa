import React, { useState, useEffect, useRef } from "react";
import hanghoaApi from "../../api/hanghoaApi";
import SanphamItem from "./sanpham_item";

const SanPhamTheoNhom = (prop) => {
  const [hanghoa, setHanghoa] = useState([]);
  useEffect(() => {
    const handleHanghoa = async (e) => {
      try {
        const params = {
          msnhom: danhmuc_item.msloai,
          offset: 0,
          limit: 12,
        };
        const response = await hanghoaApi.list(params);
        setHanghoa(response);
      } catch (error) {
        console.log(error);
      }
    };
    handleHanghoa();
  }, []);
  const danhmuc_item = prop.danhmuc_item;

  return (
    <div className="py-3">
      <div className="flex justify-between">
        <h1 className="font-semibold text-xl ">
          <span className="text-[green]"> • </span>
          {danhmuc_item.tenloai}
        </h1>
        <input id="msnhom" hidden value={danhmuc_item.msloai} />
        <button className="border px-2 border-[#f8d057] rounded-full bg-green-100">
          Xem tất cả
        </button>
      </div>
      <div className="grid grid-cols-5 gap-5 pt-5 container_sanpham tablet:grid-cols-4 ">
        {hanghoa.map((hanghoa_item, key) => {
          return (
            <SanphamItem
              hanghoa_item={hanghoa_item}
              danhmuc_item={danhmuc_item}
              index={key}
            />
          );
        })}
      </div>
    </div>
  );
};
export default SanPhamTheoNhom;
