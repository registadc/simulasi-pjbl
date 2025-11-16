<?php 
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}


$id_supplier = $_GET['id_supplier'];

$sql = "SELECT * FROM supplier WHERE id_supplier = '$id_supplier'";
$query = mysqli_query($koneksi, $sql);

while($supplier = mysqli_fetch_assoc($query)){

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Supplier</h1>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id_supplier" value="<?= $supplier['id_supplier'] ?>">

        <label for="">Nama Supplier</label><br>
        <input type="text" name="nama_supplier" value="<?= $supplier['nama_supplier'] ?>"><br>

        <label for="">Alamat Supplier</label><br>
        <input type="text" name="alamat_supplier" value="<?= $supplier['alamat_supplier'] ?>"><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>

<?php } ?>