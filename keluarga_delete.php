<?php

$id = $_GET['id'];

$klrg = new App\Keluarga();
$rows = $klrg->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=keluarga_tampil">Kembali</a>
</div>