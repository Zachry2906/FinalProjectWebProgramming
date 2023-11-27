<?php
session_start();
if($_SESSION['status']!="admin"){
  header("location:../login.php?pesan=bukanadmin");
}
?>

<!DOCTYPE html>
<html lang="en">
  <?php include '../tmplt/headAd.php'; ?>
  <body class="overflow-x-hidden">
    <div id="home"></div>
    <?php include '../tmplt/navAdmin.php'; ?>
    <section class=" mb-5 mt-5 pt-5 d-flex justify-content-center align-items-center" style="background-image: url(../gambar/bg.jpg); background-size: cover;">
    <table class="table table-bordered table-sm ms-5 w-75 border-dark mt-5 text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Gambar</th>
      <th scope="col">Link</th>
      <th colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php

include '../koneksi.php';
$no = 1;
$data = mysqli_query($connect,"select * from Artikel");
while($d = mysqli_fetch_array($data)){
?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
        <td><?php echo $d['desk_art']; ?></td>
        <td><?php echo $d['gambar_art']; ?></td>
        <td><?php echo $d['link']; ?></td>
      <td><button type='button' class='btn btn-outline-primary'><a style='text-decoration: none; color:#465771;' href='updateArt.php?id_art=<?=$d["id_art"]?>'>Edit</a></button></td>
        <td><button type='button' class='btn btn-outline-danger'><a style='text-decoration: none;color:#ce3046;' href='hapus.php?id_art=<?=$d["id_art"]?>'>Hapus</a></button></td>
    </tr>
<?php
}
?>
  </tbody>
</table>
    </section>
    <br><br><br>
      <?php include '../tmplt/footer.php';?>
      <?php include '../tmplt/script.php'; ?>
    </div>
  </body>
</html>
