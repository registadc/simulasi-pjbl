<?php 
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}

$id_supplier = $_GET['id_supplier'];

$sql = "DELETE FROM supplier WHERE id_supplier = '$id_supplier'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:supplier.php?hapus=sukses');
}else{
    echo "hapus data gagal";
}


?>