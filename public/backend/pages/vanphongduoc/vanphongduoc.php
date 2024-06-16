<?php
require('../views/header.php')
?>


<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> VĂN PHÒNG DƯỢC HỌC </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="themvpcc.php" method="POST" enctype="multipart/form-data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Thêm văn phòng dược</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tên văn phòng dược</th>
                    <td><input style="width: 100%;" type="text" name="ten_vpcc" value=""></td>
                  </tr>
                  <tr>

                  <tr>
                    <th>Thông tin văn phòng dược</th>
                    <td><textarea id="tt_vpcc" name="tt_vpcc" rows="8" cols="40"></textarea>
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
                        var editor = CKEDITOR.replace('tt_vpcc');
                        CKFinder.setupCKEditor(editor);
                      </script>
                    </td>
                  </tr>

                  <tr>
                    <th>Ngày thành lập</th>
                    <td><input type="date" name="ngay_tl" value=""></td>
                  </tr>
                  <tr>
                    <th>Hình ảnh văn phòng dược</th>
                    <td><input type="file" name="anh_vpcc" value=""></td>
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
                <th> Tên văn phòng dược </th>
                <th> Hình ảnh văn phòng dược</th>
                <th> Thông tin văn phòng dược</th>
                <th> Ngày thành lập</th>
                <th> Sửa</th>
                <th> Xóa</th>
                <th></th>
              </tr>
            </thead>
            <tbody>


              <?php

              include '../../connectsql.php';

              $sql = "SELECT * FROM vanphongcongchung ";
              $result = $con->query($sql);

              $stt = 0;
              while ($row = $result->fetch_assoc()) {
                $stt = $stt + 1;
                echo "<tr>
                               <td >" . $stt . " </td>
                               <td >" . $row['TEN_VPCC'] . "</td>
                               <td ><img style='width:100px; height:auto' src='../../../upload" . $row['ANH_VPCC'] . "'></td>
                               <td >" . $row['THONGTIN_VPCC'] . "</td>
                               <td style='width:100px'>" . date('d/m/Y', strtotime($row['NGAYTHANHLAP_VPCC'])) . "</td>
                               <td ><a href='suavpcc.php?id_vpcc=" . $row['ID_VPCC'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                               <td ><a href='xoavpcc.php?id_vpcc=" . $row['ID_VPCC'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
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