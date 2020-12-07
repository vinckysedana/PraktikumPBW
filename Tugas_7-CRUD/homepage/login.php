<?php 
session_start();
require 'functions.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE user_name = '$username'");

    if ( mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if($password == $row["user_password"]){
            $_SESSION['login'] = true;
            $_SESSION['user_level'] = $row["user_level"];
            header('Location: index.php');
            exit;
        } else {
            echo "
                <script>
                alert('Password yang anda masukkan salah!');
                document.location.href = 'login.php';
                </script>
            ";
        }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tugas PBW</title>
</head>

<style>
    body {
        background-color: #E0FFFF;
    }
    .form1 {
        box-shadow: 0 1px 1px rgba(0,0,0,0.12), 
            0 2px 2px rgba(0,0,0,0.12), 
            0 16px 16px rgba(0,0,0,0.12);
        border-radius: 20px;
        margin-bottom: 250px;
        background-color: white;
    }
    .form-data {
        background-color: white;
        border-radius: 0px 20px 20px 0px;
        margin-bottom: 250px;
    }
    .form-image {
        border-radius: 20px 0px 0px 20px;
        background-image: url("img/store.jpg");
        background-repeat: no-repeat;
        background-size: 1000px;
    }
    .title {
        font-weight: 700;
        color: rgb(66, 66, 66);
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 mt-5 mb-5 form1" >
                <div class="row">
                    <div class="col-md-6 form-image">
                    </div>
                    <div class="col-md-6 form-data" >
                        <h1 class="title text-center mt-5">LOGIN FORM</h1>
                        <div class="mt-5 pl-5 pr-5">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                                        placeholder="Enter username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                </div>
                                <button type="submit" class="btn btn-info" name="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>