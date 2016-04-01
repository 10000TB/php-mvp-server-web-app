<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../web/imgs/ChyWaWaSiteIconSolid.png" />
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../web/css/home.css">
	<link rel="stylesheet" type="text/css" href="../../web/css/signUp.css">
</head>
<body>

<!-- header section -->
	<div class="signUpHeader">
		<div class="signUpHeaderTitle"><a id="signUpHeaderTitle" href="../home/home.php">ChyWaWa</a></div>
		<div class="haveAAccountLabel"><span id="haveAAccountLabel">Have an Account? &nbsp&nbsp&nbsp&nbsp</span></div>
		<div class="signUpPageHeaderLogin"><a id="signUpPageHeaderLogin" href="../login/login.php">Login</a></div>
	</div>



<!-- main content section -->
	<div class="mainContentWrapper">
		<div class="signUpContainerWrapper">
			<div class="signUpAlertsContainer">
				
			</div>
			<div class="signUpContentsContainer">
				<div class="signUpSubTitle"><a id="signUpSubTitle" href="">signup</a></div>

				<form action="">
					<div class="signUpStandardBox">
						<input type="text" name="firstName" id="firstName" placeholder="First Name" tabindex="1"><input type="text" name="lastName" id="lastName" placeholder="Last Name" tabindex="2">
					</div>
					<div class="signUpStandardBox">
						<input type="text" name="emailAddress" id="emailAddress" placeholder="Email Address" tabindex="3">
					</div>
					<div class="signUpStandardBox">
						<input type="text" name="reEnteredEmailAddress" id="reEnteredEmailAddress" placeholder="Re-enter Email Address" tabindex="4">
					</div>
					<div class="signUpStandardBox">
						<input type="password" name="password" id="password" placeholder="password" tabindex="5">
					</div>
					<div class="signUpStandardBox" tabindex="6">
						<button type="submit" name="signUpSubmit" id="signUpSubmit" placeholder="Sign up" >
					</div>
					<div class="signUpStandardBox">
						<div class="signUpPolicy">
							<p id="signUpPolicy">
By signing up, you agree to the <a href="#signUpStandardBox" tabindex="7">Terms</a> of Service and <a href="#signUpStandardBox" tabindex="8">Privacy Policy</a>, including <a href="#signUpStandardBox" tabindex="9">Cookie Use<a>. Others will be able to find you by email, phone number, and your name.
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


<!-- footer section -->

	<div class="footerContainer" style="position:absolute;bottom:0px;position:relative;">
		<div class="SectionSplit2" id="seven"></div>
		<div class="zeroFooterContentsRegion">
			
		</div>
		<!-- <div class="SectionSplitLine1"></div> -->
		<div class="firstFooter">
			<!-- <div class="history"><a id="history" href="#history">history</a></div> -->
			<div class="language" style="margin-left:0px;"><a id="language" href="#language">language</a></div>
			<div class="languageSelected"><span id="languageSelected">English</span></div>
			<div class="help"><a id="help" href="#help">help</a></div>

		</div>
		<div class="SectionSplit1" id="eight"></div>
		<div class="SectionSplit1" id="nine"></div>
		<div class="firstFooterContentsRegion">
			
		</div>

		<div class="SectionSplitLine1"></div>
		<div class="secondFooter">
			<!-- <div class="chyWaWaNowQuickLink"><a id="chyWaWaNowQuickLink" href="#chyWaWaNowQuickLink">Now</a></div> -->
			<div class="chyWaWaVoteQuickLink"><a id="chyWaWaVoteQuickLink" href="#chyWaWaVoteQuickLink">Vote</a></div>
			<!-- add  quick links all services -->
		</div>
		<div class="thirdFooter">
			<div class="advertise"><a id="advertise" href="#advertise">Advertise</a></div>
			<div class="uploader"><a id="uploader" href="#uploader">Uploader</a></div>
			<div class="voters"><a id="voters" href="#voters">Voters</a></div>
			<div class="fameCalculation"><a id="fameCalculation" href="#fameCalculation">FameCalculation</a></div>
			<div class="developer"><a id="developer" href="#developer">Developer</a></div>
			<!-- <div class=""></div> -->
			<!-- added developer , uploader declaim, ...-->
		</div>
		<div class="forthFooter">
			<div class="about"><a id="about" href="#about">About</a></div>
			<div class="privacy"><a id="privacy" href="#privacy">Privacy</a></div>
			<div class="cookies"><a id="cookies" href="#cookies">Cookies</a></div>
			<div class="directory"><a id="directory" href="#directory">Directory</a></div>
			<div class="copyright"><a id="copyright" href="#copyright">Copyright</a></div>
			<div class="copyrightIcon"><span id="copyrightIcon">© ChyWaWa 2016</span></div>

		</div>
	</div>
</body>
</html>