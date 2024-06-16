<?php
$ten_bmccv = $_POST['tenbieumau'];


$duoi = explode('.', $_FILES['file_bmccv']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$bieumauccv = md5($_FILES['file_bmccv']['name']) . '.' . $duoi;

$duongdan = '../../../upload/bieumauccv/' . $bieumauccv;
$duongdan1 = '/bieumauccv/' . $bieumauccv;
move_uploaded_file($_FILES['file_bmccv']['tmp_name'], $duongdan);
//echo 'HoiCongChungCT/admin/image/diemtin/' .$_FILES['hinhanhdt']['name']."<br>";

$day = date("y-m-d");

//echo $day;
session_start();

//Tao ket nôi
include '../../connectsql.php';
$id_admin = $_SESSION["id_admin"];
//echo $tieudediemtin, $cmdt, $nddt, $day, $id_admin;
//Viet cau truy van Sql
$sql = "INSERT INTO bieumauccv ( ID_ADMIN, TEN_BMCCV, FILE_BMCCV, NGAYDANG_BMCCV) VALUES ('$id_admin','$ten_bmccv','$duongdan1','$day')";
echo $sql;
//thưc hien truy van
$result = $con->query($sql);

header("location: ../bieumau/bieumau.php");


//xu ly ket qua

//dong ket noi
$con->close();
