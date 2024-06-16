<?php
require('../views/header.php')
?>

<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> CHUYÊN MỤC VĂN BẢN </h3>
    </div>

    <form action="themchuyenmuc_vb.php" method="POST" style="padding: 10px 0;">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tên chuyên mục &emsp;<input type="text" name="tenchuyenmucvb"></li>
          <li class="breadcrumb-item active" aria-current="page"><button type="submit" class="btn btn-primary btn-fw">Thêm</button></li>
        </ol>
      </nav>
    </form>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> STT </th>
                  <th> Tên chuyên mục văn bản </th>
                  <th> Sửa </th>
                  <th> Xóa </th>
                </tr>
              </thead>
              <tbody>


                <?php

                include '../../connectsql.php';
                $sql = "SELECT * FROM chuyenmucvanban";
                //echo $sql; 
                $result = $con->query($sql);

                $stt = 0;
                while ($row = $result->fetch_assoc()) {
                  $stt = $stt + 1;
                  echo "<tr>
                               <td style='text-align:center'>" . $stt . " </td>
                               <td style='text-align:center'>" . $row['TEN_CHUYENMUC_VB'] . "</td>
                               <td style='text-align:center'><a href='suathongtincm_vb.php?id_cmvb=" . $row['ID_CHUYENMUC_VB'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                               <td style='text-align:center'><a href='xoathongtincm_vb.php?id_cmvb=" . $row['ID_CHUYENMUC_VB'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
                               
                               </tr>";
                }
                echo "</tbody></table>";
                $con->close();

                ?>

          </div>
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