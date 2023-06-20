<?php 
include 'koneksi.php';

$hapus = mysqli_query($server, "DELETE FROM donatur WHERE nama='$_GET[nama]'");
 if($hapus){
    echo "<script>alert('Data berhasil di hapus!');window.location = 'index.php';</script>";
 }
?>