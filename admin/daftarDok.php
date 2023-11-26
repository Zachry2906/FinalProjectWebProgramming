
<?php

require '../koneksi.php';

if (isset($_POST['daftar'])) {
    $pengalaman = $_POST['pengalaman'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $spesialis = $_POST['spesialis'];
    $deskripsi = $_POST['deskripsi'];
    $ruangan = $_POST['ruangan'];
    $gambar = $_POST['gambar'];

    $query = "INSERT INTO dokter (pengalaman, nama, harga, spesialis, deskripsi, ruangan) VALUES ('$pengalaman', '$nama', '$harga', '$spesialis', '$deskripsi', '$ruangan', '$gambar')";
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
        <div id="daftar" class="row shadow-lg mx-auto d-flex align-items-center justify-content-center p-3" style="border-radius: 15px; width: 80vw;background-image: url(gambar/bg2.jpg); background-size: cover;">
            <div class="col ms-5">
                <h1 class="mb-5"><b>Daftar Dokter</b></h1>
                <form action="" method="post">
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
                          <input type="text" class="form-control" name="deksripsi">
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
                          <input type="text" class="form-control" name="gambar">
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
      <!-- Footer -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="script.js"></script>
    </div>
  </body>
</html>
