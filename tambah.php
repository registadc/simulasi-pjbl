<?php 
include 'koneksi.php';

$supplier = "SELECT * FROM supplier";
$query_supplier = mysqli_query($koneksi, $supplier);

$kategori = "SELECT * FROM kategori";
$query_kategori = mysqli_query($koneksi, $kategori);

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

        <label for="">Nama produk</label><br>
        <input type="text" name="nama_produk"><br>

        <label for="">Stok</label><br>
        <input type="number" name="stok"><br>

        <label for="">Harga beli</label><br>
        <input type="text" name="harga_beli"><br>

        <label for="">Harga jual</label><br>
        <input type="text" name="harga_jual"><br><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>