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
    <!-- HERO GRID -->
    <section class=" mb-5 mt-5 pt-5" style="background-image: url(../gambar/bg.jpg); background-size: cover;">
    <div class=" ms-5 row mt-5">
      <div class="ms-5 col col-md-5 mt-5">
        <h1 class="mt-2">Bekerja dengan <b>Semangat</b> walaupun hanya dengan bayaran sebesar <b>UMR Jogja</b></h1>
        <p class="mt-3">Nantinya apabila anda mengalami masalah mental mengenai ini, anda bisa menggunakan jasa yang kami sediakan hehe</p>
        <a href="daftar.php"><button style="border-radius: 12px!important;" class="btn mt-2 btn-dark bg-dark text-light pt-3 pb-3 ps-5 pe-5">Join Now</button></a>
      </div>
      <div class="col m-5 mt-5">
       <img src="../gambar/admin.png" alt="" srcset="">
      </div>
    </div>
    <!-- HERO GRID -->
    <br><br><br>
      <!-- inputGAMBAR -->
      <form class="p-4 card-body mt-5 mx-auto shadow-lg" style="width: 50vw; border-radius: 12px!important; margin-bottom: 140px;" method="post" action="cariData.php" >
        <div class="row justify-content-center me-5">
            <div class="col col-sm-4 px-2 mb-2 w">
                <label for="input1" class="ms-2 position-absolute" style="margin-top: -0.25rem !important">
                    <span class="h6 small bg-white text-muted px-1">Apapun Itu</span>
                </label>
                <input type="text" name="xxx" class="form-control mt-2 p-3" id="input1">
            </div>
            <div class="col col-sm-1 px-2 mb-2">
              <button style="border-radius: 12px!important;" name="submit" type="submit" class="btn btn-dark bg-dark text-light pt-2 pb-2 ps-5 pe-5" style="font-size: 10px;">Cari Data</button>
          </div>
        </div>
      </form>
    </section>
      <!-- input -->
      <?php include '../tmplt/footer.php';?>
      <?php include '../tmplt/script.php'; ?>
    </div>
  </body>
</html>
