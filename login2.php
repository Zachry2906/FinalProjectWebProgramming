<?php

if(isset($_POST['submit'])){

    include 'koneksi.php';

    $norek = $_POST['norek'];
    $pass = $_POST['pass'];
    $orang = $_POST['orang'];

    if($orang == 1){
        $query = mysqli_query($connect, "SELECT * FROM admin WHERE username='$norek' AND pass='$pass'");
        $cek = mysqli_num_rows($query);
        if($cek > 0){
            header("location:admin.php");
        }else{
            header("location:login2.php");
        }
    }else if($orang == 2){
        $query = mysqli_query($connect, "SELECT * FROM user WHERE rek_medis='$norek' AND password='$pass'");
        $cek = mysqli_num_rows($query);
        if($cek > 0){
            header("location:user.php");
        }else{
            header("location:login2.php");
        }
    }else{
        header("location:login2.php");
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
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <title>Selamat Datang!</title>
  </head>
  <body class="overflow-x-hidden" style="height: 100vh;">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
        <div class="row shadow-lg h-75 mx-auto d-flex align-items-center justify-content-center" style="border-radius: 15px; width: 80vw;background-image: url(gambar/bg.jpg); background-size: cover;">
            <div class="col ms-5">
                <h1 class="mb-5"><b>Login</b></h1>
                <form action="" method="post">
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label"><i class="bi bi-person"></i></label>
                        <div class="col-sm-10">
                            <select class="form-select" name="orang" aria-label="Default select example">
                                <option selected>Login Sebagai</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                              </select>
                        </div>
                      </div>
                    <div class="mb-4 row">
                        <label for="inputUsername" class="col-sm-2 col-form-label"><i class="bi bi-card-heading"></i></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-none" name="norek" placeholder="No Rekam Medis / Email / Username">
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"><i class="bi bi-lock"></i></label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="pass" placeholder="Password">
                        </div>
                      </div>
                      <button type="submit" name="submit" class="btn bg-dark text-light">Submit</button>
                </form>
            </div>
            <div class="col ms-5">
                <img src="gambar/ms.jpg" alt="" srcset="">
                <p class="mt-3"><a class="link-underline-dark mt-5 ms-5 text-dark text-center" href="login.html">Belum punya akun?</a></p>
            </div>
    </div>
      <!-- Footer -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="script.js"></script>
    </div>
  </body>
</html>
