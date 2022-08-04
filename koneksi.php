<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "petshopqu";

$KONEKSI = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DATABASE) or
    die("koneksi tidak terhubung");

// TAMBAH DATA
if (isset($_POST["Tambah"])) {
    $nama_produk        = $_POST["nama_produk"];
    $harga              = $_POST["harga"];
    $deskripsi          = $_POST["deskripsi"];
    $berat              = $_POST["berat"];

    $query = "INSERT INTO t_produk (ID_produk, nama_produk,harga,deskripsi,berat) VALUES (NULL, '$nama_produk', '$harga', '$deskripsi',$berat)";
    $query_run = mysqli_query($KONEKSI, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header("Location: admin.php");
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

// EDIT DATA
if (isset($_POST['updatedata'])) {

    $ID_produk        = $_POST['ID_produk'];
    $nama_produk    = $_POST['nama_produk'];
    $harga          = $_POST['harga'];
    $deskripsi        = $_POST['deskripsi'];
    $berat            = $_POST['berat'];

    $query = "UPDATE t_produk SET nama_produk='$nama_produk', harga ='$harga', deskripsi='$deskripsi', berat=' $berat' WHERE ID_produk='$ID_produk'  ";
    $query_run = mysqli_query($KONEKSI, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:admin.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}

// DELETE DATA
if (isset($_POST['deletedata'])) {
    $ID_produk = $_POST['ID_produk'];

    $query = "DELETE FROM t_produk WHERE ID_produk='$ID_produk'";
    $query_run = mysqli_query($KONEKSI, $query);

    if ($query_run) {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:admin.php");
    } else {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

// LOGIN BELUM BERHASIL
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

// Regis
if (isset($_POST["UserBaru"])) {
    $nama       = $_POST["nama"];
    $username             = $_POST["username"];
    $password         = $_POST["password"];
    $alamat           = $_POST["alamat"];
    $no_hp           = $_POST["no_hp"];
    $role           = $_POST["role"];

    $query = "INSERT INTO t_pelanggan (nama, username, password, alamat, no_hp, role) VALUES ('$nama', '$username', '$password', '$alamat', '$no_hp', 'PELANGGAN')";
    $query_run = mysqli_query($KONEKSI, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header("Location: index.php");
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

// image
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;

    $db = mysqli_connect("localhost", "root", "", "geeksforgeeks");

    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";

    // Execute query
    mysqli_query($db, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
