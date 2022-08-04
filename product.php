<?php
session_start();
include('developer.php');
include('koneksi.php');
include('templates/header.php');
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>PetsQu Shop - Product</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .harga {
            color: #fff;
            font-size: 18px;
            font-weight: bold;
        }

        .berat {
            color: #fff;
            font-size: 14px;
        }

        .card {
            margin: 20px;

        }

        .kaca {
            margin-top: 20px;
        }

        .jenisProduk {
            color: #fff;
            font-size: 20px;
        }

        .description {
            color: #fff;
            font-size: 14px;
        }

        .judul {
            color: #fff;
            font-size: 30px;
        }

        .namakolom {
            color: #fff;
            font-size: 15;
        }

        #datatableid {
            color: #fff;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-black bg-bg">
    <div class="container">
        <div class="form-square row h-100 mt-0 mb-0">
            <!-- <div class="col-sm-9 col-md-7 col-lg-5 mx-auto h-100 mt-0 mb-0"> -->
            <div class="card border-0 shadow rounded-0 h-100">
                <div class="card-body p-4 p-sm-5 h-100">
                    <div class="row text-center">
                        <div class="col align-self-center">
                            <p class="judul">Daftar Produk</p>
                        </div>
                    </div>
                    <div class="kaca" style="padding:40px;">
                        <div class="row mb-3">
                            <table id="datatableid" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="color: #fff" ;>Nomor</th>
                                        <th scope="col" style="color: #fff;">Nama Produk</th>
                                        <th scope="col" style="color: #fff;">Deskripsi</th>
                                        <th scope="col" style="color: #fff;">Berat</th>
                                        <th scope="col" style="color: #fff;">Harga (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (is_array($fetchData)) {
                                        $sn = 1;
                                        foreach ($fetchData as $data) {
                                    ?>
                                            <tr>
                                                <!-- <td><?php echo $sn; ?></td> -->
                                                <td class="berat"><?php echo $data['ID_produk'] ?? ''; ?></td>
                                                <td class="jenisProduk"><?php echo $data['nama_produk'] ?? ''; ?></td>
                                                <td class="berat"><?php echo $data['deskripsi'] ?? ''; ?></td>
                                                <td class="berat"><?php echo $data['berat'] ?? ''; ?></td>
                                                <td class="berat"><?php echo $data['harga'] ?? ''; ?></td>

                                            </tr>
                                        <?php
                                            $sn++;
                                        }
                                    } else { ?>
                                        <tr>
                                            <td colspan="8">
                                                <?php echo $fetchData; ?>
                                            </td>
                                        <tr>
                                        <?php
                                    } ?>
                                        </tr>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatableid').DataTable({
                paging: false,
                ordering: false,

            });
        });
    </script>
</body>