<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smk Mutu</title>
</head>
<body>
    <h2>Data Barang</h2>
    <br/>
    <a href="tambah.php">+TAMBAH BARANG</a> <br/><br/>
    <table border="1">
    <tr>
        <th>Id Barang</th>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Kategori</th>
        <th>Aksi</th>
       
    </tr>
    <?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"select * from barang");
    while($d = mysqli_fetch_array($data)){
     ?>
     <tr>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['jumlah']; ?></td>
        <td><?php echo $d['kategori']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
            <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
     </tr>
     <?php
    }
    ?>
</body>
</html>
