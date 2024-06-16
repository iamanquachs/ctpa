import React from "react";
import { useLocation, Link } from "react-router-dom";

const Thanhtoan = () => {
  // let location = useLocation();
  // const tongcong = location.state.stateParam;
  // console.log(tongcong);
  window.scrollTo(0, 0);
  return (
    <>
      <div className="bg-[#f1fafe] ">
        <div className="container mx-auto py-10">
          <div className="text-center">
            <div className="flex justify-center">
              <img src={require("../../assets/img/icon/success.png")} />
            </div>
            <p className="py-1 text-[green] pt-3">Đặt hàng thành công.</p>
            <div className="text-[red] flex justify-center items-center gap-3">
              <p className="py-1">Tổng cộng: </p>{" "}
              {/* <p>
                {tongcong.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")}
              </p> */}
            </div>
            <p className="py-1 pt-4">
              Quý khách vui lòng thanh toán, để chúng tôi giao hàng sớm nhất.
            </p>
            <div className="flex justify-around pt-3">
              <Link
                to="#"
                className="bg-[green] text-center text-white p-3 rounded-lg"
              >
                Thanh toán ngay (VNPAY)
              </Link>
            </div>
            <p className="py-1 pt-5 italic ">
              Cần hỗ trợ thêm, quý khách vui lòng liên hệ Hotline/Zalo:
              <a href="tel:+84931 86 79 65"> 0931 86 79 65</a>
            </p>
            <p className="py-1 italic ">Trân trọng cảm ơn và kính chào.</p>
          </div>
          <div className="text-center">
            <div className="cart_right_xuly">
              <Link
                className=" underline underline-offset-1"
                type="button"
                onclick="location.href='index.html'"
                name="submit"
                to="/"
              >
                Tiếp tục mua hàng
              </Link>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};
export default Thanhtoan;
