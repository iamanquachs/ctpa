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
            <h3 class="page-title">Danh sách đăng ký </h3>

            <form action="./inqr.php" method="POST" enctype='multipart/form-data'>
              <select name="ngaydaotao">
                <option value='2024-08-03'>Ngày 03-08-2024</option>
              </select>
              <button style="background-color: #0065ca; color:#fff;border-radius:5px">In mã QR</button>
            </form>
          </div>



          <div class="card">
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>STT </th>
                      <th>Mã hội viên</th>
                      <th>Tên hội viên</th>
                      <th>Điện thoại</th>
                      <th>Ngày sinh</th>
                      <th>Đã thanh toán</th>
                      <th>Đã đến</th>
                      <th>Kết quả thi</th>
                      <th>Sửa</th>
                      <th>Xóa</th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php

                    include '../../connectsql.php';
                    $sql = "SELECT * FROM dangky_daotao";
                    $result = $con->query($sql);

                    $stt = 0;

                    while ($row = $result->fetch_assoc()) {

                      echo "<tr>
                        <td style='text-align:center'>" . $stt . " </td>
                        <td style='text-align:center'>" . $row['soct'] . "</td>
                        <td style='text-align:center'>" . $row['hoten'] . "</td>
                        <td style='text-align:center'>" . $row['dienthoai'] . "</td>
                        <td style='text-align:center'>" . $row['ngaysinh'] . "</td>
                        <td style='text-align:center'>" . $row['sotien'] . "</td>
                        <td style='text-align:center'>" . $row['time_checked'] . "</td>
                        <td style='text-align:center'>" . $row['ketquathi'] . "</td>
                        <td style='text-align:center'><a href='suahoivien.php?id_hv=" . $row['ID_HV'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                        <td style='text-align:center'><a href='xoahoivien.php?id_hv=" . $row['ID_HV'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
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