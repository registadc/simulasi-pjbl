<?php

include 'koneksi.php';

$id_supplier = $_POST['id_supplier'];
$id_kategori = $_POST['id_kategori'];
$nama_produk = $_POST['nama_produk'];
$stok = $_POST['stok'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];

$sql = "INSERT INTO produk(id_supplier, id_kategori, nama_produk, stok, harga_beli, harga_jual) 
        VALUES
        ('$id_supplier', '$id_kategori', '$nama_produk', '$stok', '$harga_beli', '$harga_jual')";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:index.php?tambah=sukses');   
}else{
    echo "tambah data gagal";   
}

?>