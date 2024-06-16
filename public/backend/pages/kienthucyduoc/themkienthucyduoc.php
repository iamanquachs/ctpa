<?php
session_start();

$tieudektyd = $_POST['tieudektyd'];
$ndktyd = $_POST['ndktyd'];

$duoi = explode('.', $_FILES['hinhanhktyd']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$hinhanh_name = md5($_FILES['hinhanhktyd']['name']) . '.' . $duoi;

$duongdan = '../../../upload/kienthucyduoc/' . $hinhanh_name;
$duongdan1 = '/kienthucyduoc/' . $hinhanh_name;
move_uploaded_file($_FILES['hinhanhktyd']['tmp_name'], $duongdan);

$day = date("y-m-d");


//Tao ket nôi
include '../../connectsql.php';
$id_admin = $_SESSION["id_admin"];
//echo $tieudediemtin, $cmdt, $nddt, $day, $id_admin;
//Viet cau truy van Sql
$sql = "INSERT INTO kienthucyduoc ( ID_ADMIN, TIEUDE_KTYD, NOIDUNG_KTYD, HINHANH_KTYD, NGAYDANG_KTYD) VALUES ('$id_admin','$tieudektyd','$ndktyd','$duongdan1','$day')";

$con->query($sql);
$sql_email = "SELECT email FROM khach";
$result = $con->query($sql_email);

require 'phpmailer/PHPMailerAutoload.php';
while ($row = $result->fetch_assoc()) {
    // $email = $row['email'];
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'info.tpsoft@gmail.com';
    $mail->Password = 'vxhasubnzdsbvqkg';
    $mail->setFrom('hoiduochoccantho@gmail.com', 'HỘI DƯỢC HỌC TP.CẦN THƠ');
    $mail->isHTML(true);
    $mail->addReplyTo('hoiduochoccantho@gmail.com');
    $mail->CharSet = 'UTF-8';
    $mail->addAddress("quachtanan1806@gmail.com");
    $mail->Subject = 'Kiến thức Y Dược';
    $content = <<<EOF
    <html>
    <body>
    <div style="text-align:center">
    </div>
    <h3>Kiến thức y dược</h3>
    <h3>Tiêu đề: $tieudektyd</h3>
    <h3>Nội dung: $ndktyd</h3>
    </div>
    </body>
    </html>
    EOF;
    $header = "From: hoiduochoccantho@gmail.com \r\n";
    $header .= "Content-type:text/html; charset=utf-8 \r\n";
    $mail->Body = $content;
    $mail->send();
}


header("location: ../kienthucyduoc/kienthucyduoc.php");

//xu ly ket qua

//dong ket noi
$con->close();
