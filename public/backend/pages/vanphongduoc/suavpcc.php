<?php
require('../views/header.php')
?>
<?php
// Kết nối Database
include '../../connectsql.php';
$id_vpcc = $_GET['id_vpcc'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM vanphongcongchung where ID_VPCC='$id_vpcc'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$TEN_VPCC = $row['TEN_VPCC'];
?>




<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> VĂN PHÒNG DƯỢC</h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="capnhatvpcc.php" method="POST" enctype="multipart/form-data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Sửa văn phòng dược</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tên văn phòng dược</th>
                    <td><input style="width: 100%;" type='text' value='<?php echo $row['TEN_VPCC']; ?>' name='ten_vpcc'> </td>
                  </tr>

                  <tr>
                    <th>Thông tin văn phòng dược</th>
                    <td><textarea id='tt_vpcc' name='tt_vpcc' rows='8' cols='40' value=""><?php echo $row['THONGTIN_VPCC'] ?></textarea>
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
                        var editor = CKEDITOR.replace('tt_vpcc');
                        CKFinder.setupCKEditor(editor);
                      </script>

                    </td>
                  </tr>

                  <tr>
                    <th>Ngày thành lập</th>
                    <td><input type='date' name='ngay_tl' value='<?php echo $row['NGAYTHANHLAP_VPCC'];  ?>'> </td>
                  </tr>
                  <tr>
                    <th>Hình ảnh văn phòng dược</th>
                    <td><input type='file' name='file_vpcc' value=''> </td>
                  </tr>
                </tbody>
              </table>

              <td><button type='submit' class='btn btn-primary btn-fw' style='float:right;' name='id_vpcc' value='<?php echo $id_vpcc ?>'>Cập nhật</button>
                <button type="submit" href="../backend/pages/vanphongduoc/vanphongduoc.php" class="btn btn-warning btn-fw" style="float:right;margin-right: 10px;">Trở về</button>
              </td>
              <!-- <td> <input type='submit' class='btn btn-primary btn-sm btn-block btn-success' value='Cập nhật' name="iddt"></td> -->
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