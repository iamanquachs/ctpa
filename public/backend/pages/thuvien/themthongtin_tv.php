<?php

session_start();
$cmtv = $_POST['cmtv'];
echo $cmtv;
$id_admin = $_SESSION["id_admin"];
echo $id_admin;

if (isset($_POST['submit']) && isset($_FILES['my_file'])) {

    include '../../connectsql.php';
    //echo "<pre>";
    //print_r($_FILES['my_file']);
    $video_name = $_FILES['my_file']['name'];
    $tmp_name = $_FILES['my_file']['tmp_name'];
    $error = $_FILES['my_file']['error'];

    if ($error == 0) {
        $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
        $video_ex_lc = strtolower($video_ex);
        $allowed_exs = array("mp4", "webm", "avi", "flv");
        if (in_array($video_ex_lc, $allowed_exs)) {
            $duoi = explode('.', $_FILES['my_file']['name']); // tách chuỗi khi gặp dấu .
            $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
            $thuvien_img = md5($_FILES['my_file']['name']) . '.' . $duoi;


            $duongdan = '../../../upload/thuvien/' . $thuvien_img;
            $duongdan1 = '/thuvien/' . $thuvien_img;
            move_uploaded_file($_FILES['my_file']['tmp_name'], $duongdan);

            //now let's Inser the video path into database

            $sql = "INSERT INTO thuvien ( ID_CHUYENMUC_TV, ID_ADMIN,FILE_TV) VALUES ('$cmtv','$id_admin','$duongdan1')";

            echo $sql;
            $result = $con->query($sql);
        } else {
            $duoi = explode('.', $_FILES['my_file']['name']); // tách chuỗi khi gặp dấu .
            $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
            $thuvien_img = md5($_FILES['my_file']['name']) . '.' . $duoi;

            $duongdan = '../../../upload/thuvien/' . $thuvien_img;
            $duongdan1 = '/thuvien/' . $thuvien_img;
            move_uploaded_file($_FILES['my_file']['tmp_name'], $duongdan);


            //Viet cau truy van Sql
            $sql = "INSERT INTO thuvien ( ID_CHUYENMUC_TV, ID_ADMIN,FILE_TV) VALUES ('$cmtv','$id_admin','$duongdan1')";

            echo $sql;
            $result = $con->query($sql);
        }
    }
} else {
    header("location: ../thuvien/thuvien.php");
}

$con->close();
header("location: ../thuvien/thuvien.php");
