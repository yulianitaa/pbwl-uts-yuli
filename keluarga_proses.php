<?php

require_once "inc/Koneksi.php";
require_once "app/Keluarga.php";

$klrg = new App\Keluarga();

if (isset($_POST['btn_simpan'])) {
    $klrg->simpan();
    header("location:index.php?hal=keluarga_tampil");
}

if (isset($_POST['btn_update'])) {
    $klrg->update();
    header("location:index.php?hal=keluarga_tampil");
}