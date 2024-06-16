<?php
require('../views/header.php')
?>

<?php
session_start();
// Kết nối Database
include '../../connectsql.php';

$id_cmpl = $_GET['id_cmpl'];
//echo $tensp;
$email = $_SESSION['email'];
$sql = "SELECT * FROM chuyenmucphapluat WHERE ID_CHUYENMUC_PL='$id_cmpl'";
echo $sql;
$result = $con->query($sql);
$row = $result->fetch_assoc();

$TEN_CHUYENMUC_PL = $row['TEN_CHUYENMUC_PL'];
$_SESSION['id_cmpl'] = $id_cmpl;
//echo $id;
?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Sửa chuyên mục pháp luật </h3><br>
      <form action="capnhatchuyenmuc_pl.php" method="POST">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Tên chuyên mục &emsp;<input type="text" name="tenchuyenmucpl" value="<?php echo $TEN_CHUYENMUC_PL; ?>"></li>
            <li class="breadcrumb-item active" aria-current="page">
              <button type="submit" class="btn btn-primary btn-fw">Cập nhật</button>
            </li>
          </ol>
        </nav>
      </form>

    </div>

    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->

<?php
require('../views/footer.php')
?>