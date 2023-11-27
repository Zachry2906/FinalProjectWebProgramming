<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "klnk";

    $connect = mysqli_connect($hostname, $username, $password, $database);


    function upload () {
        $namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES ['gambar']['tmp_name'];
      
        if ( $error === 4 ) {
            echo "<script>
                    alert('pilih gamabr terlebih dahulu');
                </script>";
                return false;
        }
      
        //cek apakah yang diplod gambar atau bukan
        $ekstensiGambar = ['jpg', 'jpeg', 'png'];
        $ekstensi = explode('.', $namafile);
        $ekstensi = strtolower(end($ekstensi));
            if (!in_array($ekstensi, $ekstensiGambar)) {
            echo "<script>
                    alert('pilih ekstensi yang valdi');
                </script>";
                return false;
        }
            //cek jika ukuran terlalu besar
            if ($ukuranfile > 10000000 ) {
                echo "<script>
                    alert('ukuran terlalu besar');
                </script>";
            return false;
        }
            // lolos pengecekan file
            //generate nama file baru
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensi;
            move_uploaded_file($tmpName, '../gambar/'. $namaFileBaru);
            return $namaFileBaru;
      
      
      }
?>