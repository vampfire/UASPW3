<?php
session_start();
?>



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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">

AOS.init({
  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 900, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});


</script>
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
    --box-shadow: 0px 15px 25px rgba(0,0,0,0.08);
    --transition: all 0.5s ease;
}

/* RESET & HELPERS */
body {
    font-family: var(--font-base);
    line-height: 1.7;
    color: var(--c-body);
}

h1, h2, h3,h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
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

/* IMAGE ZOOM */
.image-zoom {
    position: relative;
    /* overflow: hidden; */
}

.image-zoom-wrapper {
    overflow: hidden;
    position: relative;
}

.image-zoom-wrapper img{
     transition: var(--transition);
}

.image-zoom:hover .image-zoom-wrapper img {
    transform: scale(1.1);
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

/* SERVICE */
.service {
    position: relative;
    overflow: hidden;
    z-index: 2;
}

.service::after {
    content: "";
    width: 40px;
    height: 40px;
    background: rgba(var(--c-brand-rgb), 0.2);
    position: absolute;
    bottom: 0;
    right: 0;
    transition: var(--transition);
}


.service:hover::after {
    width: 100%;
    height: 100%;
    background: var(--c-brand);
    z-index: -1;
}

.service:hover h5,
.service:hover p {
    color: white;
}

.service:hover .iconbox {
    background-color: rgba(255,255,255,0.2);
    color: white;
}

/* COUNTER */
#counter {
    background: linear-gradient(rgba(var(--c-brand-rgb), 0.8), rgba(var(--c-brand-rgb), 0.8));
    background-image: url(https://media.istockphoto.com/id/1219806607/id/foto/biru-abstrak-ungu-hijau-pada-latar-belakang-biru-muda-rendering-3d-realistis.jpg?s=612x612&w=0&k=20&c=FFZIfLzdMTiN5rOvLTDcZi1izF23hbj0Bdb85uR8Pnc=);
    background-position: center;
    background-size: cover;
}

/* PORTFOLIO */
.portfolio-item .iconbox {
    background-color: var(--c-brand);
    color: white;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
}

.portfolio-item:hover .iconbox {
    opacity: 1;
    top: 50%;
}

/* REVIEW */
.review small {
    font-weight: 600;
    text-transform: uppercase;
    color: var(--c-brand);
}

.review-head {
    position: relative;
}

.review-head::after {
    content: "";
    width: 28px;
    height: 28px;
    position: absolute;
    bottom: -14px;
    background-color: white;
    transform: rotate(45deg);
}

/* TEAM */
.team-member-content {
    background-color: var(--c-brand);
    position: absolute;
    bottom: -24px;
    left: 50%;
    width: calc(100% - 50px);
    transform: translateX(-50%);
    padding: 24px;
    transition: var(--transition);
    opacity: 0;
}

.team-member:hover .team-member-content {
    opacity: 1;
    bottom: 24px;
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
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.footer-bottom {
    padding-top: 40px;
    padding-bottom: 40px;
}


footer li,
footer p,
footer a {
    color: rgba(255,255,255,0.7);
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
    background-color: rgba(255,255,255,0.1);
    border-radius: 100px;
}

.social-icons a:hover {
    background-color: var(--c-brand);
    color: white;
}

    </style>



</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="My project-1.png" alt="" height="125" width="125">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#explore">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#more">More</a>
                    </li>
              
              <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>

                    <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
              </li>

              <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
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

    <!-- Landing Page -->
    <section id="dashboard" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase text-white fw-semibold display-1">INFLOWY</h1>
                    <h5 class="text-white mt-3 mb-4">ACCOMPLISH YOUR GAMING REALM IN ONE</h5>
                        <a href="login.php" class="btn bg-light me-2">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">About Us</h1>
                        <div class="line"></div>
                        <p>We aim to be the most game-focused platform in the world</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <img src="My project-1 (2).png" alt="">
                </div>
                <div class="col-lg-5">
                    <h1>ABOUT INFLOWY</h1>
               
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                        <i class="ri-gamepad-line"></i>
                        </div>
                        <div>
                            <h5>We Are</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                        <i class="ri-gamepad-line"></i>            
                        </div>
                        <div>
                            <h5>We Are</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                        <i class="ri-gamepad-line"></i>
                        </div>
                        <div>
                            <h5>We Are</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="valorant-review.jpg" class="d-block w-100" width="70px" height="50px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Genshin.Impact.full.3501129.png" class="d-block w-100" width="70px" height="50px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="roblox-feature.png" class="d-block w-100" width="75px" height="50px"alt="...">
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Awesome</h1>
                        <div class="line"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quam eos totam. Dignissimos ratione alias molestias atque suscipit voluptatibus similique aut mollitia quo optio, placeat nulla magnam debitis nisi eaque.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                        <i class="ri-ghost-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Lorem</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                        <i class="ri-ghost-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Lorem</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                        <i class="ri-ghost-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Lorem</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                        <i class="ri-ghost-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Lorem</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                        <i class="ri-ghost-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Lorem</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                        <i class="ri-ghost-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Lorem</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER -->
    <section id="counter" class="section-padding">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <h1 class="text-white display-4">500K+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Total Downloads</h6>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="text-white display-4">50K+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">User</h6>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="text-white display-4">1K+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Linked Game</h6>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="text-white display-4">50+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Team Members</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPLORE -->
    
    <section id="explore" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Exploration</h1>
                        <div class="line"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda voluptas maiores quas ullam? Mollitia, debitis ut nobis expedita, iste, et quia dolorem hic cupiditate deleniti placeat voluptatibus sed necessitatibus architecto!</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="coc.jpg" alt="">
                        </div>
                        <a href="new.html" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="roblox_1.png" alt="" height="100" width="300">
                        </div>
                        <a href="new.html" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="hoyoverse.jpg" alt="" width="250">
                        </div>
                        <a href="new.html" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="https://upload.wikimedia.org/wikipedia/en/5/51/Minecraft_cover.png" alt="">
                        </div>
                        <a href="new.html" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="Overwatch.jpg" alt="">
                        </div>
                        <a href="new.html" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="Riot-Xbox.jpg" alt="">
                        </div>
                        <a href="new.html" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEW -->

    <section id="reviews" class="section-padding bg-light">


    <div class="col-12 text-center">
        <div class="section-title">
            <h1 class="display-4 fw-semibold">Observe Your Player Character</h1>
            <div class="line"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum quas totam ipsam repellat tempora, iste aliquid ex sequi nesciunt qui. Cupiditate totam, neque libero laudantium deleniti quidem consectetur voluptas distinctio.</p>


        </div> </div>

    <div class="col-12 text-center">

            <img src="Genshin-Impact-Logo.png" alt="" width="200" height="200" allign="center">
        </div>

    

    <div class="col-12 text-center">

<div class="card-group">

    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

        <br>

        <img src="download.png" width="75" height="75" class="mx-auto d-block rounded">

        <div class="card-body">

     <h5 class="card-title text-center" style="color: aquamarine">Anemo</h5>
      <p class="card-text text-center">(Wind/Air)</p>
      <br>
      <p>- Mondstadt -</p>
      <p>(In the game since launch)</p>
    </div>
  </div>

      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

            <br>

            <img src="download (1).png" width="75" height="75" class="mx-auto d-block rounded">

            <div class="card-body">

         <h5 class="card-title text-center" style="color: goldenrod">Geo</h5>
          <p class="card-text text-center">(Rock/Stone/<br>Earth)</p>
          <p>- Liyue -</p>
          <p>(In the game since launch)</p>
        </div>
      </div>

      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

        <br>

        <img src="download (2).png" width="75" height="75" class="mx-auto d-block rounded">

        <div class="card-body">

     <h5 class="card-title text-center" style="color: plum">Electro</h5>
      <p class="card-text text-center">(Lightning/<br>Electricity)</p>
      <p>- Inazuma -</p>
      <p>(Added Summer 2021)</p>
    </div>
  </div>

  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

    <br>

    <img src="download (3).png" width="75" height="75" class="mx-auto d-block rounded">

    <div class="card-body">

 <h5 class="card-title text-center" style="color: yellowgreen">Dendro</h5>
  <p class="card-text text-center">(Grass/Wood/<br>Plants)</p>
  <p>- Sumeru -</p>
  <p>(Added Summer 2022)</p>
</div>
</div>

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

    <br>

    <img src="download (4).png" width="75" height="75" class="mx-auto d-block rounded">

    <div class="card-body">

 <h5 class="card-title text-center" style="color: skyblue">Hydro</h5>
  <p class="card-text text-center">(Water)</p>
  <br>
  <p>- Fontaine -</p>
  <p>(Planned for Summer 2023)</p>
</div>
</div>

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

    <br>

    <img src="download (5).png" width="75" height="75" class="mx-auto d-block rounded">

    <div class="card-body">

 <h5 class="card-title text-center" style="color: orangered">Pyro</h5>
  <p class="card-text text-center">(Fire)</p>
  <br>
  <p>- Natlan -</p>
  <p>(Planned for Summer 2024)</p>
</div>
</div>

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

    <br>

    <img src="download (6).png" width="75" height="75" class="mx-auto d-block rounded">

    <div class="card-body">

 <h5 class="card-title text-center" style="color: paleturquoise">Cyro</h5>
  <p class="card-text text-center">(Ice)</p>
  <br>
  <p>- Snezhnaya -</p>
  <p>(Planned for Summer 2025)</p>
</div>
</div>
      
      
    
    </div>

</div>


</div>



        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                    </div>
                </div>
            </div>


            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="review">
                        <div class="review-person mt-4 d-flex justify-content-center align-items-center">
                            <img src="Character_Venti_Thumb.webp" alt="" width = '100px' height = '100px'>
                            <div class="ms-3">
                                <h5>Venti</h5>
                                <small>Anemo</small>
                            </div>
                        </div>

                        <div class="review-head p-4 bg-black theme-shadow">
                            <div class="text-warning">
                                
                                <p>
                                <i>Rarity : </i><br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"></i>
                                </p>
                              
                            </div>
                         
                            <p style="color:white">Playable Anemo character, free-spirited, and the current mortal vessel of Barbatos, the Anemo Archon.</p>
                        </div>
        
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="review">
                        <div class="review-person mt-4 d-flex justify-content-center align-items-center">
                            <img src="Character_Kaedehara_Kazuha_Thumb.webp" alt="" width = '100px' height = '100px'>
                            <div class="ms-3">
                                <h5>Kazuha</h5>
                                <small>Anemo</small>
                            </div>
                        </div>
                        
                        <div class="review-head p-4 bg-black theme-shadow">
                            <div class="text-warning">
                                
                                <p>
                                <i>Rarity : </i><br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"></i>
                                </p>
                              
                            </div>
                         
                            <p style="color:white">A wandering samurai of the once-famed Kaedehara Clan, temporary crewmember of The Crux.</p>
                        </div>
        
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="review">
                        <div class="review-person mt-4 d-flex justify-content-center align-items-center">
                            <img src="xiao.webp" alt="" width = '100px' height = '100px'>
                            <div class="ms-3">
                                <h5>Xiao</h5>
                                <small>Anemo</small>
                            </div>
                        </div>
                        
                        <div class="review-head p-4 bg-black theme-shadow">
                            <div class="text-warning">
                                
                                <p>
                                <i>Rarity : </i><br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"></i>
                                </p>
                              
                            </div>
                         
                            <p style="color:white">Playable Anemo character, the sole surviving member of the five foremost Yakshas dispatched by Morax.</p>
                        </div>
        
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="review">
                        <div class="review-person mt-4 d-flex justify-content-center align-items-center">
                            <img src="zhongli_030.webp" alt="" width = '100px' height = '100px'>
                            <div class="ms-3">
                                <h5>Zhongli</h5>
                                <small>Geo</small>
                            </div>
                        </div>
                        


                        <div class="review-head p-4 bg-black theme-shadow">
                            <div class="text-warning">
                                
                                <p>
                                <i>Rarity : </i><br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"></i>
                                </p>
                              
                            </div>
                         
                            <p style="color:white">A consultant of the Wangsheng Funeral Parlor, he is later revealed to be the current vessel of the Geo Archon</p>
                        </div>
        
                    </div>
                </div>
               


                <div class="col-lg-4 col-sm-6">
                    <div class="review">
                        <div class="review-person mt-4 d-flex justify-content-center align-items-center">
                            <img src="Character_Albedo_Thumb.webp" alt="" width = '100px' height = '100px'>
                            <div class="ms-3">
                                <h5>Albedo</h5>
                                <small>Geo</small>
                            </div>
                        </div>
                        


                        <div class="review-head p-4 bg-black theme-shadow">
                            <div class="text-warning">
                                
                                <p>
                                <i>Rarity : </i><br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"></i>
                                </p>
                              
                            </div>
                         
                            <p style="color:white">A synthetic human, the Chief Alchemist and Captain of the Investigation Team of the Knights of Favonius.</p>
                        </div>
        
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="review">
                        <div class="review-person mt-4 d-flex justify-content-center align-items-center">
                            <img src="gorou_055.webp" alt="" width = '100px' height = '100px'>
                            <div class="ms-3">
                                <h5>Gorou</h5>
                                <small>Geo</small>
                            </div>
                        </div>
                        


                        <div class="review-head p-4 bg-black theme-shadow">
                            <div class="text-warning">
                                
                                <p>
                                <i>Rarity : </i><br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star"></i>
                                </p>
                              
                            </div>
                         
                            <p style="color:white">A synthetic human, the Chief Alchemist and Captain of the Investigation Team of the Knights of Favonius.</p>
                        </div>
        
                    </div>
                </div>

            </div>
        </div>
    </section>

   

    <!-- More -->
    <section id="more" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Game Installation and Requairement</h1>
                        <div class="line"></div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, aliquid deleniti magni cupiditate quod accusantium nemo, sapiente qui dolorum at laudantium in magnam. Et fuga vitae perferendis, debitis sapiente commodi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="hoyoversee.jpeg" alt="" height="270" width="270">
                        </div>
                        <h5 class="mt-4">Genshin Impact Installation</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi quos magni!</p>
                        <a href="https://genshin.hoyoverse.com/pc-launcher/?utm_source=SEA_google_ID_search_keywords_20201216&mhy_trace_channel=ga_channel&new=1&gclid=CjwKCAiAvK2bBhB8EiwAZUbP1E5f1vFAYkFFkqk33gwp1rlyrd8hsICqQmoQmyHfCghmkIJNGCphTRoC_EYQAvD_BwE#/">Click Here</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="Overwatch2.jpg" alt="" width="270" height="270">
                        </div>
                        <h5 class="mt-4">Overwatch 2 Installation</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi quos magni!</p>
                        <a href="https://overwatch.blizzard.com/en-us/">Click Here</a>
                    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="My project-1.png" alt="" width="270" height="270">
                        </div>
                        <h5 class="mt-4">Find More</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi quos magni!</p>
                        <a href="more.php">More Games</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="My project-1.png" width="125" height="125" alt=""></a>
                        <div class="line"></div>
                  
                        <div class="social-icons">
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                            <a href="#"><i class="ri-discord-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">SERVICES</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Game Platform</a></li>
                     
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">ABOUT</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Company</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Earth</li>
                            <li>(123) 456 - 789</li>
                            <li>www.inflowy.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© Copyright INFLOWY. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>