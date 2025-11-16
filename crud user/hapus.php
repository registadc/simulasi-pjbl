<?php 
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}

$id_user = $_GET['id_user'];

$sql = "DELETE FROM user WHERE id_user = '$id_user'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:user.php?hapus=sukses');
}else{
    echo "hapus data gagal";
}


?>