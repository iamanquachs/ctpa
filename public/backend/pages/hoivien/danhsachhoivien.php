<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Hội Dược Học</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/images/logo_item.png" />
  <style>
    .container-4 {
      overflow: hidden;
      vertical-align: middle;
      white-space: nowrap;
      position: relative;
    }

    .container-4 input#search_hoivien {
      width: 300px;
      height: 50px;
      background: #fff;
      border: none;
      font-size: 10pt;
      float: left;
      color: #000;
      padding-left: 15px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    .container-4 input#search_hoivien::-webkit-input-placeholder {
      color: #65737e;
    }

    .container-4 input#search_hoivien:-moz-placeholder {
      /* Firefox 18- */
      color: #65737e;
    }

    .container-4 input#search_hoivien::-moz-placeholder {
      /* Firefox 19+ */
      color: #65737e;
    }

    .container-4 input#search_hoivien:-ms-input-placeholder {
      color: #65737e;
    }

    .container-4 button.icon {
      position: absolute;
      right: 0;
      -webkit-border-top-right-radius: 5px;
      -webkit-border-bottom-right-radius: 5px;
      -moz-border-radius-topright: 5px;
      -moz-border-radius-bottomright: 5px;
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
      border: none;
      background: #fff;
      height: 50px;
      width: 50px;
      color: #4f5b66;
      font-size: 10pt;
      -webkit-transition: all .55s ease;
      -moz-transition: all .55s ease;
      -ms-transition: all .55s ease;
      -o-transition: all .55s ease;
      transition: all .55s ease;
    }
  </style>
</head>

<body>
  <!-- <?php

        session_start();
        if (isset($_SESSION['email'])) {
          include '../../connectsql.php';
          $sql = "SELECT *  FROM admin";
          $result = $con->query($sql);
          $row = $result->fetch_assoc();
          $user = $row['TEN_ADMIN'];
        ?> -->

  <div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
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
          <a class="nav-link" href="../kienthucyduoc/kienthucyduoc.php">
            <span class="menu-icon">
              <i class="mdi mdi-brain"></i>
            </span>
            <span class="menu-title">Kiến thức y dược</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../diemtin/diemtin.php">
            <span class="menu-icon">
              <i class="mdi mdi-newspaper"></i>
            </span>
            <span class="menu-title">Tin tức</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../chuyendoiduoc/diemtinchuyendoiduoc.php">
            <span class="menu-icon">
              <i class="mdi mdi-sync"></i>
            </span>
            <span class="menu-title">Chuyển đổi dược</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../phapluat/phapluat.php">
            <span class="menu-icon">
              <i class="mdi mdi-scale-balance"></i>
            </span>
            <span class="menu-title">Thông tin y dược</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../vanban/vanban.php">
            <span class="menu-icon">
              <i class="mdi mdi-book"></i>
            </span>
            <span class="menu-title">Văn bản</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../hoivien/danhsachhoivien.php">
            <span class="menu-icon">
              <i class="mdi mdi-account-circle"></i>
            </span>
            <span class="menu-title">Hội viên</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../bieumau/bieumau.php">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Biểu mẫu</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../thuvien/thuvien.php">
            <span class="menu-icon">
              <i class="mdi mdi-library"></i>
            </span>
            <span class="menu-title">Thư viện</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../khach.php">
            <span class="menu-icon">
              <i class="mdi mdi-email"></i>
            </span>
            <span class="menu-title">Email nhận tin</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../ykiendonggop.php">
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
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Thông tin tài khoản</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="../samples/logout.php" onclick="return confirm('Bạn có chắc là muốn đăng xuất ???');">
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
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper content-cap">
          <div class="page-header">
            <h3 class="page-title"> HỘI VIÊN </h3>
            <!-- <div class="box">
              <div class="container-4">
                <input type="search" id="search_hoivien"  placeholder="Search..." />
                <button onclick="timkiem()" class="icon"><img src='../../assets/images/search_icon.png'></img></button>
              </div>
            </div> -->

            <a href="../hoivien/hoivien.php">
              <button style="background-color: #0065ca; color:#fff;border-radius:5px">Thêm hội viên</button>
            </a>
          </div>



          <div class="card">
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> STT </th>
                      <th> Mã hội viên</th>
                      <th> Ảnh hội viên</th>
                      <th> Tên hội viên</th>
                      <th> Văn bằng</th>
                      <th> Thông tin y tế</th>
                      <th>Sửa</th>
                      <th>Xóa</th>
                      <th>Ẩn</th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php

                    include '../../connectsql.php';
                    include "../../assets/phpqrcode/qrlib.php";
                    $sql = "SELECT * FROM hoivien";
                    // $sql = "SELECT * FROM hoivien_insert";

                    // $sql = "SELECT * FROM hocvien_insert ";
                    $result = $con->query($sql);

                    $stt = 0;

                    while ($row = $result->fetch_assoc()) {
                      // $content =  "https://ctpa.vn/hv/" . $row['ID_HV'];
                      // $duongdanfileqr = '../../../upload/hoivien/them/' . $row['ID_HV'] . '.png';
                      // $qr = QRcode::png($content, $duongdanfileqr, 400, 400);
                      /**---Tạo mã học viên */
                      // $content =  "https://ctpa.vn/chi-tiet-gxn/" . $row['id_hocvien'];
                      // $duongdanfileqr = '../../../upload/hocvien/hocvien141223/' . $row['id_hocvien'] . '.png';
                      // $qr = QRcode::png($content, $duongdanfileqr, 400, 400);
                      /**--- bổ sung ảnh thiếu */
                      // $content =  "https://ctpa.vn/chi-tiet-gxn/2703230071";
                      // $duongdanfileqr = '../../../upload/hocvien/anh_thieu/NGUYỄN THỊ ANH THƯ.png';
                      // $qr = QRcode::png($content, $duongdanfileqr, 400, 400);
                      $stt = $stt + 1;
                      // $trangthai = $row['trangthai'];

                      echo "<tr>
                      <td style='text-align:center'>" . $stt . " </td>
                      <td style='text-align:center'>" . $row['ID_HV'] . "</td>
                      <td style='text-align:center;'><img style='width: 100px;height: auto;' src='../../../upload" . $row['ANH_HV'] . "'></td>
                      <td style='text-align:center'>" . $row['TEN_HV'] . "</td>
                      <td style='text-align:center'>" . $row['vanbang'] . "</td>
                      <td style='text-align:center'><a href='thongtinyte.php?id_hv=" . $row['ID_HV'] . "'><label class='badge badge-info'>Thông tin y tế</label></a></td>
                      
                      <td style='text-align:center'><a href='suahoivien.php?id_hv=" . $row['ID_HV'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                      <td style='text-align:center'><a href='xoahoivien.php?id_hv=" . $row['ID_HV'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
                      <td style='text-align:center'><a href='anhoivien.php?id_hv=" . $row['ID_HV'] . "'><label class='badge badge-info'>"  ?>
                      <?php switch ($row['trangthai']) {
                        case 0:
                          echo 'Ẩn';
                          break;

                        default:
                          echo 'Hiện';
                          break;
                      } ?>
                    <?php "</label></a></td>
                      </tr>";
                    }
                    echo "</tbody></table>";
                    $con->close();

                    ?>

              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <!-- <?php
        } else {
          header("location: ../samples/login.html");
        }
          ?> -->
    <script>
      // function timkiem(){
      //   var val = document.getElementById('search_hoivien').value
      //   window.location.href('')
      // }
    </script>
</body>

</html>