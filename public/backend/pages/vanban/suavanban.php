<?php
require('../views/header.php')
?>
<?php
include '../../connectsql.php';
$id_vb = $_GET['id_vb'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM vanban join chuyenmucvanban on vanban.ID_CHUYENMUC_VB=chuyenmucvanban.ID_CHUYENMUC_VB and ID_VB='$id_vb'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$TEN_CHUYENMUC_VB = $row['TEN_CHUYENMUC_VB'];
$_SESSION['id_vb'] = $id_vb;
?>



<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> VĂN BẢN </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="capnhatvb.php" method="POST" enctype="multipart/form-data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Sửa văn bản</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tiêu đề văn bản</th>
                    <td><input tyle='text' value='<?php echo $row['TIEUDE_VB'] ?>' name='tieude_vb'> </td>
                  </tr>
                  <tr>
                    <th>Chuyên mục văn bản</th>
                    <td><select name='cm_vb' id='cm_vb' value=<?php echo $row["ID_CHUYENMUC_VB"]; ?>>
                        <?php
                        $sql = "SELECT * FROM chuyenmucvanban";
                        $result = $con->query($sql);

                        while ($row2 = $result->fetch_assoc()) {
                          if ($row["ID_CHUYENMUC_VB"] == $row2['ID_CHUYENMUC_VB']) {
                            echo "<option value='" . $row2['ID_CHUYENMUC_VB'] . "' selected>" . $row2['TEN_CHUYENMUC_VB'] . " </option><br>";
                          } else {
                            echo "<option value='" . $row2['ID_CHUYENMUC_VB'] . "'>" . $row2['TEN_CHUYENMUC_VB'] . " </option><br>";
                          }
                        }
                        ?>
                      </select></td>
                  </tr>
                  <tr>
                    <th>Nội dung văn bản</th>
                    <td><textarea id='nd_vb' name='nd_vb' rows='8' cols='40' value=""><?php echo $row['NOIDUNG_VB']; ?></textarea>
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
                        var editor = CKEDITOR.replace('nd_vb');
                        CKFinder.setupCKEditor(editor);
                      </script>

                    </td>
                    </td>
                  </tr>
                  <tr>
                    <th>File văn bản</th>
                    <td><input style="width: 100%;" type='file' name='file_vb' value=''> </td>
                  </tr>
                  <tr>
                    <th>Hình ảnh văn bản</th>
                    <td><input type='file' name='anh_vb' value=''> </td>
                  </tr>
                </tbody>
              </table>

              <td><button type='submit' class='btn btn-primary btn-fw' style='float:right;' name='id_vb' value='<?php echo $id_vb ?>'>Cập nhật</button>
                <button type="submit" href="../backend/pages/vanban/vanban.php" class="btn btn-warning btn-fw" style="float:right;margin-right: 10px;">Trở về</button>
              </td>
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