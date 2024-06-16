<?php
require('../views/header.php')
?>
<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> BIỂU MẪU</h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="them_bmccv.php" method="POST" enctype="multipart/form-data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Thêm biểu mẫu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tên biểu mẫu </th>
                    <td><input type="text" style="width: 100%;" name="tenbieumau" value=""></td>
                  </tr>
                  <tr>
                    <th>File / biểu mẫu</th>
                    <td><input type="file" name="file_bmccv" value=""></td>
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
                <th> Tên biểu mẫu </th>
                <th> File biểu mẫu</th>
                <th> Ngày đăng</th>
                <th>Chức năng</th>
                <th></th>
              </tr>
            </thead>
            <tbody>


              <?php

              include '../../connectsql.php';

              $sql = "SELECT * FROM bieumauccv";
              //echo $sql; 
              $result = $con->query($sql);

              $stt = 0;
              while ($row = $result->fetch_assoc()) {
                $stt = $stt + 1;
                echo "<tr>
                               <td >" . $stt . " </td>
                               <td >" . $row['TEN_BMCCV'] . "</td>
                               <td >" . $row['FILE_BMCCV'] . "</td>
                               
                               <td style='width:100px'>" . date('d/m/Y', strtotime($row['NGAYDANG_BMCCV'])) . "</td>
                               <td ><a href='suabieumau.php?id_bmccv=" . $row['ID_BMCCV'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                               <td ><a href='xoabieumau.php?id_bmccv=" . $row['ID_BMCCV'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
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