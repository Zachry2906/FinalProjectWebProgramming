<?php

if(isset($_POST['daftar'])){

    include '../koneksi.php';

    $norek = $_POST['norek'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $tgl = $_POST['tgl'];

    $foto = upload();
    if($foto === false){
        return false;
    }

    $query = mysqli_query($connect, "INSERT INTO user VALUES('$norek', '$pass', '$nama', '$email', '$tgl', '$foto)");
    if($query){
        header("location:login.php");
    }else{
        header("location:daftar.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <?php include 'tmplt/headUs.php'; ?>
  <body class="overflow-x-hidden" style="height: 100vh;">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
        <div id="daftar" class="row shadow-lg h-75 mx-auto d-flex align-items-center justify-content-center" style="border-radius: 15px; width: 80vw;background-image: url(gambar/bg2.jpg); background-size: cover;">
            <div class="col ms-5">
                <h1 class="mb-5"><b>Sign Up</b></h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label"><i class="bi bi-card-heading"></i></label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control border border-none" name="norek" placeholder="No Rekam Medis">
                        </div>
                      </div>
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label"><i class="bi bi-person"></i></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-none" name="nama" placeholder="Nama">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputEmail" class="col-sm-2 col-form-label"><i class="bi bi-envelope"></i></label>
                        <div class="col-sm-10">
                          <input type="Email" class="form-control" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"><i class="bi bi-lock"></i></label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="pass" placeholder="Password">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label"><i class="bi bi-calendar"></i></label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="tgl" placeholder="Tanggal Lahir">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label"><i class="bi bi-camera-fill"></i></label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="tgl" placeholder="Foto Profil">
                        </div>
                      </div>
                      <button type="submit" name="daftar" class="btn bg-dark text-light">Submit</button>
                </form>
            </div>
            <div class="col ms-5">
                <img src="gambar/tts.png" class="ms-5" alt="" srcset="">
                <p class="mt-3"><a class="link-underline-dark mt-5 ms-5 text-dark text-center" href="login.php">Saya Sudah Punya Akun</a><a class="link-underline-dark mt-5 ms-5 text-dark text-center" href="user/index.php">Menu utama</a></p>
            </div>
    </div>
      <!-- Footer -->
      <?php include 'tmplt/script.php'; ?>
    </div>
  </body>
</html>
