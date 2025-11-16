<?php
session_start();
include '../koneksi.php';

if(!isset($_SESSION['email'])){
    header("location:login.php?akses=ditolak");
    exit;
}

$sql = "SELECT * FROM user";
$query = mysqli_query($koneksi, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include '../navbar.php'; ?>

    <h1>Tabel User</h1><br>
    <button><a href="tambah.php">Tambah User</a></button><br><br>
    <table border="1">
        <tr>
            <th>ID User</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        <?php
        while($user = mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $user['id_user']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td><?php echo $user['role']; ?></td>
                <td>
                    <button><a href="edit.php?id_user=<?= $user['id_user']; ?>">Edit</a></button>
                    <button><a href="hapus.php?id_user=<?= $user['id_user']; ?>">Hapus</a></button>
                </td>
            </tr>
        <?php } ?>
        
    </table>
</body>
</html>