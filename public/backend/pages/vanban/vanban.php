<?php
require('../views/header.php')
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
            <form action="themvanban.php" method="POST" enctype="multipart/form-data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Thêm văn bản</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tiêu đề văn bản</th>
                    <td><input style="width: 100%;" type="text" name="tieude_vb" value=""></td>
                  </tr>
                  <tr>
                    <th>Chuyên mục văn bản</th>
                    <td><select name="cm_vb" id="cm_vb">

                  <?php
                  include '../../connectsql.php';
                  $sql = "SELECT * FROM chuyenmucvanban";
                  echo $sql; 
                  $result = $con->query($sql);
                  $stt = 0;
                  while ($row = $result->fetch_assoc()) {
                  $stt = $stt + 1;
                  echo "<option value='" . $row['ID_CHUYENMUC_VB'] . "'>" . $row['TEN_CHUYENMUC_VB'] . " </option><br>";
                  }
                  $con->close();

                  ?>
                  </select></td>
                   </tr>
                  <tr>
                    <th>Nội dung văn bản</th>
                    <td><textarea id="nd_vb" name="nd_vb" rows="8" cols="40"></textarea>
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
                        var editor = CKEDITOR.replace('nd_vb');
                        CKFinder.setupCKEditor(editor);
                      </script>
                    </td>
                  </tr>
                  <tr>
                    <th>File văn bản</th>
                    <td><input type="file" name="file_vb" value=""></td>
                  </tr>
                  <tr style="display: none;">
                    <th>Hình ảnh văn bản</th>
                    <td><input type="file" name="anh_vb" value=""></td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="btn btn-primary btn-fw" style="float:right;margin-top: 10px">Thêm</button>

            </form>




          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> STT </th>
                <th> Tên chuyên mục văn bản </th>
                <th> Tiêu đề văn bản</th>

                <th> File văn bản</th>
                <!-- <th> Hình ảnh văn bản</th> -->
                <th> Ngày đăng văn bản</th>
                <th> Chức năng</th>
                <th></th>
              </tr>
            </thead>
            <tbody>


              <?php


              include '../../connectsql.php';
              $sql = "SELECT * FROM vanban INNER JOIN chuyenmucvanban on vanban.ID_CHUYENMUC_VB=chuyenmucvanban.ID_CHUYENMUC_VB";
              //echo $sql; 
              $result = $con->query($sql);

              //  <td ><img style='width:100px;height:auto;' src='../../../upload" . $row['HINHANH_VB'] . "'></td>
              $stt = 0;
              while ($row = $result->fetch_assoc()) {
                $stt = $stt + 1;
                echo "<tr>
                               <td >" . $stt . " </td>
                               <td >" . $row['TEN_CHUYENMUC_VB'] . "</td>
                               <td >" . $row['TIEUDE_VB'] . "</td>
                               
                               <td >" . $row['FILE_VB'] . "</td>
                               <td style='width:100px'>" . date('d/m/Y', strtotime($row['NGAYDANG_VB'])) . "</td>
                               <td ><a href='suavanban.php?id_vb=" . $row['ID_VB'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                               <td ><a href='xoavanban.php?id_vb=" . $row['ID_VB'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
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
include('../views/footer.php')
?>