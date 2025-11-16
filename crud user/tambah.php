<?php 
include '../koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah user</title>
</head>
<body>
    <h1>Tambah User</h1>
    <form action="proses_tambah.php" method="post">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>

        <label for="">Email</label><br>
        <input type="email" name="email"><br><br>

        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>

        <label for="">Role</label><br>
        <input type="text" name="role"><br><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>