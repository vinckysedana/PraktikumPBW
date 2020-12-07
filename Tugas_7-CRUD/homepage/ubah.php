<?php 

session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
} 

require 'functions.php';

$kode = $_GET["kode"];

$barang = query("SELECT * FROM barang WHERE barang_kode = '$kode'")[0];

if (isset($_POST["submit"])) {


    if (ubah($_POST, $kode)>0) {
        echo "
            <script>
            alert('Data berhasil di diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
            alert('Data gagal diubah!');
            document.location.href = 'index.php';
            </script>

        ";
    }
}


 ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tugas PBW</title>
</head>

<style>
    body {
        background-color: #E0FFFF;
    }
    .table100 {
        background-color: white;
        border-radius: 20px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Daftar Barang</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        </ul>
        <span class="navbar-text pr-5">
          Status : <?php echo $_SESSION['user_level']; ?> | <a href="logout.php">Logout</a>
        </span>
      </div>
    </nav>
    <h1 class="mt-5 mb-5 text-center">Tambah Barang</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pr-5 pl-5 pt-3 pb-3 table100">
                    <form action="" method="post">
                      <div class="form-group">
                        <label for="kode">Kode barang</label>
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan kode barang" required minlength="5" maxlength="5" value="<?php echo $barang['barang_kode'] ?>">
                        <small id="emailHelp" class="form-text text-muted" style="color: red">5 Karakter*</small>
                      </div>
                      <div class="form-group">
                        <label for="nama">Nama barang</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama barang" required minlength="3" maxlength="20" value="<?php echo $barang['barang_nama'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="jumlah">Jumlah barang</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah barang" required value="<?php echo $barang['barang_jumlah'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga barang</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga barang" required value="<?php echo $barang['barang_harga'] ?>">
                      </div>

                      
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>