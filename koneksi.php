
<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "pw3";

//konek ke database

$koneksi=mysqli_connect($host, $user, $pass, $name);


//cek koneksi


if (!$koneksi) {

    die("Connection failed: " . mysqli_connect_error());
}

?>