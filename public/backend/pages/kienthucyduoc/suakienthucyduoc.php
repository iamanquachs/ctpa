<?php
require('../views/header.php')
?>
<?php
include '../../connectsql.php';
$id_ktyd = $_GET['id_ktyd'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM kienthucyduoc where ID_KTYD='$id_ktyd'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$idadmin = $row['ID_ADMIN'];
$tieude = $row['TIEUDE_KTYD'];
$noidung = $row['NOIDUNG_KTYD'];
$hinhanh = $row['HINHANH_KTYD'];
$_SESSION['id_ktyd'] = $id_ktyd;

?>
<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> ĐIỂM TIN </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="capnhatktyd.php" method="POST" enctype='multipart/form-data'>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Sửa điểm tin</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tiêu đề điểm tin</th>
                    <td><input style="width: 100%;" tyle='text' value="<?= $tieude ?>" name='tieudektyd'></td>
                  </tr>
                  <tr>
                    <th>Nội dung điểm tin</th>
                    <td><textarea id='ndktyd' name='ndktyd' rows='8' cols='40' value=""><?php echo $noidung ?></textarea>
                      <script>
                        CKEDITOR.replace('ndktyd');
                      </script>

                    </td>
                    </td>
                  </tr>
                  <tr>
                    <th>Hình ảnh điểm tin</th>
                    <td><input type='file' name='hinhanhktyd' value="<?php echo $row['HINHANH_KTYD'] ?>">

                  </tr>
                </tbody>
              </table>
              <button type="submit" class="btn btn-primary btn-fw" style="float:right;" name="iddt" value='<?php echo $id_ktyd ?>'>Cập nhật</button>
              <button type="submit" href="../backend/pages/kienthucyduoc/kienthucyduoc.php" class="btn btn-warning btn-fw" style="float:right;margin-right: 10px;">Trở về</button>
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