<?php

session_start();
// Kết nối Database
include '../../connectsql.php';

$id_ktyd = $_GET['id_ktyd'];
//$email=$_SESSION['email'];
$sql = "DELETE FROM kienthucyduoc WHERE ID_KTYD='$id_ktyd'";
//echo $sql;
$result = $con->query($sql);
if ($result == TRUE) {

    header("location: ../kienthucyduoc/kienthucyduoc.php");
} else {
    echo "Error updating record: " . $con->error;
}
//dong ket noi
$con->close();
