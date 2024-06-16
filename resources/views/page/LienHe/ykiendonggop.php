<?php

$HOTEN_YKDG = $_POST['HOTEN_YKDG'];
$chude_YKDG = $_POST['chude_YKDG'];
$EMAIL_YKDG = $_POST['EMAIL_YKDG'];
$SDT_YKDG = $_POST['SDT_YKDG'];
$NOIDUNG_YKDG = $_POST['NOIDUNG_YKDG'];
$TIEUDE_YKDG = $_POST['TIEUDE_YKDG'];

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'info.tpsoft@gmail.com';
$mail->Password = 'vxhasubnzdsbvqkg';
$mail->setFrom($EMAIL_YKDG, $HOTEN_YKDG);
$mail->isHTML(true);
$mail->addReplyTo($EMAIL_YKDG);
$mail->CharSet = 'UTF-8';
$mail->addAddress("quachtanan1806@gmail.com");
$mail->Subject = 'Hỏi và đáp';
$content = <<<EOF
    <html>
    <body>
    <div style="text-align:center">
    </div>
    <h3>Gửi câu hỏi</h3>
    <h3>Họ tên: $HOTEN_YKDG</h3>
    <h3>Số điện thoại: $SDT_YKDG</h3>
    <h3>Email: $EMAIL_YKDG</h3>
    <h3>Chủ đề: $chude_YKDG</h3>
    <h3>Tiêu đề: $TIEUDE_YKDG</h3>
    <div>
    <h3>Nội dung:</h3>
    <p style='font-size:16px'>$NOIDUNG_YKDG</p>
    </div>
    </div>
    </body>
    </html>
    EOF;
$header = "From: hoiduochoccantho@gmail.com \r\n";
$header .= "Content-type:text/html; charset=utf-8 \r\n";
$mail->Body = $content;
$mail->send();


//dong ket noi
header('Location: https://localhost/HoiDuocHocCT/lien-he');

exit;
