@extends('welcome_hoivien')
@section('content')

<style>
    .container{
        margin: 10px auto
    }
    .body_dangky{
        margin: 20px auto;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        width: 70%;
    }
    .form_dangky{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
        color: #000;
        margin-bottom: 20px
    }
    .form_dangky h6{
        text-align: start
    }
    .form_dangky span{
        color: red
    }
    .form_dangky input[type='date'],input[type='text'],input:not([type]){
        border:none;
        border-bottom: 1px solid #ddd;
        width:100%;
    }
    .form_dangky .other{
        display: flex;
        justify-content: flex-start;
        width: 100%;
        white-space: nowrap;
        gap:10px;
        align-items: center
    }
    .form_dangky .other label{
        margin: 0
    }
    .form_dangky .other input{
        border:none;
        border-bottom: 1px solid #ddd;
        padding: 0px;
        margin: 0

    }
    .btn_send{
        margin: 0px auto;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        border-radius: 10px;
        width: 70%;
    }
    .btn_send button{
        width: 80px;
        border-radius: 10px
    }
</style>

<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
        </div>
    </div>
</div>
<div style="background-color: rgb(217, 239, 237)">
    <div class="section_hoivien">
        <div class="container">
            <form method="POST" action="{{URL::to('/dangky-thamgia')}}">
                {{csrf_field()}}
                <div class="content-about text-center container">
                    <div class="title title-icon header_hoivien">
                        <h4 class="title-h2">ĐĂNG KÝ THAM GIA LỚP  CẬP NHẬT KIẾN THỨC CHUYÊN MÔN VỀ DƯỢC – CẦN THƠ</h4>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>1. HỌ & TÊN ( CHỮ IN HOA, CÓ DẤU)<span> * </span></h6>
                            <input placeholder="Câu trả lời của bạn" name="hoten" value="{{old('hoten')}}" required>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>2.Điện thoại<span> * </span></h6>
                            <input name="dienthoai" placeholder="Câu trả lời của bạn" onkeyup="_ChangeFormat(this)" value="{{old('dienthoai')}}" required>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>3. Ngày, tháng, năm sinh<span> * </span></h6>
                            <input  type="date" name="namsinh" value="{{old('namsinh')}}" required>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>4. Số CCCD - căn cước công dân<span> * </span></h6>
                            <input placeholder="Câu trả lời của bạn" name='cccd' value="{{old('cccd')}}" required>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>4.1 Ngày cấp CCCD (chọn ngày)<span> * </span></h6>
                            <input type='date' name='ngaycap' value="{{old('ngaycap')}}" required>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>4.2 Nơi cấp CCCD<span> * </span></h6>
                            <input placeholder="Câu trả lời của bạn" name="noicap_cccd" value="{{old('noicap_cccd')}}" required>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>5. Địa chỉ email (gmail) cá nhân<span> * </span></h6>
                            <input placeholder="Câu trả lời của bạn" name="email" value="{{old('email')}}" required>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>6. Văn Bằng Chuyên Môn của tôi là
                                Học vị ( DSTH/DSCĐ; DSĐH; Ths.DS/DS.CK1; TS.DS/ DS.CK2)
                                Học hàm ( Giáo Sư-GS; Phó Giáo Sư-PGS)
                                <span> * </span></h6>
                                <div>
                                    <input id="dsth" value="dsth"  name="vbcm" type="radio" checked>
                                    <label for="dsth" >Dược sĩ Trung học -DSTH</label>
                                </div>
                                <div>
                                    <input id="dscd" value="dscd" name="vbcm" type="radio">
                                    <label for="dscd" >Dược sĩ Cao Đẳng- DSCĐ</label>
                                </div>
                                <div>
                                    <input id="tsds" value="tsds" name="vbcm" type="radio">
                                    <label for="tsds" >Thạc sĩ- Dược sĩ - ThS.DS</label>
                                </div>
                                <div>
                                    <input id="dsck" value="dsck" name="vbcm" type="radio">
                                    <label for="dsck" >Dược sĩ- Chuyên Khoa1- DS.CK1</label>
                                </div>
                                <div>
                                    <input id="tsds" value="tsds" name="vbcm" type="radio">
                                    <label for="tsds" >Tiến sĩ- Dược sĩ -TS.DS</label>
                                </div>
                                <div>
                                    <input id="dsck" value="dsck" name="vbcm" type="radio">
                                    <label for="dsck" >Dược sĩ Chuyên khoa 2- DS.CK2</label>
                                </div>
                                <div>
                                    <input id="pgs" value="pgs" name="vbcm" type="radio">
                                    <label for="pgs" >Phó Giáo Sư - PGS</label>
                                </div>
                                <div>
                                    <input id="gs" value="gs" name="vbcm" type="radio">
                                    <label for="gs" >Giáo sư- GS</label>
                                </div>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>6.1 Giấy Phép Hành Nghề Dược - Số hiệu ( nếu không có ghi - chưa có)<span> * </span></h6>
                            <input placeholder="Câu trả lời của bạn" name="giayphephanhnghe" value="{{old('giayphephanhnghe')}}" required>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>6.2 Giấy Phép Hành Nghề Dược - Ngày cấp ( nếu không có chọn ngày 01-01-2023)
                                <span> * </span></h6>
                            <input type='date' name="ngaycap_gphn" value="{{old('ngaycap_gphn')}}" required>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>7. XÁC NHẬN HỘI VIÊN
                                ( nếu chưa rõ, vui lòng liên lạc Zalo ds Chi :0913128227 hay SMS zalo  08 5556 5556 - Hội Dược Học Cần Thơ)<span> * </span></h6>
                                <div>
                                    <input id="dalahoivien" value="dalahoivien" name="doituong" type="radio" checked>
                                    <label for="dalahoivien" >Đã là Hội Viên Hội Dược Học Cần Thơ
                                    </label>
                                </div>
                                <div>
                                    <input id="dalahoivien_canbohuutri" value="dalahoivien_cano§bohuutri" name="doituong" type="radio">
                                    <label for="dalahoivien_canbohuutri" >Đã là Hội Viên HDHCT - Cán bộ hưu trí</label>
                                </div>
                                <div>
                                    <input id="chualahoivien" value="chualahoivien" name="doituong" type="radio">
                                    <label for="chualahoivien" >Chưa là Hội Viên Hội Dược Học Cần Thơ</label>
                                </div>
                                <div class="other">
                                    <input id="doituong_khac" value="doituong_khac" name="doituong" type="radio">
                                    <label for="doituong_khac" >Mục khác</label>
                                    <input type='text' name="doituong_text_khac">
                                </div>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>8. Tôi muốn nhận tại liệu học tập<span> * </span></h6>
                            <div>
                                <input id="bancung" value="bancung" name="tailieu" type="radio" checked>
                                <label for="bancung" >Bản cứng</label>
                            </div>
                            <div>
                                <input id="banmem" value="banmem" name="tailieu" type="radio">
                                <label for="banmem" >Bản mềm</label>
                            </div>
                            <div class="other">
                                <input id="tailieu_khac" value="tailieu_khac" name="tailieu" type="radio">
                                <label for="tailieu_khac" >Mục khác</label>
                                <input type='text' name="tailieu_text_khac">
                            </div>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>9. Tôi có thể tham gia thi kết thúc khóa học<span> * </span></h6>
                            <div>
                                <input id="tructuyen" value="tructuyen" name="thamgia" type="radio" checked>
                                <label for="tructuyen" >Trực tuyến ( làm trên link)</label>
                            </div>
                            <div>
                                <input id="trenbangiay" value="trenbangiay" name="thamgia" type="radio">
                                <label for="trenbangiay" >Trực bản giấy</label>
                            </div>
                            <div class="other">
                                <input id="thamgia_khac" value="thamgia_khac" name="thamgia" type="radio">
                                <label for="thamgia_khac" >Mục khác</label>
                                <input type='text' name='thamgia_text_khac'>
                            </div>
                        </div>
                    </div>
                    <div class='body_dangky'>
                        <div class="form_dangky">
                            <h6>10. Tôi muốn nhận ' Giấy Chứng Nhận" qua đường bưu điện ( vui lòng ghi địa chỉ nhận thư)</h6>
                            <input placeholder="Câu trả lời của bạn" name="diachinhanchungchi" value="{{old('diachinhanchungchi')}}" >
                        </div>
                    </div>
                        <div class='btn_send'>
                            <button>Gửi</button>
                        </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    function _ChangeFormat(e) {
            var number = $(e).val().replace(/[.]/g, "");
            number = $(e)
                .val()
                .replace(/[.]/g, "")
                .toString();
            $(e).val(number.replace(/[^0-9]/g, ""));
        }
</script>



@endsection