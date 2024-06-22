<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Hội Dược Học</title>
    <!-- <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script> -->
    <script src="../../assets/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../assets/images/logo_item.png" />
</head>

<body>

    <?php

    session_start();
    if (isset($_SESSION['email'])) {
        include '../../connectsql.php';
        $sql = "SELECT *  FROM admin";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $user = $row['TEN_ADMIN'];
    } else {
        header("location: ../../pages/samples/login.html");
    }
    ?>
    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="../../index.php"><img src="../../assets/images/logo_item.png" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="../../index.php"><img src="../../assets/images/logo_item.png" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                        </div>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Chuyên Mục</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../../pages/chuyenmucdiemtin/index.php">Chuyên mục điểm tin</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../../pages/chuyenmucvanban/index.php">Chuyên mục văn bản</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/kienthucyduoc/kienthucyduoc.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-brain"></i>
                        </span>
                        <span class="menu-title">Kiến thức y dược</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/diemtin/diemtin.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-newspaper"></i>
                        </span>
                        <span class="menu-title">Tin tức</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/chuyendoiduoc/diemtinchuyendoiduoc.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-sync"></i>
                        </span>
                        <span class="menu-title">Chuyển đổi dược</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/thongtinyduoc/thongtinyduoc.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-scale-balance"></i>
                        </span>
                        <span class="menu-title">Thông tin y dược</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/vanban/vanban.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-book"></i>
                        </span>
                        <span class="menu-title">Văn bản</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/hoivien/danhsachhoivien.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-account-circle"></i>
                        </span>
                        <span class="menu-title">Hội viên</span>
                    </a>
                </li>
                <li id="show_cm" class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#hocvien" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Học viên</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="hocvien">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../../../backend/pages/hocvien/danhsachhocvien.php">Danh sách học viên</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../../../backend/pages/hocvien/danhsachdangky.php">Danh sách đăng kí</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/bieumau/bieumau.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title">Biểu mẫu</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/thuvien/thuvien.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-library"></i>
                        </span>
                        <span class="menu-title">Thư viện</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/views/khach.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-email"></i>
                        </span>
                        <span class="menu-title">Email nhận tin</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/views/ykiendonggop.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-chat-processing"></i>
                        </span>
                        <span class="menu-title">Ý kiến đóng góp</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">

                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <h2>HỘI DƯỢC HỌC THÀNH PHỐ CẦN THƠ</h2>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="../../assets/images/faces/iconadmin.png" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $user; ?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Thông tin tài khoản</h6>
                                <!-- <div class="dropdown-divider"></div> -->

                                <!-- <a href="../../pages/samples/change_pass.php" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Đổi mật khẩu</p>
                                    </div>
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="../../pages/samples/logout.php" onclick="return confirm('Bạn có chắc là muốn đăng xuất ???');">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Đăng xuất</p>
                                    </div>
                                </a>

                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>