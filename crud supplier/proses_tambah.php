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

$sql = "INSERT INTO supplier(id_supplier, nama_supplier, alamat_supplier) 
        VALUES
        ('$id_supplier', '$nama_supplier', '$alamat_supplier')";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:supplier.php?tambah=sukses');   
}else{
    echo "tambah data gagal";   
}

?>