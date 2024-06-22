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
    }

    .container-4 input#search_hoivien {
      width: 300px;
      height: 50px;
      background: #2b303b;
      border: none;
      font-size: 10pt;
      float: left;
      color: #fff;
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
      -webkit-border-top-right-radius: 5px;
      -webkit-border-bottom-right-radius: 5px;
      -moz-border-radius-topright: 5px;
      -moz-border-radius-bottomright: 5px;
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
      border: none;
      background: #232833;
      height: 50px;
      width: 50px;
      color: #4f5b66;
      opacity: 0;
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
            <h3 class="page-title"> HỘI VIÊN </h3>
            <div class="box">
              <div class="container-4">
                <input type="search" id="search_hoivien" onkeyup="timkiem()" placeholder="Search..." />
                <button class="icon">Tìm<a href="" class="fa fa-search"></a></button>
              </div>
            </div>

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
                      <th> Nơi làm việc</th>
                      <th> Ngày sinh</th>
                      <th> Văn bằng</th>
                      <th> Địa chỉ</th>
                      <th> Điện thoại</th>
                      <th> Email</th>
                      <th> Thông tin y tế</th>
                      <th>Sửa</th>
                      <th>Xóa</th>
                      <th>Ẩn</th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php
                    $dochtml = new domDocument();
                    $search_hoivien = $dochtml->getElementById('search_hoivien');
                    include '../../connectsql.php';
                    // include "../../assets/phpqrcode/qrlib.php";
                    $sql = "SELECT * FROM hoivien";

                    if ($search_hoivien == '') {
                    } else {
                      $sql = "SELECT * FROM hoivien WHERE LIKE %$search_hoivien%";
                    }
                    $result = $con->query($sql);
                    // $sql = "SELECT * FROM hocvien ";
                    // $result = $con->query($sql);
                    // echo $result; 

                    $stt = 0;

                    while ($row = $result->fetch_assoc()) {
                      // $content =  "https://ctpa.vn/hv/" . $row['ID_HV'];
                      // $duongdanfileqr = '../../../upload/hoivien/anh_QR_030423/' . $row['TEN_HV'] . '.png';
                      // $qr = QRcode::png($content, $duongdanfileqr, 400, 400);
                      // $stt = $stt + 1;
                      /**---Tạo mã học viên */
                      // $content =  "https://ctpa.vn/chi-tiet-gxn/" . $row['id_hocvien'];
                      // $duongdanfileqr = '../../../upload/hocvien/anh_QR_040423/' . $row['ten_hocvien'] . '.png';
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
                      <td style='text-align:center'>" . $row['VANPHONG_HV'] . "</td>
                      <td style='text-align:center'>" . date_format(date_create($row['ngaysinh']), 'd/m/Y') . "</td>
                      <td style='text-align:center'>" . $row['vanbang'] . "</td>
                      <td style='text-align:center'>" . $row['diachi'] . "</td>
                      <td style='text-align:center'>" . $row['dienthoai'] . "</td>
                      <td style='text-align:center'>" . $row['email'] . "</td>
                      
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

    </script>
</body>

</html>