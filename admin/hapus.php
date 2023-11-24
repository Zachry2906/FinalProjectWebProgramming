<?php

include "../koneksi.php";

if (isset($_GET['rek_medis'])) {
    $rek_medis = $_GET['rek_medis'];
    $query = mysqli_query($connect, "DELETE FROM user WHERE rek_medis='$rek_medis'");
    header("location: DPasien.php");
} else if (isset($_GET['id_dokter'])) {
    $id_dokter = $_GET['id_dokter'];
    $query = mysqli_query($connect, "DELETE FROM dokter WHERE id_dokter='$id_dokter'");
    header("location: DDokter.php");
}

?>