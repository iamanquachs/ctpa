<?php
require('../views/header.php')
?>
<?php
include '../../connectsql.php';
$id_pl = $_GET['id_pl'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM vanbanhiephoi where ID_PL='$id_pl'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$_SESSION['id_pl'] = $id_pl;
?>


<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> VĂN BẢN CỦA HIỆP HỘI </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="capnhatpl.php" method="POST" enctype='multipart/form-data'>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;">Sửa văn bản</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tiêu đề văn bản</th>
                    <td><input style="width: 100%;" style='text' value='<?php echo $row['TIEUDE_PL']; ?>' name='tieude_pl'> </td>
                  </tr>
                  <tr>
                    <th>Nội dung văn bản</th>
                    <td>
                      <textarea id='nd_pl' name='nd_pl' rows='8' cols='40' value=""><?php echo $row['NOIDUNG_PL']; ?></textarea>
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
                        var editor = CKEDITOR.replace('nd_pl');
                        CKFinder.setupCKEditor(editor);
                      </script>

                    </td>
                  </tr>
                  <tr>
                    <th>Hình ảnh pháp luật</th>
                    <td><input type='file' name='file_pl' value="<?php echo $row['FILE_PL'] ?>"> </td>
                  </tr>
                </tbody>
              </table>

              <td><button type='submit' class='btn btn-primary btn-fw' style='float:right;' name='id_pl' value='<?php echo $id_pl ?>'>Cập nhật</button> </td>
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