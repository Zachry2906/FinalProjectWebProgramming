<?php

session_start();

$_SESSION['status'] = [];
session_unset();
session_destroy();

header("location:../index.php?pesan=logout");
?>