<?php
session_start();


include '../../connectsql.php';

$id_pl = $_POST['id_pl'];
$tieude_pl = $_POST['tieude_pl'];
$nd_pl = $_POST['nd_pl'];
echo $_FILES['file_pl']['name'];

if (!empty($_FILES['file_pl']['name'])) {

    $duoi = explode('.', $_FILES['file_pl']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    $phapluat_img = md5($_FILES['file_pl']['name']) . '.' . $duoi;
    $duongdan = '../../../upload/vanbanhiephoi/' . $phapluat_img;
    $duongdan1 = '/vanbanhiephoi/' . $phapluat_img;

    $sql = "UPDATE vanbanhiephoi SET TIEUDE_PL='$tieude_pl',NOIDUNG_PL='$nd_pl',NGAYDANG_PL=CURRENT_DATE, FILE_PL='$duongdan1' where ID_PL='$id_pl'";
    move_uploaded_file($_FILES['file_pl']['tmp_name'], $duongdan);
    echo $sql;
} else {
    $sql = "UPDATE vanbanhiephoi SET TIEUDE_PL='$tieude_pl',NOIDUNG_PL='$nd_pl',NGAYDANG_PL=CURRENT_DATE where ID_PL='$id_pl'";
    echo $sql;
    $result = $con->query($sql);
}



$result = $con->query($sql);
header("location: ../vanbanhiephoi/phapluat.php");
$con->close();
