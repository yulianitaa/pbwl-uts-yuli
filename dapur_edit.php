<?php

$id = $_GET['id'];
$dpr= new App\Dapur();

$row = $dpr->edit($id);
?>

<h2>Edit Barang</h2>

<form action="dapur_proses.php" method="post">
    <input type="hidden" name="id_dapur" value="<?php echo $row['id_dapur']; ?>">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_dapur" value="<?php echo $row['nama_dapur']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="hrg_dapur" value="<?php echo $row['hrg_dapur']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 