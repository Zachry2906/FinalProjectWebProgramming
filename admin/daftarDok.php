<?php
session_start();
if($_SESSION['status']!="admin"){
  header("location:../index.php?pesan=bukanadmin");
}
?>

<?php
require '../koneksi.php';

if (isset($_POST['daftar'])) {
    $pengalaman = $_POST['pengalaman'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $spesialis = $_POST['spesialis'];
    $deskripsi = $_POST['deskripsi'];
    $ruangan = $_POST['ruangan'];
    $gambar = upload();
    if ($gambar === false) {
        return false;
    }


    $query = "INSERT INTO dokter (id_dokter, pengalaman, nama, harga, spesialis, deskripsi, ruangan, gambar) VALUES ('', '$pengalaman', '$nama', '$harga', '$spesialis', '$deskripsi', '$ruangan', '$gambar')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Berhasil mendaftar!')</script>";
        header("Location: DDokter.php");
    } else {
        echo "<script>alert('Gagal mendaftar!')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <?php include '../tmplt/headAd.php'; ?>
  <body class="overflow-x-hidden" style="height: 100vh;">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
        <div id="daftar" class="row shadow-lg mx-auto d-flex align-items-center justify-content-center p-3" style="border-radius: 15px; width: 80vw;background-image: url(../gambar/bg2.jpg); background-size: cover;">
            <div class="col ms-5">
                <h1 class="mb-5"><b>Daftar Dokter</b></h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Pengalaman</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-none" name="pengalaman">
                        </div>
                      </div>
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-none" name="nama">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="harga">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Spesialis</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="spesialis">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="deskripsi">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label">Ruangan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="ruangan">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="gambar">
                        </div>
                      </div>
                      <button type="submit" name="daftar" class="btn bg-dark text-light">Daftar</button>
                </form>
            </div>
            <div class="col ms-5">
                <img src="../gambar/tts.png" class="ms-5" alt="" srcset="">
                <p class="mt-3"><a class="link-underline-dark mt-5 ms-5 text-dark text-center" href="DDokter.php">Kembali</a></p>
            </div>
    </div>
    <?php include '../tmplt/script.php'; ?>
    </div>
  </body>
</html>
