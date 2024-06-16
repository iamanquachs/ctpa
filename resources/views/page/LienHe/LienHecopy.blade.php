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
                        <div class="page-title color m-bottom-2">
                            <div class="title title-icon">
                            </div>
                        </div>

                        <div class="header-contact" style="color: black">

                            <div class="lienhe_div item-right">
                                <p>Địa chỉ: 184 Nguyễn An Ninh, P. Tân An, Q.Ninh Kiều, TP. Cần Thơ </p>
                                <p>Số điện thoại: 08 5556 5556</p>
                                <p>Email: hoiduochoccantho@gmail.com</p>
                            </div>
                            <div class="lienhe_div item-right">
                                <p>Ds. Nguyễn Hoàng Việt - Chủ tịch </p>
                                <!-- chưa có sđt và email -->
                                <p>ĐT: 02923.832.213</p>

                            </div>
                            <div class="lienhe_div item-right">
                                <p>Ds. Lâm Thụy Đan Châu - Thư ký</p>
                                <p>ĐT: 0913 974 065</p>
                            </div>

                        </div>
                        <br>




                    </div>
                    <div class="col-12">
                        <div class="page-title color m-bottom-2">
                            <div class="title title-icon">
                                <h2>Ý KIẾN ĐÓNG GÓP </h2>
                            </div>
                        </div>


                        <div id="review" class="lienhe_review">
                            <form method="post" action="{{URL::to('y-kien-dong-gop')}}" class="new-review-form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <fieldset class="spr-form-contact">
                                    <div class="spr-form-contact-name">
                                        <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Họ tên*" name="HOTEN_YKDG">
                                    </div>
                                    <div class="spr-form-contact-email">
                                        <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Email*" name="EMAIL_YKDG">
                                    </div>
                                    <div class="spr-form-contact-phone">
                                        <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Số điện thoại*" name="SDT_YKDG">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="spr-form-review-body">
                                        <div class="spr-form-input">
                                            <textarea class="spr-form-input-textarea" rows="5" placeholder="Ý kiến đóng góp*" name="NOIDUNG_YKDG"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="submit_lienhe">
                                    <button class="add-to-cart" type="submit">
                                        Gửi
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>

        </div>





    </div>
</div>




@endsection