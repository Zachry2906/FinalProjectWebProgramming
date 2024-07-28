<?php

include "../koneksi.php";

session_start();
if($_SESSION['status']!="admin"){
  header("location:../index.php?pesan=bukanadmin");
}

if (isset($_GET['id_art'])) {
    $id_art = $_GET['id_art'];
    $query = mysqli_query($connect, "SELECT * FROM Artikel WHERE id_art='$id_art'");
    $data = mysqli_fetch_array($query);
}

if (isset($_POST['submit'])) {
    $id_art = $_GET['id_art'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];
    $link = $_POST['link'];

    $query = mysqli_query($connect, "UPDATE Artikel SET desk_art='$deskripsi', gambar_art='$gambar', link='$link' WHERE id_art='$id_art'");
    if ($query) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='DArtikel.php';</script>";
    } else {
        echo "<script>alert('Data gagal diubah!'); window.location.href='DPasien.php';</script>";
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
                <form action="" method="post">
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-none" name="deskripsi" placeholder="<?php echo $data["desk_art"]?>">
                        </div>
                      </div>
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-none" name="gambar" placeholder="<?php echo $data["gambar_art"]?>">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="link" placeholder="<?php echo $data["link"]?>">
                        </div>
                      </div>
                      <button type="submit" name="submit" class="btn bg-dark text-light">Edit</button>
                </form>
            </div>
            <div class="col ms-2">
                <img src="../gambar/mss.png" class="ms-5" alt="" srcset="">
                <p class="mt-3"><a class="link-underline-dark mt-5 ms-5 text-dark text-center" href="idxAdmin.php">Kembali</a></p>
            </div>
    </div>
    <?php include '../tmplt/script.php'; ?>
    </div>
  </body>
</html>
