<?php

require_once "inc/Koneksi.php";
require_once "app/Dapur.php";

$dpr = new App\Dapur();

if (isset($_POST['btn_simpan'])) {
    $dpr->simpan();
    header("location:index.php?hal=dapur_tampil");
}

if (isset($_POST['btn_update'])) {
    $dpr->update();
    header("location:index.php?hal=dapur_tampil");
}