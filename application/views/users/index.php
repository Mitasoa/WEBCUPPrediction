<!DOCTYPE html>
<html lang="zxx">
<?php
$url=site_url('');
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IA ACTUS</title>

    <!-- Google Font -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" -->
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=$url.'assets/css/bootstrap.min.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?=$url.'assets/css/font-awesome.min.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?=$url.'assets/css/elegant-icons.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?=$url.'assets/css/owl.carousel.min.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?=$url.'assets/css/magnific-popup.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?=$url.'assets/css/slicknav.min.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?=$url.'assets/css/style.css' ?>" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
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
                                <li class="active"><a href="<?php //echo site_url('Welcome/' ?>">Mon espace client</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <?php ////include 'components/head.php'; ?>
    <!-- Hero Section Begin -->
    <?php// include 'components/hero.php'; ?>
    <!-- Hero Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Article</span>
                        <h2>Explorez un univers captivant de contenus sur l'IA</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">

                </div>
            </div>
        </div>
    </section>
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
                            <p>Nous sommes l'Institut International des Rêves, spécialisé dans l'étude des rêves. Nous
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
                                <li style="margin-top: 0.5em;"><a href="#">+261 34 26 599 09 / contact@alea.mg</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php include 'components/script.php'; ?>
</body>

</html>