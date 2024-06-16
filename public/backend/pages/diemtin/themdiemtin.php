<?php
$tieudediemtin = $_POST['tieudediemtin'];
$cmdt = $_POST['cmdt'];
$nddt = $_POST['nddt'];

$duoi = explode('.', $_FILES['hinhanhdt']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$hinhanh_name = md5($_FILES['hinhanhdt']['name']) . '.' . $duoi;

$duongdan = '../../../upload/diemtin/' . $hinhanh_name;
$duongdan1 = '/diemtin/' . $hinhanh_name;
move_uploaded_file($_FILES['hinhanhdt']['tmp_name'], $duongdan);

$day = date("y-m-d");


//Tao ket nôi
include '../../connectsql.php';
$id_admin = $_SESSION["id_admin"];
//echo $tieudediemtin, $cmdt, $nddt, $day, $id_admin;
//Viet cau truy van Sql
$sql = "INSERT INTO diemtin ( ID_CHUYENMUC_DT, ID_ADMIN, TIEUDE_DT, NOIDUNG_DT, HINHANH_DT, NGAYDANG_DT) VALUES ('$cmdt','$id_admin','$tieudediemtin','$nddt','$duongdan1','$day')";

$con->query($sql);


header("location: ../diemtin/diemtin.php");

//xu ly ket qua

//dong ket noi
$con->close();
