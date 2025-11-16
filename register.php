<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Form Register</h1>
    <form action="proses_register.php" method="post">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>

        <label for="">Email</label><br>
        <input type="email" name="email"><br>

        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>

        <p>Sudah punya akun? <a href="login.php">Login</a></p>
        <input type="submit" value="Register">
    </form>
</body>
</html>