<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="proses_login.php" method="post">
        <label for="">Email</label><br>
        <input type="email" name="email"><br>

        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>

        <p>Belum punya akun? <a href="register.php">Register</a></p>
        <input type="submit" value="Login">
    </form>
</body>
</html>