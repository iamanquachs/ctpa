<?php
require('../views/header.php')
?>
<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title">VĂN BẢN CỦA HIỆP HỘI</h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="themphapluat.php" method="POST" enctype="multipart/form-data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;">Thêm văn bản</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tiêu đề văn bản</th>
                    <td><input style="width: 100%;" type="text" name="tieude_pl" value=""></td>
                  </tr>
                  <tr>
                    <th>Nội dung văn bản</th>
                    <td><textarea id="nd_pl" name="nd_pl" rows="8" cols="40"></textarea>
                      <script>
                        CKEDITOR.config.pasteFromWordPromptCleanup = true;
                        CKEDITOR.config.pasteFromWordRemoveFontStyles = false;
                        CKEDITOR.config.pasteFromWordRemoveStyles = false;
                        CKEDITOR.config.language = "Vi";
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
                    <th>File văn bản</th>
                    <td><input type="file" name="file_pl" value=""></td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="btn btn-primary btn-fw" style="float:right;">Thêm</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>


    <div class="card">
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> STT </th>
                <th> Tiêu đề </th>
                <th> File</th>
                <th> Ngày đăng</th>
                <th>Chức năng</th>
                <th></th>
              </tr>
            </thead>
            <tbody>


              <?php

              include '../../connectsql.php';

              $sql = "SELECT * FROM vanbanhiephoi";
              //echo $sql; 
              $result = $con->query($sql);

              $stt = 0;
              while ($row = $result->fetch_assoc()) {
                $stt = $stt + 1;
                echo "<tr>
                               <td >" . $stt . " </td>
                               <td >" . $row['TIEUDE_PL'] . "</td>
                               <td >" . $row['FILE_PL'] . "</td>
                               <td >" . $row['NGAYDANG_PL'] . "</td>
                               <td ><a href='suaphapluat.php?id_pl=" . $row['ID_PL'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                               <td ><a href='xoaphapluat.php?id_pl=" . $row['ID_PL'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
                               </tr>";
              }
              echo "</tbody></table>";
              $con->close();

              ?>

        </div>
      </div>
    </div>

  </div>
</div>
<?php
require('../views/footer.php')
?>