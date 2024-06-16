const Footer = () => {
  return (
    <>
      <div className="bg-white">
        <div className="container mx-auto">
          <div className="grid grid-cols-12 px-20 py-5 tablet:px-3  mobile:px-2 mobile:gap-2 ">
            <div className="col-span-4 flex justify-center">
              <ul className="item_footer">
                <li>
                  <h1 className="title_item_footer">Về TPSPharma</h1>
                </li>
                <li>Giới thiệu</li>
                <li>Phạm vi cung cấp</li>
                <li>Chính sách đổi trả</li>
                <li>Chính sách giao hàng</li>
                <li>Chính sách bảo mật</li>
                <li>Chính sách thanh toán</li>
                <li>Chính sách thành viên</li>
              </ul>
            </div>
            <div className="col-span-4 flex justify-center">
              <ul className="item_footer">
                <li>
                  <h1 className="title_item_footer">Đường đến TPSPharma</h1>
                </li>
              </ul>
            </div>
            <div className="col-span-4 flex justify-center">
              <ul className="item_footer">
                <li>
                  <h1 className="title_item_footer">Thông tin từ TPSPharma</h1>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      {/* Footer bottom */}
      <div className="border-t-[1px] border-[#ddd]">
        <div className="container mx-auto px-20 py-2">
          <div className="text-center text-[14px]">
            Copyright © 2022 by Công ty Cổ phần TPSPharma
          </div>
        </div>
      </div>
    </>
  );
};
export default Footer;
