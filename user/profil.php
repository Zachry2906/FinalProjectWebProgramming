<?php
session_start();

if (!isset($_SESSION['status'])) {
    header("location:../login.php?pesan=belum_login");
}


?>

<!DOCTYPE html>
<html lang="en">
  <?php include '../tmplt/headUs.php'; ?>
  <body class="overflow-x-hidden">
  <div style="bottom:10px; right:10px" id="toasts" class="position-fixed d-flex flex-column align-items-end"></div>
    <div id="home"></div>
    <?php include '../tmplt/navUserL.php'; ?>
    <!-- HERO GRID -->
    <section class=" mb-5 mt-5 pt-5" style="background-image: url(../gambar/bg.jpg); background-size: cover;">
    <div class="row">
        <div class="col mx-auto">
            <h6>Nomor Rekam Medis</h6>
            <h6>Nama</h6>
            <h6>Email</h6>
            <h6>Tanggal Lahir</h6>
        </div>
        <div class="col">
            <div class="rounded-circle bg-dark" style="margin-left :300px;height:40vh; width:40vh;">
            </div>
        </div>
    </div>
    </section>
    </div>
      <!-- Footer -->
<?php
include '../tmplt/footer.php';
?>
      <!-- Footer -->
      <?php include '../tmplt/script.php'; ?>s
    </div>
  </body>
</html>
