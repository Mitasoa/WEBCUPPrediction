<!DOCTYPE html>
<html lang="zxx">

<?php $url = site_url('');
$url = $url . '/assets/users/'; ?>

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
<script>
function find_endroit_2() {
    //création de l'objet XMLHttpRequest
    var xhr;
    try {
        xhr = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e) {
        try {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        } catch (e2) {
            try {
                xhr = new XMLHttpRequest();
            } catch (e3) {
                xhr = false;
            }
        }
    }

    //Définition des changements d'états
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var retour = JSON.parse(xhr.responseText);
                console.log(xhr.responseText);
                var option = '';

                for ($i = 0; $i < retour.length; $i++) {
                    option = option +
                        '<div class="shadow-sm"style="background:none;"><div class="card" style="background:none;"><div class="card-img">' +
                        '<img src="<?php echo site_url('assets/img/endroit')?>' + "/" + retour[$i].image +
                        '"style="width:300px;height:300px"/><input style="width:300px;" type="checkbox" name="endroit[]" value=' +
                        retour[$i].id + '></div></div></div>';
                }


                console.log(option);
                // .innerHTML = option;
                option = option + "";
                // document.getElementById('_endroit').innerHTML = option;
                document.getElementById('image').innerHTML = option;
                console.log(retour);
            } else {
                document.dyn = "Error code " + xhr.status;
            }
        }
    };
    //XMLHttpRequest.open(method, url, async)
    console.log(document.getElementById("_endroit").value);
    var mot = document.getElementById("_endroit");
    xhr.open("GET", "trouver_image?mot=" + document.getElementById("_endroit").value, true);

    //XMLHttpRequest.send(body)
    xhr.send(null);
}

