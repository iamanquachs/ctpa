<?php
$ID_HV = date("dmy") . rand(1000, 9999);
$tenhoivien = $_POST['tenhoivien'];
// $vanphong_hv = $_POST['VANPHONG_HV'];
$ngaysinh = $_POST['ngaysinh'];
$ANH_HV = $_POST['ANH_HV'];
$vanbang = $_POST['vanbang'];
$diachi = $_POST['diachi'];
$email = $_POST['email'];
$sodienthoai = $_POST['sodienthoai'];
$bhyt = $_POST['bhyt'];
$bhxh = $_POST['bhxh'];
$nhommau = $_POST['nhommau'];
$bmi = $_POST['bmi'];
$huyetap = $_POST['huyetap'];
$diung = $_POST['diung'];
$benhmantinh = $_POST['benhmantinh'];
$noilamviec = $_POST['noilamviec'];
$duoi = explode('.', $_FILES['anh_hv']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$hoivien_img = md5($_FILES['anh_hv']['name']) . '.' . $duoi;
$duongdan = '../../../upload/hoivien/' . $hoivien_img;
$duongdan1 = '/hoivien/' . $hoivien_img;
move_uploaded_file($_FILES['anh_hv']['tmp_name'], $duongdan);

session_start();
//! Tạo mã QR
// include "../../assets/phpqrcode/qrlib.php";
// $content =  "https://localhost/hdh/hv/$ID_HV";
// $duongdanfileqr = '../../../upload/hoivien/anhqr_hv/' . $ID_HV . '.png';
// $duongdananhqr = '/hoivien/anhqr_hv/' . $ID_HV . '.png';
// $qr = QRcode::png($content, $duongdanfileqr, 400, 400);
// echo $qr;
//Tao ket nôi
include '../../connectsql.php';
$id_admin = $_SESSION["id_admin"];
//Viet cau truy van Sql
$sql = "INSERT INTO hoivien (ID_HV, TEN_HV, ANH_HV, VANPHONG_HV, ngaysinh,vanbang, diachi, dienthoai, email, soBHYT, soBHXH, nhommau, bmi, huyetap, diung, benhmantinh) 
VALUES ('$ID_HV','$tenhoivien','$duongdan1','$noilamviec','$ngaysinh','$vanbang','$diachi','$sodienthoai','$email','$bhyt','$bhxh','$nhommau','$bmi','$huyetap','$diung','$benhmantinh')";
//thưc hien truy van
$result = $con->query($sql);

header("location: ../hoivien/danhsachhoivien.php");


//xu ly ket qua

//dong ket noi
$con->close();
