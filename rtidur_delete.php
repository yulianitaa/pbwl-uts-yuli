<?php

$id = $_GET['id'];

$tdr = new App\Rtidur();
$rows = $tdr->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=rtidur_tampil">Kembali</a>
</div>