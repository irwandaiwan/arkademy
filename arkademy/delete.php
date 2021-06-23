<?php
include 'koneksi.php';
if(isset($_GET['nama_produk']))
    $delete = mysqli_query($conn, "DELETE FROM  produk where nama_produk= '".$_GET['nama_produk']."'");
    header('location:index.php');
?>