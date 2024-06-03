<?php 
include 'koneksi.php';

$id = $_POST['Fid'];
$nama = $_POST['Fnama'];
$jumlah = $_POST['Fjumlah'];
$kategori = $_POST['Fkategori'];

mysqli_query($koneksi,"INSERT INTO barang VALUES('$id','$nama','$jumlah','$kategori')");
header("location:index.php");
?>