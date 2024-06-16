import React, { useState } from "react";
import dathangApi from "../../api/dathangApi";
import Cookies from "universal-cookie";
import { useDispatch, useSelector } from "react-redux";
import { createGiohang } from "../../redux/actions";

const GioHangItem = (prop) => {
  const cookies = new Cookies();
  const giohangItem = prop.giohangItem;
  const isChecked = prop.isChecked;
  const handleClick = prop.handleClick;
  const index = prop.index;

  const dispatch = useDispatch();

  const [soluong, setSoluong] = useState(giohangItem.soluong);
  const [thanhtienvat, setThanhtienvat] = useState(giohangItem.thanhtienvat);
  function handleGiohang(e) {
    const params = {
      msdn: cookies.get("msdn"),
    };
    dispatch(createGiohang.createGiohangRequest(params));
  }
  function soluong_tang(key, e) {
    const soluong_element = document
      .getElementsByClassName("sanpham_giohang")
      [key].getElementsByClassName("input_sl")[0];
    var soluong_input = soluong_element.value;
    var giaban = giohangItem.giaban,
      mshh = giohangItem.mshh,
      dvt = giohangItem.dvt,
      thuesuat = giohangItem.thuesuat;
    var soluong_new = Number(soluong_input) + 1;
    soluong_element.value = soluong_new;
    const handleUpdate_dathangline = async (e) => {
      const thanhtienNew = giaban * parseInt(soluong_new);
      const thanhtienvatNew = thanhtienNew - (thanhtienNew * thuesuat) / 100;

      try {
        const params = {
          msdn: cookies.get("msdn"),
          mshh: mshh,
          soluong: soluong_new,
          dvt: dvt,
          thanhtien: thanhtienNew,
          thanhtienvat: thanhtienvatNew,
        };
        await dathangApi.update_dathangline(params);
        handleGiohang();
        setThanhtienvat(thanhtienvatNew);
        setSoluong(soluong_new);
      } catch (error) {
        console.log(error);
      }
    };
    handleUpdate_dathangline();
  }
  function soluong_giam(key, e) {
    const soluong_element = document
      .getElementsByClassName("sanpham_giohang")
      [key].getElementsByClassName("input_sl")[0];
    var soluong = soluong_element.value;
    var giaban = giohangItem.giaban,
      mshh = giohangItem.mshh,
      dvt = giohangItem.dvt,
      thuesuat = giohangItem.thuesuat;
    if (soluong > 1) {
      var soluong_new = Number(soluong) - 1;
      soluong_element.value = soluong_new;
      const handleUpdate_dathangline = async (e) => {
        const thanhtienNew = giaban * parseInt(soluong_new);
        const thanhtienvatNew = thanhtienNew - (thanhtienNew * thuesuat) / 100;

        try {
          const params = {
            msdn: cookies.get("msdn"),
            mshh: mshh,
            soluong: soluong_new,
            dvt: dvt,
            thanhtien: thanhtienNew,
            thanhtienvat: thanhtienvatNew,
          };
          await dathangApi.update_dathangline(params);
          handleGiohang();
          setThanhtienvat(thanhtienvatNew);
          setSoluong(soluong_new);
        } catch (error) {
          console.log(error);
        }
      };
      handleUpdate_dathangline();
    }
  }
  function cart_delete(index, e) {
    var msdn = e.msdn,
      rowid = e.rowid;
    const handleDathangDelete = async (e) => {
      try {
        const params = {
          msdn: msdn,
          rowid: rowid,
        };
        await dathangApi.dathangline_delete(params);
      } catch (error) {
        console.log(error);
      }
    };
    handleDathangDelete();
  }
  return (
    <>
      <tr id="sanpham_giohang" className="sanpham_giohang ">
        <td>
          <div className="flex justify-center">
            <div>
              <div className="form-check">
                <input
                  className="cart_item_check form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                  type="checkbox"
                  value={giohangItem.rowid}
                  id="item_check"
                  name={"item_" + index}
                  onChange={handleClick}
                  defaultChecked={isChecked}
                />
              </div>
            </div>
          </div>
        </td>
        <td className="flex items-center">
          <img
            className="w-28"
            src={require("../../assets/img/anhsanpham/anhsanpham1.jpg")}
          />
          <p className="mobile:hidden">{giohangItem.tenhh}</p>
        </td>
        <td className="item_giohang">
          <p className="fullscreen:hidden tablet:hidden">{giohangItem.tenhh}</p>
          <p>
            {giohangItem.giaban
              .toString()
              .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}{" "}
            đ/{giohangItem.dvt}
          </p>
          <p className="tablet:hidden">
            {thanhtienvat.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
          </p>
        </td>
        <td className="item_giohang p-4">
          <div className="soluong">
            <button onClick={(e) => soluong_giam(index, e)} className="">
              <img src={require("../../assets/img/icon/minus.png")}></img>
            </button>
            <input
              onChange={(e) =>
                setSoluong(e.target.value.replace(/[^0-9\.\,]/g, ""))
              }
              className="input_sl w-10 text-[16px] text-center outline-none"
              value={soluong}
            ></input>
            <button onClick={(e) => soluong_tang(index, e)} className="">
              <img src={require("../../assets/img/icon/plus.png")}></img>
            </button>
          </div>
        </td>
        <td className="item_giohang mobile:hidden">
          {thanhtienvat.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
        </td>
        <td
          className="item_giohang"
          onClick={(e) => cart_delete(index, giohangItem)}
        >
          <img src={require("../../assets/img/icon/trash.png")} />
        </td>
      </tr>
    </>
  );
};

export default GioHangItem;
