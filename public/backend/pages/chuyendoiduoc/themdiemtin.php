<?php
include '../../connectsql.php';
$tieudediemtin = $_POST['tieudediemtin'];
$nddt = $_POST['nddt'];
$duoi = explode('.', $_FILES['hinhanhdt']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$hinhanh_name = md5($_FILES['hinhanhdt']['name']) . '.' . $duoi;

$duongdan = '../../../upload/chuyendoicongchung/' . $hinhanh_name;
$duongdan1 = '/chuyendoicongchung/' . $hinhanh_name;
move_uploaded_file($_FILES['hinhanhdt']['tmp_name'], $duongdan);

$sql = "INSERT INTO chuyendoicongchung(TIEUDE_DT, NOIDUNG_DT, HINHANH_DT, NGAYDANG_DT) VALUES ('$tieudediemtin','$nddt','$duongdan1',CURRENT_DATE)";
$con->query($sql);

header("location: ../chuyendoiduoc/diemtinchuyendoiduoc.php");
