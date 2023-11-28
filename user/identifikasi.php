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
    <link rel="icon" type="image/x-icon" href="../gambar/sjww.png" />
    <title>Selamat Datang!</title>
  </head>
  <body class="overflow-x-hidden">
  <div style="bottom:10px; right:10px" id="toasts" class="position-fixed d-flex flex-column align-items-end"></div>
    <div id="home"></div>
    <?php 
    session_start();
    if(isset($_SESSION['status'])){
        include '../tmplt/navUserL.php';
      }else{
        require '../tmplt/navUserNL.php';
      }
    ?>
    <!-- HERO GRID -->
    <section class=" mb-5 mt-5 pt-5" style="background-image: url(../gambar/bg.jpg); background-size: cover;">
    <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="mb-4">
              <br /><br /><br />
              ARTIKEL
            </h2>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($connect,"select * from Artikel");
        while($d = mysqli_fetch_array($data)){
        ?>

          <div class="col-md-4 mb-3">
            <a style="text-decoration:none;" class="text-dark " href="<?php echo $d["link"] ?>">
              <div class="card card-1">
                <img src="../gambar/<?php echo $d["gambar_art"] ?>" class="card-img-top" alt="jendela1" />
                <div class="card-body">
                  <p class="card-text"><?php echo $d["desk_art"] ?></p>
                </div>
              </div>
            </a>
          </div>
          <?php
            }
            ?>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,0L205.7,160L411.4,224L617.1,288L822.9,192L1028.6,96L1234.3,192L1440,128L1440,320L1234.3,320L1028.6,320L822.9,320L617.1,320L411.4,320L205.7,320L0,320Z"></path>
      </svg>
    </section>
      <!-- Project -->
    </div>
      <?php include '../tmplt/footer.php'; ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="../sss.js"></script>
    </div>
  </body>
</html>
