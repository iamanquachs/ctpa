<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Favicon -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Favicon -->
    <meta name="description" content="CanTho Pharmaceutical Association" />
    <meta name="keywords" content="dược học, cần thơ, hội dược, dược, văn bản, điều lệ, điểm tin, tin tức" />

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="HỘI DƯỢC HỌC TP. CẦN THƠ" />
    <meta itemprop="description" content="CanTho Pharmaceutical Association" />
    <meta itemprop="image" content="https://ctpa.vn/public/frontend/img/Banner_SEO.png" />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="/" />
    <meta property="og:site_name" content="ctpa.vn" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="HỘI DƯỢC HỌC TP. CẦN THƠ" />
    <meta property="og:description" content="CanTho Pharmaceutical Association" />
    <meta property="og:image" content="https://ctpa.vn/public/frontend/img/Banner_SEO.png" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="HỘI DƯỢC HỌC TP. CẦN THƠ" />
    <meta name="twitter:description" content="CanTho Pharmaceutical Association" />
    <meta name="twitter:image" content="https://ctpa.vn/public/frontend/img/Banner_SEO.png" />
    <link rel="canonical" href="https://ctpa.vn" />



    <link rel="shortcut icon" href="img/favicon.png" type="image/png"><!-- Goggle Fonts-->
    <link rel="stylesheet" href="{{asset('public/frontend/libs/boostrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/flaticon/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/nivo-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/nivo-slider/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/nivo-slider/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/slider-range/css/jslider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/font-cs/cs.css')}}"><!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style.css?v=12345')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style_zalo.css?v=12345')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive.css?v=212')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.fancybox.min.css')}}" media="screen">
    <link rel="icon" href="{{asset('public/frontend/img/icon_hdh_web.png')}}" />
    <title>HỘI DƯỢC HỌC TP. CẦN THƠ</title>
    <style>
        .dangkinhantin {
            min-width: 300px;
        }

        .item_lienhe {
            background-color: #c4f1f57a;
            padding: 20px;
            border-radius: 5px;
        }


        @media screen and (max-width:1599px) {
            .nivoSlider {
                height: 345px;
                padding-top: 35px;
            }
        }

        @media screen and (max-width:740px) {
            .img_hoivien {
                width: 70% !important;
            }

            .dangkinhantin {
                min-width: 100px;
                margin-bottom: 10px;
            }

            .btn_dknt {
                padding: 3px 10px;
            }

            .form_nhantin {
                display: block !important;
            }

            .popup-content {
                min-width: 285px !important;
                border-radius: 10px;
            }

            .title-h2 {
                font-size: 25px !important;
                padding-bottom: 10px !important;
            }
        }
    </style>
</head>


