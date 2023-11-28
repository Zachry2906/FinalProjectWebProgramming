
<?php
session_start();
if($_SESSION['status']!="admin"){
  header("location:../login.php?pesan=bukanadmin");
}
include '../koneksi.php';

if(isset($_POST['submit'])){
    var_dump($_POST['xxx']);
    $s = $_POST['xxx'];

    $data0 = mysqli_query($connect,"SELECT user.rek_medis, user.nama_user,user.email, pesanan.id_pesanan, jadwal_dokter.id_jadwal,  jadwal_dokter.jadwal, jadwal_dokter.jam, dokter.id_dokter, dokter.nama, dokter.spesialis, dokter.ruangan, dokter.harga FROM user INNER JOIN pesanan ON user.rek_medis = pesanan.rek_medis INNER JOIN jadwal_dokter ON pesanan.id_jadwal  = jadwal_dokter.id_jadwal INNER JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter WHERE user.rek_medis = '$s' OR user.nama_user = '$s' OR user.email = '$s' OR jadwal_dokter.jadwal = '$s' OR jadwal_dokter.jam = '$s' OR dokter.nama = '$s' OR dokter.spesialis = '$s' OR dokter.ruangan = '$s' OR dokter.harga = '$s';");
    $cek = mysqli_num_rows($data0);
    if($cek > 0){
    }else{
      header("location:cariData.php?pesan=gagal");
    }
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
      <th scope="col">Aksi</th>
      <!-- <th colspan="2">Aksi</th> -->
    </tr>
  </thead>
  <tbody>
<?php
$no = 1;
while($d = mysqli_fetch_array($data0)){
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

      <!-- <td><button type='button' class='btn btn-outline-primary'><a style='text-decoration: none; color:#465771;' href='update.php?id_dokter=<?=$d["id_dokter"]?>'>Edit</a></button></td> -->
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

      <?php include '../tmplt/footer.php';?>
      <?php include '../tmplt/script.php'; ?>
    </div>
  </body>
</html>
