<?php 
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}


$id_supplier = $_POST['id_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$alamat_supplier = $_POST['alamat_supplier'];

$sql = "UPDATE supplier SET 
        id_supplier = '$id_supplier',
        nama_supplier = '$nama_supplier',
        alamat_supplier = '$alamat_supplier'
        WHERE id_supplier = '$id_supplier'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:supplier.php?edit=sukses');
}else{
    echo "edit data gagal";
}


?>