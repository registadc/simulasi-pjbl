<?php
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}


$id_user = $_POST['id_user'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];


$sql = "INSERT INTO user(id_user, username, email, password, role) 
        VALUES
        ('$id_user', '$username', '$email', md5('$password'), '$role')";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:user.php?tambah=sukses');   
}else{
    echo "tambah data gagal";   
}

?>