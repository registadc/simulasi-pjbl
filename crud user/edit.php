<?php 
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}


$id_user = $_GET['id_user'];

$sql = "SELECT * FROM user WHERE id_user = '$id_user'";
$query = mysqli_query($koneksi, $sql);

while($user = mysqli_fetch_assoc($query)){

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data User</h1>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">

        <label for="">Username</label><br>
        <input type="text" name="username" value="<?= $user['username'] ?>"><br>

        <label for="">Email</label><br>
        <input type="text" name="email" value="<?= $user['email'] ?>"><br><br>

        
        <label for="">Password</label><br>
        <input type="password" name="password" value="<?= $user['password'] ?>"><br><br>

        
         <label for="">Role</label><br>
        <select name="role">
            <option value="admin" <?php if($user['role'] == 'admin'){ echo "selected"; } ?>>Admin</option>
            <option value="user" <?php if($user['role'] == 'user'){ echo "selected"; } ?>>User</option>
        </select><br><br>


        <input type="submit" value="Simpan">
    </form>
</body>
</html>

<?php } ?>