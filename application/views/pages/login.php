<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Neumorphism Login Form</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/login/login/login.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/login/text-anim/text-anim.css'); ?>">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="di-login-main">
        <div class="container a-container" style="
  background-image:url('img/wave/pro-table-top.png');
  background-repeat:no-repeat;
      " id="a-container">
            <form class="form" id="a-form" method="POST" action="<?php echo base_url('AdminController/ajouterAdministrateur')?>">
                <h2 class="form_title title">Créer un compte</h2>
                <svg class="robot" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="82px" height="160px"
                    viewBox="0 0 82 160" enable-background="new 0 0 82 160" xml:space="preserve">
                    <g>
                        <path fill="#EF4437"
                            d="M56.3,58.613c0,2.325-1.884,4.21-4.212,4.21H30.351c-2.326,0-4.211-1.885-4.211-4.21l0,0
                                        c0-2.326,1.885-4.211,4.211-4.211h21.737C54.416,54.401,56.3,56.287,56.3,58.613L56.3,58.613z" />
                        <path fill="#EF4437" d="M43.268,6.597l-2.015-2.015c-0.139-0.14-0.365-0.14-0.504,0l-2.016,2.015c-0.139,0.139-0.139,0.364,0,0.503
                                        l1.911,1.911v3.59c0,0.197,0.16,0.356,0.356,0.356s0.356-0.159,0.356-0.356v-3.59L43.268,7.1
                                        C43.406,6.961,43.406,6.735,43.268,6.597z M41.356,8.003V7.376c0-0.196-0.159-0.356-0.356-0.356s-0.356,0.16-0.356,0.356v0.627
                                        l-1.155-1.155L41,5.337l1.511,1.511L41.356,8.003z" />
                        <path fill="#B5E0DD"
                            d="M47.242,40.957c0,3.012-2.441,5.454-5.453,5.454h-1.577c-3.012,0-5.455-2.442-5.455-5.454V15.723
                                        c0-3.012,2.442-5.453,5.455-5.453h1.577c3.012,0,5.453,2.441,5.453,5.453V40.957z" />

                        <ellipse transform="matrix(0.7853 -0.6192 0.6192 0.7853 0.8779 30.2266)" fill="#D1ECEB"
                            cx="44.016" cy="13.848" rx="1.208" ry="3.098" />
                        <rect x="24.274" y="104.453" fill="#EF4437" width="12.454" height="49.885" />
                        <rect x="45.71" y="104.453" fill="#EF4437" width="12.456" height="49.885" />
                        <ellipse fill="#FFFFFF" cx="41.063" cy="40.281" rx="24.942" ry="16.939" />
                        <g>
                            <rect x="10.673" y="69.086" fill="#009C8E" width="60.653" height="4.073" />
                            <g>
                                <g>
                                    <path fill="#009C8E" d="M76.04,102.857V89.372h-2.903v13.485c-3.217,0.67-5.641,3.529-5.641,6.941
                                              c0,1.637,0.568,3.232,1.604,4.496l1.996-1.635c-0.668-0.814-1.021-1.803-1.021-2.861c0-2.486,2.025-4.512,4.515-4.512
                                              c2.488,0,4.515,2.025,4.515,4.512c0,1.078-0.387,2.123-1.087,2.939l1.958,1.678c1.101-1.283,1.707-2.924,1.707-4.617
                                              C81.682,106.387,79.256,103.527,76.04,102.857z" />
                                    <path fill="#FFFFFF"
                                        d="M77.152,89.717c0,1.416-1.147,2.564-2.563,2.564l0,0c-1.416,0-2.563-1.148-2.563-2.564V72.091
                                              c0-1.416,1.147-2.564,2.563-2.564l0,0c1.416,0,2.563,1.148,2.563,2.564V89.717z" />
                                    <path fill="#EF4437"
                                        d="M78.82,76.818c0,1.315-1.066,2.38-2.381,2.38h-3.701c-1.316,0-2.381-1.065-2.381-2.38V65.427
                                              c0-1.314,1.064-2.38,2.381-2.38h3.701c1.314,0,2.381,1.066,2.381,2.38V76.818z" />
                                    <path fill="#EF4437"
                                        d="M76.679,100.004c0,0.648-0.526,1.176-1.175,1.176h-1.83c-0.648,0-1.176-0.527-1.176-1.176v-5.627
                                              c0-0.648,0.527-1.176,1.176-1.176h1.83c0.648,0,1.175,0.527,1.175,1.176V100.004z" />
                                </g>
                                <g>
                                    <path fill="#009C8E" d="M5.96,102.857V89.372h2.903v13.485c3.216,0.67,5.642,3.529,5.642,6.941c0,1.637-0.569,3.232-1.605,4.496
                                              l-1.995-1.635c0.668-0.814,1.021-1.803,1.021-2.861c0-2.486-2.025-4.512-4.515-4.512c-2.488,0-4.514,2.025-4.514,4.512
                                              c0,1.078,0.386,2.123,1.086,2.939l-1.957,1.678c-1.101-1.283-1.708-2.924-1.708-4.617C0.318,106.387,2.743,103.527,5.96,102.857
                                              z" />
                                    <path fill="#FFFFFF"
                                        d="M4.847,89.717c0,1.416,1.148,2.564,2.563,2.564l0,0c1.416,0,2.563-1.148,2.563-2.564V72.091
                                              c0-1.416-1.148-2.564-2.563-2.564l0,0c-1.416,0-2.563,1.148-2.563,2.564V89.717z" />
                                    <path fill="#EF4437"
                                        d="M3.179,76.818c0,1.315,1.066,2.38,2.38,2.38h3.703c1.315,0,2.38-1.065,2.38-2.38V65.427
                                              c0-1.314-1.065-2.38-2.38-2.38H5.56c-1.314,0-2.38,1.066-2.38,2.38V76.818z" />
                                    <path fill="#EF4437"
                                        d="M5.321,100.004c0,0.648,0.526,1.176,1.176,1.176h1.83c0.649,0,1.176-0.527,1.176-1.176v-5.627
                                              c0-0.648-0.527-1.176-1.176-1.176h-1.83c-0.649,0-1.176,0.527-1.176,1.176V100.004z" />
                                </g>
                            </g>
                        </g>
                        <path fill="#FFFFFF"
                            d="M66.007,104.453c0,5.07-4.111,9.182-9.184,9.182H25.302c-5.071,0-9.184-4.111-9.184-9.182V69.456
                                        c0-5.07,4.112-9.182,9.184-9.182h31.521c5.072,0,9.184,4.111,9.184,9.182V104.453z" />
                        <path fill="#FFC336"
                            d="M61.864,155.455c0-5.481-4.444-9.926-9.927-9.926c-5.481,0-9.925,4.444-9.925,9.926H61.864z" />
                        <path fill="#FFC336"
                            d="M40.162,155.455c0-5.481-4.444-9.926-9.926-9.926s-9.926,4.444-9.926,9.926H40.162z" />
                        <path fill="#009C8E"
                            d="M60.11,127.225c0,1.198-0.972,2.171-2.171,2.171H45.403c-1.198,0-2.17-0.973-2.17-2.171l0,0
                                        c0-1.2,0.972-2.172,2.17-2.172h12.536C59.139,125.053,60.11,126.024,60.11,127.225L60.11,127.225z" />
                        <path fill="#009C8E"
                            d="M38.676,127.225c0,1.198-0.974,2.171-2.172,2.171H23.97c-1.199,0-2.172-0.973-2.172-2.171l0,0
                                        c0-1.2,0.973-2.172,2.172-2.172h12.534C37.702,125.053,38.676,126.024,38.676,127.225L38.676,127.225z" />
                        <path fill="#2E313D"
                            d="M56.83,48.903c0,1.125-0.912,2.038-2.038,2.038H27.333c-1.126,0-2.038-0.913-2.038-2.038v-4.13
                                        c0-1.126,0.912-2.038,2.038-2.038h27.459c1.126,0,2.038,0.912,2.038,2.038V48.903z" />
                        <g>
                            <rect x="28.034" y="44.994" fill="#FFC336" width="2.246" height="3.907" />
                            <rect x="31.021" y="44.994" fill="#FFC336" width="2.246" height="3.907" />
                            <rect x="34.008" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                            <rect x="36.994" y="44.994" fill="#FFC336" width="2.246" height="3.907" />
                            <rect x="39.981" y="44.994" fill="#FFC336" width="2.246" height="3.907" />
                            <rect x="42.968" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                            <rect x="45.954" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                            <rect x="48.941" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                            <rect x="51.928" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                        </g>
                        <g>
                            <g>

                                <rect x="28.84" y="32.345"
                                    transform="matrix(0.7071 0.7071 -0.7071 0.7071 34.6058 -12.2811)" fill="#EF4437"
                                    width="6.574" height="6.574" />
                                <polygon fill="#2E313D"
                                    points="32.127,35.632 32.127,30.984 27.479,35.632 32.127,40.281       " />
                            </g>
                            <g>

                                <rect x="46.793" y="32.345"
                                    transform="matrix(0.7071 0.7071 -0.7071 0.7071 39.864 -24.9755)" fill="#EF4437"
                                    width="6.574" height="6.574" />
                                <polygon fill="#2E313D"
                                    points="50.08,35.632 50.08,30.984 45.432,35.632 50.08,40.281      " />
                            </g>
                        </g>
                        <path fill="#009C8E"
                            d="M57.317,75.53c0,2.894-2.345,5.239-5.238,5.239H30.924c-2.894,0-5.238-2.345-5.238-5.239l0,0
                                        c0-2.894,2.345-5.238,5.238-5.238h21.155C54.973,70.292,57.317,72.636,57.317,75.53L57.317,75.53z" />

                    </g>
                </svg>
                <div class="form__icons">
                </div>
                <input class="form__input" type="text" placeholder="Name">
                <input class="form__input" type="text" placeholder="Email">
                <input class="form__input" type="password" placeholder="Password">
                <button type="submit" class="btn-google" style="background-color: #1A237E;">S'inscrire</button>
               <a href="<?php echo $client->createAuthUrl(); ?>" class="btn-google">
                  <img src="<?php echo site_url('assets/img/google.png'); ?>"  alt="Google Icon"> Se connecter avec Google
              </a>
            </form>
        </div>
        <div class="container b-container" id="b-container" style="
  background-image:url('img/wave/footer-bg.png ');
  background-repeat:no-repeat;
      ">
            <form class="form" id="b-form"  method="POST" action="<?php echo base_url('AdminController/traitementloginAdministrateur')?>">
                <h2 class="form_title title">Se connecter</h2>

                <svg class="robot" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="82px" height="160px"
                    viewBox="0 0 82 160" enable-background="new 0 0 82 160" xml:space="preserve">
                    <g>
                        <path fill="#EF4437"
                            d="M56.3,58.613c0,2.325-1.884,4.21-4.212,4.21H30.351c-2.326,0-4.211-1.885-4.211-4.21l0,0
                                        c0-2.326,1.885-4.211,4.211-4.211h21.737C54.416,54.401,56.3,56.287,56.3,58.613L56.3,58.613z" />
                        <path fill="#EF4437" d="M43.268,6.597l-2.015-2.015c-0.139-0.14-0.365-0.14-0.504,0l-2.016,2.015c-0.139,0.139-0.139,0.364,0,0.503
                                        l1.911,1.911v3.59c0,0.197,0.16,0.356,0.356,0.356s0.356-0.159,0.356-0.356v-3.59L43.268,7.1
                                        C43.406,6.961,43.406,6.735,43.268,6.597z M41.356,8.003V7.376c0-0.196-0.159-0.356-0.356-0.356s-0.356,0.16-0.356,0.356v0.627
                                        l-1.155-1.155L41,5.337l1.511,1.511L41.356,8.003z" />
                        <path fill="#B5E0DD"
                            d="M47.242,40.957c0,3.012-2.441,5.454-5.453,5.454h-1.577c-3.012,0-5.455-2.442-5.455-5.454V15.723
                                        c0-3.012,2.442-5.453,5.455-5.453h1.577c3.012,0,5.453,2.441,5.453,5.453V40.957z" />

                        <ellipse transform="matrix(0.7853 -0.6192 0.6192 0.7853 0.8779 30.2266)" fill="#D1ECEB"
                            cx="44.016" cy="13.848" rx="1.208" ry="3.098" />
                        <rect x="24.274" y="104.453" fill="#EF4437" width="12.454" height="49.885" />
                        <rect x="45.71" y="104.453" fill="#EF4437" width="12.456" height="49.885" />
                        <ellipse fill="#FFFFFF" cx="41.063" cy="40.281" rx="24.942" ry="16.939" />
                        <g>
                            <rect x="10.673" y="69.086" fill="#009C8E" width="60.653" height="4.073" />
                            <g>
                                <g>
                                    <path fill="#009C8E" d="M76.04,102.857V89.372h-2.903v13.485c-3.217,0.67-5.641,3.529-5.641,6.941
                                              c0,1.637,0.568,3.232,1.604,4.496l1.996-1.635c-0.668-0.814-1.021-1.803-1.021-2.861c0-2.486,2.025-4.512,4.515-4.512
                                              c2.488,0,4.515,2.025,4.515,4.512c0,1.078-0.387,2.123-1.087,2.939l1.958,1.678c1.101-1.283,1.707-2.924,1.707-4.617
                                              C81.682,106.387,79.256,103.527,76.04,102.857z" />
                                    <path fill="#FFFFFF"
                                        d="M77.152,89.717c0,1.416-1.147,2.564-2.563,2.564l0,0c-1.416,0-2.563-1.148-2.563-2.564V72.091
                                              c0-1.416,1.147-2.564,2.563-2.564l0,0c1.416,0,2.563,1.148,2.563,2.564V89.717z" />
                                    <path fill="#EF4437"
                                        d="M78.82,76.818c0,1.315-1.066,2.38-2.381,2.38h-3.701c-1.316,0-2.381-1.065-2.381-2.38V65.427
                                              c0-1.314,1.064-2.38,2.381-2.38h3.701c1.314,0,2.381,1.066,2.381,2.38V76.818z" />
                                    <path fill="#EF4437"
                                        d="M76.679,100.004c0,0.648-0.526,1.176-1.175,1.176h-1.83c-0.648,0-1.176-0.527-1.176-1.176v-5.627
                                              c0-0.648,0.527-1.176,1.176-1.176h1.83c0.648,0,1.175,0.527,1.175,1.176V100.004z" />
                                </g>
                                <g>
                                    <path fill="#009C8E" d="M5.96,102.857V89.372h2.903v13.485c3.216,0.67,5.642,3.529,5.642,6.941c0,1.637-0.569,3.232-1.605,4.496
                                              l-1.995-1.635c0.668-0.814,1.021-1.803,1.021-2.861c0-2.486-2.025-4.512-4.515-4.512c-2.488,0-4.514,2.025-4.514,4.512
                                              c0,1.078,0.386,2.123,1.086,2.939l-1.957,1.678c-1.101-1.283-1.708-2.924-1.708-4.617C0.318,106.387,2.743,103.527,5.96,102.857
                                              z" />
                                    <path fill="#FFFFFF"
                                        d="M4.847,89.717c0,1.416,1.148,2.564,2.563,2.564l0,0c1.416,0,2.563-1.148,2.563-2.564V72.091
                                              c0-1.416-1.148-2.564-2.563-2.564l0,0c-1.416,0-2.563,1.148-2.563,2.564V89.717z" />
                                    <path fill="#EF4437"
                                        d="M3.179,76.818c0,1.315,1.066,2.38,2.38,2.38h3.703c1.315,0,2.38-1.065,2.38-2.38V65.427
                                              c0-1.314-1.065-2.38-2.38-2.38H5.56c-1.314,0-2.38,1.066-2.38,2.38V76.818z" />
                                    <path fill="#EF4437"
                                        d="M5.321,100.004c0,0.648,0.526,1.176,1.176,1.176h1.83c0.649,0,1.176-0.527,1.176-1.176v-5.627
                                              c0-0.648-0.527-1.176-1.176-1.176h-1.83c-0.649,0-1.176,0.527-1.176,1.176V100.004z" />
                                </g>
                            </g>
                        </g>
                        <path fill="#FFFFFF"
                            d="M66.007,104.453c0,5.07-4.111,9.182-9.184,9.182H25.302c-5.071,0-9.184-4.111-9.184-9.182V69.456
                                        c0-5.07,4.112-9.182,9.184-9.182h31.521c5.072,0,9.184,4.111,9.184,9.182V104.453z" />
                        <path fill="#FFC336"
                            d="M61.864,155.455c0-5.481-4.444-9.926-9.927-9.926c-5.481,0-9.925,4.444-9.925,9.926H61.864z" />
                        <path fill="#FFC336"
                            d="M40.162,155.455c0-5.481-4.444-9.926-9.926-9.926s-9.926,4.444-9.926,9.926H40.162z" />
                        <path fill="#009C8E"
                            d="M60.11,127.225c0,1.198-0.972,2.171-2.171,2.171H45.403c-1.198,0-2.17-0.973-2.17-2.171l0,0
                                        c0-1.2,0.972-2.172,2.17-2.172h12.536C59.139,125.053,60.11,126.024,60.11,127.225L60.11,127.225z" />
                        <path fill="#009C8E"
                            d="M38.676,127.225c0,1.198-0.974,2.171-2.172,2.171H23.97c-1.199,0-2.172-0.973-2.172-2.171l0,0
                                        c0-1.2,0.973-2.172,2.172-2.172h12.534C37.702,125.053,38.676,126.024,38.676,127.225L38.676,127.225z" />
                        <path fill="#2E313D"
                            d="M56.83,48.903c0,1.125-0.912,2.038-2.038,2.038H27.333c-1.126,0-2.038-0.913-2.038-2.038v-4.13
                                        c0-1.126,0.912-2.038,2.038-2.038h27.459c1.126,0,2.038,0.912,2.038,2.038V48.903z" />
                        <g>
                            <rect x="28.034" y="44.994" fill="#FFC336" width="2.246" height="3.907" />
                            <rect x="31.021" y="44.994" fill="#FFC336" width="2.246" height="3.907" />
                            <rect x="34.008" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                            <rect x="36.994" y="44.994" fill="#FFC336" width="2.246" height="3.907" />
                            <rect x="39.981" y="44.994" fill="#FFC336" width="2.246" height="3.907" />
                            <rect x="42.968" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                            <rect x="45.954" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                            <rect x="48.941" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                            <rect x="51.928" y="44.994" fill="#FFC336" width="2.245" height="3.907" />
                        </g>
                        <g>
                            <g>

                                <rect x="28.84" y="32.345"
                                    transform="matrix(0.7071 0.7071 -0.7071 0.7071 34.6058 -12.2811)" fill="#EF4437"
                                    width="6.574" height="6.574" />
                                <polygon fill="#2E313D"
                                    points="32.127,35.632 32.127,30.984 27.479,35.632 32.127,40.281       " />
                            </g>
                            <g>

                                <rect x="46.793" y="32.345"
                                    transform="matrix(0.7071 0.7071 -0.7071 0.7071 39.864 -24.9755)" fill="#EF4437"
                                    width="6.574" height="6.574" />
                                <polygon fill="#2E313D"
                                    points="50.08,35.632 50.08,30.984 45.432,35.632 50.08,40.281      " />
                            </g>
                        </g>
                        <path fill="#009C8E"
                            d="M57.317,75.53c0,2.894-2.345,5.239-5.238,5.239H30.924c-2.894,0-5.238-2.345-5.238-5.239l0,0
                                        c0-2.894,2.345-5.238,5.238-5.238h21.155C54.973,70.292,57.317,72.636,57.317,75.53L57.317,75.53z" />

                    </g>
                </svg>
                <div class="form__icons"></div>
                <input class="form__input" type="text" placeholder="Email">
                <input class="form__input" type="password" placeholder="Password">
                <button class="btn-google" style="background-color: #1A237E;">Se connecter</button>
                <a href="<?php echo $client->createAuthUrl(); ?>" class="btn-google">
                    <img src="<?php echo site_url('assets/img/google.png'); ?>"  alt="Google Icon"> Se connecter avec Google
                </a>
            </form>
        </div>
        <div class="switch" id="switch-cnt">
            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>

            <div class="switch__container" id="switch-c1">

                <h2 class="switch__title title">Bonjour !</h2>
                <div id="di-h1">
                    <span>Hello</span>
                    <span>Salama</span>
                    <span>Hola</span>
                </div>
                <div id="di-h2">
                    <span>RAVI DE FAIRE</span>
                    <span>PARTIE</span>
                    <span>DE WEBCUP 2k23</span>
                </div>
                <div id="di-h3">
                    <span>ALEA</span>
                    <span>TEAM</span>
                    <span>P</span>
                </div>
                <div class="switch__description description">

                </div>
                <button class="switch__button button switch-btn">Se connecter</button>
            </div>
            <div class="switch__container is-hidden" id="switch-c2">
                <h2 class="switch__title title">Bonjour !</h2>
                <p class="switch__description description">Inscrivez-vous !</p>
                <button class="switch__button button switch-btn">S'inscrire</button>
            </div>
        </div>
    </div>
    <script src="<?php echo site_url('assets/login/main.js'); ?>"></script>
</body>

</html>
<!-- partial -->
<script src="<?php echo site_url('assets/login/login/login.js'); ?>"></script>

</body>
<style type="text/css">
.btn-google {
    display: inline-block;
    background-color: #dd4b39;
    color: #fff;
    /*border-radius: 25px;*/
    padding: 12px 16px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
    margin: 0.5em;
    width: 250px;
}

.btn-google:hover {
    background-color: #c23321;
}

.btn-google img {
    height: 16px;
    width: 16px;
    margin-right: 8px;
}
</style>
</html>