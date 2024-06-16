<?php
$tieude_pl = $_POST['tieude_pl'];
//echo $tieudediemtin; 
$cm_pl = $_POST['cm_pl'];
//echo $cmdt;
$nd_pl = $_POST['nd_pl'];
//echo $nddt;
$duoi = explode('.', $_FILES['file_pl']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$phapluat_img = md5($_FILES['file_pl']['name']) . '.' . $duoi;
$duongdan = '../../../upload/phapluat/' . $phapluat_img;
$duongdan1 = '/phapluat/' . $phapluat_img;
move_uploaded_file($_FILES['file_pl']['tmp_name'], $duongdan);

$ngayhieuluc = $_POST['ngayhieuluc_pl'];

//echo $day;
session_start();

//Tao ket nôi
include '../../connectsql.php';
$id_admin = $_SESSION["id_admin"];
//Viet cau truy van Sql
$sql = "INSERT INTO phapluat ( ID_CHUYENMUC_PL, ID_ADMIN, TIEUDE_PL, NOIDUNG_PL, FILE_PL, NGAYDANG_PL, NGAY_HIEULUC) VALUES ('$cm_pl','$id_admin','$tieude_pl','$nd_pl','$duongdan1',CURRENT_DATE,'$ngayhieuluc')";
echo $sql;
//thưc hien truy van
$result = $con->query($sql);

header("Location: ../thongtinyduoc/thongtinyduoc.php");


//xu ly ket qua

//dong ket noi
$con->close();
