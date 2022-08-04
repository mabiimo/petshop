<?php
include "templates/header.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Petshopqu</title>
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="navbar-fixed-top.css" rel="stylesheet">
  <script src="assets/js/ie-emulation-modes-warning.js"></script>
  <link rel="stylesheet" href="templates/css/style.css" />

</head>

<body class="body">

  <div class="container">
    <section class="about">
      <div class=" container">
        <div class="row text-center">
          <div class="col align-self-center">
            <h2 class="about fw-bold pt-5 mt-5" style="color: #f2ebeb " data-aos="fade-down">Selamat Datang</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center m-3">
          <div class="col-md-4 align-self-center m-5 text-left">
            <div class="kaca p-3">
              <!-- ini ditambain effect kaca pada about me disini, pembuka div kaca -->
              <h2 class="aboutme bold fw-bold pt-5 mt-5" style="color: #f2ebeb" data-aos="fade-down">Selamat Datang di Website</h2>
              <h2 class="aboutme bold fw-bold pt-5 mt-5" style="color: #f2ebeb" data-aos="fade-down">Petshopqu</h2>
              <div class="btn_about justify-content-center mt-5 text-center" data-aos="fade-right">
                <a href="product.php" target="_blank" class="contact btn btn-lg btn-outline">

                  Lihat Produk
                </a>
              </div>
            </div> <!-- ini ditambain effect kaca pada about me disini, penutup div kaca -->
          </div>
          <div class="col-md-4 align-self-center">
            <figure class="figure pt-2" data-aos="fade-down">
              <img src="templates/img/animals.png" class="figure-img img-fluid rounded" alt="naiksepeda" />
            </figure>
          </div>
        </div>
      </div>

    </section>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/dist/js/bootstrap.min.js"></script>
  <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>