function find_endroit() {
    //création de l'objet XMLHttpRequest
    var xhr;
    try {
        xhr = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e) {
        try {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        } catch (e2) {
            try {
                xhr = new XMLHttpRequest();
            } catch (e3) {
                xhr = false;
            }
        }
    }

    //Définition des changements d'états
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var retour = JSON.parse(xhr.responseText);
                console.log(xhr.responseText);
                var option = '';

                for ($i = 0; $i < retour.length; $i++) {
                    option = option + '<option value="' + retour[$i].id + '">' + retour[$i].endroit + '</option>';
                }
                // option=option+"</select>";
                console.log(option);
                document.getElementById('_endroit').innerHTML = option;
                // document.getElementById('client_list').innerHTML = option;
            } else {
                document.dyn = "Error code " + xhr.status;
            }
        }
    };
    //XMLHttpRequest.open(method, url, async)
    var mot = document.getElementById("endroit");
    xhr.open("GET", "trouver_endroit?mot=" + mot.value, true);

    //XMLHttpRequest.send(body)
    xhr.send(null);
}
</script>

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
                                <li class="active"><a href="<?php echo site_url('Welcome/'); ?>">Accueil</a></li>
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
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">

                </div>
            </div>
        </div>
        <div class="di-content__inner" style="">
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
                                    title="User Info">ENdroit</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="Address">Action&Object</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                                    Jour/Nuit
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Personnage
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Emotion
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">

                        <div class="col-12 col-lg-12 m-auto" style="z-index:10000px">
                            <form class="multisteps-form__form"
                                action="<?php echo site_url('UsersController/insert_description'); ?>" method="get">
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded js-active"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title" style="color:white">
                                        Jour ou Nuit?</h3>

                                    <div class="multisteps-form__di-content">

                                        <div class="row">


                                            <div class="col-12 col-md-4 mt-3">
                                                <div class="card shadow-sm" style="background:none">
                                                    <div class="card-body">
                                                        <div class="card-img">
                                                            <img src="<?= site_url('assets/img/person/day.png') ?>"
                                                                style="width:260px;height:260px" />

                                                        </div>
                                                        <h3 class="card-title" style="color:white;text-align:center">
                                                            Jour</h3>
                                                        <input type="radio" value="1" name="mode" />

                                                        <div style="font-size:25px;height:50px;">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 mt-3">
                                                <div class="card shadow-sm" style="background:none">
                                                    <div class="card-body">
                                                        <div class="card-img">
                                                            <img src="<?= site_url('assets/img/person/night.png') ?>"
                                                                style="width:260px;height:260px" />
                                                            <h3 class="card-title"
                                                                style="color:white;text-align:center">Nuit</h3>
                                                        </div>
                                                        <input type="radio" value="0" name="mode" />
                                                        <input type="hidden" value="<?=$idreve?>" name="idreve" />

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
                                <div class="multisteps-form__panel shadow p-4 rounded" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title" style="color:white">Description</h3>

                                    <div class="multisteps-form__di-content">
                                        <div class="form-row mt-4">
                                            <div class="col">
                                                <label>Action</label>

                                                <textarea style="font-size:40px;"
                                                    class="multisteps-form__input form-control" type="text"
                                                    placeholder="Action" name="action"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col">
                                                <label>Point important</label>
                                                <textarea style="font-size:40px;"
                                                    class="multisteps-form__input form-control" type="text"
                                                    placeholder="Point imporant" name="objet"></textarea>
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
                                <div class="multisteps-form__panel shadow p-4 bg-dark rounded" data-animation="scaleIn">

                                    <h3 class="multisteps-form__title">Endroit de reve</h3>
                                    <div class="multisteps-form__di-content">
                                        <div class="form-row mt-4">

                                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                Endroit:



                                                <textarea style="font-size:40px;" type="text" id="endroit"
                                                    onkeyup="find_endroit() " onchange="find_endroit_2()"
                                                    placeholder="Action" name="endroit"
                                                    placeholder="RECHERCE ENDROIT DE REVE"></textarea>
                                                <select class="form-control" style="width:200px;heigth:100px;"
                                                    name="endroit2" id="_endroit" onchange="find_endroit_2()">

                                                </select>
                                                <div class="row" style="background:dark;">

                                                    <span id="image">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title" style="color:white">Personnage persent</h3>

                                    <div class="multisteps-form__di-content">

                                        <div class="row">

                                            <div class="col-12 col-md-4 mt-3">
                                                <div class="card shadow-sm" style="background:none">
                                                    <div class="card-body">
                                                        <div class="card-img">
                                                            <img src="<?= site_url('assets/img/person/boy.png') ?>"
                                                                style="width:260px;height:260px" />

                                                        </div>
                                                        <h3 class="card-title" style="color:white;text-align:center">
                                                            Homme/Garcon</h3>

                                                        <div style="font-size:25px;height:50px;">
                                                            <input type="number" name="homme"
                                                                placeholder="Nombre de homme dans votre reve" value="0">
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-12 col-md-4 mt-3">
                                                <div class="card shadow-sm" style="background:none">
                                                    <div class="card-body">
                                                        <div class="card-img">
                                                            <img src="<?= site_url('assets/img/person/girl.png') ?>"
                                                                style="width:260px;height:260px" />

                                                        </div>
                                                        <h3 class="card-title" style="color:white;text-align:center">
                                                            Femme/Fille</h3>

                                                        <div style="font-size:25px;height:50px;">

                                                            <input type="number" name="femme" value="0"
                                                                placeholder="Nombre de femme dans votre reve">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 mt-3">
                                                <div class="card shadow-sm" style="background:none">
                                                    <div class="card-body">
                                                        <div class="card-img">
                                                            <img src="<?= site_url('assets/img/person/inconnu.jpg') ?>"
                                                                style="width:260px;height:260px" />
                                                            <h3 class="card-title"
                                                                style="color:white;text-align:center">Autre</h3>
                                                        </div>
                                                        <div style="font-size:25px;height:50px;">

                                                            <input type="number" class="form-controle" name="autre"
                                                                value="0"
                                                                placeholder="Nombre d'autre personne dans votre reve">
                                                        </div>
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
                                <div class="multisteps-form__panel shadow p-4 rounded" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title" style="color:white">Vos emotions</h3>
                                    <div class="multisteps-form__di-content">
                                        <div class="row">
                                            <?php
                                            foreach ($sentiment as $key) {
                                                ?>

                                            <div class="col-12 col-md-3 mt-3">
                                                <div class="card shadow-sm" style="width:60%;">
                                                    <div class="card-body">
                                                        <h5 class="card-img">
                                                            <img src="<?= site_url('assets/img/emoji') . '/' . $key['emoji'] ?>"
                                                                style="width:100px;height:100px" />
                                                        </h5>
                                                        <input type="checkbox" value="<?= $key['id'] ?>"
                                                            name="emotion[]" />

                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            ?>

                                            <div class="row">
                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn btn-primary js-btn-prev" type="button"
                                                        title="Prev">Prev</button>
                                                    <button class="btn btn-success ml-auto" type="submit"
                                                        title="Send">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title center-title">
                <h2>Ordonnez votre rêve</h2>
                <style>
                >.coco-card {
                    /* position: absolute; */
                    top: 50%;
                    left: 50%;
                    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0);
                    transform: translateX(-50%) translateY(-50%) translateZ(0);
                    width: 370px;
                    background-color: #fff;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                    overflow: hidden;

                    -webkit-transition: box-shadow 0.5s;
                    transition: box-shadow 0.5s;
                }

                .coco-card a {
                    color: inherit;
                    text-decoration: none;
                }

                .coco-card:hover {
                    box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
                }


                /**
              * DATE
              **/

                .coco-card__date {
                    position: absolute;
                    top: 20px;
                    right: 20px;
                    width: 45px;
                    height: 45px;
                    padding-top: 10px;
                    background-color: coral;
                    border-radius: 50%;
                    color: #fff;
                    text-align: center;
                    font-weight: 700;
                    line-height: 13px;
                }

                .coco-card__date__day {
                    font-size: 14px;
                }

                .coco-card__date__month {
                    text-transform: uppercase;
                    font-size: 10px;
                }


                /**
              * THUMB
              **/

                .coco-card__thumb {
                    height: 245px;
                    overflow: hidden;
                    background-color: #000;
                    -webkit-transition: height 0.5s;
                    transition: height 0.5s;
                }

                .coco-card__thumb img {
                    width: 100%;
                    display: block;
                    opacity: 1;
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: opacity 0.5s, -webkit-transform 0.5s;
                    transition: opacity 0.5s, -webkit-transform 0.5s;
                    transition: opacity 0.5s, transform 0.5s;
                    transition: opacity 0.5s, transform 0.5s, -webkit-transform 0.5s;
                }

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
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    cursor: pointer;
                    margin-top: -100px;
                    transition-duration: 0.4s;
                    transition: all 0.3s ease;
                    background: linear-gradient(183deg, rgba(141, 35, 46, 0.5) 1%, rgba(141, 35, 46, 0) 60%), linear-gradient(250deg, rgba(141, 35, 46, 0) 21%, rgba(141, 35, 46, 0.2) 20%, rgba(11, 35, 47, 0.2) 50%), linear-gradient(250deg, rgba(141, 35, 46, 0) 23%, rgba(141, 35, 46, 0.2) 20%, rgba(11, 35, 47, 0.2) 50%), linear-gradient(250deg, rgba(141, 35, 46, 0) 25%, rgba(141, 35, 46, 0.2) 20%, rgba(11, 35, 47, 0.2) 50%), repeating-linear-gradient(179deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1) 3px, rgba(0, 0, 0, 0.1) 3px, rgba(0, 0, 0, 0.1) 5px);
                    background-color: #0b232f;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                }

                .o-card:hover {
                    height: 300px;
                    width: 400px;
                    font-size: 30px;
                    margin-top: -100px;
                    transition-duration: 0.4s;

                    /* rotate: ; */
                }

                .coco-card:hover .coco-card__thumb {
                    height: 130px;
                }

                .coco-card:hover .coco-card__thumb img {
                    opacity: 0.6;
                    -webkit-transform: scale(1.2);
                    transform: scale(1.2);
                }


                /**
              * coco-card_BODY
              **/

                .coco-card__body {
                    position: relative;
                    height: 185px;
                    padding: 20px;
                    -webkit-transition: height 0.5s;
                    transition: height 0.5s;
                }

                .coco-card:hover .coco-card__body {
                    height: 300px;
                }

                .coco-card__category {
                    position: absolute;
                    top: -25px;
                    left: 0;
                    height: 25px;
                    padding: 0 15px;
                    background-color: coral;
                    color: #fff;
                    text-transform: uppercase;
                    font-size: 11px;
                    line-height: 25px;
                }

                .coco-card__title {
                    margin: 0;
                    padding: 0 0 10px 0;
                    color: #000;
                    font-size: 22px;
                    font-weight: bold;
                    text-transform: uppercase;
                }

                .coco-card__subtitle {
                    margin: 0;
                    padding: 0 0 10px 0;
                    font-size: 19px;
                    color: coral;
                }

                .coco-card__description {
                    position: absolute;
                    left: 20px;
                    right: 20px;
                    bottom: 56px;
                    margin: 0;
                    padding: 0;
                    color: #666C74;
                    line-height: 27px;
                    opacity: 0;
                    -webkit-transform: translateY(45px);
                    transform: translateY(45px);
                    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                    transition: opacity 0.3s, -webkit-transform 0.3s;
                    transition: opacity 0.3s, transform 0.3s;
                    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s;
                    -webkit-transition-delay: 0s;
                    transition-delay: 0s;
                }

                .coco-card:hover .coco-card__description {
                    opacity: 1;
                    -webkit-transform: translateY(0px);
                    transform: translateY(0px);
                    -webkit-transition-delay: 0.2s;
                    transition-delay: 0.2s;
                }

                .coco-card__footer {
                    position: absolute;
                    bottom: 12px;
                    left: 20px;
                    right: 20px;
                    font-size: 11px;
                    color: #A3A9A2;
                }

                .icon {
                    display: inline-block;
                    vertical-align: middle;
                    margin: -2px 0 0 2px;
                    font-size: 18px;
                }

                .icon+.icon {
                    padding-left: 10px;
                }

                .content {
                    max-width: 1024px;
                    width: 100%;
                    padding: 0 4%;
                    padding-top: 250px;
                    margin: 0 auto;
                    display: grid;
                    grid-template-columns: 300px 300px 300px;
                    gap: 30px;

                    justify-content: center;
                    align-items: center;
                }
                </style>
                <div class="content" style="margin-top:-70px">

                    <?php
                    foreach ($revedescription as $key) {
                        ?>
                    <article class="coco-card">
                        <header class="coco-card__thumb">
                            <a href="#"><img src="../s4.svg" /></a>
                        </header>
                        <date class="coco-card__date">
                            <span class="coco-card__date__day"></span>
                            <br />
                            <span class="coco-card__date__month"></span>
                        </date>
                        <div class="coco-card__body">
                            <div class="coco-card__category"><a href="#">pet
                                    <?= $key['id'] ?>
                                </a></div>
                            <h2 class="coco-card__title"><a href="#">
                                    <?= $key['objetimportant'] ?>
                                </a></h2>
                            <div class="coco-card__subtitle">
                                <?= $key['actions'] ?>,
                                <?= $key['endroit'] ?>
                            </div>

                            <a
                                href="<?= site_url('UsersController/ordonner?id=' . $key['id']); ?>&idreve=<?= $idreve ?>">
                                <button class="btn btn-primary">UP</button>
                            </a>

                            <a
                                href="<?= site_url('UsersController/ordonner?id=-' . $key['id']); ?>&idreve=<?= $idreve ?>">
                                <button class="btn btn-primary">Down</button>
                            </a>
                    </article>
                    <?php
                    }
                    ?>



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