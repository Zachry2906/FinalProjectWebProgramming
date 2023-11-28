<?php
session_start();

if (!isset($_SESSION['status'])) {
    header("location:../login.php?pesan=belum_login");
}

var_dump($_SESSION['foto']);

require '../koneksi.php';

if (isset($_POST["submit"])) {
    $getrek = $_SESSION['rek_medis'];
    $foto = upload();
    if ($foto === false) {
        return false;
    }

    $query = mysqli_query($connect, "UPDATE user SET foto='$foto' WHERE rek_medis='$getrek'");
    if ($query) {
      echo "<script>alert('Data berhasil diubah!'); window.location.href='../login.php?pesan=loginulang';</script>";
    } else {
        echo "<script>alert('Data gagal diubah!'); window.location.href='profil.php';</script>";
    }
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
    <section class="mb-5 mt-5 pt-5 " style="background-image: url(../gambar/bg.jpg); background-size: cover;">
    <div class="ms-5 mt-5 row d-flex justify-content-center align-items-center">
        <div class="ms-5 col col-lg-4">
            <h5>Nomor Rekam Medis : </h5>
            <h6><?= $_SESSION["rek_medis"] ?></h6><br>
            <h5>Nama : </h5>
            <h6><?= $_SESSION["nama"] ?></h6><br>
            <h5>Email : </h5>
            <h6><?= $_SESSION["email"] ?></h6><br>
            <h5>Tanggal Lahir : </h5>
            <h6><?= $_SESSION["tgl"] ?></h6><br>
            <button type='button' class='btn btn-outline-dark'><a style='text-decoration: none;color:black;' href='../admin/update.php?rek_medis=<?=$_SESSION["rek_medis"]?>&role=user'>Edit</a></button>
            <form action="" method="post" enctype="multipart/form-data">
            <button type='submit' name="submit" class='btn btn-outline-dark mt-3'>Konfirm</a></button>
        </div>
        <div class="col col-lg-4">
          <img src="../gambar/<?= $_SESSION['foto']?>" class="mt-3 rounded-circle bg-dark" style="height:40vh; width:40vh;" alt="" srcset="">
            <div class="ms-5 mb-5 rounded-circle" style="height:10vh; width:10vh; right:393px; top:463px;position:absolute; background-image:url(../gambar/cam.png); background-repeat:no-repeat;background-size: cover; cursor:pointer"></div>
            <input type="file" name="gambar" class="ms-5 mb-5 rounded-circle bg-danger" style="height:10vh; width:10vh; right:150px; top:100px;position:relative; background-image: url(../gambar/cam.png); filter:opacity(0);cursor:pointer">
        </div>
        </form>
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
