import { Link } from "react-router-dom";
import React, { useState, useEffect } from "react";
import hanghoaApi from "../../api/hanghoaApi";

const MoTaSanPham = (prop) => {
  const mota_sanpham = prop.mota_sanpham;
  const [ctmotahanghoa, setctMotaHanghoa] = useState([]);
  //get mô tả hàng hóa
  useEffect(() => {
    const handleMotaHanghoa = async (e) => {
      try {
        const params = {
          mshh: mota_sanpham.mshh,
        };
        const response = await hanghoaApi.list_motasp(params);
        setctMotaHanghoa(response);
      } catch (error) {
        console.log(error);
      }
    };
    handleMotaHanghoa();
  }, []);
  return (
    <div className="p-5">
      {ctmotahanghoa.map((ctmota_hanghoa, key) => {
        return (
          <div className="">
            <div className="item_mota">
              <h2 className="title_mota">Chỉ định</h2>
            </div>
            <div className="pt-1">
              <p>{ctmota_hanghoa.chidinh}</p>
            </div>
            <div className="item_mota">
              <h2 className="title_mota">Chống chỉ định</h2>
            </div>
            <div className="pt-1">
              <p>{ctmota_hanghoa.chongchidinh}</p>
            </div>
            <div className="item_mota">
              <h2 className="title_mota">Liều dùng</h2>
            </div>
            <div className="pt-1">
              <p>{ctmota_hanghoa.lieudung}</p>
            </div>
            <div className="item_mota">
              <h2 className="title_mota">Tác dụng phụ</h2>
            </div>
            <div className="pt-1">
              <p>{ctmota_hanghoa.tacdungphu}</p>
            </div>
            <div className="item_mota">
              <h2 className="title_mota">Thận trọng</h2>
            </div>
            <div className="pt-1">
              <p>{ctmota_hanghoa.thantrong}</p>
            </div>
            <div className="item_mota">
              <h2 className="title_mota">Tương tác thuốc</h2>
            </div>
            <div className="pt-1">
              <p>{ctmota_hanghoa.tuongtacthuoc}</p>
            </div>
            <div className="item_mota">
              <h2 className="title_mota">Bảo quản</h2>
            </div>
            <div className="pt-1">
              <p>{ctmota_hanghoa.baoquan}</p>
            </div>
          </div>
        );
      })}
    </div>
  );
};
export default MoTaSanPham;
