<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <link rel="shortcut icon" href="the_cappa/img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&family=Barlow+Condensed&family=Gilda+Display&display=swap">
    <link rel="stylesheet" href="the_cappa/css/plugins.css" />
    <link rel="stylesheet" href="the_cappa/css/style.css" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="{{ route('welcome') }}"> <h2>VAYNY <span>vous invite</span></h2> </a>
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link active" href="{{ route('welcome') }}" role="button" data-bs-auto-close="outside" aria-expanded="false">Accueil</i></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="about.html">A propos</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        Nos logements <i class="ti-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="rooms.html" class="dropdown-item"><span>Tous</span></a></li>
                        <li><a href="rooms.html" class="dropdown-item"><span>France</span></a></li>
                        <li><a href="rooms2.html" class="dropdown-item"><span>Madagacar</span></a></li>
                        <li><a href="rooms3.html" class="dropdown-item"><span>Etats-Unis</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="restaurant.html">Nos services</a></li>
                <li class="nav-item"><a class="nav-link" href="spa-wellness.html">Nos Equipes</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>@yield('content')</main>

<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">A propos de Vayny</h3>
                        <p class="footer-about-text">Bienvenue chez Vayny, votre prestataire d'exception pour la location de logements, mobil-homes et appartements pour les vacances. Nos résidences sont idéalement situées en bord de mer, à Cap Ferret et Biscarrosse, ainsi qu'à des destinations exotiques comme la Floride et Madagascar, sans oublier le charme urbain de Paris. Chez Vayny, nous nous engageons à vous offrir une expérience inoubliable, en vous proposant des logements sélectionnés avec soin pour garantir confort et qualité lors de votre séjour.</p>

                        <div class="footer-language"> <i class="lni ti-world"></i>
                            <select onchange="location = this.value;">
                                <option value="#0">English</option>
                                <option value="#0">German</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Explore</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="rooms.html">Rooms & Suites</a></li>
                            <li><a href="restaurant.html">Restaurant</a></li>
                            <li><a href="spa-wellness.html">Spa & Wellness</a></li>
                            <li><a href="about.html">About Hotel</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">Contact</h3>
                        <p class="footer-contact-text">1616 Broadway NY, New York 10001<br>United States of America</p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone"><span class="flaticon-call"></span> 855 100 4444</p>
                            <p class="footer-contact-mail">info@luxuryhotel.com</p>
                        </div>
                        <div class="footer-about-social-list">
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-youtube"></i></a>
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">© Copyright 2022 by <a href="#">DuruThemes.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery -->
<script src="the_cappa/js/jquery-3.6.3.min.js"></script>
<script src="the_cappa/js/jquery-migrate-3.0.0.min.js"></script>
<script src="the_cappa/js/modernizr-2.6.2.min.js"></script>
<script src="the_cappa/js/imagesloaded.pkgd.min.js"></script>
<script src="the_cappa/js/jquery.isotope.v3.0.2.js"></script>
<script src="the_cappa/js/pace.js"></script>
<script src="the_cappa/js/popper.min.js"></script>
<script src="the_cappa/js/bootstrap.min.js"></script>
<script src="the_cappa/js/scrollIt.min.js"></script>
<script src="the_cappa/js/jquery.waypoints.min.js"></script>
<script src="the_cappa/js/owl.carousel.min.js"></script>
<script src="the_cappa/js/jquery.stellar.min.js"></script>
<script src="the_cappa/js/jquery.magnific-popup.js"></script>
<script src="the_cappa/js/YouTubePopUp.js"></script>
<script src="the_cappa/js/select2.js"></script>
<script src="the_cappa/js/datepicker.js"></script>
<script src="the_cappa/js/smooth-scroll.min.js"></script>
<script src="the_cappa/js/custom.js"></script>
</body>
</html>
