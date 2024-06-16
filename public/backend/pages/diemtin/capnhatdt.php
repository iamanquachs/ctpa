<?php

session_start();

include '../../connectsql.php';
$id_dt = $_POST['iddt'];
$id_admin = $_SESSION["id_admin"];
$tieudediemtin = $_POST['tieudediemtin'];
$cmdt = $_POST['cmdt'];
$nddt = $_POST['nddt'];

$day = date("y-m-d");
if (!empty($_FILES['hinhanhdt']['name'])) {
    $duoi = explode('.', $_FILES['hinhanhdt']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    $hinhanh_name = md5($_FILES['hinhanhdt']['name']) . '.' . $duoi;
    $duongdan = '/diemtin/' . $hinhanh_name;



    $duongdan1 = '../../../upload/diemtin/' . $hinhanh_name;
    $day = date("y-m-d");
    $sql = "UPDATE diemtin SET  ID_CHUYENMUC_DT='$cmdt',ID_ADMIN='$id_admin', TIEUDE_DT='$tieudediemtin', NOIDUNG_DT='$nddt', HINHANH_DT='$duongdan', NGAYDANG_DT='$day' where ID_DT='$id_dt'";
    move_uploaded_file($_FILES['hinhanhdt']['tmp_name'], $duongdan1);
} else {
    $sql = "UPDATE diemtin SET  ID_CHUYENMUC_DT='$cmdt',ID_ADMIN='$id_admin', TIEUDE_DT='$tieudediemtin', NOIDUNG_DT='$nddt', NGAYDANG_DT='$day' where ID_DT='$id_dt'";
}


$result = $con->query($sql);
header("location: ../diemtin/diemtin.php");
$con->close();
