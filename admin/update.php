<?php

include "../koneksi.php";

session_start();
if($_SESSION['status']!="admin"){
  header("location:login.php?pesan=belum_login");
}

if (isset($_GET['rek_medis'])) {
    $rek_medis = $_GET['rek_medis'];
    $query = mysqli_query($connect, "SELECT * FROM user WHERE rek_medis='$rek_medis'");
    $data = mysqli_fetch_array($query);
    $cek = 5;
} else if (isset($_GET['id_dokter'])) {
    $id_dokter = $_GET['id_dokter'];
    $query = mysqli_query($connect, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
    $data = mysqli_fetch_array($query);
    $cek = 6;
}

if (isset($_POST['user'])) {
    $rek_medis = $_POST['rek_medis'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $tgl = $_POST['tgl'];

    $query = mysqli_query($connect, "UPDATE user SET nama='$nama', password='$password', email='$email', tanggal_lahir='$tgl' WHERE rek_medis='$rek_medis'");
    if ($query) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='DPasien.php';</script>";
    } else {
        echo "<script>alert('Data gagal diubah!'); window.location.href='DPasien.php';</script>";
    }
} else if (isset($_POST['dokter'])) {
    $nama = $_POST['nama'];
    $spesialis = $_POST['spesialis'];
    $deskripsi = $_POST['deskripsi'];
    $ruang = $_POST['ruang'];
    $harga = $_POST['harga'];

    $query = mysqli_query($connect, "UPDATE dokter SET nama='$nama', spesialis='$spesialis', deskripsi='$deskripsi', ruangan='$ruang', harga='$harga' WHERE id_dokter='$id_dokter'");
    if ($query) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='DDokter.php';</script>";
    } else {
        echo "<script>alert('Data gagal diubah!'); window.location.href='DDokter.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--FONT AWESOMW JS-->
    <!-- Font Awesome JS -->
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <title>Selamat Datang!</title>
  </head>
  <body class="overflow-x-hidden" style="height: 100vh;">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
        <div id="daftar" class="row shadow-lg h-75 mx-auto d-flex align-items-center justify-content-center" style="border-radius: 15px; width: 80vw;background-image: url(gambar/bg2.jpg); background-size: cover;">
            <div class="col ms-5">
                <h1 class="mb-3 mt-1"><b>Halaman Edit</b></h1>
                <form action="" method="post">
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label"><?=($cek <= 5)?"No Rek Medis":"Pengalaman"; ?></label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control border border-none" name="<?=($cek <= 5)?"rek_medis":"pengalaman"; ?>" placeholder="<?= ($cek <= 5)? $data['rek_medis']: $data['pengalaman'];?>">
                        </div>
                      </div>
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label"><?="Nama"; ?></i></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-none" name="nama" placeholder="<?=$data['nama'];?>">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputEmail" class="col-sm-2 col-form-label"><?=($cek <= 5)?"Password":"Spesialis"; ?></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="<?=($cek <= 5)?"password":"spesialis"; ?>" placeholder="<?=($cek <= 5)? $data['password']: $data['spesialis'];?>">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"><?=($cek <= 5)?"Email":"Deskripsi"; ?></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="<?=($cek <= 5)?"email":"deskripsi"; ?>" placeholder="<?=($cek <= 5)? $data['email']: $data['deskripsi'];?>">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label"><?=($cek <= 5)?"Tanggal Lahir":"Ruang"; ?></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="<?=($cek <= 5)?"tgl":"ruang"; ?>" placeholder="<?=($cek <= 5)? $data['tanggal_lahir']: $data['ruangan'];?>">
                        </div>
                      </div>
                      <?php
                      if ($cek <= 5) {
                        $dolar = "maan";
                      } else {
                        echo '<div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="harga" placeholder="'.$data['harga'].'">
                        </div>
                      </div>';
                      }
                      ?>
                      <button type="submit" name="<?=($cek <= 5)?"user":"dokter"; ?>" class="btn bg-dark text-light">Edit</button>
                </form>
            </div>
            <div class="col ms-2">
                <img src="../gambar/mss.png" class="ms-5" alt="" srcset="">
                <p class="mt-3"><a class="link-underline-dark mt-5 ms-5 text-dark text-center" href="idxAdmin.php">Kembali</a></p>
            </div>
    </div>
      <!-- Footer -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="script.js"></script>
    </div>
  </body>
</html>
