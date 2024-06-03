<?php
$koneksi = mysqli_connect("localhost","root","","minimarket");

mysqli_query($koneksi, "DELETE FROM barang WHERE id='02'")
?>