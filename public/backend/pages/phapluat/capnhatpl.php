<?php
session_start();


include '../../connectsql.php';

$id_pl = $_POST['id_pl'];
$cm_pl = $_POST['cm_pl'];
$tieude_pl = $_POST['tieude_pl'];
$id_admin = $_SESSION["id_admin"];
$nd_pl = $_POST['nd_pl'];
$ngayhieuluc = $_POST['ngayhieuluc_pl'];

$day = date("y-m-d");
echo $_FILES['file_pl']['name'];

if (!empty($_FILES['file_pl']['name'])) {

    $duoi = explode('.', $_FILES['file_pl']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    $phapluat_img = md5($_FILES['file_pl']['name']) . '.' . $duoi;
    $duongdan = '../../../upload/phapluat/' . $phapluat_img;
    $duongdan1 = '/phapluat/' . $phapluat_img;

    $sql = "UPDATE phapluat SET ID_ADMIN='$id_admin', ID_CHUYENMUC_PL='$cm_pl',TIEUDE_PL='$tieude_pl',NOIDUNG_PL='$nd_pl',NGAYDANG_PL=CURRENT_DATE, FILE_PL='$duongdan1',NGAY_HIEULUC = '$ngayhieuluc' where ID_PL='$id_pl'";
    move_uploaded_file($_FILES['file_pl']['tmp_name'], $duongdan);
} else {
    $sql = "UPDATE phapluat SET ID_ADMIN='$id_admin', ID_CHUYENMUC_PL='$cm_pl',TIEUDE_PL='$tieude_pl',NOIDUNG_PL='$nd_pl',NGAYDANG_PL=CURRENT_DATE,NGAY_HIEULUC='$ngayhieuluc' where ID_PL='$id_pl'";
}
$result = $con->query($sql);
header("location: ../phapluat/phapluat.php");
$con->close();
