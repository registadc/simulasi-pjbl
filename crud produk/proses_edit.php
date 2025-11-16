<?php 
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}


$id_produk = $_POST['id_produk'];
$id_supplier = $_POST['id_supplier'];
$id_kategori = $_POST['id_kategori'];
$nama_produk = $_POST['nama_produk'];
$stok = $_POST['stok'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];

$sql = "UPDATE produk SET 
        id_supplier = '$id_supplier',
        id_kategori = '$id_kategori',
        nama_produk = '$nama_produk',
        stok = '$stok',
        harga_beli = '$harga_beli',
        harga_jual = '$harga_jual'
        WHERE id_produk = '$id_produk'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:../index.php?edit=sukses');
}else{
    echo "edit data gagal";
}


?>