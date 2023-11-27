<?php
session_start();
if($_SESSION['status']!="admin"){
  header("location:../login.php?pesan=bukanadmin");
}
?>

<?php
require '../koneksi.php';

if (isset($_POST['daftar'])) {
    $Link = $_POST['Link'];
    $deskripsi = $_POST['deskripsi'];

    $gambar = upload();
    if ($gambar === false) {
        return false;
    }

    $query = "INSERT INTO Artikel (id_art, link, desk_art, gambar_art) VALUES ('', '$Link', '$deskripsi', '$gambar')";
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo "<script>alert('Berhasil mendaftar!')</script>";
        header("Location: DArtikel.php");
    } else {
        echo "<script>alert('Gagal mendaftar!')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <?php include '../tmplt/headAd.php'; ?>
  <body class="overflow-x-hidden" style="height: 100vh;">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
        <div id="daftar" class="row shadow-lg mx-auto d-flex align-items-center justify-content-center p-3" style="border-radius: 15px; width: 80vw;background-image: url(../gambar/bg2.jpg); background-size: cover;">
            <div class="col ms-5">
                <h1 class="mb-5"><b>Tambah Artikel</b></h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-none" name="Link">
                        </div>
                      <div class="mb-4 row mt-3">
                        <label for="inputConfirm" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="deskripsi">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputConfirm" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="gambar">
                        </div>
                      </div>
                      <button type="submit" name="daftar" class="btn bg-dark text-light">Tambah </button>
                </form>
            </div>
    </div>
    <?php include '../tmplt/script.php'; ?>
    </div>
  </body>
</html>
