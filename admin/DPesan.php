
<?php
session_start();
if($_SESSION['status']!="admin"){
  header("location:../login.php?pesan=bukanadmin");
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
    <link rel="stylesheet" href="../style.css" />
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <title>Selamat Datang!</title>
  </head>
  <body class="overflow-x-hidden">
    <div id="home"></div>
    <!-- Navbar -->
    <nav id="nav1" class="navbar navbar-expand-lg bg-body-tertiary fixed-top pt-3">
      <div class="container-fluid">
        <button style="border-radius: 12px!important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav text-center d-flex align-items-center">
            <li class="nav-item ">
            <a href="idxAdmin.php"><img src="../gambar/sj.png" style="left: 5;" alt="" srcset=""><a class="navbar-brand" href="#"></a></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="DDokter.php">Data Dokter</a></li>
                <li><a class="dropdown-item" href="DPasien.php">Data Pasien</a></li>
                
              </ul>
            </li>
            <li class=" ms-2 nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reservasi
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Data Reservasi</a></li>
                
              </ul>
            </li>
            <li class=" ms-2 nav-item">
              <button style="border-radius: 12px!important;" class="btn btn-outline-dark ms-5"><a class="nav-link active text-dark" aria-current="page" href="logout.php">Logout</a></button>
            </li>
            <li class=" ms-2 nav-item">
              <button style="border-radius: 12px!important;" class="btn btn-dark bg-dark ms-4"><a class="nav-link active text-light" aria-current="page" href="daftarDok.php">Tambah Dokter</a></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <!-- HERO GRID -->
    <section class=" mb-5 mt-5 pt-5 d-flex justify-content-center align-items-center" style="background-image: url(../gambar/bg.jpg); background-size: cover;">
    <table class="table table-bordered table-sm ms-5 w-75 border-dark mt-5 text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Rekaman Medis</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Email Pasien</th>
      <th scope="col">Id pesanan</th>
      <th scope="col">Id jadwal</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Nama Dokter</th>
      <th scope="col">Spesialis Dokter</th>
      <th scope="col">Ruangan</th>
      <th scope="col">Harga</th>
      <th colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php

include '../koneksi.php';
$no = 1;
$data = mysqli_query($connect,"SELECT user.rek_medis, user.nama_user,user.email, pesanan.id_pesanan, jadwal_dokter.id_jadwal,  jadwal_dokter.jadwal, jadwal_dokter.jam, dokter.id_dokter, dokter.nama, dokter.spesialis, dokter.ruangan, dokter.harga FROM user INNER JOIN pesanan ON user.rek_medis = pesanan.rek_medis INNER JOIN jadwal_dokter ON pesanan.id_jadwal  = jadwal_dokter.id_jadwal INNER JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter;");
while($d = mysqli_fetch_array($data)){
?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
        <td><?php echo $d['rek_medis']; ?></td>
        <td><?php echo $d['nama_user']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td><?php echo $d['id_pesanan']; ?></td>
        <td><?php echo $d['id_jadwal']; ?></td>
        <td><?php echo $d['jadwal']; ?></td>
        <td><?php echo $d['jam']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['spesialis']; ?></td>
        <td><?php echo $d['ruangan']; ?></td>
        <td><?php echo $d['harga']; ?></td>

      <td><button type='button' class='btn btn-outline-primary'><a style='text-decoration: none; color:#465771;' href='update.php?id_dokter=<?=$d["id_dokter"]?>'>Edit</a></button></td>
        <td><button type='button' class='btn btn-outline-danger'><a style='text-decoration: none;color:#ce3046;' href='hapus.php?id_pesanan=<?=$d["id_pesanan"]?>&id_jadwal=<?=$d["id_jadwal"]?>'>Selesai</a></button></td>
    </tr>
<?php
}
?>


  </tbody>
</table>
    </section>
    <!-- HERO GRID -->
    <br><br><br>

      <!-- Footer -->
      <div class="px-3 pb-5 footer" style="background-color: #182831!important;">
        <div class="container">
          <div class="row ">
            <div class="col-lg-4 col-xs-12 mt-5">
              <img src="gambar/sj.png" class="mb-3" alt="" srcset="" style="filter: invert(100%);">
              <p class="pr-5 text-white-50 mb-1">ShipUp delivers an unparalleled customer service through dedicated customer teams, engaged people working in an agile culture, and a global footprint</p>
            </div>
            <div class="col-lg-2 col-xs-12 mt-5 ms-5 links">
              <h4 class="mt-lg-0 mb-3 mt-sm-3 text-light">Explore</h4>
              <ul class="m-0 p-0" style="list-style: none">
                <li class="mb-1"><a class="text-decoration-none text-light" href="profile.html">About Us</a></li>
                <li class="mb-1"><a class="text-decoration-none text-light" href="profile.html">Our Warehouses</a></li>
                <li class="mb-1"><a class="text-decoration-none text-light" href="profile.html">Blog</a></li>
                <li class="mb-1"><a class="text-decoration-none text-light" href="profile.html">News and Media</a></li>
                <br />
              </ul>
            </div>
            <div class="col-lg-1 col-xs-12 mt-5 ms-5 location">
              <h4 class="mt-lg-0 mb-3 mt-sm-4 text-light">Legal</h4>
              <ul class="m-0 p-0" style="list-style: none">
                <li class="mb-1"><a class="text-decoration-none text-light" href="profile.html">Terms</a></li>
                <li class="mb-1"><a class="text-decoration-none text-light" href="profile.html">Privacy</a></li>
                <br />
              </ul>
            </div>
            <div class="col-lg-3 col-xs-12 mt-5 ms-5 lsocial">
              <h4 class="mt-lg-0 mb-3 mt-sm-4 text-light">Social Media</h4>
              <div class="icon d-inline">
              <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                <!-- Facebook -->
                <a
                   class="btn btn-outline-light rounded-circle m-1"
                   class="text-white"
                   role="button"
                   ><i class="bi bi-facebook"></i
                  ></a>
    
                <!-- Twitter -->
                <a
                   class="btn btn-outline-light rounded-circle m-1"
                   class="text-white"
                   role="button"
                   ><i class="bi bi-twitter"></i
                  ></a>
    
                <!-- Google -->
                <a
                   class="btn btn-outline-light rounded-circle m-1"
                   class="text-white"
                   role="button"
                   ><i class="bi bi-google"></i
                  ></a>
    
                <!-- Instagram -->
                <a
                   class="btn btn-outline-light rounded-circle m-1"
                   class="text-white"
                   role="button"
                   ><i class="bi bi-instagram"></i
                  ></a>
              </div>
            </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col copyright">
              <p class=""><small class="text-white-50">© 2022. All Rights Reserved.</small></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="../script.js"></script>
    </div>
  </body>
</html>
