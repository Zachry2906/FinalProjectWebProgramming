
<?php
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">
  <?php include '../tmplt/headUs.php'; ?>
  <body class="overflow-x-hidden">
    <div id="home"></div>
    <?php include '../tmplt/navUserL.php'; ?>
    <!-- HERO GRID -->
    <h1 class="mt-5 pt-5 text-center">Jadwal konsultasi saya</h1>
    <section class="mb-5 pt-3 d-flex justify-content-center align-items-center" style="background-image: url(../gambar/bg.jpg); background-size: cover;">
    <table class="table table-bordered table-sm ms-5 w-75 border-dark mt-5 text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Rekaman Medis</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Email Pasien</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Nama Dokter</th>
      <th scope="col">Spesialis Dokter</th>
      <th scope="col">Ruangan</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
<?php

include '../koneksi.php';
$no = 1;
$norek = $_SESSION['rek_medis'];
$data = mysqli_query($connect,"SELECT user.rek_medis, user.nama_user,user.email, pesanan.id_pesanan, jadwal_dokter.id_jadwal,  jadwal_dokter.jadwal, jadwal_dokter.jam, dokter.nama, dokter.spesialis, dokter.ruangan, dokter.harga FROM user INNER JOIN pesanan ON user.rek_medis = pesanan.rek_medis INNER JOIN jadwal_dokter ON pesanan.id_jadwal  = jadwal_dokter.id_jadwal INNER JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter WHERE user.rek_medis = '$norek';");
while($d = mysqli_fetch_array($data)){
?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
        <td><?php echo $d['rek_medis']; ?></td>
        <td><?php echo $d['nama_user']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td><?php echo $d['jadwal']; ?></td>
        <td><?php echo $d['jam']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['spesialis']; ?></td>
        <td><?php echo $d['ruangan']; ?></td>
        <td><?php echo $d['harga']; ?></td>
    </tr>
<?php
}
?>


  </tbody>
</table>
    </section>
    <!-- HERO GRID -->
    <br><br><br>

      <?php include '../tmplt/footer.php';?>
    <?php include '../tmplt/script.php'; ?>
    </div>
  </body>
</html>
