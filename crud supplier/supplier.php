<?php
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}

$sql = "SELECT * FROM supplier";
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
    <?php include '../navbar.php'; ?>

    <h1>Tabel Supplier</h1><br>
    <button><a href="tambah.php">Tambah Supplier</a></button><br><br>
    <table border="1">
        <tr>
            <th>ID supplier</th>
            <th>Nama supplier</th>
            <th>Alamat supplier</th>
            <th>Aksi</th>
        </tr>
        <?php
        while($supplier = mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $supplier['id_supplier']; ?></td>
                <td><?php echo $supplier['nama_supplier']; ?></td>
                <td><?php echo $supplier['alamat_supplier']; ?></td>
                <td>
                    <button><a href="edit.php?id_supplier=<?= $supplier['id_supplier']; ?>">Edit</a></button>
                    <button><a href="hapus.php?id_supplier=<?= $supplier['id_supplier']; ?>">Hapus</a></button>
                </td>
            </tr>
        <?php } ?>
        
    </table>
</body>
</html>