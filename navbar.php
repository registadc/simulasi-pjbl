<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

        <a class="navbar-brand" href="index.php">Admin Dashboard</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNab">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" href="../index.php">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="crud supplier/supplier.php">Suplier</a>
            </li>

             <li class="nav-item">
                <a class="nav-link active" href="crud user/user.php">User</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="../index.php">Logout</a>
            </li>
        </ul>
        </div>
        </div>
    </nav>
</body>
</html>