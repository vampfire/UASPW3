<?php

if(isset($_POST['simpan']))

{
    
    include('koneksi.php');
    $Kode= $_POST['Kode'];
    $Nama = $_POST['Nama'];
    $Genre = $_POST['Genre'];
    $update = mysqli_query($koneksi, "update game set
    
    Nama = '$Nama',
    Genre = '$Genre'

    where Kode = '$Kode'");


    if($update)

    {
        echo "<script> alert('Successfully Updated'); window.location = 'tampilkan.php'; </script>";
    }

    else

    {
        echo "<script> alert('Failed to Updated'); window.location = 'tampilkan.php'; </script>";
    }

}

else

{
 
    echo "<script> alert('Failed to Update'); window.location = 'tampilkan.php'; </script>";
}


?>