@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
        </div>
    </div>
</div>

<section>
    <div class="about">
        <div class="container">
            <div class="title text-center">
                <div class="page-title diemtin">
                    <h2 class="title_main_red">GIỚI THIỆU CHUNG</h2>
                </div>
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">
                <p style="font-weight: 600;"> NGÀY THÀNH LẬP HỘI DƯỢC HỌC TP. CẦN THƠ</p>

                <p>Với mục tiêu tổng quát là xây dựng Hội Dược học thành phố Cần Thơ thành một tổ chức nghề nghiệp đại diện cho Dược học, góp phần tích cực trong việc bảo vệ quyền và lợi ích chính đáng, hợp pháp của Dược sĩ hành nghề tại Cần Thơ. Sau một thời gian chuẩn bị tích cực của Ban vận động thành lập Hội Dược học phố Cần Thơ đồng thời được sự đồng ý của Ủy ban nhân dân thành phố Cần Thơ tại QSố 3328/QĐ-CT.UB ngày 02 tháng 11 năm 2004 về việc cho phép thành lập Hội Dược học thành phố Cần Thơ. Ngày 01 tháng 12 năm 2004 Ban Vận động thành lập Hội Dược học đã tổ chức Đại hội lần thứ I của nhiệm kỳ đầu tiên của Hội Dược học thành phố Cần Thơ một cách thành công và nhận được sự quan tâm của các Ban vận động thành lập Hội Dược học ở các tỉnh thành trong khu vực Đồng bằng sông Cửu Long và Hội chính thức hoạt động từ đó đến nay.</p>

                <p style="font-weight: 600;">TẦM QUAN TRỌNG VÀ MỤC ĐÍCH THÀNH LẬP HỘI</p>

                <p>Căn cứ Điều 39 Luật Dược học số 53/2014/QH13 ngày 20 tháng 6 năm 2014 được hướng dẫn tại Nghị định số 29/2015/NĐ-CP ngày 15 tháng 3 năm 2015 của Chính phủ và tình hình tổ chức và hoạt động Dược học trên địa bàn thành phố Cần Thơ; nhằm đáp ứng nguyện vọng của các Dược học đang hành nghề trên địa bàn thành phố về nhu cầu nghiên cứu, trao đổi nghiệp vụ, hỗ trợ nhau trong hoạt động nghề nghiệp, tuyên truyền phổ biến pháp luật, quy tắc đạo đức hành nghề Dược học, đảm bảo sự thống nhất, phối hợp chặt chẽ trong hoạt động Dược học trên địa bàn thành phố Cần Thơ.</p>

                <p>Cùng với yêu cầu thực hiện tốt chủ trương xã hội hoá lĩnh vực Dược học và phát triển tổ chức Dược học theo quy hoạch từ nay đến năm 2020 tại thành phố Cần Thơ của Đảng và Chính phủ. Việc xây dựng Hội Dược học thành phố Cần Thơ thành một tổ chức xã hội nghề nghiệp của Dược học sẽ góp phần tích cực trong việc bảo vệ quyền và lợi ích chính đáng, hợp pháp của Dược học hành nghề tại Cần Thơ, phát huy tính chủ động sáng tạo, không ngừng hoàn thiện về tổ chức và hoạt động trong cơ chế tự chủ, tự quản và góp phần hỗ trợ tích cực cho công tác quản lý Nhà nước về Dược học ở địa phương.</p>

                <p style="font-weight: 600;">Mạng lưới tổ chức hành nghề Dược học tại TP. Cần Thơ hiện nay</p>

                <p>Hiện nay, tại thành phố Cần Thơ có 28 tổ chức hành nghề Dược học được phân bổ đều cho các quận, huyện trong thành phố, cụ thể: </p>
                <p>- Quận Ninh Kiều: 10 tổ chức</p>
                <p>- Quận Cái Răng: 05 tổ chức</p>
                <p>- Quận Bình Thủy: 04 tổ chức</p>
                <p>- Quận Ô Môn: 03 tổ chức</p>
                <p>- Quận Thốt Nốt: 03 tổ chức</p>
                <p>- Huyện Phong Điền: 01 tổ chức</p>
                <p>- Huyện Thới Lai: 02 tổ chức</p>
                <p>- Huyện Cờ Đỏ: 01 tổ chức</p>
                <p>- Huyện Vĩnh Thạnh: 01 tổ chức</p>
                <p>Về số lượng Dược học đang hành nghề trên địa bàn toàn thành phố là 60 người. </p>


                <!-- <p style="font-weight: 600;">BAN CHẤP HÀNH HỘI</p>
                <p>Đại hội Dược học thành phố Cần Thơ đã bầu chọn được 07 Dược học từ các tổ chức hành nghề Dược học có đủ năng lực và phẩm chất đạo đức vào Ban chấp hành Hội.</p>
                <p>Trong đó:</p>
                <p>- Chủ tịch Hội: Ds Nguyễn Hoàng Việt - Chủ tịch hội Dược học Cần Thơ</p>
                <p>- Phó Chủ tịch Hội là:</p>
                <p>+ Ds Phạm Thành Suôl(kiêm Tổng thư ký)</p>
                <p>+ Ds Phan Khắc Hoàng</p>
                <p style="font-weight: 600;">- Ủy viên Hội là:</p>
                <p>+ DsCKII Nguyễn Hoàng Việt</p>
                <p>+ PSG.TS Phạm Thành Suôl</p>
                <p>+ DsCKII Phạm Khắc Hoàng
                </p>
                <p>+ DsCKI Phan Xuân Sinh</p>
                <p>+ DsCKI Lê Thị Kim Chi</p>
                <p>+ DsCKI Nguyễn Danh Sinh</p>
                <p>+ DsCKI Trần Hữu Bình</p>
                <p>+ Ths Lâm Thụy Đan Châu</p>
                <p>+ DsĐH Nguyễn Bích Lệ</p>
                <p>+ DsCKI Lý Phát Tuấn Linh</p>
                <p>+ DsCKI Huỳnh Hiếu Nghĩa</p>
                <p>+ DsCKII Lê Thanh Phong</p>
                <p>+ DsCKI Nguyễn Văn Thành</p>
                <p>+ DsĐH Nguyễn Thanh Tùng</p>
                <p>+ TS Đỗ Văn Mãi</p>
                <p style="font-weight: 600;">- Ban thường vụ Hội là:</p>
                <p>+ DS Nguyễn Hoàng Việt</p>
                <p>+ DS Phạm Thành Suôl</p>
                <p>+ DS Phan Khắc Hoàng</p>
                <p>+ DS Phan Xuân Sinh</p>
                <p>+ DS Lâm Thụy Đan Châu</p> -->


            </div>



        </div>
    </div>
</section>





@endsection