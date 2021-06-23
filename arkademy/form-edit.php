<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk = '".$_GET['nama_produk']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
</head>
<body>
<a href="index.php">Data Produk</a><br><br>
    <h2>Edit Data Produk</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="nama-produk" value="<?php echo $result['nama_produk']?>" require></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><input type="text" name="keterangan" value="<?php echo $result['keterangan']?>" require></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" value="<?php echo $result['harga']?>" require></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" value="<?php echo $result['jumlah']?>" require></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" value="Simpan"></td>
            </tr>
        </table>
    </form>   
    <?php
    include 'koneksi.php';
    if(isset($_POST['edit'])){
   
    }
    ?> 
</body>
</html>