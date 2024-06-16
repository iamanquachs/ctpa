import React, { useState, useEffect } from "react";
import { Link, useParams } from "react-router-dom";
import hanghoaApi from "../../api/hanghoaApi";
import SanphamItem from "./sanpham_item";
function DanhSachNhomSP(prop) {
  const danhmuc_item = prop.danhmuc;
  let { msnhom } = useParams();

  const [listsp, setListsp] = useState([]);
  //get chi tiết hàng hóa
  useEffect(() => {
    window.scrollTo(0, 0);
    const handleHanghoa = async (e) => {
      try {
        const params = {
          msnhom: msnhom,
        };
        const response = await hanghoaApi.list_theonhom(params);
        setListsp(response);
      } catch (error) {
        console.log(error);
      }
    };
    handleHanghoa();
  }, [msnhom]);
  return (
    <>
      <div className="bg_body">
        <div className="container mx-auto py-10 mobile:py-2 tablet:py-3">
          <div className="grid grid-cols-5 gap-5 pt-5 container_sanpham mobile:px-2 tablet:grid-cols-4 tablet:px-3 tablet:pt-2">
            {listsp.map((hanghoa_item, key) => {
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
      </div>
    </>
  );
}

export default DanhSachNhomSP;
