<?php

$id = $_GET['id'];
$tdr= new App\Rtidur();

$row = $tdr->edit($id);
?>

<h2>Edit Barang</h2>

<form action="rtidur_proses.php" method="post">
    <input type="hidden" name="id_rtidur" value="<?php echo $row['id_rtidur']; ?>">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_rtidur" value="<?php echo $row['nama_rtidur']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="hrg_rtidur" value="<?php echo $row['hrg_rtidur']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 