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
        <div id="onboarding-image-frame" ><a>ChyWaWa</a></div>
    </div>
 </div>


<div class="onboarding-body-background" style="width:100%;height:auto;min-height:800px;background-color:white;">

    <div class="onboarding-body" style="width:1000px;height:auto;min-height:800px;background-color:white;margin:0px auto;height:auto;">
            <div class="container">
            <!-- login box on left side --> 
                <div class="signup-box" style="display: block;float:left;">
                    <span id="signup-title" style="text-align:left;width:90%;height:30px;display:block;margin-top:10px;left:25px;position:relative;font-size:22px;width:auto;">Sign Up</span>
                    <span id="signup-slogan" style="text-align:left;width:90%;height:40px;display:inline-block;margin-top:10px;left:25px;position:relative;font-size:15px;">An interesting place!</span>
                    <!-- register form -->
                    <form method="post" action="<?php echo Config::get('URL'); ?>register/register_action">
                        <!-- the user name input field uses a HTML5 pattern check -->
                        <!--  (letters/numbers, 2-64 chars) -->
                        <input type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Username" required /> 
                        <input type="text" name="user_email" placeholder="Email address " required />
                        <input type="text" name="user_email_repeat" placeholder="Repeat email address" required />
                        <!-- (6+ characters) -->
                        <input type="password" name="user_password_new" pattern=".{6,}" placeholder="Password" required autocomplete="off" />
                        <input type="password" name="user_password_repeat" pattern=".{6,}" required placeholder="Repeat your password" autocomplete="off" />

                        <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
                        <img id="captcha" style="width:100px;position:relative;left:35px;margin-bottom:-5px;" src="<?php echo Config::get('URL'); ?>register/showCaptcha" />
                        <!-- quick & dirty captcha reloader -->
                        <a href="#" style="display: inline-block; font-size: 11px; text-align: left;position:relative;left:40px;margin-bottom:10px;"
                           onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>register/showCaptcha?' + Math.random(); return false">Reload Captcha</a>


                        <input type="text" name="captcha" placeholder="Enter above characters" required />

                        <input type="submit" value="Sign Up" />

                        <p>By signing up, you agree to the <a href="#signUpStandardBox" tabindex="7">Terms</a> 
                            of Service and <a href="#signUpStandardBox" tabindex="8">Privacy Policy</a>, 
                            including <a href="#signUpStandardBox" tabindex="9">Cookie Use<a>. Others will be 
                            able to find you by email, phone number, and your name.</p>
                    </form>
                    
                    <!-- hua li li  de fen ge xian -->
                    <div class="sectionSeparator" style="width:90%;height:1px;background-color:rgba(0,0,0,0.3);margin:20px auto;"></div>
                    <div class="notice-box" style="width:90%;margin:5px auto;font-size:16px;"><span style="color:rgba(0,49,107,1);">Already have an account?, <a href="<?php echo Config::get('URL'); ?>login">Sign in!</a></span></div>


                    <!-- echo out the system feedback (error and success messages) -->
                    <?php $this->renderFeedbackMessages(); ?>

                </div>
            </div>
    
            <div class="onboarding-body-media" style="position:relative;float:right;background-color:transparent;width:600px;height:700px;top:20px;left:20px;">
                <a id="onboarding-img" style="position:relative;top:100px;left:100px;"></a>
            </div>
    </div>

</div>



<div class="onboarding-bottom-logo-container" >
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
