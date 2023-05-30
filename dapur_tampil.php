<?php

$kam = new App\Dapur;
$rows = $kam->tampil();

?>

<h2>Dapur</h2>

<a href="index.php?hal=dapur_input" class="btn">Tambah Barang</a>

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
        <td><?php echo $row['id_dapur']; ?></td>
        <td><?php echo $row['nama_dapur']; ?></td>
        <td><?php echo $row['hrg_dapur']; ?></td>
        <td><a href="index.php?hal=dapur_edit&id=<?php echo $row['id_dapur']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=dapur_delete&id=<?php echo $row['id_dapur']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
