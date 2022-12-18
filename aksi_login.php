<?php
session_start();
include "koneksi.php";

//tangkap data yang dikirim dari form login
$username = $_POST["username"];
$password= $_POST["password"];

//kueri data dari database
$query=mysqli_query($koneksi,"select * from user
 where username='$username' and password='$password'");

$cek=mysqli_num_rows($query); //melakukan query

//mengecek apakah username dan password ada di database
if($cek==TRUE){
        echo "<script> alert('Logging In'); window.location = 'create_account.php'; </script>";
        $_SESSION['username']=$username; 
 }
else{
echo "<script> alert('Wrong Username or Password'); window.location = 'login.php'; </script>";
}
?>