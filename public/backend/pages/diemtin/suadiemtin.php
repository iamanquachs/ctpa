<?php
require('../views/header.php')
?>
<?php
include '../../connectsql.php';
$id_dt = $_GET['id_dt'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM diemtin join chuyenmucdiemtin on diemtin.ID_CHUYENMUC_DT=chuyenmucdiemtin.ID_CHUYENMUC_DT and ID_DT='$id_dt'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$idadmin = $row['ID_ADMIN'];
$tieude = $row['TIEUDE_DT'];
$noidung = $row['NOIDUNG_DT'];
$TEN_CHUYENMUC_DT = $row['TEN_CHUYENMUC_DT'];
$hinhanh = $row['HINHANH_DT'];
$_SESSION['id_dt'] = $id_dt;

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
            <form action="capnhatdt.php" method="POST" enctype='multipart/form-data'>
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
                    <td><input style="width: 100%;" tyle='text' value="<?= $tieude ?>" name='tieudediemtin'></td>
                  </tr>
                  <tr>
                    <th>Chuyên mục điểm tin</th>
                    <td><select name='cmdt' id='cmdt' value='<?php echo $row["TEN_CHUYENMUC_DT"] ?>'>

                        <?php

                        $sql1 = "SELECT * FROM chuyenmucdiemtin";
                        //echo $sql; 
                        $result = $con->query($sql1);

                        while ($row2 = $result->fetch_assoc()) {
                          if ($row["ID_CHUYENMUC_DT"] == $row2['ID_CHUYENMUC_DT']) {
                            echo "<option value='" . $row2['ID_CHUYENMUC_DT'] . "' selected>" . $row2['TEN_CHUYENMUC_DT'] . " </option><br>";
                          } else {
                            echo "<option value='" . $row2['ID_CHUYENMUC_DT'] . "'>" . $row2['TEN_CHUYENMUC_DT'] . " </option><br>";
                          }
                        }



                        ?>
                      </select></td>
                  </tr>
                  <tr>
                    <th>Nội dung điểm tin</th>
                    <td><textarea id='nddt' name='nddt' rows='8' cols='40' value=""><?php echo $noidung ?></textarea>
                      <script>
                        CKEDITOR.replace('nddt');
                      </script>

                    </td>
                    </td>
                  </tr>
                  <tr>
                    <th>Hình ảnh điểm tin</th>
                    <td><input type='file' name='hinhanhdt' value="<?php echo $row['HINHANH_DT'] ?>">

                  </tr>
                </tbody>
              </table>
              <button type="submit" class="btn btn-primary btn-fw" style="float:right;" name="iddt" value='<?php echo $id_dt ?>'>Cập nhật</button>
              <button type="submit" href="../backend/pages/diemtin/diemtin.php" class="btn btn-warning btn-fw" style="float:right;margin-right: 10px;">Trở về</button>
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