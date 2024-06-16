<?php
session_start();

include '../../connectsql.php';
$id_vb = $_POST['id_vb'];
$cm_vb = $_POST['cm_vb'];
$nd_vb = $_POST['nd_vb'];
$tieude_vb = $_POST['tieude_vb'];
$id_admin = $_SESSION["id_admin"];

$day = date("y-m-d");
echo $_FILES['file_vb']['name'];

if (!empty($_FILES['file_vb']['name'])) {

    if (!empty($_FILES['anh_vb']['name'])) {
        $duoi = explode('.', $_FILES['file_vb']['name']); // tách chuỗi khi gặp dấu .
        $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
        $file_vb = md5($_FILES['file_vb']['name']) . '.' . $duoi;


        $duongdan = '../../../upload/vanban/' . $file_vb;
        $duongdan1 = '/vanban/' . $file_vb;
        move_uploaded_file($_FILES['file_vb']['tmp_name'], $duongdan);


        $duoi = explode('.', $_FILES['anh_vb']['name']); // tách chuỗi khi gặp dấu .
        $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
        $anh_vb = md5($_FILES['anh_vb']['name']) . '.' . $duoi;

        $duongdan2 = '../../../upload/vanban/' . $anh_vb;
        $duongdan2_1 = '/vanban/' . $anh_vb;
        move_uploaded_file($_FILES['anh_vb']['tmp_name'], $duongdan2);


        $sql = "UPDATE vanban SET ID_ADMIN='$id_admin', ID_CHUYENMUC_VB='$cm_vb',TIEUDE_VB='$tieude_vb',NOIDUNG_VB='$nd_vb',NGAYDANG_VB='$day', FILE_VB='$duongdan1',HINHANH_VB='$duongdan2_1' where ID_VB='$id_vb'";
        move_uploaded_file($_FILES['file_vb']['tmp_name'], $duongdan);
        move_uploaded_file($_FILES['anh_vb']['tmp_name'], $duongdan);
        echo $sql;
    } else {
        $duoi = explode('.', $_FILES['file_vb']['name']); // tách chuỗi khi gặp dấu .
        $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
        $file_vb = md5($_FILES['file_vb']['name']) . '.' . $duoi;


        $duongdan = '../../../upload/vanban/' . $file_vb;
        $duongdan1 = '/vanban/' . $file_vb;
        move_uploaded_file($_FILES['file_vb']['tmp_name'], $duongdan);

        $sql = "UPDATE vanban SET ID_ADMIN='$id_admin', ID_CHUYENMUC_VB='$cm_vb',TIEUDE_VB='$tieude_vb',NOIDUNG_VB='$nd_vb',NGAYDANG_VB='$day', FILE_VB='$duongdan1' where ID_VB='$id_vb'";
        echo $sql;
    }
} else {

    if (!empty($_FILES['anh_vb']['name'])) {


        $duoi = explode('.', $_FILES['anh_vb']['name']); // tách chuỗi khi gặp dấu .
        $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
        $anh_vb = md5($_FILES['anh_vb']['name']) . '.' . $duoi;

        $duongdan2 = '../../../upload/vanban/' . $anh_vb;
        $duongdan2_1 = '/vanban/' . $anh_vb;
        move_uploaded_file($_FILES['anh_vb']['tmp_name'], $duongdan2);
        $sql = "UPDATE vanban SET ID_ADMIN='$id_admin', ID_CHUYENMUC_VB='$cm_vb',TIEUDE_VB='$tieude_vb',NOIDUNG_VB='$nd_vb',NGAYDANG_VB='$day', HINHANH_VB='$duongdan2_1' where ID_VB='$id_vb'";
        echo $sql;
    } else {


        $sql = "UPDATE vanban SET ID_ADMIN='$id_admin', ID_CHUYENMUC_VB='$cm_vb',TIEUDE_VB='$tieude_vb',NOIDUNG_VB='$nd_vb',NGAYDANG_VB='$day' where ID_VB='$id_vb'";
        echo $sql;
    }
}



$result = $con->query($sql);
header("location: ../vanban/vanban.php");
$con->close();
