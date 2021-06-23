<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>
<body>
<a href="index.php">Data Produk</a><br><br>
    <h2>Tambah Data Produk</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="nama-produk" placeholder="Nama Produk" require></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><input type="text" name="keterangan" placeholder="Keterangan" require></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" placeholder="Harga" require></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" placeholder="Jumlah" require></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>   
    <?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
    $insert = mysqli_query($conn, "INSERT INTO produk VALUES 
                            ('".$_POST['nama-produk']."',
                            '".$_POST['keterangan']."',
                            '".$_POST['harga']."',
                            '".$_POST['jumlah']."')");
        if($insert){
            echo 'Data telah disimpan';
        }else{
            echo 'Data tidak tersimpan';
        }
    }
    ?> 
</body>
</html>