<?php
session_start();

include '../../connectsql.php';
include "../../assets/phpqrcode2/qrlib.php";

$ngaydaotao = $_POST['ngaydaotao'];
if (!file_exists('../../../upload/' . $ngaydaotao)) {
    mkdir('../../../upload/' . $ngaydaotao, 0755, true);
    mkdir('../../../upload/' . $ngaydaotao . '.zip', 0755, true);
    $sql_post = "INSERT INTO `hocvien`
        (`id_hocvien`, `ten_hocvien`, `ngaydaotao`, `ngaysinh`, `soCCCD`, `ngaycapCCCD`, `noicapCCCD`, `email`, `diachi`, `sodienthoai`, `vbcm`, `soCCHND`, `ngaycapCCHND`)
        SELECT soct,hoten, ngaydaotao, namsinh, cccd, ngaycap, noicap, email, diachinhanchungchi, dienthoai, vanbangchuyenmon, sochungchihanhnghe, ngaycapchungchihanhnghe
        FROM dangky_daotao where ngaydaotao='$ngaydaotao' and ketquathi=1 and checked=1
        ";
    $sql = "SELECT * FROM dangky_daotao where ngaydaotao='$ngaydaotao' and checked=1 and ketquathi=1";

    $con->query($sql_post);
    $result = $con->query($sql);
    try {
        while ($row = $result->fetch_assoc()) {
            $content =  "https://ctpa.vn/chi-tiet-gxn/" . $row['soct'];
            $duongdanfileqr = '../../../upload/' . $ngaydaotao . '/' . $row['soct'] . '.png';
            QRcode::png($content, $duongdanfileqr, 400, 400);
        }
    } catch (Throwable $th) {
        echo 'Error generating QR code: ' . $th->getMessage();
    }
}
$folderPath = '../../../upload/2024-08-03'; // Đường dẫn để lưu tệp ZIP


$zip = new ZipArchive();
$zipFilePath = '../../../upload/' . $ngaydaotao . '.zip'; // Đường dẫn để lưu tệp ZIP

if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) {
    die('Could not create ZIP file');
}

// Đường dẫn thư mục cần nén
$dir = new RecursiveDirectoryIterator($folderPath);
$files = new RecursiveIteratorIterator($dir);
foreach ($files as $file) {
    // Lấy đường dẫn tệp gốc
    $filePath = $file->getRealPath();

    if (!$file->isDir()) {
        // Thêm tệp vào tệp ZIP với đường dẫn tương đối
        $relativePath = substr($filePath, strlen($folderPath) + 1);
        $zip->addFile($filePath, $relativePath);
    }
}
$zip->close();

// Gọi hàm để tạo tệp ZIP từ thư mục và nhận lại đường dẫn của tệp ZIP
if (file_exists($zipFilePath)) {
    // Thiết lập các tiêu đề để xác định loại tệp
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($zipFilePath) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($zipFilePath));
    readfile($zipFilePath); // Đọc và gửi tệp về cho người dùng
    exit;
} else {
    // Nếu tệp không tồn tại, trả về lỗi 404
    header("HTTP/1.0 404 Not Found");
    exit;
}
// header("location: ../hocvien/xuat_file_qr.php");

// $con->close();
