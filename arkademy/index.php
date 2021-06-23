<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Produk</title>
</head>
<body>
<h2>Data Produk</h2>
<a href="form-input.php">Tambah Data</a><br><br>
 <table border="1" cellspacing="0" width="50%">
    <tr style="text-align:center;font-weight:bold;background-color:#eee;">
        <td>No</td>
        <td>Nama Produk</td>
        <td>Keterangan</td>
        <td>Harga</td>
        <td>Jumlah</td>
        <td>Opsi</td>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $select = mysqli_query($conn, "SELECT * FROM produk");
    while($hasil = mysqli_fetch_array($select)){
    ?>
    <tr style="text-align:center;">
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil['nama_produk']?></td>
        <td><?php echo $hasil['keterangan']?></td>
        <td><?php echo $hasil['harga']?></td>
        <td><?php echo $hasil['jumlah']?></td>
        <td>
            <a href="form-edit.php">Edit</a> |
            <a href="delete.php?nama_produk=<?php echo $hasil['nama_produk'] ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
 </table>   
</body>
</html>
