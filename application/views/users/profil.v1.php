<!DOCTYPE html>
<html lang="zxx">

<?php $url = site_url('');
$url = $url . '/assets/users/';?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IA ACTUS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="<?= $url ?>step/style.css" rel="stylesheet" type="text/css" />
    <!-- <link href="<?= $url ?>step/dream.css" rel="stylesheet" type="text/css"/> -->
    <link href="<?= $url ?>social.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/font-awesome.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/elegant-icons.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/owl.carousel.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/magnific-popup.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/slicknav.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>" type="text/css">
</head>

<body>
    <!-- <Horizon> -->

    <!-- <Road></Road> -->
    <!-- </Horizon> -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <STRONG style="color: white; font-size: 30px;">IA ACTU</STRONG>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?php echo site_url('Welcome/'); ?>">Mon espace client</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">

                </div>
            </div>
        </div>



        <div class="di-media-main" style="width:70%;margin-left:70px">
            <div class="di-media-search-bar">
                <input type="text" placeholder="Search" />
                <button class="di-media-right-side-button" @click="rightSide = !rightSide">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" class="di-media-css-i6dzq1">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </button>
            </div>
            <div class="di-media-main-container">
                <div class="di-media-profile">
                    <div class="di-media-profile-avatar">
                        <img src="https://images.genius.com/2326b69829d58232a2521f09333da1b3.1000x1000x1.jpg" alt=""
                            class="di-media-profile-img">
                        <div class="di-media-profile-name">Quan Ha</div>
                    </div>
                    <img src="https://images.unsplash.com/photo-1508247967583-7d982ea01526?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
                        alt="" class="di-media-profile-cover">
                    <div class="di-media-profile-menu">
                        <a class="di-media-profile-menu-link active">Timeline</a>
                        <a class="di-media-profile-menu-link">About</a>
                        <a class="di-media-profile-menu-link">Friends</a>
                        <a class="di-media-profile-menu-link">Photos</a>
                        <a class="di-media-profile-menu-link">More</a>
                    </div>
                </div>
                <div class="di-media-timeline">
                    <div class="di-media-timeline-left">
                        <div class="di-media-intro box">
                            <div class="di-media-intro-title">
                                Introduction
                                <button class="di-media-intro-menu"></button>
                            </div>
                            <div class="di-media-info">
                                <div class="di-media-info-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.889 503.889"
                                        fill="currentColor">
                                        <path
                                            d="M453.727 114.266H345.151V70.515c0-20.832-16.948-37.779-37.78-37.779H196.517c-20.832 0-37.78 16.947-37.78 37.779v43.751H50.162C22.502 114.266 0 136.769 0 164.428v256.563c0 27.659 22.502 50.161 50.162 50.161h403.565c27.659 0 50.162-22.502 50.162-50.161V164.428c0-27.659-22.503-50.162-50.162-50.162zm-262.99-43.751a5.786 5.786 0 015.78-5.779h110.854a5.786 5.786 0 015.78 5.779v43.751H190.737zM32 164.428c0-10.015 8.147-18.162 18.162-18.162h403.565c10.014 0 18.162 8.147 18.162 18.162v23.681c0 22.212-14.894 42.061-36.22 48.27l-167.345 48.723a58.482 58.482 0 01-32.76 0L68.22 236.378C46.894 230.169 32 210.321 32 188.109zm421.727 274.725H50.162c-10.014 0-18.162-8.147-18.162-18.161V253.258c8.063 6.232 17.254 10.927 27.274 13.845 184.859 53.822 175.358 52.341 192.67 52.341 17.541 0 7.595 1.544 192.67-52.341 10.021-2.918 19.212-7.613 27.274-13.845v167.733c.001 10.014-8.147 18.162-18.161 18.162z" />
                                    </svg>
                                    Product Designer at <a href="#">Bravebist</a>
                                </div>
                                <div class="di-media-info-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        viewBox="0 0 24 24">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        <path d="M9 22V12h6v10" />
                                    </svg>
                                    Live in <a href="#">Hanoi, Vietnam</a>
                                </div>
                                <div class="di-media-info-item">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                        <path
                                            d="M437 75C388.7 26.6 324.4 0 256 0S123.3 26.6 75 75C26.6 123.3 0 187.6 0 256s26.6 132.7 75 181c48.3 48.4 112.6 75 181 75s132.7-26.6 181-75c48.4-48.3 75-112.6 75-181s-26.6-132.7-75-181zM252.4 481.9c-52-.9-103.7-19.5-145.2-55.8L256 277.2l21.7 21.8a165.9 165.9 0 00-35.7 87c-3.5 30.5 0 63.3 10.4 95.9zM299 320.3l105.7 105.8a224.8 224.8 0 01-121.3 54.1C262 419.5 268 360.3 299 320.3zm21.2-21.2c40-31 99.2-37 160-15.6A224.8 224.8 0 01426 404.8zM482 252.4a231.7 231.7 0 00-96-10.4 165.9 165.9 0 00-87 35.7L277.3 256l148.9-148.8c36.3 41.5 55 93.2 55.8 145.2zm-290.2-39.5c-40 31-99.2 37-160 15.6A224.8 224.8 0 0186 107.2zm-84.5-127a224.8 224.8 0 01121.3-54.1C250 92.5 244 151.7 213 191.7zM270 126c3.5-30.5 0-63.3-10.4-95.9 52 .9 103.7 19.5 145.2 55.8L256 234.8 234.3 213a165.9 165.9 0 0035.7-87zM30 259.6a242 242 0 0072.7 11.7c7.8 0 15.6-.5 23.2-1.3a165.9 165.9 0 0087-35.7l21.8 21.7L85.9 404.8a225.3 225.3 0 01-55.8-145.2z" />
                                    </svg>
                                    Player name <a href="#">Quan Ha</a>
                                </div>
                            </div>
                        </div>
                        <div class="di-media-event box">
                            <div class="di-media-event-wrapper">
                                <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
                                    class="di-media-event-img" />
                                <div class="di-media-event-date">
                                    <div class="di-media-event-month">Jan</div>
                                    <div class="di-media-event-day">01</div>
                                </div>
                                <div class="di-media-event-title">Winter Wonderland</div>
                                <div class="di-media-event-subtitle">01st Jan, 2019 07:00AM</div>
                            </div>
                        </div>

                    </div>
                    <div class="di-media-timeline-right">
                        <div class="di-media-status box">
                            <div class="di-media-status-menu">
                                <a class="di-media-status-menu-item active" href="#">Status</a>
                                <a class="di-media-status-menu-item" href="#">Photos</a>
                                <a class="di-media-status-menu-item" href="#">Videos</a>
                            </div>
                            <div class="di-media-status-main">
                                <img src="https://images.genius.com/2326b69829d58232a2521f09333da1b3.1000x1000x1.jpg"
                                    class="di-media-status-img">
                                <textarea class="di-media-status-textarea"
                                    placeholder="Write something to Quan Ha.."></textarea>
                            </div>
                            <div class="di-media-status-actions">
                                <a href="#" class="di-media-status-action">
                                    <svg viewBox="-42 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M333.7 123.3c0 33.9-12.2 63.2-36.2 87.2-24 24-53.3 36.1-87.1 36.1h-.1c-33.9 0-63.2-12.1-87.1-36.1-24-24-36.2-53.3-36.2-87.2 0-33.9 12.2-63.2 36.2-87.2 24-24 53.2-36 87-36.1h.2c33.8 0 63.2 12.2 87.1 36.1 24 24 36.2 53.3 36.2 87.2zm0 0"
                                            fill="#ffbb85" />
                                        <path
                                            d="M427.2 424c0 26.7-8.5 48.3-25.3 64.3-16.5 15.7-38.4 23.7-65 23.7H90.2c-26.6 0-48.5-8-65-23.7C8.5 472.3 0 450.7 0 423.9c0-10.2.3-20.4 1-30.2a302.7 302.7 0 0112.1-64.9c3.3-10.3 7.8-20.5 13.4-30.3 5.8-10.2 12.5-19 20.1-26.3a89 89 0 0129-18.2c11.2-4.4 23.7-6.7 37-6.7 5.2 0 10.3 2.2 20 8.5l21 13.5c6.6 4.3 15.7 8.3 27 11.9a107.7 107.7 0 0033 5.3c11 0 22-1.8 33-5.3 11.2-3.6 20.3-7.6 27-12l21-13.4c9.7-6.3 14.7-8.5 20-8.5 13.3 0 25.7 2.3 37 6.7a89 89 0 0128.9 18.2c7.6 7.3 14.4 16.1 20.2 26.3 5.5 9.8 10 20 13.3 30.3a305.5 305.5 0 0112.1 64.9c.7 9.8 1 20 1 30.2zm0 0"
                                            fill="#6aa9ff" />
                                        <path
                                            d="M210.4 246.6h-.1V0c34 0 63.3 12.2 87.2 36.1 24 24 36.2 53.3 36.2 87.2 0 33.9-12.2 63.2-36.2 87.2-24 24-53.3 36.1-87.1 36.1zm0 0"
                                            fill="#f5a86c" />
                                        <path
                                            d="M427.2 424c0 26.7-8.5 48.3-25.3 64.3-16.5 15.7-38.4 23.7-65 23.7H210.2V286.5h3.3c11 0 22-1.8 33-5.3 11.2-3.6 20.3-7.6 27-12l21-13.4c9.7-6.3 14.7-8.5 20-8.5 13.3 0 25.7 2.3 37 6.7a89 89 0 0128.9 18.2c7.6 7.3 14.4 16.1 20.2 26.3 5.5 9.8 10 20 13.3 30.3a305.5 305.5 0 0112.1 64.9c.7 9.8 1 20 1 30.2zm0 0"
                                            fill="#2682ff" />
                                    </svg>
                                    People
                                </a>
                                <a href="#" class="di-media-status-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M87.084 192c-.456-5.272-.688-10.6-.688-16C86.404 78.8 162.34 0 256.004 0s169.6 78.8 169.6 176c0 5.392-.232 10.728-.688 16h.688c0 96.184-169.6 320-169.6 320s-169.6-223.288-169.6-320h.68zm168.92 32c36.392 1.024 66.744-27.608 67.84-64-1.096-36.392-31.448-65.024-67.84-64-36.392-1.024-66.744 27.608-67.84 64 1.096 36.392 31.448 65.024 67.84 64z"
                                            fill="#e21b1b" />
                                    </svg>
                                    Check in
                                </a>
                                <a href="#" class="di-media-status-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <circle cx="256" cy="256" r="256" fill="#ffca28" />
                                        <g fill="#6d4c41">
                                            <path
                                                d="M399.68 208.32c-8.832 0-16-7.168-16-16 0-17.632-14.336-32-32-32s-32 14.368-32 32c0 8.832-7.168 16-16 16s-16-7.168-16-16c0-35.296 28.704-64 64-64s64 28.704 64 64c0 8.864-7.168 16-16 16zM207.68 208.32c-8.832 0-16-7.168-16-16 0-17.632-14.368-32-32-32s-32 14.368-32 32c0 8.832-7.168 16-16 16s-16-7.168-16-16c0-35.296 28.704-64 64-64s64 28.704 64 64c0 8.864-7.168 16-16 16z" />
                                        </g>
                                        <path
                                            d="M437.696 294.688c-3.04-4-7.744-6.368-12.736-6.368H86.4c-5.024 0-9.728 2.336-12.736 6.336-3.072 4.032-4.032 9.184-2.688 14.016C94.112 390.88 170.08 448.32 255.648 448.32s161.536-57.44 184.672-139.648c1.376-4.832.416-9.984-2.624-13.984z"
                                            fill="#fafafa" />
                                    </svg>
                                    Mood
                                </a>
                                <button class="di-media-status-share" type="submit">Share</button>
                            </div>
                        </div>
                        <div class="di-media-album box">
                            <div class="di-media-status-main">
                                <img src="https://images.genius.com/2326b69829d58232a2521f09333da1b3.1000x1000x1.jpg"
                                    class="di-media-status-img" />
                                <div class="di-media-album-detail">
                                    <div class="di-media-album-title"><strong>Quan Ha</strong> create new
                                        <span>album</span></div>
                                    <div class="di-media-album-date">6 hours ago</div>
                                </div>
                                <button class="di-media-intro-menu"></button>
                            </div>
                            <div class="di-media-album-content">When the bass drops, so do my problems.
                                <div class="di-media-album-photos">
                                    <img src="https://images.unsplash.com/photo-1508179719682-dbc62681c355?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2378&q=80"
                                        alt="" class="di-media-album-photo" />
                                    <div class="di-media-album-right">
                                        <img src="https://images.unsplash.com/photo-1502872364588-894d7d6ddfab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
                                            alt="" class="di-media-album-photo" />
                                        <img src="https://images.unsplash.com/photo-1566737236500-c8ac43014a67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
                                            alt="" class="di-media-album-photo" />
                                    </div>
                                </div>
                            </div>
                            <div class="di-media-album-actions">
                                <a href="#" class="di-media-album-action">
                                    <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z" />
                                    </svg>
                                    87
                                </a>
                                <a href="#" class="di-media-album-action">
                                    <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" class="di-media-css-i6dzq1" viewBox="0 0 24 24">
                                        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                                    </svg>
                                    20
                                </a>
                                <a href="#" class="di-media-album-action">
                                    <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" class="di-media-css-i6dzq1" viewBox="0 0 24 24">
                                        <path d="M17 1l4 4-4 4" />
                                        <path d="M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4" />
                                        <path d="M21 13v2a4 4 0 01-4 4H3" />
                                    </svg>
                                    13
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Latest Blog Section End -->

        <!-- Footer Section Begin -->
        <footer class="footer">
            <div class="container">
                <div class="footer__top">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="footer__top__logo">
                                <a href="#"><img src="img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="footer__top__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__option">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="footer__option__item">
                                <h5>A props de nous</h5>
                                <p>Nous sommes l'Institut International des Rêves, spécialisé dans l'étude des rêves.
                                    Nous
                                    avons développé Onirix, une IA avancée capable de prédire l'avenir en analysant et
                                    décodant les rêves des utilisateurs.</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3">
                            <div class="footer__option__item">
                                <h5>Qui sont nous ?</h5>
                                <ul>
                                    <li><a href="#">Onirix</a></li>
                                    <li><a href="#">Institut International des Rêves</a></li>
                                    <li><a href="#">24h By WebCup</a></li>
                                    <li><a href="#">Alea</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3">
                            <div class="footer__option__item">
                                <h5>Our work</h5>
                                <ul>
                                    <li><a href="#">Rêves</a></li>
                                    <li><a href="#">Prédiction</a></li>
                                    <li><a href="#">Innovation</a></li>
                                    <li><a href="#">Satisfaction</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="footer__option__item">
                                <h5>Lettre ?</h5>
                                <p>Veuillez nous faire parvenir toutes vos demandes.</p>
                                <form action="#">
                                    <input type="text" placeholder="Email">
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </form>
                                <ul>
                                    <li style="margin-top: 0.5em;"><a href="#">+261 34 26 599 09 / contact@alea.mg</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="<?php echo site_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/js/mixitup.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/js/masonry.pkgd.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/js/jquery.slicknav.js'); ?>"></script>
        <script src="<?php echo site_url('assets/js/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/js/main.js'); ?>"></script>
        <script src="<?= $url ?>step/script.js" type="text/javascript"></script>

</body>

</html>