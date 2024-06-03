<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Lihat Semua Data</a><br/>
    <h3>INSERT DATA BARANG</h3>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>ID Barang</td>
                <td><input type="text" name="Fid"></td>
            </tr>

            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="Fnama"></td>
            </tr>

            <tr>
                <td>Jumlah Barang</td>
                <td><input type="text" name="Fjumlah"></td>
            </tr>

            <tr>
                <td>Kategori Barang</td>
                <td><input type="text" name="Fkategori"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>