<?php
session_start();
include '../../connectsql.php';
$id_bmccv = $_POST['id_bmccv'];
$id_admin = $_SESSION["id_admin"];
$ten_bmccv = $_POST['ten_bmccv'];
$day = date("y-m-d");

//echo $day;
if (!empty($_FILES['file_bmccv']['name'])) {
    $duoi = explode('.', $_FILES['file_bmccv']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    $bieumauccv = md5($_FILES['file_bmccv']['name']) . '.' . $duoi;

    $duongdan = '../../../upload/bieumauccv/' . $bieumauccv;
    $duongdan1 = '/bieumauccv/' . $bieumauccv;

    $sql = "UPDATE bieumauccv SET  ID_BMCCV='$id_bmccv',ID_ADMIN='$id_admin', TEN_BMCCV='$ten_bmccv', FILE_BMCCV='$duongdan1', NGAYDANG_BMCCV='$day' where ID_BMCCV='$id_bmccv'";
    move_uploaded_file($_FILES['file_bmccv']['tmp_name'], $duongdan);
    echo $sql;

    $result = $con->query($sql);
} else {
    $sql = "UPDATE bieumauccv SET  ID_BMCCV='$id_bmccv',ID_ADMIN='$id_admin', TEN_BMCCV='$ten_bmccv', NGAYDANG_BMCCV='$day' where ID_BMCCV='$id_bmccv'";
    echo $sql;
    $result = $con->query($sql);
}


header("location: ../bieumau/bieumau.php");
$con->close();
