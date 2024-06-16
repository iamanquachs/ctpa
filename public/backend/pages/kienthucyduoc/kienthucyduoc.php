<?php
require('../views/header.php')
?>

<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> KIẾN THỨC Y DƯỢC </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="themkienthucyduoc.php" method="POST" enctype="multipart/form-data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Thêm kiến thức y dược</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tiêu đề kiến thức y dược</th>
                    <td><input style="width: 100%;border-radius:5px;padding:5px" type="text" name="tieudektyd" value=""></td>
                  </tr>

                  <tr>
                    <th>Nội dung kiến thức y dược</th>
                    <td><textarea id="ndktyd" name="ndktyd" rows="8" cols="40"></textarea>
                      <script>
                        var editor = CKEDITOR.replace('ndktyd');
                        // CKEDITOR.config.extraPlugins = 'image2';
                      </script>
                    </td>
                  </tr>
                  <tr>
                    <th>Hình ảnh kiến thức y dược</th>
                    <td><input type="file" name="hinhanhktyd" value=""></td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" id="btn_add" onclick="open_load()" class="btn btn-primary btn-fw" style="float:right;margin-top: 10px">Thêm</button>

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
                <th> Tiêu đề kiến thức y dược</th>
                <th> Hình ảnh kiến thức y dược</th>
                <th> Ngày đăng kiến thức y dược</th>
                <th>Chức năng</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php

              include '../../connectsql.php';

              $sql = "SELECT * FROM kienthucyduoc ";
              //echo $sql; 
              $result = $con->query($sql);

              $stt = 0;
              while ($row = $result->fetch_assoc()) {
                $stt = $stt + 1;
                echo "<tr>
                               <td style='text-align:center' >" . $stt . " </td>
                               <td style='text-align:center'>" . $row['TIEUDE_KTYD'] . "</td>
                               
                               <td style='text-align:center'> <img src='../../../upload" . $row['HINHANH_KTYD'] . "' alt='' style='width:150px;height: auto;'></td>
                               <td style='text-align:center'>" . date('d/m/Y', strtotime($row['NGAYDANG_KTYD'])) . "</td>
                               <td style='text-align:center'><a href='suakienthucyduoc.php?id_ktyd=" . $row['ID_KTYD'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                               <td style='text-align:center'><a href='xoakienthucyduoc.php?id_ktyd=" . $row['ID_KTYD'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
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
include('../views/footer.php')
?>
<!-- <div style="margin:200px" data-toggle="modal" data-target="#modal_load">load</div> -->
<div id="modal_load" class="modal" data-backdrop="false" style="background-color:rgba(0,0,0, 0.5)">
  <div class="modal-dialog" style="text-align: center;" role="document">
    <div class="">
      <img class="loaded" src="../../../frontend/img/loaded.gif">
    </div>
  </div>
</div>
<script>
  function open_load() {
    $("#modal_load").modal()
  }
</script>