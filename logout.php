<?php


session_start(); //perintah agar file ini membaca / mengenal / memulai session
session_destroy(); // perintah menghapus semua session yang ada
echo "<script> alert('Logging Out'); window.location = 'index.php'; </script>";

?>