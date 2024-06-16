import React, { useState, createContext } from "react";
import userApi from "../../api/userApi";
import { useNavigate } from "react-router-dom";
import Cookies from "universal-cookie";

export const ModalContext = createContext();
console.log(ModalContext);
function LoginModal() {
  const cookies = new Cookies();
  const [openModal, setOpenModal] = useState(false);
  const navigate = useNavigate();

  // login
  const handleLogin = async (e) => {
    var user = document.getElementById("msdn").value;
    var pass = document.getElementById("matkhau").value;
    try {
      const params = {
        user: user,
        pass: pass,
      };
      const response = await userApi.login(params);
      // Chỉnh lại câu if khi có dữ liệu chính thức
      if (response.length != "") {
        document.getElementById("form_login").classList.add("hidden");
        navigate("/");
        cookies.set("tendv", response[0].tendv);
        cookies.set("msdn", response[0].msdn);
      } else {
        alert("Tài khoản không tồn tại");
      }
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <>
      <div
        id="form_login"
        className="bg-[#000000b5] justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-[1000] outline-none focus:outline-none"
      >
        <div className="modal-dialog relative w-auto pointer-events-none">
          <div className="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div className="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
              <h5
                className="text-xl font-medium leading-normal text-gray-800"
                id="exampleModalLabel"
              >
                Đăng nhập bằng tài khoản nhà thuốc (egpp.vn)
              </h5>
              <button
                onClick={(e) =>
                  document.getElementById("form_login").classList.add("hidden")
                }
                type="button"
                className="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div className="modal-body relative p-4">
              <div className="mb-6">
                <input
                  onChange={(e) => e.target.value}
                  type="text"
                  className="input_login"
                  id="msdn"
                  placeholder="Số điện thoại"
                />
              </div>

              <div className="mb-6">
                <input
                  onChange={(e) => e.target.value}
                  type="password"
                  className="input_login"
                  id="matkhau"
                  placeholder="Password"
                />
              </div>

              <div className="flex justify-between items-center mb-6">
                <a href="#!" className="text-gray-800">
                  Đăng nhập nhanh bằng egpp.vn
                </a>
              </div>

              <div className="text-center lg:text-left flex justify-between">
                <button
                  onClick={handleLogin}
                  type="button"
                  className="btn_login"
                >
                  Đăng nhập
                </button>
                <button
                  onClick={(e) =>
                    document
                      .getElementById("form_login")
                      .classList.add("hidden")
                  }
                  type="button"
                  aria-label="Close"
                  className="close_login"
                >
                  Đóng
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default LoginModal;
