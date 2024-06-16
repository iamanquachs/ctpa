<?php
require('../views/header.php')
?>
<?php
include '../../connectsql.php';
$id_dt = $_GET['id_dt'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM chuyendoicongchung where ID_DT='$id_dt'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$tieude = $row['TIEUDE_DT'];
$noidung = $row['NOIDUNG_DT'];
$hinhanh = $row['HINHANH_DT'];
$_SESSION['id_dt'] = $id_dt;

?>
<div class="main-panel">
    <div class="content-wrapper content-cap">
        <div class="page-header">
            <h3 class="page-title">CHUYỂN ĐỔI SỐ CÔNG CHỨNG</h3>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="capnhatdt.php" method="POST" enctype='multipart/form-data'>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th style="font-size:18px; text-align: left;">Sửa tin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Tiêu đề tin</th>
                                        <td><input style="width: 100%;" tyle='text' value="<?= $tieude ?>" name='tieudediemtin'></td>
                                    </tr>
                                    <tr>
                                        <th>Nội dung điểm tin</th>
                                        <td><textarea id='nddt' name='nddt' rows='8' cols='40' value=""><?= $noidung ?></textarea>
                                            <script>
                                                CKEDITOR.config.pasteFromWordPromptCleanup = true;
                                                CKEDITOR.config.pasteFromWordRemoveFontStyles = false;
                                                CKEDITOR.config.pasteFromWordRemoveStyles = false;
                                                CKEDITOR.config.language = 'Vi';
                                                CKEDITOR.config.htmlEncodeOutput = false;
                                                CKEDITOR.config.ProcessHTMLEntities = false;
                                                CKEDITOR.config.entities = false;
                                                CKEDITOR.config.entities_latin = false;
                                                CKEDITOR.config.ForceSimpleAmpersand = true;
                                                var editor = CKEDITOR.replace('nddt');
                                                CKFinder.setupCKEditor(editor);
                                            </script>

                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Hình ảnh điểm tin</th>
                                        <td><input type='file' name='hinhanhdt' value="<?php echo $row['HINHANH_DT'] ?>">

                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary btn-fw" style="float:right;" name="iddt" value='<?php echo $id_dt ?>'>Cập nhật</button>
                            <button type="submit" href="../backend/pages/chuyendoiduoc/diemtinchuyendoiduoc.php" class="btn btn-warning btn-fw" style="float:right;margin-right: 10px;">Trở về</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('../views/footer.php')
?>