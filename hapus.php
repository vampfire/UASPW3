<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>E-Learning USU</title>
        <link rel="icon" href="usu.png">
    </head>
    
    <?php
        if(isset($_GET['Kode']))
        {
            include('koneksi.php');
            $Kode   = $_GET['Kode'];
            $cek    = mysqli_query($koneksi, "select Kode from game where Kode = '$Kode'");
            
            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else
            {
                $del = mysqli_query($koneksi, "delete from game where Kode = '$Kode'");
                if ($del)
                {
        echo "<script> alert('Successfully Deleted'); window.location = 'tampilkan.php'; </script>";
                       
                }
                else
                {
        echo "<script> alert('Failed to Deleted'); window.location = 'login.php'; </script>";
                
                }
            }
        }
    
        else
        {
            echo "<script>window.history.back()</script>";
        }
    ?>
    
    <body>
        
    </body>
</html>