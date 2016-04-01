<?php 
echo '<div class="topControlContainer">
		<div class="siteLogo" ><a id="siteLogo" href="../home/home.php">site Logo</a></div>
		<div class="controlsWrapper">
				<div class="globalLogo">
					<a href="home.php" id="siteLogo">
					</a>
				</div>
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
				<div class="userWrapper">

					<div class="userLoginSignup">
						<div class="userSignup">
							<a id="userSignUpText" href="../signUp/signUp.php">Sign Up</a>
						</div>
						<div class="userLogin">
							<div id="circleUserProfileImage"><a id="userLoginText" href="../login/login.php">Login</a></div>
						</div>

					</div>
					<div class="userUpload">
						<a id="uploadText" class="uploadText" href="../upload/upload.php">upload</a>
					</div>
				</div>
		</div>
	</div>';
?>