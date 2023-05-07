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
    <link href="<?= $url ?>step/mydream.css" rel="stylesheet" type="text/css"/>
            <link href="<?= $url ?>step/dream.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/font-awesome.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/elegant-icons.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/owl.carousel.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/magnific-popup.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/slicknav.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>" type="text/css">
</head>

<body>
<Horizon>

<Road></Road>
</Horizon>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <STRONG style="color: white; font-size: 30px;" >IA ACTU</STRONG>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="<?php echo site_url('Welcome/'); ?>">Mon espace client</a></li>
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
     <section class="latest spad" style="margin-top:150px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Qu'est-ce-que vous avez revez?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                   
                </div>
            </div>
        </div>
  
        
<div class="di-body" >


<!-- partial:index.partial.html -->
<!--PEN HEADER-->
<div class="di-content">
  
<style>
              .o-card {
                width: 300px;
                min-width: 200px;
                height: 250px;
                background-color: #292929;
                margin: 10px;
                border-radius: 10px;
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.24);
                border: 2px solid rgba(7, 7, 7, 0.12);
                font-size: 16px;
                transition: all 0.3s ease;
                position: relative;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                cursor: pointer;
                margin-top: -100px;
                transition-duration: 0.4s;
                transition: all 0.3s ease;
               
              }

              .o-card:hover {
                height: 300px;
                width: 400px;
                font-size: 30px;
                margin-top: -100px;
                transition-duration: 0.4s;
                z-index: 100000;

                /* rotate: ; */
              }


              .content {
                max-width: 1024px;
                width: 100%;
                padding: 0 4%;
                padding-top: 250px;
                margin: 0 auto;
                display: grid;
 grid-template-columns: 300px 300px 300px;
 gap:30px;

                justify-content: center;
                align-items: center;
              }
            </style>
            <div class="content" style="margin-top:-70px">

            <?php 
            foreach ($type as $key) {
              # code...
            ?>
     <div class="o-card">
                <a href="<?= site_url('UsersController/insertdate?idreve='.$key['id']) ?>">

                <h2 style="color:white"><?php 
                echo $key['type']
                ?></h2>
                  <div class="icon"><img
                      src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" />
                  </div>
                  </a>

                </div>    
                <?php 
            }
                ?>



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
    <script src="<?php echo site_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/mixitup.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/masonry.pkgd.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/jquery.slicknav.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/main.js'); ?>"></script>
<script src="<?= $url ?>step/script.js" type="text/javascript"></script>
<script src="<?= $url ?>step/mydream.js" type="text/javascript"></script>


</body>

</html>