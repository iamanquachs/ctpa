<?php
require('../views/header.php')
?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> CHUYÊN MỤC PHÁP LUẬT </h3>
      <form action="themchuyenmuc_pl.php" method="POST">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Tên chuyên mục &emsp;<input type="text" name="tenchuyenmucpl"></li>
            <li class="breadcrumb-item active" aria-current="page"><button type="submit" class="btn btn-primary btn-fw">Thêm</button></li>
          </ol>
        </nav>
      </form>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> STT </th>
                  <th> Tên chuyên mục pháp luật </th>
                  <th> Chức năng </th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>


                <?php

                include '../../connectsql.php';
                $sql = "SELECT * FROM chuyenmucphapluat";
                //echo $sql; 
                $result = $con->query($sql);

                $stt = 0;
                while ($row = $result->fetch_assoc()) {
                  $stt = $stt + 1;
                  echo "<tr>
                               <td >" . $stt . " </td>
                               <td >" . $row['TEN_CHUYENMUC_PL'] . "</td>
                               <td><a href='suathongtincm_pl.php?id_cmpl=" . $row['ID_CHUYENMUC_PL'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                               <td><a  href='xoathongtincm_pl.php?id_cmpl=" . $row['ID_CHUYENMUC_PL'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
                               
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
</div>
<?php
require('../views/footer.php')
?>