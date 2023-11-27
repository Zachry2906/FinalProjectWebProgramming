
<?php
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belumlogin");
}


$id_dokter = $_GET['id'];
include '../koneksi.php';
$data = mysqli_query($connect,"select * from dokter where id_dokter='$id_dokter'");
$d = mysqli_fetch_array($data);



if(isset($_POST['submit'])){
    $tanggal = $_POST['tanggal'];
    $norek = $_SESSION['rek_medis'];
    $jam = $_POST['jam'];
    $id_dokter = $_GET['id'];

    $query1 = mysqli_query($connect, "INSERT INTO jadwal_dokter VALUES ('','$tanggal','$jam','$id_dokter')");

    include '../koneksi.php';
    $data1 = mysqli_query($connect,"select * from jadwal_dokter where id_dokter='$id_dokter'");
    $d1 = mysqli_fetch_array($data1);
    $id_jadwal = $d1['id_jadwal'];

    $query2 = mysqli_query($connect, "INSERT INTO pesanan VALUES ('','$norek','$id_jadwal')");
    if($query1 && $query2){
        header("location:jadwalUser.php");
    }else{
        header("location:DetailDok.php?pesan=gagal");
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
    <link rel="stylesheet" href="../style.css" />
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <style>
        .cek {
            visibility: hidden;
        }
        .klikk {
            text-align:center; 
            border-radius: 10px; 
            background-color: #919191;
            color : white;
        }
        .klikk.aktif{
            background-color: #182831;
            color: white;
        }
    </style>
    <title>Selamat Datang!</title>
  </head>
  <body class="overflow-x-hidden">
    <div id="home"></div>
    <?php include '../tmplt/navUserL.php'; ?>
    <!-- HERO GRID -->
    <br><br><br>
    <section style="background-image: url(../gambar/bg3.jpg); background-size: cover;">
    <div class="container mt-5">
        <div class="row mt-5 ms-5 d-flex justify-content-center align-items-center">
            <div class="col mt-5 ms-5">
                <img src="../gambar/<?= $d["gambar"] ?>png" alt="">
            </div>
            <div class="col mt-5">
                <b><h1><?= $d["nama"] ?></h1></b>
                <h5 class="pt-3">Spesialis : <?= $d["spesialis"] ?> </h5>
                <h5 class="pt-3">Pengalaman : <?= $d["pengalaman"] ?> Tahun </h5>
                <h5 class="pt-3">Ruangan : <?= $d["ruangan"] ?> </h5>
                <h5 class="pt-3">Harga : <?= $d["harga"] ?> </h5>
            </div>
        </div>
        <div class="ms-5" style="margin-top :160px; ">
            <div class="ms-5">
                <h1 class="mb-2 mt-5">Deskripsi</h1>
                <p style="text-align:justify;" class="mt-3"><?= $d["deskripsi"] ?></p>
            </div>
        </div>
        <div class="ms-5 mt-5">
            <div class="ms-5">
                <h1 class="mb-2 mt-5">Reservasi</h1>
                <p>Pilih tanggal untuk Konsultasi</p>
                <form action="" method="post">
                <div class="tanggal mx-auto d-flex justify-content-center">

                <?php
                $q1 = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE id_dokter = '$id_dokter' AND jadwal = '2023-11-01'");
                $cek1 = mysqli_num_rows($q1);
                $q2 = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE id_dokter = '$id_dokter' AND jadwal = '2023-11-02'");
                $cek2 = mysqli_num_rows($q2);
                $q3 = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE id_dokter = '$id_dokter' AND jadwal = '2023-11-03'");
                $cek3 = mysqli_num_rows($q3);
                $q4 = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE id_dokter = '$id_dokter' AND jadwal = '2023-11-06'");
                $cek4 = mysqli_num_rows($q4);
                $q5 = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE id_dokter = '$id_dokter' AND jadwal = '2023-11-07'");
                $cek5 = mysqli_num_rows($q5);
                $q6 = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE id_dokter = '$id_dokter' AND jadwal = '2023-11-08'");
                $cek6 = mysqli_num_rows($q6);
                $q7 = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE id_dokter = '$id_dokter' AND jadwal = '2023-11-09'");
                $cek7 = mysqli_num_rows($q7);
                ?>

                <label for="tanggal1" class="<?=($cek1 >= 3) ? "penuh" : ""?> p-2 klikk mt-5" style=<?=($cek1 < 3) ? "cursor:pointer;;" : "filter:opacity(0.4);" ;?> > Rab, 1 <br> Nov</label>
                <input type="checkbox" name="tanggal" class="cek m-2" id="tanggal1" value="2023-11-1">
                <label for="tanggal2" class="<?=($cek2 >= 3) ? "penuh" : ""?> p-2 klikk mt-5" style= <?=($cek2 < 3) ? "cursor:pointer;;": "filter:opacity(0.4);" ;?> > Kam, 2 <br> Nov</label>
                <input type="checkbox" name="tanggal" class="cek m-2" id="tanggal2" value="2023-11-2">
                <label for="tanggal3" class="<?=($cek3 >= 3) ? "penuh" : ""?> p-2 klikk mt-5" style=<?=($cek3 < 3) ? "cursor:pointer;;": "filter:opacity(0.4);" ;?> > Jum, 3 <br> Nov</label>
                <input type="checkbox" name="tanggal" class="cek m-2" id="tanggal3" value="2023-11-3">
                <label for="tanggal4" class="<?=($cek4 >= 3) ? "penuh" : ""?> p-2 klikk mt-5" style=<?=($cek4 < 3) ? "cursor:pointer;;": "filter:opacity(0.4);" ;?> > Sen, 6 <br> Nov</label>
                <input type="checkbox" name="tanggal" class="cek m-2" id="tanggal4" value="2023-11-6">
                <label for="tanggal5" class="<?=($cek5 >= 3) ? "penuh" : ""?> p-2 klikk mt-5" style=<?=($cek5 < 3) ? "cursor:pointer;;": "filter:opacity(0.4);" ;?> > Sel, 7 <br> Nov</label>
                <input type="checkbox" name="tanggal" class="cek m-2" id="tanggal5" value="2023-11-7">
                <label for="tanggal6" class="<?=($cek6 >= 3) ? "penuh" : ""?> p-2 klikk mt-5" style=<?=($cek6 < 3) ? "cursor:pointer;;": "filter:opacity(0.4);" ;?> > Rab, 8 <br> Nov</label>
                <input type="checkbox" name="tanggal" class="cek m-2" id="tanggal6" value="2023-11-8">
                <label for="tanggal7" class="<?=($cek7 >= 3) ? "penuh" : ""?> p-2 klikk mt-5" style=<?=($cek7 < 3) ? "cursor:pointer;;": "filter:opacity(0.4);" ;?> > Kam, 9 <br> Nov</label>
                <input type="checkbox" name="tanggal" class="cek m-2" id="tanggal7" value="2023-11-9">
                </div>
                <button type="button" class="btn btn-dark mt-3 mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pesanan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jam" id="jam1" value="09.00">
                        <label class="form-check-label" for="jam1">
                            Pukul 09.00
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jam" id="jam2" value="12.00">
                        <label class="form-check-label" for="jam2">
                            Pukul 12.00
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jam" id="jam3" value="15.00">
                        <label class="form-check-label" for="jam3">
                            Pukul 15.00
                        </label>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>
            </div>
    </div>
    </section>
    <!-- HERO GRID -->
    <br><br><br>

      <?php include '../tmplt/footer.php';?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="detail.js"></script>
    </div>
  </body>
</html>
