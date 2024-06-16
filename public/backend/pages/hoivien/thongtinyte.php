<?php
require('../views/header.php')
?>

<?php
// session_start();
include '../../connectsql.php';
$id_hv = $_GET['id_hv'];
$email = $_SESSION['email'];
$sql = "SELECT ID_ADMIN, ID_HV,TEN_HV,diung,huyetap,bmi,benhmantinh,nhommau  FROM hoivien where ID_HV='$id_hv'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$idadmin = $row['ID_ADMIN'];
$ten_hv = $row['TEN_HV'];
$diung = $row['diung'];
$nhommau = $row['nhommau'];
$bmi = $row['bmi'];
$huyetap = $row['huyetap'];
$benhmantinh = $row['benhmantinh'];
$_SESSION['id_hv'] = $id_hv;

?>



<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> HỘI VIÊN </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="capnhathoivien.php" method="POST" enctype='multipart/form-data'>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="font-size:18px; text-align: left;color: green;"> Thông tin y tế hội viên</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tên hội viên</th>
                    <td><?= $ten_hv ?></td>
                  </tr>
                  <tr>
                    <th>Nhóm máu</th>
                    <td><?= $nhommau ?></td>
                  </tr>
                  <tr>
                    <th>Dị ứng</th>
                    <td><?= $diung ?></td>
                  </tr>
                  <tr>
                    <th>BMI</th>
                    <td><?= $bmi ?></td>
                  </tr>
                  <tr>
                    <th>Huyết áp</th>
                    <td><?= $huyetap ?></td>
                  </tr>
                  <tr>
                    <th>Bệnh mãn tính</th>
                    <td><?= $benhmantinh ?></td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" href="../backend/pages/hoivien/danhsachhoivien.php" class="btn btn-warning btn-fw" style="float:right;margin-right: 10px;">Trở về</button>
              <!-- <td> <input type='submit' class='btn btn-primary btn-sm btn-block btn-success' value='Cập nhật' name="iddt"></td> -->
            </form>




          </div>
        </div>
      </div>
    </div>
    <br>




    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<?php
require('../views/footer.php')
?>