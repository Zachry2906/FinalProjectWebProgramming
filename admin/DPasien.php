<?php
session_start();
if($_SESSION['status']!="admin"){
  header("location:../index.php?pesan=bukanadmin");
}
?>

<!DOCTYPE html>
<html lang="en">
  <?php include '../tmplt/headAd.php'; ?>
  <body class="overflow-x-hidden">
    <div id="home"></div>
    <?php include '../tmplt/navAdmin.php'; ?>
    <!-- HERO GRID -->
    <section class=" mb-5 mt-5 pt-5 d-flex justify-content-center align-items-center" style="background-image: url(../gambar/bg.jpg); background-size: cover;">
    <table class="table table-bordered table-sm ms-5 w-75 border-dark mt-5 text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">No Rekam Medis</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Tanggal Lahir</th>
      <th colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php

include '../koneksi.php';
$no = 1;
$data = mysqli_query($connect,"select * from user");
while($d = mysqli_fetch_array($data)){
?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['nama_user']; ?></td>
      <td><?php echo $d['rek_medis']; ?></td>
        <td><?php echo $d['password']; ?></td>
      <td><?php echo $d['email']; ?></td>
      <td><?php echo $d['tanggal_lahir']; ?></td>
      <td><button type='button' class='btn btn-outline-primary'><a style='text-decoration: none; color:#465771;' href='update.php?rek_medis=<?=$d["rek_medis"]?>'>Edit</a></button></td>
        <td><button type='button' class='btn btn-outline-danger'><a style='text-decoration: none;color:#ce3046;' onclick="return confirm('Apakah anda yakin?');" href='hapus.php?rek_medis=<?=$d["rek_medis"]?>'>Hapus</a></button></td>
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
