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
    <section class=" mb-5 mt-5 pt-5" style="background-image: url(../gambar/bg.jpg); background-size: cover;">
        <h1 class="mt-5" style="margin-left: 285px;">Meet Our Team</h1>
        <div class="carddd d-flex flex-wrap justify-content-center align-items-center mt-5" >
        <?php
            include '../koneksi.php';
            $no = 1;
            $data = mysqli_query($connect,"select * from dokter");
            while($d = mysqli_fetch_array($data)){
            ?>
            <div class="card ms-5 text-dark" style="width: 18rem; border-radius: 40px!important">
                <a href="DetailDok.php?id=<?=$d["id_dokter"] ?>"><img src="../gambar/<?=$d["gambar"]?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="mb-0">Nama : <?= $d["nama"]?></p>
                  <p class="mb-0">Pengalaman : <?= $d["pengalaman"]?> Tahun</p>
                  <p class="mb-0">Spesialis : <?= $d["spesialis"]?></p>
                  <b><p class="mb-0">Harga : <?= $d["harga"]?></p></b>
                </div>
              </div>
            <?php
            }
            ?>
        </div>
    <!-- HERO GRID -->
    <br><br><br>
      <!-- inputGAMBAR -->
      <div class="p-4 card-body mt-5 mx-auto shadow-lg" style="width: 50vw; border-radius: 12px!important; margin-bottom: 140px;">
        <div class="row">
            <div class="col ms-5 col-sm-4 px-2 mb-2 w">
              <form action="caridok.php" method="post">
                <label for="input1" class="ms-2 position-absolute" style="margin-top: -0.25rem !important">
                    <span class="h6 small bg-white text-muted px-1">Spesialis</span>
                </label>
                <input type="text" name="special" class="form-control mt-2 p-3" id="input1">
            </div>
            <div class="col col-sm-4 px-2 mb-2">
                <label for="input2" class="ms-2 position-absolute" style="margin-top: -0.25rem !important">
                    <span class="h6 small bg-white text-muted px-1">Hari</span>
                </label>
                <input type="date" name="date" class="form-control mt-2 p-3" id="input2">
            </div>
            <div class="col col-sm-1 px-2 mb-2">
              <button style="border-radius: 12px!important;"type="submit" name="submit" class="btn btn-dark bg-dark text-light pt-2 pb-2 ps-5 pe-5" style="font-size: 10px;">Cari Jadwal</button>
          </div>
          </form>
        </div>
      </div>
    </section>
      <!-- input -->
      <!-- Project -->
        <div class="bg-primary w-100 mt-5 pb-5">
          <h1 class="mx-auto text-center pt-5">Apa Yang Kami Tawarkan?</h1>
          <div class="row mt-5 d-flex justify-content-center grid gap-0 col-gap-5">
            <div class="col col-md-3 mt-5 pb-5">
              <h4>Identifikasi masalah anda</h4><br>
              <p style="font-size: 12px;">A pay as-you-go solution for: pallet storage, inventory management, fulfillment(e.g. pick and pack), in/out-bound solutions, and more.</p>
            </div>
            <div class="col col-md-3 mt-5 pb-5">
              <h4>Temukan orang yang tepat</h4><br>
              <p style="font-size: 12px;">Search and compare the best shipping rates among dozens of trusted logistic partners for the last mile delivery and freight.</p>
            </div>
            <div class="col col-md-3 mt-5 pb-5">
            <h4>Reservasi</h4><br>
            <p style="font-size: 12px;">Our packaging solutions are optimized for each individual customer and are selected based on on the customer’s specific needs and requirements.</p>
            </div>
          </div>
          <div class="row d-flex align-items-center justify-content-center pb-5">
            <div class="col col-sm-2 mt-4"><button style="border-radius: 12px!important;" class="btn ps-4 pe-4 pt-3 pb-3 ms-3 border border-dark bg-light text-dark">Buat Akun</button></div>
            <div class="col col-sm-2 mt-4"><button style="border-radius: 12px!important;" class="btn pb-3 pt-3 ps-4 pe-4 border border-light bg-dark text-light">Pesan Sekarang!</button></div>
          </div>
        </div>
      <!-- Project -->
      <?php include '../tmplt/footer.php';?>
      <?php include '../tmplt/script.php';?>
    </div>
  </body>
</html>
