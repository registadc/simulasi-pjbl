<?php 
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}


$id_produk = $_GET['id_produk'];

$sql = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
$query = mysqli_query($koneksi, $sql);

$supplier = "SELECT * FROM supplier";
$query_supplier = mysqli_query($koneksi, $supplier);

$kategori = "SELECT * FROM kategori";
$query_kategori = mysqli_query($koneksi, $kategori);

while($produk = mysqli_fetch_assoc($query)){

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Produk</h1>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id_produk" value="<?= $produk['id_produk'] ?>">
        <label for="">Nama supplier</label><br>
        <select name="id_supplier">
            <?php while($data_supplier = mysqli_fetch_array($query_supplier)){ ?>
                <option value="<?php echo $data_supplier['id_supplier']; ?>"><?php echo $data_supplier['nama_supplier']; ?></option>
            <?php } ?>
        </select><br>

        <label for="">Nama kategori</label><br>
        <select name="id_kategori">
            <?php while($kategori = mysqli_fetch_array($query_kategori)){ ?>
                <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?></option>
            <?php } ?>
        </select><br>

        <label for="">Nama Produk</label><br>
        <input type="text" name="nama_produk" value="<?= $produk['nama_produk'] ?>"><br>

        <label for="">Stok</label><br>
        <input type="number" name="stok" value="<?= $produk['stok'] ?>"><br>

        <label for="">Harga Beli</label><br>
        <input type="text" name="harga_beli" value="<?= $produk['harga_beli'] ?>"><br>

        <label for="">Harga Jual</label><br>
        <input type="text" name="harga_jual" value="<?= $produk['harga_jual'] ?>"><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>

<?php } ?>