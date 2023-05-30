<?php

require_once "inc/Koneksi.php";
require_once "app/Rtidur.php";

$tdr = new App\Rtidur();

if (isset($_POST['btn_simpan'])) {
    $tdr->simpan();
    header("location:index.php?hal=rtidur_tampil");
}

if (isset($_POST['btn_update'])) {
    $tdr->update();
    header("location:index.php?hal=rtidur_tampil");
}