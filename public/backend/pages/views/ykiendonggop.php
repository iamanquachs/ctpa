<?php
session_start();
if (isset($_SESSION['email'])) {
?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Hội Dược Học</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/logo_item.png" />
  </head>

  <body>

    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <?php
      require('../../menu.php')
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
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
                    <img class="img-xs rounded-circle" src="../assets/images/faces/iconadmin.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Thông tin tài khoản</h6>
                  <!-- <div class="dropdown-divider"></div> -->
                  <!-- <a href="../pages/samples/change_pass.php" class="dropdown-item preview-item">
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
                  <a class="dropdown-item preview-item" href="../pages/samples/logout.php" onclick="return confirm('Bạn có chắc là muốn đăng xuất ???');">
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
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Ý KIẾN ĐÓNG GÓP <br>

            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> STT </th>
                          <th> Họ tên </th>
                          <th> Nội dung </th>
                          <th> Email </th>
                          <th> Số điện thoại </th>
                          <th> Thời gian</th>
                        </tr>
                      </thead>
                      <tbody>


                        <?php
                        include '../connectsql.php';
                        $sql = "SELECT * FROM ykiendonggop";
                        //echo $sql; 
                        $result = $con->query($sql);

                        $stt = 0;
                        while ($row = $result->fetch_assoc()) {
                          $stt = $stt + 1;
                          echo "<tr>
                                <td style='text-align:center'>" . $stt . " </td>
                                <td style='text-align:center'>" . $row['HOTEN_YKDG'] . "</td>
                                <td style='text-align:center'>" . $row['NOIDUNG_YKDG'] . "</td>
                                <td style='text-align:center'>" . $row['EMAIL_YKDG'] . "</td>
                                <td style='text-align:center'>" . $row['SDT_YKDG'] . "</td>
                                <td style='text-align:center'>" . date('H:i:s d/m/Y', strtotime($row['THOIGIAN_YKDG'])) . "</td>
                                
                                </tr>";
                        }
                        echo "</tbody></table>";
                        $con->close();


                        ?>

                  </div>
                </div>
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
  </body>

  </html>
<?php
} else {
  header("location: ../../pages/samples/login.html");
}
?>