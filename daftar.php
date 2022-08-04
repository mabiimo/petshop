<?php
session_start();
include "koneksi.php";
include "templates/header.php"
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Petshopqu - Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">


    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

    </style>

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-black bg-bg">

    <div class="d-flex w-100 h-100 mx-auto flex-column">
        <header class="mb-auto py-2">
            <div class="cover-container mx-auto text-white">
                <p class="text-center font-weight-bold mb-2 text-white" style="font-size: 30px; color:#fff; ">Selamat Datang</p>
                <p class="text-center  mb-2 text-white" style="font-size: 20px; color:#fff; ">Masukkan Username dan Password untuk Login</p>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                </nav>
            </div>
        </header>

        <main class="main-content mt-0">
            <section>
                <div class="page-header min-vh-75">
                    <div class="container">
                        <div class="card card-plain mt-8">

                            <div class="card-body">
                                <form method="post">
                                    <label>Nama</label>
                                    <div class="form mb-3">
                                        <input type="text" id="nama" class="form-control" placeholder="Nama" name="nama">
                                    </div>
                                    <label>Username</label>
                                    <div class="mb-3">
                                        <input type="text" id="username" class="form-control" placeholder="Username" name="username">
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" id="password" class="form-control" placeholder="Password" name="passaword">
                                    </div>
                                    <label>Alamat</label>
                                    <div class="mb-3">
                                        <input type="text" id="alamat" class="form-control" placeholder="Alamat" name="alamat">
                                    </div>
                                    <label>No Hp</label>
                                    <div class="mb-3">
                                        <input type="text" id="no_hp" class="form-control" placeholder="No Handphone" name="no_hp">
                                    </div>
                                    <div class="text-center" style="margin-top: 20px;">
                                        <input class="btn btn-primary" type="submit" value="USER BARU" name="UserBaru">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="mt-auto text-white-50">
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>