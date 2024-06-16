<?php
require('../views/header.php')
?>


<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> THƯ VIỆN </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="themthongtin_tv.php" method="POST" enctype="multipart/form-data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Thêm thông tin thư viện</th>
                  </tr>
                </thead>
                <tbody>
                  <th>Chuyên mục thư viện</th>
                  <td><select name="cmtv" id="cmtv" style="width: 200px;padding: 5px;border-radius: 6px;">

                      <?php


                      include '../../connectsql.php';

                      $sql = "SELECT * FROM chuyenmucthuvien";
                      //echo $sql; 
                      $result = $con->query($sql);

                      while ($row = $result->fetch_assoc()) {
                        $video = $row['ID_CHUYENMUC_TV'];
                        echo "<option value='" . $row['ID_CHUYENMUC_TV'] . "'>" . $row['TEN_CHUYENMUC_TV'] . " </option><br>";
                      }
                      $con->close();

                      ?>
                    </select></td>
                  </tr>

                  <tr>
                    <th>File thư viện</th>
                    <td><input type="file" name="my_file" value=""></td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" name="submit" class="btn btn-primary btn-fw" style="float:right;">Thêm</button>

            </form>




          </div>
        </div>
      </div>
    </div>
    <br>


    <div class="card">
      <div class="card-body">
        <h2>Hình ảnh</h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> STT </th>
                <th> File Hình ảnh</th>
                <th>Chức năng</th>

              </tr>
            </thead>
            <tbody>


              <?php

              include '../../connectsql.php';



              $sql = "SELECT * FROM thuvien INNER JOIN chuyenmucthuvien on thuvien.ID_CHUYENMUC_TV=chuyenmucthuvien.ID_CHUYENMUC_TV where chuyenmucthuvien.ID_CHUYENMUC_TV != $video";
              //echo $sql; 
              $result = $con->query($sql);

              $stt = 0;

              while ($row = $result->fetch_assoc()) {
                $stt = $stt + 1;
                echo "<tr>
                               <td style='text-align:center'>" . $stt . " </td>";

                if ($row['ID_CHUYENMUC_TV'] != $video) {
                  echo "<td style='text-align:center'> <img src='../../../upload" . $row['FILE_TV'] . "' alt='' style='width:150px;height: auto;'></td>";
                }
                echo "<td style='text-align:center'><a href='xoathongtin_tv.php?id_tv=" . $row['ID_TV'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
                               </tr>";
              }
              echo "</tbody></table>";
              $con->close();

              ?>

        </div>
      </div>
    </div>









    <div class="main-panel">

      <div class="card">
        <div class="card-body">
          <h2>Video</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> STT </th>
                  <th> File Hình ảnh</th>
                  <th>Chức năng</th>

                </tr>
              </thead>
              <tbody>


                <?php

                include '../../connectsql.php';



                $sql = "SELECT * FROM thuvien INNER JOIN chuyenmucthuvien on thuvien.ID_CHUYENMUC_TV=chuyenmucthuvien.ID_CHUYENMUC_TV  where chuyenmucthuvien.ID_CHUYENMUC_TV='$video'";
                //echo $sql; 
                $result = $con->query($sql);

                $stt = 0;

                while ($row = $result->fetch_assoc()) {
                  $stt = $stt + 1;
                  echo "<tr>
                               <td >" . $stt . " </td>";

                  if ($row['ID_CHUYENMUC_TV'] == $video) {
                    echo "<td > <video controls width='320px' height='200px' ><source src='../../../upload" . $row['FILE_TV'] . "  '> </video></td>";
                  }
                  echo "
                               <td ><a href='xoathongtin_tv.php?id_tv=" . $row['ID_TV'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
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
  <!-- page-body-wrapper ends -->
</div>
<?php
require('../views/footer.php')
?>