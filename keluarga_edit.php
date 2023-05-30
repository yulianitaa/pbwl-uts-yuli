<?php

$id = $_GET['id'];
$klrg= new App\Keluarga();

$row = $klrg->edit($id);
?>

<h2>Edit Barang</h2>

<form action="keluarga_proses.php" method="post">
    <input type="hidden" name="id_keluarga" value="<?php echo $row['id_keluarga']; ?>">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_keluarga" value="<?php echo $row['nama_keluarga']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="hrg_keluarga" value="<?php echo $row['hrg_keluarga']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 