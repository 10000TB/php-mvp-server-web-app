<!doctype html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <title>ChyWaWa</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo Config::get('URL'); ?>imgs/siteLogos/ChyWaWaSiteAddressIcon.ico" width="32px"/>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/home.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('URL'); ?>css/upload.css">

    <!-- Preload JS -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::get('URL'); ?>js/upload/plupload.full.min.js"></script>
    <script src="<?php echo Config::get('URL'); ?>js/upload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Video -->
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('URL'); ?>js/video/video-js.min.css">
    <script src="<?php echo Config::get('URL'); ?>js/video/video.min.js"></script>
    <script src="<?php echo Config::get('URL'); ?>js/video/ie8/videojs-ie8.min.js"></script>

</head>
<body>
    <!-- Global Top Control -->
    <div class="topControlContainer">
        <div class="siteLogo" ><a id="siteLogo" href="<?php echo Config::get('URL'); ?>index">site Logo</a></div>
        <div class="controlsWrapper">
                <div class="searchWrapper">
                    <form method="post" action="" id="searchForm">
                        <div class="searchStringBoxContainer">
                            <input type="text" name="searchString" id="searchStringBox" value="" placeholder="">
                        </div>
                        <button name="searchButton" id="searchButton" style="submit" >
                            <a><span id="searchButtonLabel">Search</span></a>
                        </button>
                    </form>
                </div>
                <div class="header-navigation" style="min-width:50px;height:42px;background-color:transparent;position:relative;float:left;left:15px;">
                    <div class="header-navi-home-tab" style="min-width:40px;height:30px;position:relative;top:6.5px;background-color:transparent;border-radius:5px;text-align:center;">
                        <span id="nav-home-span" style="color:white;margin-left:4px;margin-right:4px;;display:block;min-width:30px;height:15px;background-color:transparent;position:relative;top:6px;font-size:15px;">
                            <a href="<?php echo Config::get('URL'); ?>index" id="nav-home-span-link" style="color:white;text-decoration:none;width:auto;">home(12)</a>
                        </span>
                    </div>
                </div>
                <div class="userWrapper">

                    <?php if(Session::userIsLoggedIn()) {?>
                        <div class="userLoginSignup">
                                <ul class="navigation right">
                                <?php if (Session::userIsLoggedIn()) : ?>
                                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                                <a href="<?php echo Config::get('URL'); ?>user/index">My Account</a>
                                            <ul class="navigation-submenu">
                                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                                <a href="<?php echo Config::get('URL'); ?>dashboard/index">Dash Board</a>
                                            </li>                    
                                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                                <a href="<?php echo Config::get('URL'); ?>note/index">My Notes</a>
                                            </li>
                                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                                <a href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>
                                            </li>
                                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                                <a href="<?php echo Config::get('URL'); ?>user/editAvatar">Edit your avatar</a>
                                            </li>
                                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                                <a href="<?php echo Config::get('URL'); ?>user/editusername">Edit my username</a>
                                            </li>
                                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                                <a href="<?php echo Config::get('URL'); ?>user/edituseremail">Edit my email</a>
                                            </li>
                                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                                <a href="<?php echo Config::get('URL'); ?>user/changePassword">Change Password</a>
                                            </li>
                                            <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                                                <a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php if (Session::get("user_account_type") == 7) : ?>
                                        <li <?php if (View::checkForActiveController($filename, "admin")) {
                                            echo ' class="active" ';
                                        } ?> >
                                        
                                            <a href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
                                        </li>
                                    <?php endif; ?>
                                <?php endif; ?>
                                </ul>
                        </div>

                    <?php }else{ ?>

                        <div class="userLoginSignup">
                            <div class="userLogin">
                                <div id="circleUserProfileImage"><a id="userLoginText" href="<?php echo Config::get('URL'); ?>login/index">Login</a></div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="userUpload">
                        <a id="uploadText" class="uploadText" href="<?php echo Config::get('URL'); ?>upload">upload</a>
                    </div>
                </div>
        </div>
    </div>

    <!-- wrapper, to center a page -->
    <div class="wrapper">
