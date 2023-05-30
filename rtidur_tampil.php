<?php

$kam = new App\Rtidur;
$rows = $kam->tampil();

?>

<h2>Ruangan Tidur</h2>

<a href="index.php?hal=rtidur_input" class="btn">Tambah Barang</a>

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
        <td><?php echo $row['id_rtidur']; ?></td>
        <td><?php echo $row['nama_rtidur']; ?></td>
        <td><?php echo $row['hrg_rtidur']; ?></td>
        <td><a href="index.php?hal=rtidur_edit&id=<?php echo $row['id_rtidur']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=rtidur_delete&id=<?php echo $row['id_rtidur']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
