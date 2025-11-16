<?php 
include '../koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah poduk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form action="proses_tambah.php" method="post">
        <label for="">Nama supplier</label><br>
        <input type="text" name="nama_supplier"><br>

        <label for="">Alamat supplier</label><br>
        <input type="text" name="alamat_supplier"><br><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>