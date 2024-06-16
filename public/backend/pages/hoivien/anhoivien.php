<?php

session_start();
// Kết nối Database
include '../../connectsql.php';

$id_hv = $_GET['id_hv'];
//$email=$_SESSION['email'];
$sql_load = "SELECT trangthai from hoivien where ID_HV='$id_hv'";
$result = $con->query($sql_load);
while ($row = $result->fetch_assoc()) {
if($row['trangthai'] == 0){
    $sql = "UPDATE hoivien set trangthai='1' where ID_HV='$id_hv'";
}else{
    $sql = "UPDATE hoivien set trangthai='0' where ID_HV='$id_hv'";
}}
//echo $sql;
$result = $con->query($sql);
if ($result == TRUE) {

    header("location: ../hoivien/danhsachhoivien.php");
} else {
    echo "Error updating record: " . $con->error;
}
//dong ket noi
$con->close();
