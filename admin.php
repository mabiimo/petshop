<?php
session_start();
include('developer.php');
include('koneksi.php');
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Petshopqu- Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        .judul {
            color: #000;
            font-size: 30px;
        }
    </style>

</head>

<body>
    <!-- Delete -->
    
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Data </h5>

                </div>

                <form method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="ID_produk" id="ID_produk">

                        <h4> Apakah anda yakin akan menghapusnya ? </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Hapus Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Delete -->

    <!-- Edit Data -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Data </h5>

                </div>

                <form method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="ID_produk" id="ID_produk">

                        <div class="form-group">
                            <label> Nama Produk </label>
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Ganti Nama Produk">
                        </div>

                        <div class="form-group">
                            <label> Deskripsi </label>
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Ganti Deskripsi">
                        </div>

                        <div class="form-group">
                            <label> harga </label>
                            <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga">
                        </div>

                        <div class="form-group">
                            <label> Berat </label>
                            <input type="text" name="berat" id="berat" class="form-control" placeholder="Berat">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>


                </form>

            </div>
        </div>
    </div>

    <!-- Edit Data -->
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col align-self-center">
                <p class="judul">Daftar Produk</p>
            </div>
        </div>
        <div class="form-square row h-100 mt-0 mb-0">
            <!-- <div class="col-sm-9 col-md-7 col-lg-5 mx-auto h-100 mt-0 mb-0"> -->
            <div class="card border-0 shadow rounded-0 h-100">
                <div class="card-body p-4 p-sm-5 h-100">
                    <div class="row mb-3">
                        <table id="datatableid" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Harga (Rp)</th>
                                    <th scope="col">Berat</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
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
                                            <td><?php echo $data['ID_produk'] ?? ''; ?></td>
                                            <td><?php echo $data['nama_produk'] ?? ''; ?></td>
                                            <td><?php echo $data['deskripsi'] ?? ''; ?></td>
                                            <td><?php echo $data['harga'] ?? ''; ?></td>
                                            <td><?php echo $data['berat'] ?? ''; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger deletebtn"> HAPUS DATA</button>
                                            </td>

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
    <!-- Button trigger modal -->

    <div class="container">
        <a class="btn btn-primary" type="submit" value="Tambah Produk" name="Tambah Produk" href="tambahdata.php" style="margin-top: 20px;">Tambah Produk</a>

    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {

            $('.editbtn').on('click', function() {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#ID_produk').val(data[0]);
                $('#nama_produk').val(data[1]);
                $('#deskripsi').val(data[2]);
                $('#harga').val(data[3]);
                $('#berat').val(data[4]);
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            $('.deletebtn').on('click', function() {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#ID_produk').val(data[0]);

            });
        });
    </script>


</body>

</html>