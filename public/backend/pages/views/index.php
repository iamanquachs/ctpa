<div class="main-panel">
  <div class="content-wrapper">
    <?php

    $id_admin = $_SESSION["id_admin"];
    //echo $tieudediemtin, $cmdt, $nddt, $day, $id_admin;
    //Viet cau truy van Sql
    $sql = "SELECT COUNT(*) as sumdt FROM diemtin";
    //echo $sql;
    //thưc hien truy van
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    ?>


    <?php
    $day = getdate();
    $thu = $day['weekday'];
    $ngay = $day['mday'];
    $thang = $day['mon'];
    $nam = $day['year'];
    ?>
    <p style="font-size: 20px"> <?php echo " " . $thu . "  " . $ngay . "/" . $thang . "/" . $nam; ?></p>
    <!-- <p>Hôm nay</p> -->

    <div class="row">
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0 mdi mdi-checkbox-multiple-marked-outline">&nbsp;&nbsp;&nbsp;<?php echo $row['sumdt']; ?></h3>

                </div>
              </div>
              <div class="col-3">

              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Điểm tin</h6>
          </div>
        </div>
      </div>
      <?php


      //Viet cau truy van Sql
      $sql = "SELECT COUNT(*) as sumpl FROM phapluat";
      //echo $sql;
      //thưc hien truy van
      $result1 = $con->query($sql);
      $row1 = $result1->fetch_assoc();


      ?>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0 mdi mdi-scale-balance">&nbsp;&nbsp;&nbsp;<?php echo $row1['sumpl']; ?></h3>

                </div>
              </div>
              <div class="col-3">

              </div>
            </div>
            <h6 class="text-muted font-weight-normal ">Pháp luật</h6>
          </div>
        </div>
      </div>

      <?php
      //Viet cau truy van Sql
      $sql = "SELECT COUNT(*) as sumhv FROM hoivien";
      //echo $sql;
      //thưc hien truy van
      $result2 = $con->query($sql);
      $row2 = $result2->fetch_assoc();

      ?>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0 mdi mdi-account-multiple-plus">&nbsp;&nbsp;&nbsp;<?php echo $row2['sumhv']; ?></h3>

                </div>
              </div>
              <div class="col-3">

              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Hội viên</h6>
          </div>
        </div>
      </div>
      <?php
      //Viet cau truy van Sql
      $sql = "SELECT COUNT(*) as sumvb FROM vanban";
      //echo $sql;
      //thưc hien truy van
      $result3 = $con->query($sql);
      $row3 = $result3->fetch_assoc();

      ?>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0 mdi mdi-file-word">&nbsp;&nbsp;&nbsp;<?php echo $row3['sumvb']; ?></h3>

                </div>
              </div>
              <div class="col-3">

              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Văn bản</h6>
          </div>
        </div>
      </div>
      <?php
      //Viet cau truy van Sql
      $sql = "SELECT COUNT(*) as sumvpcc FROM vanphongcongchung";
      //echo $sql;
      //thưc hien truy van
      $result4 = $con->query($sql);
      $row4 = $result4->fetch_assoc();



      ?>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0 mdi mdi-bank">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumvpcc']; ?></h3>

                </div>
              </div>
              <div class="col-3">

              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Văn phòng dược học</h6>
          </div>
        </div>
      </div>
      <?php
      //Viet cau truy van Sql
      $sql = "SELECT COUNT(*) as sumk FROM khachhang";
      //echo $sql;
      //thưc hien truy van
      $result5 = $con->query($sql);
      $row5 = $result5->fetch_assoc();

      ?>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0 mdi mdi-account-multiple">&nbsp;&nbsp;&nbsp;<?php echo $row5['sumk']; ?></h3>

                </div>
              </div>
              <div class="col-3">

              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Khách</h6>
          </div>
        </div>
      </div>
      <?php
      //Viet cau truy van Sql
      $sql = "SELECT COUNT(*) as sumyk FROM ykiendonggop";
      //echo $sql;
      //thưc hien truy van
      $result6 = $con->query($sql);
      $row6 = $result6->fetch_assoc();
      ?>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0 mdi mdi-comment">&nbsp;&nbsp;&nbsp;<?php echo $row6['sumyk']; ?></h3>

                </div>
              </div>
              <div class="col-3">

              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Ý kiến đóng góp </h6>
          </div>
        </div>
      </div>
    </div>

    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>