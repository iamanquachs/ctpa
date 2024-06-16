<?php
session_start();

include '../../connectsql.php';

$id_hv = $_POST['id_hv'];
$id_admin = $_SESSION["id_admin"];
$ten_hv = $_POST['tenhoivien'];
$noilamviec = $_POST['noilamviec'];
$ngaysinh = $_POST['ngaysinh'];
$vanbang = $_POST['vanbang'];
$diachi = $_POST['diachi'];
$email = $_POST['email'];
$soCCCD = $_POST['soCCCD'];
$ngaycapCCCD = $_POST['ngaycapCCCD'];
$noicapCCCD = $_POST['noicapCCCD'];
$soCCHND = $_POST['soCCHND'];
$ngaycapCCHND = $_POST['ngaycapCCHND'];
$dienthoai = $_POST['dienthoai'];
$bhyt = $_POST['bhyt'];
$bhxh = $_POST['bhxh'];
$nhommau = $_POST['nhommau'];
$bmi = $_POST['bmi'];
$huyetap = $_POST['huyetap'];
$diung = $_POST['diung'];
$benhmantinh = $_POST['benhmantinh'];
if (!empty($_FILES['anh_hv']['name'])) {
    $duoi = explode('.', $_FILES['anh_hv']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    $hoivien_img = md5($_FILES['anh_hv']['name']) . '.' . $duoi;
    $duongdan = '../../../upload/hoivien/' . $hoivien_img;
    $duongdan1 = '/hoivien/' . $hoivien_img;

    $sql = "UPDATE hoivien SET ID_ADMIN='$id_admin', TEN_HV='$ten_hv', VANPHONG_HV='$noilamviec', ANH_HV='$duongdan1',
     ngaysinh='$ngaysinh', vanbang='$vanbang', diachi='$diachi', email='$email', soCCCD='$soCCCD', ngaycapCCCD='$ngaycapCCCD', noicapCCCD='$noicapCCCD', soCCHND='$soCCHND', ngaycapCCHND='$ngaycapCCHND', dienthoai='$dienthoai', soBHYT='$bhyt', soBHXH='$bhxh',
      nhommau='$nhommau', bmi='$bmi', huyetap='$huyetap', diung='$diung', benhmantinh='$benhmantinh'
      where ID_HV='$id_hv'";
    move_uploaded_file($_FILES['anh_hv']['tmp_name'], $duongdan);
} else {
    $sql = "UPDATE hoivien SET  TEN_HV='$ten_hv', VANPHONG_HV='$noilamviec',ngaysinh='$ngaysinh', vanbang='$vanbang', diachi='$diachi',email='$email', soCCCD='$soCCCD', ngaycapCCCD='$ngaycapCCCD', noicapCCCD='$noicapCCCD', soCCHND='$soCCHND', ngaycapCCHND='$ngaycapCCHND', dienthoai='$dienthoai', soBHYT='$bhyt', soBHXH='$bhxh',
    nhommau='$nhommau', bmi='$bmi', huyetap='$huyetap', diung='$diung', benhmantinh='$benhmantinh' where ID_HV='$id_hv'";
}

// echo $sql;

$result = $con->query($sql);
header("location: ../hoivien/danhsachhoivien.php");
$con->close();
