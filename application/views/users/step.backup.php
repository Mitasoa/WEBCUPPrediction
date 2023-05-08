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
    <link href="<?= $url ?>step/dream.css" rel="stylesheet" type="text/css" />
    <!-- Css Styles -->
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
    <section class="latest spad" style="margin-top:150px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Racontez-nous vos reve?</h2>
                        <h3 style="color:white">
                            <?php echo $reve ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">

                </div>
            </div>
        </div>
        <div class="di-content__inner">
            <div class="container">
            </div>
            <div class="container overflow-hidden">
                <!--multisteps-form-->
                <div class="multisteps-form">
                    <!--progress bar-->
                    <div class="row">
                        <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active btn btn-danger" type="button"
                                    title="User Info">User Info</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="Address">Address</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Order
                                    Info</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Comments
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form">
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Your User Info</h3>
                                    <div class="multisteps-form__di-content">
                                        <div class="form-row mt-4">
                                            <div class="col-12 col-sm-6">
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="First Name" />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Last Name" />
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-12 col-sm-6">
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Login" />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                <input class="multisteps-form__input form-control" type="email"
                                                    placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-12 col-sm-6">
                                                <input class="multisteps-form__input form-control" type="password"
                                                    placeholder="Password" />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                <input class="multisteps-form__input form-control" type="password"
                                                    placeholder="Repeat Password" />
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Your Address</h3>
                                    <div class="multisteps-form__di-content">
                                        <div class="form-row mt-4">
                                            <div class="col">
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Address 1" />
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col">
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Address 2" />
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-12 col-sm-6">
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="City" />
                                            </div>
                                            <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                                <select class="multisteps-form__select form-control">
                                                    <option selected="selected">State...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Zip" />
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Your Order Info</h3>
                                    <div class="multisteps-form__di-content">
                                        <div class="row">
                                            <div class="col-12 col-md-6 mt-4">
                                                <div class="card shadow-sm">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Item Title</h5>
                                                        <p class="card-text">Small and nice item description</p><a
                                                            class="btn btn-primary" href="#" title="Item Link">Item
                                                            Link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 mt-4">
                                                <div class="card shadow-sm">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Item Title</h5>
                                                        <p class="card-text">Small and nice item description</p><a
                                                            class="btn btn-primary" href="#" title="Item Link">Item
                                                            Link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn btn-primary js-btn-prev" type="button"
                                                    title="Prev">Prev</button>
                                                <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                    title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Additional Comments</h3>
                                    <div class="multisteps-form__di-content">
                                        <div class="form-row mt-4">
                                            <textarea class="multisteps-form__textarea form-control"
                                                placeholder="Additional Comments and Requirements"></textarea>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn btn-success ml-auto" type="button"
                                                title="Send">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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