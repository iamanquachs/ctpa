<?php
require('../views/header.php')
?>
<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> PHÁP LUẬT </h3>
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
                    <th style="font-size:18px; text-align: left;">Thêm pháp luật</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tiêu đề pháp luật</th>
                    <td><input style="width: 100%;" type="text" name="tieude_pl" value=""></td>
                  </tr>

                  <tr>
                    <th>Nội dung pháp luật</th>
                    <td><textarea id="nd_pl" name="nd_pl" rows="8" cols="40"></textarea>
                      <script>
                        //config={};
                        //config.entities_latin=false;
                        //config.language="Vi";
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
                    <th>File pháp luật</th>
                    <td><input type="file" name="file_pl" value=""></td>
                  </tr>
                  <tr>
                    <th>Ngày hiệu lực</th>
                    <td><input type="date" name="ngayhieuluc_pl" value=""></td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="btn btn-primary btn-fw" style="float:right;margin-top: 10px">Thêm</button>

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
                <th> File pháp luật</th>
                <th> Ngày hiệu lực</th>
                <th> Ngày đăng pháp luật</th>
                <th> Sửa</th>
                <th> Xóa</th>
                <th></th>
              </tr>
            </thead>
            <tbody>


              <?php

              include '../../connectsql.php';

              $sql = "SELECT * FROM phapluat";
              //echo $sql; 
              $result = $con->query($sql);

              $stt = 0;
              while ($row = $result->fetch_assoc()) {
                $stt = $stt + 1;
                echo "<tr>
                               <td >" . $stt . " </td>
                               <td >" . $row['TIEUDE_PL'] . "</td>
                               <td >" . $row['FILE_PL'] . "</td>
                               <td >" . date('d/m/Y', strtotime($row['NGAY_HIEULUC'])) . "</td>
                               <td >" . date('d/m/Y', strtotime($row['NGAYDANG_PL'])) . "</td>
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
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<?php
require('../views/footer.php')
?>