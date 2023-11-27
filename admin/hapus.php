<?php

include "../koneksi.php";

if (isset($_GET['rek_medis'])) {
    $rek_medis = $_GET['rek_medis'];
    $query = mysqli_query($connect, "DELETE FROM user WHERE rek_medis='$rek_medis'");
    header("location: DPasien.php");
} else if (isset($_GET['id_dokter'])) {
    $id_dokter = $_GET['id_dokter'];
    $query2 = mysqli_query($connect, "DELETE FROM jadwal_dokter WHERE id_dokter='$id_dokter'");
    $query = mysqli_query($connect, "DELETE FROM dokter WHERE id_dokter='$id_dokter'");
    header("location: DDokter.php");
} else if (isset($_GET['id_jadwal']) && isset($_GET['id_pesanan'])) {
    $id_jadwal = $_GET['id_jadwal'];
    $id_pesanan = $_GET['id_pesanan'];
    $query = mysqli_query($connect, "DELETE FROM pesanan WHERE id_pesanan='$id_pesanan'");
    $query2 = mysqli_query($connect, "DELETE FROM jadwal_dokter WHERE id_jadwal='$id_jadwal'");
    header("location: DPesan.php");
} else if (isset($_GET['id_art'])) {
    $id_art = $_GET['id_art'];
    $query = mysqli_query($connect, "DELETE FROM Artikel WHERE id_art='$id_art'");
    header("location: DArtikel.php");
}

?>