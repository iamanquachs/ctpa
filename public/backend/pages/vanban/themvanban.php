<?php
$tieude_vb = $_POST['tieude_vb'];
$cm_vb = $_POST['cm_vb'];
$nd_vb = $_POST['nd_vb'];
$replace_nd = str_replace("'", "''", $nd_vb);
$duoi = explode('.', $_FILES['file_vb']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$file_vb = md5($_FILES['file_vb']['name']) . '.' . $duoi;
$duongdan = '../../../upload/vanban/' . $file_vb;
$duongdan1 = '/vanban/' . $file_vb;
move_uploaded_file($_FILES['file_vb']['tmp_name'], $duongdan);
$duoi = explode('.', $_FILES['anh_vb']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$anh_vb = md5($_FILES['anh_vb']['name']) . '.' . $duoi;

$duongdan2_1 = '../../../upload/vanban/' . $anh_vb;
$duongdan2 = '/vanban/' . $anh_vb;
move_uploaded_file($_FILES['anh_vb']['tmp_name'], $duongdan2);

$day = date("y-m-d");

//echo $day;
session_start();

//Tao ket nôi
include '../../connectsql.php';
$id_admin = $_SESSION["id_admin"];
//Viet cau truy van Sql
$sql = "INSERT INTO vanban ( ID_CHUYENMUC_VB, ID_ADMIN, TIEUDE_VB, NOIDUNG_VB, FILE_VB,HINHANH_VB, NGAYDANG_VB) VALUES ( '$cm_vb','$id_admin','$tieude_vb','$replace_nd','$duongdan1','$duongdan2_1','$day') ";
//echo $sql;
//thưc hien truy van
$result = $con->query($sql);

header('location: ../vanban/vanban.php');


//xu ly ket qua

//dong ket noi
$con->close();
