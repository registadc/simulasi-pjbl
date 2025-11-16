<?php 
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = md5('$password')";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query) == 1){
    $user = mysqli_fetch_array($query);
    $_SESSION['email'] = $user['email'];
    header("location:index.php?login=sukses");
}else{
    header("location:login.php?login=gagal");
}
?>

