@extends('welcome')
@section('content')


<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
        </div>
    </div>
</div>

<?php
// $message = Session::get('message');
// if ($message) {
//     echo '<span class="text-alert">' . $message . '</span>';
//     Session::put('message', null);
// }

?>

<div class="section about">
    <div class="container">
        <div class="page-title diemtin">
            <h2 class="title_main_red">LIÊN HỆ</h2>
        </div>
        <div class="section main-contact-us">
            <div class="section container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 m-b-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d825.9327294750681!2d105.78282214775436!3d10.031681972567547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629fefbdc5a3%3A0xbdfc4a2dcc85b6a5!2zMTg0IMSQxrDhu51uZyBOZ3V54buFbiBBbiBOaW5oLCBBbiBM4bqhYywgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1669620604847!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="page-title color">
                            <div class="title title-icon">
                                <h2>GỬI CÂU HỎI </h2>
                            </div>
                        </div>


                        <div id="review" class="lienhe_review">
                            <form method="post" action="ykiendonggop" class="new-review-form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <fieldset class="spr-form-contact">
                                    <div class="spr-form-contact-name">
                                        <select class="spr-form-input spr-form-input-text form-control" style="padding: 0 18px;" value="" placeholder="Chủ đề bạn quan tâm" name="chude_YKDG">
                                            <option>Pháp luật & quy chế Dược</option>
                                            <option>Đào tạo chuyên môn(CNKTD)</option>
                                            <option>Thông Tin Thuốc</option>
                                            <option>An Toàn Thuốc</option>
                                            <option>Tài trợ hoạt động hội</option>
                                            <option>Khác</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="spr-form-contact-name col-md-6">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Họ tên*" name="HOTEN_YKDG" required>
                                        </div>
                                        <div class="spr-form-contact-email col-md-6">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Email*" name="EMAIL_YKDG"required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="spr-form-contact-phone col-md-6">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" onkeyup="this.value = this.value.replace(/[^0-9\.\,]/g,'')" maxlength="10" placeholder="Số điện thoại*" name="SDT_YKDG"require>
                                        </div>
                                        <div class="spr-form-contact-phone col-md-6">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Tiêu đề" name="TIEUDE_YKDG">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="spr-form-review-body">
                                        <div class="spr-form-input">
                                            <textarea class="spr-form-input-textarea" rows="5" placeholder="Nội dung" name="NOIDUNG_YKDG"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="submit_lienhe">
                                    <button class="add-to-cart" type="submit">
                                        Gửi đi
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="page-title color row">
                            <div class="title title-icon">
                                <h2>THÔNG TIN</h2>
                            </div>
                        </div>

                        <div class="header-contact" style="color: black">
                            <div class="lienhe_div item-right">
                                <div class="row item_lienhe" style="margin-bottom: 10px;align-items: center;">
                                    <div class="col-md-1">
                                        <img src="{{asset('public/frontend/img/home_lienhe.png')}}" />
                                    </div>
                                    <div class="col-md-11">
                                        <p style="font-weight: 700; font-size: 18px;">Địa chỉ</p>
                                        <p>184 Nguyễn An Ninh, P. Tân An, Q.Ninh Kiều, TP. Cần Thơ</p>
                                    </div>
                                </div>
                                <div class="row item_lienhe" style="margin-bottom: 10px;align-items: center;">
                                    <div class="col-md-1">
                                        <img src="{{asset('public/frontend/img/phone_lienhe.png')}}" />
                                    </div>
                                    <div class="col-md-11">
                                        <p style="font-weight: 700; font-size: 18px;">Số điện thoại liên hệ</p>
                                        <p>08 5556 5556</p>
                                    </div>
                                </div>
                                <div class="row item_lienhe" style="align-items: center;margin-bottom: 10px;">
                                    <div class="col-md-1">
                                        <img src="{{asset('public/frontend/img/mail_lienhe.png')}}" />
                                    </div>
                                    <div class="col-md-11">
                                        <p style="font-weight: 700; font-size: 18px;">Email liên hệ</p>
                                        <p>hoiduochoccantho@gmail.com</p>
                                    </div>
                                </div>
                                <div class=" row item_lienhe" style="align-items: center;margin-bottom: 10px;">
                                    <p class="col-12" style='font-size: 20px;'>Ds. Nguyễn Hoàng Việt - Chủ tịch </p>
                                    <p class="col-12" style='font-size: 20px;'>ĐT: 02923.832.213</p>

                                </div>
                                <div class="row item_lienhe" style="align-items: center;margin-bottom: 10px;">
                                    <p class="col-12" style='font-size: 20px;'>Ds. Lâm Thụy Đan Châu - Trợ lý hội</p>
                                    <p class="col-12" style='font-size: 20px;'>ĐT: 0913 974 065</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>





    </div>
</div>




@endsection