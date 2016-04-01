<!doctype html>
<html>
<head>
    <title>ChyWaWa</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/home.css" />
    <!-- temp lnking -->
</head>

 <div class="onboarding-top-logo-container" >
    <div class="onboarding-top-logo-frame" style="width:1000px;height:60px;margin:0px auto;">
        <div class="onboarding-top-logo-title" style="width:140px;height:50px;float:left;color:white;font-size:30px;position:relative;top:25px;"><span></span></div>
        <div id="onboarding-image-frame" ><a href="">ChyWaWa</a></div>
    </div>
 </div>


<div class="onboarding-body-background" style="width:100%;height:auto;min-height:800px;background-color:white;">

    <div class="onboarding-body" style="width:1000px;height:auto;min-height:800px;background-color:white;margin:0px auto;height:auto;">
        
        <div class="container">
                <div class="login-page-box">

                            <!-- login box on left side -->
                            <div class="login-box">
                                <span id="signup-title" style="text-align:left;width:90%;height:30px;display:block;margin-top:10px;left:25px;position:relative;font-size:22px;width:auto;">Sign In</span>
                                <form action="<?php echo Config::get('URL'); ?>login/login" method="post">
                                    <input type="text" name="user_name" placeholder="Username or email" required />
                                        
                                    <div class="link-forgot-my-password" style="margin-bottom:3px;">
                                        <a href="<?php echo Config::get('URL'); ?>login/requestPasswordReset">I forgot my password</a>
                                    </div>

                                    <input type="password" name="user_password" placeholder="Password" required />
                                    <label for="set_remember_me_cookie" class="remember-me-label">
                                        <input type="checkbox" name="set_remember_me_cookie" class="remember-me-checkbox" />
                                        Keep me logged in
                                        <!-- two weeks for now -->
                                    </label>
                                    <!-- when a user navigates to a page that's only accessible for logged a logged-in user, then
                                         the user is sent to this page here, also having the page he/she came from in the URL parameter
                                         (have a look). This "where did you came from" value is put into this form to sent the user back
                                         there after being logged in successfully.
                                         Simple but powerful feature, big thanks to @tysonlist. -->
                                    <?php if (!empty($this->redirect)) { ?>
                                        <input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
                                    <?php } ?>
                                    <!--
                                        set CSRF token in login form, although sending fake login requests mightn't be interesting gap here.
                                        If you want to get deeper, check these answers:
                                            1. natevw's http://stackoverflow.com/questions/6412813/do-login-forms-need-tokens-against-csrf-attacks?rq=1
                                            2. http://stackoverflow.com/questions/15602473/is-csrf-protection-necessary-on-a-sign-up-form?lq=1
                                            3. http://stackoverflow.com/questions/13667437/how-to-add-csrf-token-to-login-form?lq=1
                                    -->
                                    <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
                                    <input type="submit" class="login-submit-button" value="Log in"/>
                                </form>

                                <div class="sectionSeparator" style="width:90%;height:1px;background-color:rgba(0,0,0,0.3);margin:20px auto;"></div>
                                <div class="notice-box" style="width:90%;margin:5px auto;font-size:16px;"><span style="color:rgba(0,49,107,1);">Don't have an account?, <a href="<?php echo Config::get('URL'); ?>register">Sign up!</a></span></div>


                                <!-- echo out the system feedback (error and success messages) -->
                                <?php $this->renderFeedbackMessages(); ?>
                            </div>

                            <!-- register box on right side -->
<!--                             <div class="register-box">
                                <h2>No account yet ?</h2>
                                <a href="<?php echo Config::get('URL'); ?>register/index">Register</a>
                            </div> -->
                        <!-- </div> -->

                </div>
             <!-- </div> -->
        </div><!-- close class="container" -->
    
        <div class="onboarding-body-media" style="position:relative;float:right;background-color:transparent;width:600px;height:700px;top:20px;left:20px;">
                <a id="onboarding-img" style="position:relative;top:100px;left:100px;"></a>
        </div>
    </div>

</div>



<div class="onboarding-bottom-logo-container" style="background-color:transparent;">
    <div class="global-company-category" style="width:1000px;height:35px;background-color:transparent;margin:0px auto;">
            <ul class="global-category" style="display:table !important;padding:0px 0px;height:30px;width:auto;margin-top:0px;margin-bottom:5px;">
                <li><a href="#">Log In</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Find</a></li>
            </ul>
            <div class="local-separator-line" style="wdth:100%;height:1px;background-color:rgba(0,0,0,0.2);"></div>
    </div>

    <div class="global-company-category" style="width:1000px;height:35px;background-color:transparent;margin:0px auto;">
            <ul class="global-category" style="display:table !important;padding:0px 0px;height:30px;width:auto;margin-top:0px;">
                <li><a href="#">English(US)</a></li>
                <li><a href="#">中文(简体)</a></li>
                <li><a href="#">Español</a></li>
                <li><a href="#">Português (Brasil)</a></li>
                <li><a href="#">Français (France)</a></li>
                <li><a href="#">Italiano</a></li>
                <li><a href="#">한국어</a></li>
                <li><a href="#">More</a></li>
            </ul>
    </div>

    <div class="global-company-category" style="width:1000px;height:auto;background-color:transparent;margin:0px auto;">
            <ul class="global-category" style="display:table !important;padding:0px 0px;height:30px;width:auto;margin-top:0px;">
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Security</a></li>
            </ul>
    </div>
    <div class="global-company-category" style="width:1000px;height:30px;background-color:transparent;margin:20px auto;color:rgba(0,0,0,0.2)">
            <ul class="global-category" style="display:table !important;padding:0px 0px;height:20px;width:auto;margin-top:0px;">
                <li>© ChyWaWa 2016</li>
            </ul>
    </div>
</div>