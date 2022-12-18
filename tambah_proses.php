<?php

if(isset($_POST['tambah']))

{
    include('koneksi.php');
    $Kode = $_POST['Kode'];
    $Nama = $_POST['Nama'];
    $Genre = $_POST['Genre'];

    $input = mysqli_query($koneksi, "insert into game values ('$Kode', '$Nama', '$Genre')");


    if($input)

    {
     
        echo "<script> alert('Successfully Saved'); window.location = 'tampilkan.php'; </script>";
    }

    else

    {
        echo "<script> alert('Failed to Save Data'); window.location = 'tampilkan.php'; </script>";
    }

}

else

{
 
    echo "<script>window.history.back()</script>";
}


?>