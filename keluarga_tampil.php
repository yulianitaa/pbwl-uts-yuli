<?php

$kam = new App\Keluarga;
$rows = $kam->tampil();

?>

<h2>Ruang Keluarga</h2>

<a href="index.php?hal=keluarga_input" class="btn">Tambah Barang</a>

<table>
    <tr>
        <th>ID BARANG</th>
        <th>NAMA BARANG</th>
        <th>HARGA BARANG</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_keluarga']; ?></td>
        <td><?php echo $row['nama_keluarga']; ?></td>
        <td><?php echo $row['hrg_keluarga']; ?></td>
        <td><a href="index.php?hal=keluarga_edit&id=<?php echo $row['id_keluarga']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=keluarga_delete&id=<?php echo $row['id_keluarga']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