<body class="home-1">
    <div class="all">
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>
        <header class="header">
            <div id="top-header">
                <div class="main-header">
                    <div class="mg-left-right">
                        <div class="row">
                            <div class="col-lg-2 col-xl-3 col-md-12">
                                <div class="logo_vpct">
                                    <div id="menu_mb_control" class="menu_mb_control">
                                        <img src="{{asset('public/frontend/img/list.png')}}" alt="">
                                    </div>
                                    <a href="{{URL::to('/trang-chu')}}">
                                        <img class="logo" src="{{asset('public/frontend/img/logo_header.png')}}" alt="">
                                    </a>
                                    <div id="menu_mb_control" class="menu_mb_control">
                                        <li style="list-style:none;">
                                            <div class="header-block search-block popup-over pull-left" style="padding:0">
                                                <div data-toggle="dropdown" class="popup-title"><a href="#" title="Search">
                                                        <i class="flaticon-search" style="color: #1e551e"></i></a></div>
                                                <div class="popup-content">
                                                    <form {{-- id="searchbox" --}} action="{{URL::to('/tim-kiem')}}" method="post">
                                                        {{csrf_field()}}
                                                        <div class="input-group"><input style="margin-top: 0;" class="search-query form-control" type="text" name="tu_timkiem" placeholder="Nhập từ tìm kiếm" value="" autocomplete="off">
                                                            <div class="input-group-btn" style="background-color: #1e551e;">
                                                                <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e">Tìm</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div id="index_menu_mb" class="index_menu_mb">
                                        <ul>
                                            <li class="dropdown">
                                                <a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                                            </li>
                                            <li class="dropdown ">
                                                <a onclick="Menulv2(this)" href="#">Giới thiệu
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu" style="width: 65%;background-color:#f3f3f3;left:unset; padding:0">
                                                    <ul>
                                                        <li><a href="{{URL::to('/gioi-thieu-chung')}}">Giới thiệu chung</a></li>
                                                        <!-- <li><a href="{{URL::to('/dao-tao')}}">Đào tạo</a></li> -->
                                                        <!-- <li><a href="{{URL::to('quyet-dinh-thanh-lap')}}">Quyết định thành lập</a></li>
                                                        <li><a href="{{URL::to('dieu-le')}}">Điều lệ</a></li> -->
                                                    </ul>
                                                </div>


                                            </li>
                                            <li class="dropdown blog-fullwidth">
                                                <a href="{{URL::to('diem-tin')}}">Tín tức</a>
                                                <div class="dropdown-menu" style="width: 65%;background-color:#f3f3f3;left:unset; padding:0">
                                                    <ul>
                                                        <li><a class="{{isset($active_diemtin)?$active_diemtin:''}}" href="{{URL::to('diem-tin')}}">Tin tức</a></li>
                                                        <li><a class=" {{isset($active_bieumau)?$active_bieumau:''}}" href="{{URL::to('chuyen-muc-tin-tuc/2')}}">Thông báo</a></li>
                                                        <li><a href="{{URL::to('/dao-tao')}}">Đào tạo</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dropdown">
                                                <a onclick="Menulv2(this)" href="#">Văn bản
                                                    <i class="fa fa-angle-down d-xs-none"></i>
                                                </a>
                                                <div class="dropdown-menu" style="width: 65%;background-color:#f3f3f3;left:unset; padding:0">
                                                    <ul>
                                                        <ul>
                                                            @foreach($chuyenmucvanban as $key=>$cmvb)
                                                            <li><a href="{{URL::to('chuyen-muc-van-ban/'.$cmvb->ID_CHUYENMUC_VB)}}">{{$cmvb->TEN_CHUYENMUC_VB}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dropdown ">
                                                <a onclick="Menulv2(this)" href="#">Hội viên
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu" style="width: 65%;background-color:#f3f3f3;left:unset; padding:0">
                                                    <ul>
                                                        <li><a href="{{URL::to('/hv')}}">Danh sách hội viên</a></li>
                                                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfZFjjMqlgo4NlWKVn-Y0zrb_x74_KsGp5GPJgyr1rb1zK7LA/viewform" target="_blank">Thông tin sức khỏe</a></li>
                                                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScg99qrPifPCDP1EYU0VWMX8RvMj-0XKYMjnsfojrgVL2p63A/viewform" target="_blank">Đăng kí hội viên</a></li>
                                                        <li><a href="#" target="_blank">Tương tác hội viên</a></li>
                                                        <li><a href="{{URL::to('/checking')}}" target="_blank">Điểm danh</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dropdown">
                                                <a href="{{URL::to('/thu-vien')}}">Thư Viện <i class="fa fa-angle-down d-xs-none"></i></a>
                                            </li>

                                            <li class="dropdown">
                                                <a href="{{URL::to('lien-he')}}">Liên Hệ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-xl-9 col-md-12">
                                <div class="index-menu">
                                    <nav class="main-nav">
                                        <ul class="header_lienhe">
                                            <li>
                                                <img src="{{asset('public/frontend/img/icon_map.png')}}" alt="">
                                                <p>184 Nguyễn An Ninh, P. Tân An, Q.Ninh Kiều, TP. Cần Thơ</p>
                                            </li>
                                            <li>
                                                <img src="{{asset('public/frontend/img/icon_phone.png')}}" alt="">
                                                <p>08 5556 5556</p>
                                            </li>
                                            <li>
                                                <img src="{{asset('public/frontend/img/icon_mail.png')}}" alt="">
                                                <p>hoiduochoccantho@gmail.com</p>
                                            </li>
                                        </ul>
                                        <ul class="megamenu menu_main">
                                            <li class="dropdown">
                                                <a class="{{isset($active_home)?$active_home:''}}" href="{{URL::to('/trang-chu')}}">
                                                    Trang chủ
                                                </a>
                                            </li>
                                            <li class="dropdown ">
                                                <a class="{{isset($active_gioithieu)?$active_gioithieu:''}}" href="#">Giới thiệu
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a class="{{isset($active_gioithieuchung)?$active_gioithieuchung:''}}" href="{{URL::to('/gioi-thieu-chung')}}">Giới thiệu chung</a></li>
                                                        <li><a class="{{isset($active_sodo)?$active_sodo:''}}" href="{{URL::to('/so-do-to-chuc')}}">Sơ đồ tổ chức</a></li>
                                                        <li><a class="{{isset($active_duocsihuutri)?$active_duocsihuutri:''}}" href="{{URL::to('to-duoc-si-huu-tri')}}">Tổ Dược sĩ hưu trí</a></li>
                                                        <li><a class="{{isset($active_duoclamsang)?$active_duoclamsang:''}}" href="{{URL::to('to-duoc-lam-sang')}}">Tổ Dược Lâm Sàng</a></li>
                                                        <li><a class="{{isset($active_congtacxahoi)?$active_congtacxahoi:''}}" href="{{URL::to('to-cong-tac-xa-hoi')}}">Tổ Công tác xã hội</a></li>
                                                        <li><a class="{{isset($active_haucan)?$active_haucan:''}}" href="{{URL::to('to-hau-can')}}">Tổ Hậu Cần</a></li>
                                                        <li><a class="{{isset($active_truyenthongsukien)?$active_truyenthongsukien:''}}" href="{{URL::to('to-truyen-thong-su-kien')}}">Tổ Truyền thông, Sự kiện</a></li>
                                                        <li><a class="{{isset($active_covanphapluat)?$active_covanphapluat:''}}" href="{{URL::to('co-van-phap-luat')}}">Cố vấn pháp luật</a></li>
                                                    </ul>
                                                </div>


                                            </li>
                                            <!-- <li class="dropdown blog-fullwidth">
                                                <a class="{{isset($active_diemtin)?$active_diemtin:''}}" href="{{URL::to('diem-tin')}}">Tin tức</a>
                                            </li> -->
                                            <li class="dropdown blog-fullwidth">
                                                <a class="{{isset($active_diemtin)?$active_diemtin:''}}" href="#">Tin tức
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a class="{{isset($active_diemtin)?$active_diemtin:''}}" href="{{URL::to('diem-tin')}}">Tin tức</a></li>
                                                        <li><a class=" {{isset($active_bieumau)?$active_bieumau:''}}" href="{{URL::to('chuyen-muc-tin-tuc/2')}}">Thông báo</a></li>
                                                        <li><a class="{{isset($active_sodo)?$active_sodo:''}}" href="{{URL::to('/dao-tao')}}">Đào tạo</a></li>

                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dropdown"><a class="{{isset($active_vanban)?$active_vanban:''}}" href="#">Văn bản
                                                    <i class="fa fa-angle-down d-xs-none"></i>
                                                </a>
                                                <div class="dropdown-menu" style="width: 65%;background-color:#f3f3f3;left:unset; padding:0">
                                                    <ul>
                                                        @foreach($chuyenmucvanban as $key=>$cmvb)
                                                        <li><a href="{{URL::to('chuyen-muc-van-ban/'.$cmvb->ID_CHUYENMUC_VB)}}">{{$cmvb->TEN_CHUYENMUC_VB}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dropdown ">
                                                <a class="{{isset($active_hoivien_main)?$active_hoivien_main:''}}" href="#">Hội viên
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a class="{{isset($active_hoivien)?$active_hoivien:''}}" href="{{URL::to('/hv')}}">Danh sách hội viên</a></li>
                                                        <li><a class="{{isset($active_bieumau)?$active_bieumau:''}}" href="https://docs.google.com/forms/d/e/1FAIpQLSfZFjjMqlgo4NlWKVn-Y0zrb_x74_KsGp5GPJgyr1rb1zK7LA/viewform" target="_blank">Thông tin sức khỏe</a></li>
                                                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScg99qrPifPCDP1EYU0VWMX8RvMj-0XKYMjnsfojrgVL2p63A/viewform" target="_blank">Đăng kí hội viên</a></li>
                                                        <li><a href="#" target="_blank">Tương tác hội viên</a></li>
                                                        <li><a href="{{URL::to('/checking')}}" target="_blank">Điểm danh</a></li>

                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dropdown">
                                                <a class="{{isset($active_thuvien)?$active_thuvien:''}}" href="{{URL::to('/thu-vien')}}">Thư Viện <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="{{URL::to('/thu-vien')}}">Ảnh</a></li>
                                                        <li><a href="{{URL::to('/chuyen-muc-thu-vien/2')}}">Video</a></li>
                                                        <li><a href="{{URL::to('/thong-tin-y-duoc')}}">Thông tin y dược</a></li>
                                                        <li><a href="{{URL::to('/kien-thuc-y-duoc')}}">Kiến thức y dược</a></li>

                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dropdown">
                                                <a class="{{isset($active_lienhe)?$active_lienhe:''}}" href="{{URL::to('lien-he')}}">Liên Hệ</a>

                                            </li>
                                            <li>
                                                <div class="header-block search-block popup-over pull-right">
                                                    <div data-toggle="dropdown" class="popup-title"><a href="#" title="Search">
                                                            <i class="flaticon-search" style="color: #1e551e"></i></a></div>
                                                    <div class="popup-content">
                                                        <form {{-- id="searchbox" --}} action="{{URL::to('/tim-kiem')}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="input-group">
                                                                <input style="margin-top: 0;" class="search-query form-control" type="text" name="tu_timkiem" placeholder="Nhập từ tìm kiếm" value="" autocomplete="off">
                                                                <div class="input-group-btn" style="background-color: #1e551e">
                                                                    <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e">Tìm</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <main>
        @yield('content')
    </main>
    <footer>
        <section>
            <div style="border-top: 1px solid #ddd; padding-bottom: 10px;text-align: center;">
                <div class="content-about text-center container">
                    <div class="page-title color">
                        <div class="title-icon text-left" style="display:flex;justify-content:space-around;align-items: center;">
                            <h2 class="title-h2 ">Đăng kí nhận tin</h2>
                            <div>
                                <form method="post" action="{{URL::to('dang-ky-nhan-tin')}}" enctype="multipart/form-data" class="form_nhantin" style="display: flex; gap:10px;">
                                    {{csrf_field()}}
                                    <input class="dangkinhantin" name="email" type="email" value="" placeholder="Email nhận tin">
                                    <button type="submit" class="btn_dknt" style="margin: 0;">Gửi</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                    </div>

                </div>
            </div>

        </section>
        <div class="footer">

            <div class="newsletter" style="background-color: #1e551e">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="title clearfix">
                                <div class=" page-title color">
                                    <div class="title-icon text-left footer">
                                        <h2>HỘI DƯỢC HỌC TP. CẦN THƠ</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom pd-top-bottom">
                <div class="container full-mobile">
                    <div class="row">
                        <div class="col-lg-9 col-md-6 col-sm-6 mg-bottom-30">
                            <div class="item contact-us">
                                <div class="item-content">
                                    <div class="sub-title">
                                        <h4 class="title-black">Liên hệ</h4>
                                    </div>
                                </div>
                                <div class="content">

                                    <ul>
                                        <li class="d-flex bg-icon"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span>184 Nguyễn An Ninh, P. Tân An, Q.Ninh Kiều, TP. Cần Thơ</span>
                                        </li>
                                        <li class="d-flex bg-icon"><span><i class="fa fa-phone" aria-hidden="true"></i></span><span>Tổng thư ký hội: Ds. Phạm Thành Suôl - 0908 659 698
                                            </span>
                                        </li>
                                        <li class="d-flex bg-icon"><span><i class="fa fa-paper-plane-o" aria-hidden="true"></i></span><span>hoiduochoccantho@gmail.com</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>

                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mg-bottom-30">
                            <div class="item contact-us">
                                <div class="item-content">
                                    <div class="sub-title">
                                        <h4 class="title-black">Liên kết hữu ích</h4>

                                    </div>
                                    <form method="post" action="{{URL::to('/dang-ky-nhan-tin')}}" class="new-review-form" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        <div class="input-group">
                                            <select class="form-control " id="lien-ket" style="color: #8b8b99">
                                                <option value="" style="color: #8b8b99">-- Liên kết hữu ích --</option>
                                                @foreach($lienket as $key=>$lk)

                                                <option value="{{$lk->LINK_LKWEB}}">

                                                    {{$lk->TEN_LKWEB}}

                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright" style="text-align: center;">
                    <p>© 2022 Hội Dược Học TP. Cần Thơ ● Copyright by
                        <a href="https://tpsoftct.vn" target="_blank">
                            TPSoft
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </div><!-- Back-To-Top Button -->
    <div class="back-to-top"><a href="#"><i class="fa fa-long-arrow-up"></i></a></div><!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <ul class='photheme-pc-contact-bar'>
        <li class='facebook'>
            <a href='https://www.facebook.com/profile.php?gidzl=JaRqIRRbonjAN_LBi_FC5KLJyaAbyCH0Mb3_5gBzmX8AKFqMf_7BIL1IyHolevn91G-WJJVEb0zcikB97W&id=100086923658239' rel='nofollow' target='_blank'></a>
        </li>
        <li class='zalo'>
            <a href='https://zalo.me/0855565556' rel='nofollow' target='_blank'></a>
        </li>
        <li class='hotline'>
            <a href='tel:0855565556' rel='nofollow' target='_blank'></a>
        </li>
    </ul>

    <ul class='photheme-mobile-contact-bar'>
        <li class='facebook'>
            <a href='https://www.facebook.com/profile.php?gidzl=JaRqIRRbonjAN_LBi_FC5KLJyaAbyCH0Mb3_5gBzmX8AKFqMf_7BIL1IyHolevn91G-WJJVEb0zcikB97W&id=100086923658239' rel='nofollow' target='_blank'></a>
        </li>
        <li class='zalo'>
            <a href='https://zalo.me/0855565556' rel='nofollow' target='_blank'></a>
        </li>
        <li class='hotline'>
            <a href='tel:0855565556' rel='nofollow' target='_blank'></a>
        </li>
    </ul>

    <script src="{{asset('public/frontend/libs/jquery/jquery-1.11.3.min.js')}}"></script>
    <!-- <script src="{{asset('public/frontend/libs/owl.carousel/owl.carousel.js')}}"></script> -->
    <script src="{{asset('public/frontend/libs/boostrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/boostrap/js/popper.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
    <script src="{{asset('public/frontend/libs/jquery.elevatezoom/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/tmpl.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/jquery.dependClass-0.1.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/draggable-0.1.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/jquery.slider.js')}}"></script>
    <script src="{{asset('public/frontend/libs/masonry/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/jquery.countdown/jquery.countdown.js')}}"></script>
    <script src="{{asset('public/frontend/libs/imagesloaded/imagesloaded.pkgd.js')}}"></script><!-- Template JS -->
    <script src="{{asset('public/frontend/js/custom.js')}}"></script>
    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>


    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>

    <script src="{{asset('public/frontend/js/toastr.min.js')}}"></script>


    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script>
        $("#menu_mb_control").click(function() {
            $("#index_menu_mb").toggle();
        });
    </script>
    <script>
        function Menulv2(e) {
            $(e).parent().find('.dropdown-menu').toggle();
        }
    </script>
    <script>
        $(function() {
            // bind change event to select
            $('#lien-ket').on('change', function() {
                var url = $(this).val(); // get selected value
                if (url) { // require a URL
                    window.open(url); // redirect
                }
                return false;
            });
        });
    </script>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "101051232806687");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>
    <script>
        $(document).ready(function() {
            $("#chuyendoicongchung_slider").owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    500: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1200: {
                        items: 4
                    },
                    1300: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100086923658239");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

</body>

</html>