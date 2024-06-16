<?php

session_start();

include '../../connectsql.php';
$id_ktyd = $_SESSION['id_ktyd'];
$id_admin = $_SESSION["id_admin"];
$tieudektyd = $_POST['tieudektyd'];
$ndktyd = $_POST['ndktyd'];

$day = date("y-m-d");
if (!empty($_FILES['hinhanhktyd']['name'])) {
    $duoi = explode('.', $_FILES['hinhanhktyd']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    $hinhanh_name = md5($_FILES['hinhanhktyd']['name']) . '.' . $duoi;
    $duongdan = '/kienthucyduoc/' . $hinhanh_name;



    $duongdan1 = '../../../upload/kienthucyduoc/' . $hinhanh_name;
    $day = date("y-m-d");
    $sql = "UPDATE kienthucyduoc SET  ID_ADMIN='$id_admin', TIEUDE_KTYD='$tieudektyd', NOIDUNG_KTYD='$ndktyd', HINHANH_KTYD='$duongdan', NGAYDANG_KTYD='$day' where ID_KTYD='$id_ktyd'";
    move_uploaded_file($_FILES['hinhanhktyd']['tmp_name'], $duongdan1);
} else {
    $sql = "UPDATE kienthucyduoc SET  ID_ADMIN='$id_admin', TIEUDE_KTYD='$tieudektyd', NOIDUNG_KTYD='$ndktyd', NGAYDANG_KTYD='$day' where ID_KTYD='$id_ktyd'";
}


$result = $con->query($sql);
header("location: ../kienthucyduoc/kienthucyduoc.php");
$con->close();
