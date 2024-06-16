<?php
require('../views/header.php')
?>
<?php

include '../../connectsql.php';
$id_bmccv = $_GET['id_bmccv'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM bieumauccv where ID_BMCCV=$id_bmccv";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$idadmin = $row['ID_ADMIN'];
$ten_bmccv = $row['TEN_BMCCV'];
$file_bmccv = $row['FILE_BMCCV'];
$_SESSION['id_bmccv'] = $id_bmccv;
?>

<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> FORM - BIỂU MẪU </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="capnhat_bmccv.php" method="POST" enctype='multipart/form-data'>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Sửa thông tin biểu mẫu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tên biểu mẫu</th>
                    <td><input style="width: 100%;" tyle='text' value="<?= $ten_bmccv ?>" name='ten_bmccv'></td>
                  </tr>

                  <tr>
                    <th>File / biểu mẫu</th>
                    <td><input type='file' name='file_bmccv' value="">

                  </tr>
                </tbody>
              </table>
              <button type="submit" class="btn btn-primary btn-fw" style="float:right;" name="id_bmccv" value='<?php echo $id_bmccv; ?>'>Cập nhật</button>
              <button type="submit" href="../backend/pages/bieumau/bieumau.php" class="btn btn-warning btn-fw" style="float:right;margin-right: 10px;">Trở về</button>
            </form>




          </div>
        </div>
      </div>
    </div>





  </div>
</div>
<?php
require('../views/footer.php')
?>