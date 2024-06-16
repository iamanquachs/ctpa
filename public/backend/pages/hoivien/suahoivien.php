<?php
require('../views/header.php')
?>

<?php
// session_start();
include '../../connectsql.php';
$id_hv = $_GET['id_hv'];
$sql = "SELECT * FROM hoivien where ID_HV='$id_hv'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$idadmin = $row['ID_ADMIN'];
$email = $row['email'];
$ten_hv = $row['TEN_HV'];
$noilamviec = $row['VANPHONG_HV'];
$ngaysinh = $row['ngaysinh'];
$ANH_HV = $row['ANH_HV'];
$vanbang = $row['vanbang'];
$diachi = $row['diachi'];
$soCCCD = $row['soCCCD'];
$ngaycapCCCD = $row['ngaycapCCCD'];
$noicapCCCD = $row['noicapCCCD'];
$soCCHND = $row['soCCHND'];
$ngaycapCCHND = $row['ngaycapCCHND'];
$dienthoai = $row['dienthoai'];
$bhyt = $row['soBHYT'];
$bhxh = $row['soBHXH'];
$nhommau = $row['nhommau'];
$bmi = $row['bmi'];
$huyetap = $row['huyetap'];
$diung = $row['diung'];
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
                    <th style=" text-align: left;color: green;font-size: 20px;"> Sửa thông tin hội viên</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tên hội viên</th>
                    <td><input style="width:100%" type="text" name="tenhoivien" value="<?= $ten_hv ?>" placeholder="Tên hội viên"></td>
                    <th>Ngày sinh</th>
                    <td><input style="width:100%" type="date" name="ngaysinh" value="<?= $ngaysinh ?>" placeholder="Ngày sinh"></td>
                  </tr>
                  <tr>
                    <th>Văn bằng</th>
                    <td><input style="width:100%" type="text" name="vanbang" value="<?= $vanbang ?>" placeholder="Văn bằng"></td>
                    <th>Địa chỉ</th>
                    <td><input style="width:100%" type="text" name="diachi" value="<?= $diachi ?>" placeholder="Địa chỉ"></td>
                  </tr>
                  <tr>
                    <th>Số căn cước công dân</th>
                    <td><input style="width:100%" type="text" name="soCCCD" value="<?= $soCCCD ?>" placeholder="Số căn cước công dân"></td>
                    <th>Ngày cấp căn cước công dân</th>
                    <td><input style="width:100%" type="date" name="ngaycapCCCD" value="<?= $ngaycapCCCD ?>" placeholder="Ngày cấp căn cước công dân"></td>
                  </tr>
                  <tr>
                    <th>Nơi cấp căn cước công dân</th>
                    <td><input style="width:100%" type="text" name="noicapCCCD" value="<?= $noicapCCCD ?>" placeholder="Nơi cấp căn cước công dân"></td>
                    <th>Số chứng chỉ hành nghề dược</th>
                    <td><input style="width:100%" type="text" name="soCCHND" value="<?= $soCCHND ?>" placeholder="Số chứng chỉ hành nghề dược"></td>
                  </tr>
                  <tr>
                    <th>Ngày cấp chứng chỉ hành nghề dược</th>
                    <td><input style="width:100%" type="date" name="ngaycapCCHND" value="<?= $ngaycapCCHND ?>" placeholder="Ngày cấp chứng chỉ hành nghề dược"></td>
                    <th>Nơi làm việc</th>
                    <td><input style="width:100%" type="text" name="noilamviec" value="<?= $noilamviec ?>" placeholder="Nơi làm việc"></td>
                  </tr>
                  <tr>
                    <th>Số BHYT</th>
                    <td><input style="width:100%" type="text" name="bhyt" value="<?= $bhyt ?>" placeholder="Số BHYT"></td>
                    <th>Số BHXH</th>
                    <td><input style="width:100%" type="text" name="bhxh" value="<?= $bhxh ?>" placeholder="Số BHXH"></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><input style="width:100%" type="text" name="email" value="<?= $email ?>" placeholder="Email"></td>
                    <th>Điện thoại</th>
                    <td><input style="width:100%" type="text" name="dienthoai" value="<?= $dienthoai ?>" placeholder="Điện thoại"></td>
                  </tr>
                  <tr>
                    <th style="color: green;font-size: 20px;">Sửa thông tin y tế cá nhân</th>
                    <td></td>
                    <th></th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Nhóm máu</th>
                    <td><input style="width:100%" type="text" name="nhommau" value="<?= $nhommau ?>" placeholder="Nhóm máu"></td>
                    <th>BMI</th>
                    <td><input style="width:100%" type="text" name="bmi" value="<?= $bmi ?>" placeholder="BMI"></td>
                  </tr>
                  <tr>
                    <th>Huyết áp</th>
                    <td><input style="width:100%" type="text" name="huyetap" value="<?= $huyetap ?>" placeholder="Huyết áp"></td>
                    <th>Dị ứng(thuốc/thức ăn)</th>
                    <td><input style="width:100%" type="text" name="diung" value="<?= $diung ?>" placeholder="Dị ứng"></td>
                  </tr>
                  <tr>
                    <th>Bệnh mãn tính</th>
                    <td><input style="width:100%" type="text" name="benhmantinh" value="<?= $benhmantinh ?>" placeholder="Bệnh mãn tính"></td>
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
              <button type="submit" class="btn btn-primary btn-fw" style="float:right;" name="id_hv" value='<?php echo $id_hv ?>'>Cập nhật</button>
              <button type="submit" href="../backend/pages/hoivien/hoivien.php" class="btn btn-warning btn-fw" style="float:right;margin-right: 10px;">Trở về</button>
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