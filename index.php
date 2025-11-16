<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}

$sql = "SELECT * FROM produk";
$query = mysqli_query($koneksi, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <h1>Tabel Produk</h1><br>
    <button><a href="crud produk/tambah.php">Tambah Produk</a></button><br><br>
    <table border="1">
        <tr>
            <th>ID Produk</th>
            <th>ID supplier</th>
            <th>ID kategori</th>
            <th>Nama produk</th>
            <th>Stok</th>
            <th>Harga beli</th>
            <th>Harga jual</th>
            <th>Aksi</th>
        </tr>
        <?php
        while($produk = mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $produk['id_produk']; ?></td>
                <td><?php echo $produk['id_supplier']; ?></td>
                <td><?php echo $produk['id_kategori']; ?></td>
                <td><?php echo $produk['nama_produk']; ?></td>
                <td><?php echo $produk['stok']; ?></td>
                <td><?php echo $produk['harga_beli']; ?></td>
                <td><?php echo $produk['harga_jual']; ?></td>
                <td>
                    <button><a href="crud produk/edit.php?id_produk=<?= $produk['id_produk']; ?>">Edit</a></button>
                    <button><a href="crud produk/hapus.php?id_produk=<?= $produk['id_produk']; ?>">Hapus</a></button>
                </td>
            </tr>
        <?php } ?>
        
    </table>
</body>
</html>