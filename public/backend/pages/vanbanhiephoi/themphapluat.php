<?php
$tieude_pl = $_POST['tieude_pl'];
$cm_pl = $_POST['cm_pl'];
$nd_pl = $_POST['nd_pl'];
$duoi = explode('.', $_FILES['file_pl']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$phapluat_img = md5($_FILES['file_pl']['name']) . '.' . $duoi;
$duongdan = '../../../upload/vanbanhiephoi/' . $phapluat_img;
$duongdan1 = '/vanbanhiephoi/' . $phapluat_img;
move_uploaded_file($_FILES['file_pl']['tmp_name'], $duongdan);

include '../../connectsql.php';
//Viet cau truy van Sql
$sql = "INSERT INTO vanbanhiephoi( TIEUDE_PL, NOIDUNG_PL, FILE_PL, NGAYDANG_PL) VALUES ('$tieude_pl','$nd_pl','$duongdan1',CURRENT_DATE)";
$result = $con->query($sql);

header("Location: ../vanbanhiephoi/phapluat.php");

$con->close();
