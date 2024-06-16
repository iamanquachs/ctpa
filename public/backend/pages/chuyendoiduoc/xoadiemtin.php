<?php
// Kết nối Database
include '../../connectsql.php';

$id_dt = $_GET['id_dt'];
$sql = "DELETE FROM chuyendoicongchung WHERE ID_DT='$id_dt'";
//echo $sql;
$con->query($sql);
header("location: ../chuyendoiduoc/diemtinchuyendoiduoc.php");
//dong ket noi
$con->close();
