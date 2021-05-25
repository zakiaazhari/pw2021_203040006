<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
// $t_hoddie = query("SELECT * FROM t_hoddie");
$t_hoddie = query('SELECT * FROM t_hoddie');

?>


<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!-- my CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>My Web</title>
</head>

<body id="home" class="scrollspy">

    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="blue darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo">Zak'Shop</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#about">Profil Toko Online</a></li>
                        <li><a href="#services">Product</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="">Home</a></li>
        <li><a href="#about">Profil Toko Online</a></li>
        <li><a href="#services">Product</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="img/slider/9.jpg">
                <div class="caption Left-align">
                    <h3></h3>

                    <h5 class="center light grey-text text-darken-3"></h5>
                </div>
            </li>
            <li>
                <img src="img/slider/10.jpg">
                <div class="caption right-align">
                    <h3></h3>
                    <h5 class="center light grey-text text-darken-3"></h5>
                </div>
            </li>
            <li>
                <img src="img/slider/1.jpg">
                <div class="caption center-align">
                    <h3></h3>
                    <h5 class="center light grey-text text-darken-3"></h5>
                </div>
            </li>
        </ul>
    </div>

    <!-- About Us -->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">Profil Toko online</h3>
                <div class="col m6 light">
                    <div class="row m-2">
                        <div class="col text-justify">
                            <p>Zak'Shop adalah sebuah website toko online yang dibangun oleh seorang mahasiswa dari perguruan Tinggi yang bernama Zaki Auliya Azhari. Dan kini kami hadir sebagai salah satu toko online yang menjual berbagai produk Hoddie,
                                yang membantu melengkapi style anda menjadi lebih keren. Zak'Shop menyediakan bermacam-macam koleksi Hoddie - Hoddie.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 light">
                    <div class="row m-2">
                        <div class="col text-justify">
                            <p>Kemudahan berbelanja online sebagai akibat dari perkembangan zaman dapat kita rasakan. Toko online Zak'Shop menjawab tantangan dari kemajuan zaman dalam bidang jual beli online. Kepercayaan dari konsumen adalah penting untuk
                                kami terus melayani kebutuhan Anda semua. Harapan kedepan adalah menjadi ujung tombak pemasaran produk.</p>
                        </div>
                    </div>
                </div>
    </section>


    <!-- Clients -->
    <div id="Clients" class="parallax-container scrollspy">
        <div class="parallax"> <img src="img/slider/14.jpg"></div>
        <br>
        <br>
        <div>
            <div class="col m6 light">
                <h3 class="center light black-text">Toko Online Kami Selalu Memberikan yang Terbaik Kepada Konsumen</h3>
                <h3 class="center light black-text">Semoga Harimu Menyenangkan!!</h3>
            </div>
        </div>

        <div class="container clients">
            <h3 class="center light white-text"></h3>
            <div class="row">
            </div>
        </div>
    </div>
    </div>

    <!-- Services-->
    <Services id="services" class="services grey lighten-3 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Product</h3>

                <div class="col s4">
                    <!-- Promo Content 1 goes here -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/hoddie/5.jpeg">
                            <span class="card-title fa-centercode">Champions</span>
                        </div>
                        <div class="card-content">
                            <p>Jaket Sweater Pria-Jaket Original Distro-Hoodie Crewenk Champion Original Pull Tag Dan Lebel sweter</p>
                        </div>
                        <div class="card-action center">
                            <a href="detail.php?id=<?= $t_hoddie['no']; ?>">Detail Barang!!</a>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <!-- Promo Content 2 goes here -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/hoddie/6.jpeg">
                            <span class="card-title fa-centercode">Champions</span>
                        </div>
                        <div class="card-content">
                            <p>Jaket Sweater Pria-Jaket Original Distro-Hoodie Crewenk Champion Original Pull Tag Dan Lebel sweter</p>
                        </div>
                        <div class="card-action center">
                            <a href="detail.php?id=<?= $t_hoddie['no']; ?>">Detail Barang!!</a>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <!-- Promo Content 3 goes here -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/hoddie/7.jpeg">
                            <span class="card-title fa-centercode">Champions</span>
                        </div>
                        <div class="card-content">
                            <p>Jaket Sweater Pria-Jaket Original Distro-Hoodie Crewenk Champion Original Pull Tag Dan Lebel sweter</p>
                        </div>
                        <div class="card-action center">
                            <a href="detail.php?id=<?= $t_hoddie['no']; ?>">Detail Barang!!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Services>

    <!-- footer -->
    <footer class="blue darken-4 white-text center">
        <p class="flow-text">Zak'Shop. 2021.</p>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);



        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);


        const materialboxed = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrolloffset: 50
        });
    </script>
</body>

</html>