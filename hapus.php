<?php 
include 'koneksi.php';

$id_produk = $_GET['id_produk'];

$sql = "DELETE FROM produk WHERE id_produk = '$id_produk'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:index.php?hapus=sukses');
}else{
    echo "hapus data gagal";
}


?>