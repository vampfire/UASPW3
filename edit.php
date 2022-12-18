<html>

<head>

    <title>Inflowy - Bootstrap Templates</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        /* FONTS */
        @import url(../css/clash-display.css);

        @font-face {
            font-family: 'ClashDisplay';
            src: url('../fonts/ClashDisplay-Variable.woff2') format('woff2'),
                url('../fonts/ClashDisplay-Variable.woff') format('woff'),
                url('../fonts/ClashDisplay-Variable.ttf') format('truetype');
            font-weight: 200 700;
            font-display: swap;
            font-style: normal;
        }

        /* VARIABLES */
        :root {
            --c-dark: #212529;
            --c-brand: #4e57d4;
            --c-brand-light: #6970dd;
            --c-brand-rgb: 78, 87, 212;
            --c-body: #727272;
            --font-base: "ClashDisplay", sans-serif;
            --box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.08);
            --transition: all 0.5s ease;
        }

        /* RESET & HELPERS */
        body {
            font-family: var(--font-base);
            line-height: 1.7;
            color: var(--c-body);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-weight: 600;
            color: var(--c-dark);
        }

        a {
            text-decoration: none;
            color: var(--c-brand);
            transition: var(--transition);
        }

        a:hover {
            color: var(--c-brand-light);
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .section-padding {
            padding-top: 140px;
            padding-bottom: 140px;
        }

        .theme-shadow {
            box-shadow: var(--box-shadow);
        }


        /* NAVBAR */
        .navbar {
            box-shadow: var(--box-shadow);
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: var(--c-dark);
        }

        .navbar-nav .nav-link.active {
            color: var(--c-brand);
        }


        /* BTN */
        .btn {
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 0;
            padding: 10px 24px;
        }

        .btn-brand {
            background-color: var(--c-brand);
            border-color: var(--c-brand);
            color: white;
        }

        .btn-brand:hover {
            background-color: var(--c-brand-light);
            border-color: var(--c-brand-light);
            color: white;
        }


        /* Dashboard */
        #dashboard {
            background: linear-gradient(rgba(var(--c-brand-rgb), 0.507), rgba(var(--c-brand-rgb), 0.438));
            background-image: url(https://media.istockphoto.com/id/1219806607/id/foto/biru-abstrak-ungu-hijau-pada-latar-belakang-biru-muda-rendering-3d-realistis.jpg?s=612x612&w=0&k=20&c=FFZIfLzdMTiN5rOvLTDcZi1izF23hbj0Bdb85uR8Pnc=);
            background-position: center;
            background-size: cover;
        }


        /* SECTION TITLE */
        .section-title {
            margin-bottom: 60px;
        }

        .section-title .line {
            width: 60px;
            height: 4px;
            background-color: var(--c-brand);
            margin: 16px auto 24px auto;
        }

        .section-title p {
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }


        /* ICONBOX */
        .iconbox {
            width: 70px;
            height: 70px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(var(--c-brand-rgb), 0.1);
            color: var(--c-brand);
            font-size: 34px;
            flex: none;
        }

        /* CONTACT */
        #contact {
            position: relative;
            z-index: 2;
        }

        #contact::after {
            content: "";
            width: 100%;
            height: 70%;
            background: linear-gradient(rgba(var(--c-brand-rgb), 0.8), rgba(var(--c-brand-rgb), 0.8));
            background-image: url(https://media.istockphoto.com/id/1219806607/id/foto/biru-abstrak-ungu-hijau-pada-latar-belakang-biru-muda-rendering-3d-realistis.jpg?s=612x612&w=0&k=20&c=FFZIfLzdMTiN5rOvLTDcZi1izF23hbj0Bdb85uR8Pnc=);
            background-position: center;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        #contact .form-control {
            border-radius: 0;
        }

        #contact .form-control:focus {
            box-shadow: none;
            border-color: var(--c-brand);
        }

        /* FOOTER */
        footer {
            padding-top: 120px;
        }

        .footer-top {
            padding-bottom: 40px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom {
            padding-top: 40px;
            padding-bottom: 40px;
        }


        footer li,
        footer p,
        footer a {
            color: rgba(255, 255, 255, 0.7);
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer .line {
            width: 40px;
            height: 4px;
            background-color: var(--c-brand);
            margin-top: 12px;
            margin-bottom: 24px;
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 100px;
        }

        .social-icons a:hover {
            background-color: var(--c-brand);
            color: white;
        }
    </style>


</head>


<body>

 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="My project-1.png" alt="" height="125" width="125">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Keluar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create_account.php">Create Game Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampilkan.php">Linked Game Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""></a>
                    </li>
                </ul>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Download Inflowy">
                    Download
                </button>
            </div>
        </div>
    </nav>

    <!-- edit data mahasiswa -->

    <?php
    include('koneksi.php');
    $Kode = $_GET['Kode'];
    $show = mysqli_query($koneksi, "select * from game where Kode = '$Kode'");
    if (mysqli_num_rows($show) == 0) {
        echo '<script>window.history.back()</script>';
    } else {
        $d = mysqli_fetch_assoc($show);
    }


    ?>

    <section class="section-padding bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Edit Your Account</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa repudiandae voluptates architecto eum sit placeat recusandae necessitatibus? Doloremque, voluptatem placeat. Officiis placeat magnam obcaecati suscipit hic, culpa dolorem commodi nobis!</p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="edit_proses.php" method="post" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">


                        <div class="form-group col-lg-12 d-grid" label for="inputState">
                            <input type="hidden" name="Kode" value="<?php echo $Kode; ?>">
                        </div>


                        <div class="form-group col-lg-12 d-grid" label for="inputState">
                        <label for="inputState" class="form-label">Name</label>
                    
                            <input type="text" name="Nama" placeholder="Enter Name" value="<?php echo $d['Nama']; ?>" required>
                        </div>


                        <div class="col-md-12">
    <label for="inputState" class="form-label">Game</label>
    <select name="Genre" id="inputState" class="form-select" required>
      <option value="">Choose...</option>
      <option value="Valorant" <?php if ($d['Genre'] == 'Valorant'){echo 'selected';} ?>>Valorant</option>
      <option value="Genshin Impact" <?php if ($d['Genre'] == 'Genshin Impact'){echo 'selected';} ?>>Genshin Impact</option>
      <option value="Clash of Clans" <?php if ($d['Genre'] == 'Clash of Clans'){echo 'selected';} ?>>Clash of Clans</option>
      <option value="Roblox" <?php if ($d['Genre'] == 'Roblox'){echo 'selected';} ?>>Roblox</option>
    </select>
  </div>


                        <div class="form-group col-lg-12 d-grid">
                            <br>
                            <input type="submit" name="simpan" value="simpan" button class="btn btn-brand"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



</body>

</html>