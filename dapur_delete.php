<?php

$id = $_GET['id'];

$dpr = new App\Dapur();
$rows = $dpr->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=dapur_tampil">Kembali</a>
</div>