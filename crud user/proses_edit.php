<?php
include '../koneksi.php';

// Ambil data dari form
$id_user   = $_POST['id_user'];
$username  = $_POST['username'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$role      = $_POST['role']; // ambil role baru

// Jika password dikosongi, JANGAN update password. kenapa pake if karena saat mengedit password otomatis berubah
// string kosong walaupun kita ga ngubah di passwordnya, jadi daripada keganti jadi pass kosong kita kasih if biar kalo pass nya ga di update ya ttp pake pass lama
if ($password == "" || $password == null) {
    $sql = "UPDATE user SET 
                username = '$username',
                email = '$email',
                role = '$role'
            WHERE id_user = '$id_user'";
} else {
    // password baru → hash MD5
    $password_md5 = md5($password);

    $sql = "UPDATE user SET 
                username = '$username',
                email = '$email',
                password = '$password_md5',
                role = '$role'
            WHERE id_user = '$id_user'";
}

$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("location:user.php?edit=berhasil");
} else {
    echo "Gagal update data!";
}
?>
