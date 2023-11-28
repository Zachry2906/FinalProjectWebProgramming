<?php

include "../koneksi.php";

session_start();
if(!$_SESSION['status']){
  header("location:../login.php?pesan=belum_login");
}

if (isset($_GET['rek_medis'])) {
    $getrek = $_GET['rek_medis'];
    $query = mysqli_query($connect, "SELECT * FROM user WHERE rek_medis='$getrek'");
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

    $query = mysqli_query($connect, "UPDATE user SET nama_user='$nama', password='$password', email='$email', tanggal_lahir='$tgl' WHERE rek_medis='$getrek'");
    if ($query) {
      if ($_GET['role'] == "user") {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='../login.php?pesan=loginulang';</script>";
      } else {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='DPasien.php';</script>";
      }
    } else {
        echo "<script>alert('Data gagal diubah!'); window.location.href='DPasien.php';</script>";
    }
} else if (isset($_POST['dokter'])) {
    $pengalaman = $_POST['pengalaman'];
    $nama = $_POST['nama'];
    $spesialis = $_POST['spesialis'];
    $deskripsi = $_POST['deskripsi'];
    $ruang = $_POST['ruang'];
    $harga = $_POST['harga'];
    $gambar = upload();
    if ($gambar === false) {
        return false;
    }

    $query = mysqli_query($connect, "UPDATE dokter SET pengalaman='$pengalaman', nama='$nama', spesialis='$spesialis', deskripsi='$deskripsi', ruangan='$ruang', harga='$harga', gambar='$gambar' WHERE id_dokter='$id_dokter'");
    if ($query) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='DDokter.php';</script>";
    } else {
        echo "<script>alert('Data gagal diubah!'); window.location.href='DDokter.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <?php include '../tmplt/headAd.php'; ?>
  <body class="overflow-x-hidden" style="height: 100vh;">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
        <div id="daftar" class="row shadow-lg p-3 mx-auto d-flex align-items-center justify-content-center" style="border-radius: 15px; width: 80vw;background-image: url(../gambar/bg2.jpg); background-size: cover;">
            <div class="col ms-5">
                <h1 class="mb-3 mt-1"><b>Halaman Edit</b></h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label"><?=($cek <= 5)?"No Rek Medis":"Pengalaman"; ?></label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control border border-none" name="<?=($cek <= 5)?"rek_medis":"pengalaman"; ?>" value="<?= ($cek <= 5)? "no rek tidak dapat diganti": $data['pengalaman'];?>">
                        </div>
                      </div>
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label"><?="Nama"; ?></i></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-none" name="nama" value="<?= ($cek <= 5)? $data['nama_user']: $data['nama'];?>">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputEmail" class="col-sm-2 col-form-label"><?=($cek <= 5)?"Password":"Spesialis"; ?></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="<?=($cek <= 5)?"password":"spesialis"; ?>" value="<?=($cek <= 5)? $data['password']: $data['spesialis'];?>">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"><?=($cek <= 5)?"Email":"Deskripsi"; ?></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="<?=($cek <= 5)?"email":"deskripsi"; ?>" value="<?=($cek <= 5)? $data['email']: $data['deskripsi'];?>">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label"><?=($cek <= 5)?"Tanggal Lahir":"Ruang"; ?></label>
                        <div class="col-sm-10">
                          <input type="<?=($cek <= 5)?'date': 'text'?>" class="form-control" name="<?=($cek <= 5)?"tgl":"ruang"; ?>" value="<?=($cek <= 5)? $data['tanggal_lahir']: $data['ruangan'];?>">
                        </div>
                      </div>
                      <?php
                      if ($cek <= 5) {
                        $dolar = "maan";
                      } else {
                        echo '<div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="harga" value="'.$data['harga'].'">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="gambar" value="'.$data['gambar'].'">
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
      <?php include '../tmplt/script.php';?>
    </div>
  </body>
</html>
