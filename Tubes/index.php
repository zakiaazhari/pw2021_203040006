<?php
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
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="">Profil Toko Online</a></li>
        <li><a href="">Clients</a></li>
        <li><a href="">Product</a></li>
        <li><a href="">Portfolio</a></li>
        <li><a href="">Contact Us</a></li>
    </ul>

    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="img/slider/9.jpg">
                <div class="caption Left-align">
                    <h3>Selamat Datang Di Old Shop Kami</h3>

                    <h5 class="center light grey-text text-darken-3"></h5>
                </div>
            </li>
            <li>
                <img src="img/slider/10.jpg">
                <div class="caption right-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="center light grey-text text-darken-3"></h5>
                </div>
            </li>
            <li>
                <img src="img/slider/13.jpg">
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
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
        <div class="parallax"> <img src="img/slider/8.png"></div>
        <div>
            <br>
            <br>
            <br>
            <div class="col m6 light">
                <h3 class="center light white-text">Toko Online Kami Selalu Memberikan yang Terbaik Kepada Konsumen</h3>
                <h3 class="center light white-text">Semoga Harimu Menyenangkan!!</h3>
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



    <!-- portfolio -->
    <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Portfolio</h3>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/portfolio/gambar1.jpg" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/gambar2.jpg" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/gambar3.jpg" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/gambar4.jpg" class="responsive-img materialboxed">
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/portfolio/gambar5.jpg" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/gambar6.jpg" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/gambar1.jpg" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/gambar2.jpg" class="responsive-img materialboxed">
                </div>
            </div>
        </div>
    </section>


    <!-- contact us -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Contact Us</h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel blue darken-4 center white-text">
                        <i class="material-icons">email</i>
                        <h5>Contact</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header center">
                            <h4>Our Office</h4>
                        </li>
                        <li class="collection-item">Indonesia</li>
                        <li class="collection-item">West Java</li>
                        <li class="collection-item">Cimahi Utara</li>
                    </ul>
                </div>

                <div class="col m7 s12">
                    <form>
                        <div class="card-panel">
                            <h5>Please Fill Out This Form</h5>
                            <div class="input-field">
                                <input type="text" name="name" id="name" required class="validate">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="phone" id="phone">
                                <label for="phone">Phone Number</label>
                            </div>
                            <div class="input-field">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <button type="submit" class="btn blue darken-4">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <footer class="blue darken-4 white-text center">
        <p class="flow-text">Zaki Auliya Azhari. Copyright 2020.</p>
    </footer>

    <!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.facebook.com/Zakiaazhari14 "><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCBhFzxq5AM_9zHEAI1T65iw?view_as=subscriber"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/zakiaazhari14/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://twitter.com/zakiaazhari14"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>


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