<?php
include "templates/header.php";
include "koneksi.php";
session_start();

if (isset($_POST["Login"])) {
    $USERNAME = $_POST["Username"];
    $PASSWORD = $_POST["Password"];

    $QUERY = mysqli_query($KONEKSI, "SELECT * FROM t_pelanggan WHERE Username = '$USERNAME' AND Password = '$PASSWORD'") or die();

    if (mysqli_num_rows($QUERY) > 0) {
        $DATA = mysqli_fetch_assoc($QUERY);

        if ($DATA["role"] == "admin") {
            echo "Login sebagai Admin";
            $_SESSION["role"] = "admin";
        } else {
            echo "Login sebagai Pelanggan";
            $_SESSION["role"] = "pelanggan";
        }

        header("location: index.php");
    }
}
?>


<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>PetsQu Shop - Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">


    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    </style>

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-black bg-bg">
    <main class="main-content mt-0">
        <section>
            <div class="container">
                <div class="card card-plain mt-8">
                    <div class="card-header pb-0 text-left bg-transparent">
                        <p class="text-center font-weight-bold mb-2 text-white" style="font-size: 30px; color:#fff; ">Selamat Datang</p>
                        <p class="text-center  mb-2 text-white" style="font-size: 20px; color:#fff; ">Masukkan Username dan Password untuk Login</p>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <label style="color:#fff; ">Username</label>
                            <div class="mb-3">
                                <input type="text" id="Username" class="form-control" placeholder="Username" name="Username">
                            </div>
                            <label style="color:#fff; ">Password</label>
                            <div class="mb-3">
                                <input type="password" id="password" class="form-control" placeholder="Password" name="Password">
                            </div>
                            <div class="text-center">
                                <input class="btn btn-primary" type="submit" value="Login" name="Login">
                                <br><br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="mt-auto text-white-50">
    </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>