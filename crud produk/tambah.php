<?php 
include '../koneksi.php';

$supplier = "SELECT * FROM supplier";
$query_supplier = mysqli_query($koneksi, $supplier);

$kategori = "SELECT * FROM kategori";
$query_kategori = mysqli_query($koneksi, $kategori);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah poduk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            padding: 70px;
        }
    </style>
</head>
<body class="bg-white">

<?php include '../navbar.php'; ?>

<div class="container mt-5" >
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">

                 <div class="card-header bg-light text-black text-center">
                    <h5 class="m-0">Tambah Data Produk</h5>
                </div>

                <div class="card-body">
                    <form action="proses_tambah.php" method="post">

                        <div class="mb-3">
                            <label for="" class="form-label">Nama supplier</label><br>
                            <select name="id_supplier" class="form-select">
                                <?php while($data_supplier = mysqli_fetch_array($query_supplier)){ ?>
                                    <option value="<?php echo $data_supplier['id_supplier']; ?>"><?php echo $data_supplier['nama_supplier']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Nama kategori</label><br>
                            <select name="id_kategori" class="form-select">
                                <?php while($kategori = mysqli_fetch_array($query_kategori)){ ?>
                                    <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control" name="stok">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga Beli</label>
                            <input type="text" class="form-control" name="harga_beli">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga Jual</label>
                            <input type="text" class="form-control" name="harga_jual">
                        </div>

                        <button class="btn btn-primary w-100">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>