<!-- file này để thêm hội viên -->
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
    <?php
          require('../../menu.php')
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <?php
          require('../../menu_nav.php')
      ?>
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper content-cap">
          <div class="page-header">
            <h3 class="page-title">THÊM HỘI VIÊN </h3>

          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <form action="themhoivien.php" method="POST" enctype="multipart/form-data">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="font-size:18px; text-align: left;color: green;font-size: 20px;"> Thông tin hội viên</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Tên hội viên</th>
                          <td><input style="width:100%" type="text" name="tenhoivien" value="" placeholder="Tên hội viên"></td>
                          <th>Ngày sinh</th>
                          <td><input style="width:100%" type="date" name="ngaysinh" value="" placeholder="Ngày sinh"></td>
                        </tr>
                        <tr>
                          <th>Văn bằng</th>
                          <td><input style="width:100%" type="text" name="vanbang" value="" placeholder="Văn bằng"></td>
                          <th>Địa chỉ</th>
                          <td><input style="width:100%" type="text" name="diachi" value="" placeholder="Địa chỉ"></td>
                        </tr>
                        <tr>
                          <th>Điện thoại</th>
                          <td><input style="width:100%" type="text" name="sodienthoai" value="" placeholder="Điện thoại"></td>
                          <th>Nơi làm việc</th>
                          <td><input style="width:100%" type="text" name="noilamviec" value="" placeholder="Nơi làm việc"></td>
                        </tr>
                        <tr>
                          <th>Số BHYT</th>
                          <td><input style="width:100%" type="text" name="bhyt" value="" placeholder="Số BHYT"></td>
                          <th>Số BHXH</th>
                          <td><input style="width:100%" type="text" name="bhxh" value="" placeholder="Số BHXH"></td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <td><input style="width:100%" type="text" name="email" value="" placeholder="Email"></td>
                          <th></th>
                          <td></td>
                        </tr>
                        <tr>
                          <th style="color: green;font-size: 20px;">Thông tin y tế cá nhân</th>
                          <td></td>
                          <th></th>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Nhóm máu</th>
                          <td><input style="width:100%" type="text" name="nhommau" value="" placeholder="Nhóm máu"></td>
                          <th>BMI</th>
                          <td><input style="width:100%" type="text" name="bmi" value="" placeholder="BMI"></td>
                        </tr>
                        <tr>
                          <th>Huyết áp</th>
                          <td><input style="width:100%" type="text" name="huyetap" value="" placeholder="Huyết áp"></td>
                          <th>Dị ứng(thuốc/thức ăn)</th>
                          <td><input style="width:100%" type="text" name="diung" value="" placeholder="Dị ứng"></td>
                        </tr>
                        <tr>
                          <th>Bệnh mãn tính</th>
                          <td><input style="width:100%" type="text" name="benhmantinh" value="" placeholder="Bệnh mãn tính"></td>
                          <th></th>
                          <td></td>
                        </tr>
                        <th>Hình ảnh hội viên</th>
                        <td><input style="width:100%" type="file" name="anh_hv" value=""></td>
                        <th></th>
                        <td></td>
                        </tr>
                      </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary btn-fw" style="float:right;margin-top: 10px">Thêm</button>
                    <button type="submit" href="../backend/pages/hoivien/danhsachhoivien.php" class="btn btn-warning btn-fw" style="float:right;margin-right: 10px;margin-top: 10px">Trở về</button>
                  </form>




                </div>
              </div>
            </div>
          </div>
          <br>



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
</body>

</html>