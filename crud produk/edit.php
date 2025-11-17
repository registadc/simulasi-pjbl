<?php 
session_start();
include '../koneksi.php';

if (!isset($_SESSION['email'])) {
    header("location:login.php?akses=ditolak");
    exit;
}

$id_produk = $_GET['id_produk'];

$sql = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
$query = mysqli_query($koneksi, $sql);

$supplier = mysqli_query($koneksi, "SELECT * FROM supplier");
$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");

while ($produk = mysqli_fetch_assoc($query)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            padding-top: 70px;
        }
    </style>
</head>

<body class="bg-white">

<?php include '../navbar.php'; ?>

<div class="container mt-5" >
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">

                <div class="card-header bg-light text-black text-center">
                    <h5 class="m-0">Edit Data Produk</h5>
                </div>

                <div class="card-body">

                    <form action="proses_edit.php" method="post">
                        <input type="hidden" name="id_produk" value="<?= $produk['id_produk'] ?>">

                        <div class="mb-3">
                            <label class="form-label">Nama Supplier</label>
                            <select name="id_supplier" class="form-select" required>
                                <?php while ($sup = mysqli_fetch_assoc($supplier)) { ?>
                                    <option value="<?= $sup['id_supplier'] ?>"
                                        <?= ($sup['id_supplier'] == $produk['id_supplier']) ? 'selected' : '' ?>>
                                        <?= $sup['nama_supplier'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <select name="id_kategori" class="form-select" required>
                                <?php while ($kat = mysqli_fetch_assoc($kategori)) { ?>
                                    <option value="<?= $kat['id_kategori'] ?>"
                                        <?= ($kat['id_kategori'] == $produk['id_kategori']) ? 'selected' : '' ?>>
                                        <?= $kat['nama_kategori'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" value="<?= $produk['nama_produk'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control" name="stok" value="<?= $produk['stok'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga Beli</label>
                            <input type="text" class="form-control" name="harga_beli" value="<?= $produk['harga_beli'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga Jual</label>
                            <input type="text" class="form-control" name="harga_jual" value="<?= $produk['harga_jual'] ?>" required>
                        </div>

                        <button class="btn btn-primary w-100">Simpan</button>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>

<?php } ?>
