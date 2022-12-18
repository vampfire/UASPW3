    <?php

if(isset($_POST['create']))

{
    include('koneksi.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $input = mysqli_query($koneksi, "insert into user values ('$username', '$password')");


    if($input)

    {

        echo "<script> alert('Registration Successful'); window.location = 'index.php'; </script>";

    }

    else

    {

        echo "<script> alert('Registration Failed'); window.location = 'index.php'; </script>";
        
    }

}

else

{
 
    echo "<script>window.history.back()</script>";
}


?>
    

    </body>

    </html>
       