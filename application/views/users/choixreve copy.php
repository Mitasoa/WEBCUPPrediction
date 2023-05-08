<!DOCTYPE html>
<html lang="en">
<?php $url = site_url('');
$url = $url . '/assets/users/';
?>

<!-- Mirrored from karciz.dexignzone.com/laravel/demo/app-profile by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2022 10:43:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Karciz | Profile</title>

    <meta name="description" content="Some description for the page" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">




    <link href="<?= $url ?>public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= $url ?>public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= $url ?>step/mydream.css" rel="stylesheet" type="text/css" />
    <link href="<?= $url ?>step/dream.css" rel="stylesheet" type="text/css" />




    <link href="<?= $url ?>public/css/style.css" rel="stylesheet" type="text/css" />



</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="show">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?= $url ?>public/images/logo.png" alt="">
                <img class="logo-compact" src="<?= $url ?>public/images/logo-text.png" alt="">
                <img class="brand-title" src="<?= $url ?>public/images/logo-text.png" alt="">

            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/1.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/2.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/3.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/4.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/5.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/1.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/2.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/3.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/4.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/5.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/1.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/2.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/3.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/4.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="<?= $url ?>public/images/avatar/5.jpg"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:;" class="dz-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10" rx="1" />
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:;" data-toggle="dropdown" aria-expanded="false"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i>
                                            View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to
                                            close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to
                                            group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/2.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/2.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/2.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/2.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/2.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/2.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="<?= $url ?>public/images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i
                                                class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:;" class="btn btn-primary btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:;" class="btn btn-primary btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:;" class="btn btn-primary btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:;" class="btn btn-primary btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="event-list.html">Event List</a></li>
                            <li><a href="page-event.html">Event</a></li>
                            <li><a href="customers.html">Customer</a></li>
                            <li><a href="page-analytics.html">Analytics</a></li>
                            <li><a href="page-review.html">Review</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.html">Product Grid</a></li>
                                    <li><a href="ecom-product-list.html">Product List</a></li>
                                    <li><a href="ecom-product-detail.html">Product Details</a></li>
                                    <li><a href="ecom-product-order.html">Order</a></li>
                                    <li><a href="ecom-checkout.html">Checkout</a></li>
                                    <li><a href="ecom-invoice.html">Invoice</a></li>
                                    <li><a href="ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-controls-3"></i>
                            <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">Bootstrap</span>
                        </a>



                        <div class="copyright">
                            <p class="fs-14 font-w200"><strong class="font-w400">Karciz Ticketing Admin
                                    Dashboard</strong> © 2020 All Rights Reserved</p>
                            <p>Made with <i class="fa fa-heart text-danger"></i> by DexignZone</p>
                        </div>
            </div>
        </div>

        <div class="content-body">
            <!-- row -->
            <!-- row -->
            <div class="container-fluid">
                <h1>CHOIX REVE</h1>




                <Horizon>

                    <Road>

                        <div class="di-body">

                            <img alt="image" class="robot" width="50" src="<?= $url ?>public/images/avatar/1.jpg">

                            <!-- partial:index.partial.html -->
                            <!--PEN HEADER-->
                            <div class="di-content">
                                <div class="di-content__inner">
                                    <div class="container">
                                        <!--di-content title-->
                                        <h1 class="di-content__title di-content__title--m-sm" style="font-size:50px">
                                            MAKE DREAM</h1>
                                        <section class="carousel">
                                            <ul class="carousel__list">
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Anthony Lee</h2>
                                                            <h3 class="user__title">Archetypal Professor of Recognition
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Alicia Chevalier</h2>
                                                            <h3 class="user__title">Corporate Usability Analyst</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image">
                                                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" />
                                                        </div>
                                                        <h2>UU</h2>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Nate Boucher</h2>
                                                            <h3 class="user__title">Customer Impact Officer</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1614204424926-196a80bf0be8?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Leah Harris</h2>
                                                            <h3 class="user__title">Designer and Bandit</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0" data-active="data-active">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1536766768598-e09213fdcf22?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Angelina Laurent</h2>
                                                            <h3 class="user__title">Oracle for Inspiration</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Gal Gadot</h2>
                                                            <h3 class="user__title">Acting Designer and Consultant</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1590086782792-42dd2350140d?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Albert Sørensen</h2>
                                                            <h3 class="user__title">Neural Big Shot of Anticipation</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1553514029-1318c9127859?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Candice Marchand</h2>
                                                            <h3 class="user__title">Mindful Realist of Motion Laws </h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1596813362035-3edcff0c2487?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Jennifer Salazar</h2>
                                                            <h3 class="user__title">Design Habitué</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1552374196-c4e7ffc6e126?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Antonin Dufour</h2>
                                                            <h3 class="user__title">Human-Centered Designer</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1530785602389-07594beb8b73?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Melissa Simon</h2>
                                                            <h3 class="user__title">International Infrastructure Analyst
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__item" tabindex="0">
                                                    <div class="carousel__box">
                                                        <div class="carousel__image"><img
                                                                src="https://images.unsplash.com/photo-1560250097-0b93528c311a?fit=crop&amp;h=720&amp;q=80"
                                                                width="480" height="720" /></div>
                                                        <div class="carousel__contents">
                                                            <h2 class="user__name">Brandon Murray</h2>
                                                            <h3 class="user__title">Central Functionality VP</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="carousel__nav">
                                                <button class="prev">
                                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                                        <path
                                                            d="M9.586 4l-6.586 6.586a2 2 0 0 0 0 2.828l6.586 6.586a2 2 0 0 0 2.18 .434l.145 -.068a2 2 0 0 0 1.089 -1.78v-2.586h7a2 2 0 0 0 2 -2v-4l-.005 -.15a2 2 0 0 0 -1.995 -1.85l-7 -.001v-2.585a2 2 0 0 0 -3.414 -1.414z">
                                                        </path>
                                                    </svg><span>prev</span>
                                                </button>
                                                <button class="next"><span>next</span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12.089 3.634a2 2 0 0 0 -1.089 1.78l-.001 2.586h-6.999a2 2 0 0 0 -2 2v4l.005 .15a2 2 0 0 0 1.995 1.85l6.999 -.001l.001 2.587a2 2 0 0 0 3.414 1.414l6.586 -6.586a2 2 0 0 0 0 -2.828l-6.586 -6.586a2 2 0 0 0 -2.18 -.434l-.145 .068z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </section>
                    </Road>
                </Horizon>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
                        target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= $url ?>public/vendor/global/global.min.js" type="text/javascript"></script>
    <script src="<?= $url ?>public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript">
    </script>
    <script src="<?= $url ?>public/js/custom.min.js" type="text/javascript"></script>
    <script src="<?= $url ?>public/js/deznav-init.js" type="text/javascript"></script>
    <script src="<?= $url ?>step/script.js" type="text/javascript"></script>
    <script src="<?= $url ?>step/mydream.js" type="text/javascript"></script>
    <script id="DZScript" src="../../../dzassets.s3.amazonaws.com/w3-global8bb6.js?btn_dir=right"></script>

    <!--		<script src="https://karciz.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>
      <script src="https://karciz.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script> -->
    <!--	
   -->
</body>

<!-- Mirrored from karciz.dexignzone.com/laravel/demo/app-profile by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2022 10:43:20 GMT -->

</html>