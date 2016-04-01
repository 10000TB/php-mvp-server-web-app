<!-- DB Connection Here -->

<!-- Document type -->
<!DOCTYPE html>
<!-- html start <html and head contents included -->

<html>
		<head>
		<title>ChyWaWa</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="../../web/imgs/siteLogos/ChyWaWaSiteAddressIcon.ico" width="32px"/>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<link rel="stylesheet" type="text/css" href="../../web/css/home.css">

		<link rel="stylesheet" type="text/css" href="../../web/js/slick/slick.css"/>	
		<link rel="stylesheet" type="text/css" href="../../web/js/slick/slick-theme.css"/>

		<script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="../../web/js/home.js"></script>

</head>

<!--  -->
<body>
	<div class="whateverComes"></div>

<!-- top controls (site logo, search bar, upload, login, sign up) -->
	<?php include "../headers/topControls.php"; ?>


	<div id="uploadToolsWrapper" class="uploadToolsWrapper" >
	</div>

<div class="TopTabs">
	<div class="topTabsWrapper" id="topTabsWrapper">		
			<div class="ChyWaWaNow" style="float:left;position:relative;left:5px;top:5px;padding-right:5px;width:88px;width:0px;background-color:white;height:40px;margin:0 0 0 0;padding:0 0 0 0;"><a href="">Now!</a></div>
			
			<div class="topTabsContainer" id="topTabsContainer">
				<div class="categoriesWrapper">
					<div class="categoriesContainer">
						<ul id="categories">
							<!-- <li><a id="CLive" href=""><span>CLive</span></a></li> -->
							<!-- <li><a id="CWorlds" href=""><span>CWorlds</span></a></li> -->
							<li id="VideoLi"><a id="VideoLink" href=""><span id="VideoLiText" >Movies</span></a></li>
							<li id="PhotoLi"><a id="PhotoLink" href=""><span id="PhotoLiText" >&nbsp&nbsp&nbsp&nbspTVs</span></a></li>
							<li id="SoundsLi"><a id="SoundsLink" href=""><span id="SoundsLiText">Cartoon</span></a></li>
							<li id="StoriesLi"><a id="StoriesLink" href=""><span id="StoriesLiText">&nbspSports</span></a></li>	
							<li id="StoriesLi"><a id="StoriesLink" href=""><span id="StoriesLiText">&nbspMusic</span></a></li>	
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">&nbsp&nbsp&nbspCars</span></a></li>	
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">&nbsp&nbspTech</span></a></li>			
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">&nbsp&nbsp&nbspLife</span></a></li>	
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">&nbspNerds</span></a></li>	
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">Games</span></a></li>
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">&nbspTravel</span></a></li>	
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">Rumors</span></a></li>	
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">&nbsp&nbsp&nbspAds</span></a></li>
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">&nbsp&nbspShop</span></a></li>
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">Dancing</span></a></li>
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">&nbsp&nbsp&nbspBars</span></a></li>	
							<li id="CartoonLi"><a id="CartoonLink" href=""><span id="CartoonLiText">&nbsp+&nbspMore</span></a></li>	
						</ul>
					</div>
				</div>
			</div>
	</div>
	<!-- <div class="topTabsWrapperSplit"></div> -->
	<div class="topTabsWrapper2" id="topTabsWrapperSubCategory">
		<div class="subCategory" id="subCategory1">
			<div class="subcategorycContainer category-video hidden" id>
					<a id="list8" href="">Inspiring</a>
					<a id="list1" href="">Tech</a>
					<a id="list2" href="">School</a>
					<a id="list3" href="">Trailers</a>
					<a id="list4" href="">Games</a>
					<a id="list4" href="">Sports</a>
					<a id="list5" href="">Cars</a>
					<a id="list6" href="">Music</a>
					<a id="list7" href="">Girls</a>
					<a id="list8" href="">Boys</a>
					<a id="list18" href="">&nbsp&nbsp+&nbspMore&nbsp&nbsp&nbsp</a>
			</div>
			<div class="subcategorycContainer category-photo hidden">
					<a id="list1" href="">Virus</a>
					<a id="list2" href="">Beauty</a>
					<a id="list3" href="">Ridiculous</a>
					<a id="list4" href="">Crazy</a>
					<a id="list4" href="">MyGirl</a>
					<a id="list5" href="">Asian</a>
					<a id="list6" href="">Scary</a>
					<a id="list7" href="">NatureBty</a>
					<a id="list8" href="">NFL</a>
					<a id="list9" href="">Kiddng</a>
					<a id="list18" href="">&nbsp&nbsp+&nbspMore&nbsp&nbsp&nbsp</a>
			</div>
			<div class="subcategorycContainer category-sound hidden">
					<a id="list1" href="">BeatBoxing</a>
					<a id="list2" href="">Country</a>
					<a id="list3" href="">Karaoke</a>
					<a id="list4" href="">TopSongs</a>
					<a id="list5" href="">Noise</a>
					<a id="list6" href="">Astonishing</a>
					<a id="list7" href="">Scary</a>
					<a id="list8" href="">Mid-Night</a>
					<a id="list9" href="">Boring</a>
					<a id="list10" href="">Sppiring</a>
					<a id="list18" href="">&nbsp&nbsp+&nbspMore&nbsp&nbsp&nbsp</a>
			</div>
			<div class="subcategorycContainer category-story hidden">
					<a id="list1" href="">Tstory</a>
					<a id="list2" href="">Insane</a>
					<a id="list3" href="">Inspiring</a>
					<a id="list4" href="">CEOsStory</a>
					<a id="list4" href="">FUnnnn</a>
					<a id="list5" href="">Insteresting</a>
					<a id="list6" href="">DaughtersWriting</a>
					<a id="list7" href="">Hers</a>
					<a id="list8" href="">Boring</a>
					<a id="list9" href="">Inspiring</a>
					<a id="list18" href="">&nbsp&nbsp+&nbspMore&nbsp&nbsp&nbsp</a>
			</div>
		</div>
	</div>
</div>
		
<!-- crawl facebook, twitter, youtube, .... find exciteing things and make a list -->
<!-- people upload a link  -->








	<div class="TopVotesContainer" id="TopVotesContainer">
			<div class="home-channel-collection-box2" id="homeTopPresentation">
				<div class="home-top-selects">
					<div class="home-top-select" style="background-color:blue;"><img src="https://learnodo-newtonic.com/wp-content/uploads/2014/08/Pearl-Harbor-Facts-Featured.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:black;"><img src="https://learnodo-newtonic.com/wp-content/uploads/2015/08/Mary-1-Facts-Featured.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:green;"><img src="https://learnodo-newtonic.com/wp-content/uploads/2012/11/Andy-Warhol-Interesting-Facts-Featured-Image.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:violet;"><img src="https://leejo.github.io/images/2015/09/alhambra_1.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:blue;"><img src="https://learnodo-newtonic.com/wp-content/uploads/2014/08/Pearl-Harbor-Facts-Featured.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:black;"><img src="https://learnodo-newtonic.com/wp-content/uploads/2015/08/Mary-1-Facts-Featured.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:green;"><img src="https://learnodo-newtonic.com/wp-content/uploads/2012/11/Andy-Warhol-Interesting-Facts-Featured-Image.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:violet;"><img src="https://leejo.github.io/images/2015/09/alhambra_1.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:blue;"><img src="https://learnodo-newtonic.com/wp-content/uploads/2014/08/Pearl-Harbor-Facts-Featured.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:black;"><img src="https://learnodo-newtonic.com/wp-content/uploads/2015/08/Mary-1-Facts-Featured.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:green;"><img src="https://learnodo-newtonic.com/wp-content/uploads/2012/11/Andy-Warhol-Interesting-Facts-Featured-Image.jpg" width="1200px;"></div>
					<div class="home-top-select" style="background-color:violet;"><img src="https://leejo.github.io/images/2015/09/alhambra_1.jpg" width="1200px;"></div>
				</div>
			</div>
			<div class="SectionSplit2"></div>
			
			<div class="home-channel-collection-box2" id="movie">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Movies</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">


					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper">
							<div class="home-channel-collection-box2-unit2" id="movie0">
									<a href=""><img src="../../web/imgs/video-play/ride-along.png" width="380px;"></a>
									<div class="home-channel-collection-box2-unit2-introcover" id="movie0">
										<span><Strong class="title">RIDE ALONG 2 Featurette - Olivia Munn (2016) HD, whatever goes here for testing</Strong><br>9,333,123 views</span>
										<div class="home-channel-collection-box2-unit2-captionContainer"></div>
									</div>
									
									<div class="unit2-hover-cover" id="movie0" style="position:absolute;top:0px;left:0px;width:380px;height:560px;background-color:transparent;">
									<a href=""><img id="movie0" class="play-icon play-icon-inactive" src="../../web/imgs/video-play/play-icon1X1.png" width="380px;"></a>
								</div>	
							</div>

							<div class="home-channel-collection-box2-unit1CollectionBox2">
								<div class="home-channel-collection-box2-unit1" id="movie1">
									<a href=""><img src="../../web/imgs/video-play/best-scene-from-rush-hour3.png" width="240px;"></a>
									<div class="home-channel-collection-box2-unit1-introcover" id="movie1">
										<span><Strong class="title">Best Scene In Rush Hour3, whatevr goes here for testing long title</Strong><br>9,333,123 views</span>
										<div class="home-channel-collection-box2-unit1-captionContainer"></div>
									</div>
									
									<div class="unit1-hover-cover" id="movie1" style="position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:transparent;">
										<a href=""><img id="movie1" class="play-icon play-icon-inactive" src="../../web/imgs/video-play/play-icon.png" width="240px;"></a>
									</div>
								</div>
								<div class="home-channel-collection-box2-unit1" id="movie2">
									<a href=""><img src="../../web/imgs/video-play/Indepent-day-trailer.png" width="240px;"></a>
									<div class="home-channel-collection-box2-unit1-introcover" id="movie2">
										<span><Strong class="title">Indepent Day Trailer</Strong><br>0 views</span>
										<div class="home-channel-collection-box2-unit1-captionContainer"></div>
									</div>
									
									<div class="unit1-hover-cover" id="movie2" style="position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:transparent;">
										<a href=""><img id="movie2" class="play-icon play-icon-inactive" src="../../web/imgs/video-play/play-icon.png" width="240px;"></a>
									</div>
								</div>
								<div class="home-channel-collection-box2-unit1" id="movie3">
									<a href=""><img src="../../web/imgs/video-play/The-rise-of-thadland-official-trailer-2016.png" width="240px;"></a>
									<div class="home-channel-collection-box2-unit1-introcover" id="movie3">
										<span><Strong class="title">THE RISE OF THADLAND Official Trailer</Strong><br>909,333,123 views</span>
										<div class="home-channel-collection-box2-unit1-captionContainer"></div>
									</div>
									
									<div class="unit1-hover-cover" id="movie3" style="position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:transparent;">
										<a href=""><img id="movie3" class="play-icon play-icon-inactive" src="../../web/imgs/video-play/play-icon.png" width="240px;"></a>
									</div>
								</div>
								<div class="home-channel-collection-box2-unit1" id="movie4">
									<a href=""><img src="../../web/imgs/video-play/sing-street.png" width="240px;"></a>
									<div class="home-channel-collection-box2-unit1-introcover" id="movie4">
										<span><Strong class="title">SING STREET Official Trailer (2016) 80's...</Strong><br>333,123 views</span>
										<div class="home-channel-collection-box2-unit1-captionContainer"></div>
									</div>
									
									<div class="unit1-hover-cover" id="movie4" style="position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:transparent;">
										<a href=""><img id="movie4" class="play-icon play-icon-inactive" src="../../web/imgs/video-play/play-icon.png" width="240px;"></a>
									</div>
								</div>
								<div class="home-channel-collection-box2-unit1" id="movie5">
									<a href=""><img src="../../web/imgs/video-play/The-rise-of-thadland-official-trailer-2016.png" width="240px;"></a>
									<div class="home-channel-collection-box2-unit1-introcover" id="movie5">
										<span><Strong class="title">THE RISE OF THADLAND Official Trailer...</Strong><br>909,333,123 views</span>
										<div class="home-channel-collection-box2-unit1-captionContainer"></div>
									</div>
									
									<div class="unit1-hover-cover" id="movie5" style="position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:transparent;">
										<a href=""><img id="movie5" class="play-icon play-icon-inactive" src="../../web/imgs/video-play/play-icon.png" width="240px;"></a>
									</div>
								</div>

								<div class="home-channel-collection-box2-unit1" id="movie6">
									<a href=""><img src="../../web/imgs/video-play/The-rise-of-thadland-official-trailer-2016.png" width="240px;"></a>
									<div class="home-channel-collection-box2-unit1-introcover" id="movie6">
										<span><Strong class="title">THE RISE OF THADLAND Official Trailer...and whatever goes for testing long title</Strong><br>909,333,123 views</span>
										<div class="home-channel-collection-box2-unit1-captionContainer"></div>
									</div>
									
									<div class="unit1-hover-cover" id="movie6" style="position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:transparent;">
										<a href=""><img id="movie6" class="play-icon play-icon-inactive" src="../../web/imgs/video-play/play-icon.png" width="240px;"></a>
									</div>
								</div>
							</div>

						</div>
						<div class="home-channel-collection-box2-contentAssistantBox">
						
						</div>
					</div>

			</div>




			<div class="home-channel-collection-box2" id="tv">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">TVs</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>

			</div>



			<div class="home-channel-collection-box2" id="cartoon">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Cartoon</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
					</div>


			</div>



			<div class="home-channel-collection-box2" id="sport">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Sports</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-full">
							<div class="home-channel-collection-box2-unit2"></div>

							<div class="home-channel-collection-box2-unit1CollectionBox3">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>

							<div class="home-channel-collection-box2-unit1CollectionBox3-fill">
								
							</div>
						</div>
					</div>


			</div>


			<div class="home-channel-collection-box2" id="music">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Music</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>


			<div class="home-channel-collection-box2" id="car">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Cars</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>


			<div class="home-channel-collection-box2" id="tech">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Tech</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>



			<div class="home-channel-collection-box2" id="life">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Life</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>


			<div class="home-channel-collection-box2" id="nerd">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Nerds</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>


			<div class="home-channel-collection-box2" id="game">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Games</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>


			<div class="home-channel-collection-box2" id="Travel">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Travel</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>


			<div class="home-channel-collection-box2" id="rumor">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Rumors</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>



			<div class="home-channel-collection-box2" id="ad">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Ads</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>



			<div class="home-channel-collection-box2" id="shop">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Shop</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>


			<div class="home-channel-collection-box2" id="dance">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Dancing</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>



			<div class="home-channel-collection-box2" id="bar">
					<div class="home-channel-collection-titleBox900">
						<div class="home-channel-collection-titleBoxInner1">
							<a href="">Bars</a>
						</div>
					</div>
					<div class="home-channel-collection-titleBox300">
						
					</div>

					<div class="home-channel-collection-box2-contentBox">
						<div class="home-channel-collection-box2-contentWrapper-increased">
							<div class="home-channel-collection-box2-unit1CollectionBox4">
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
								<div class="home-channel-collection-box2-unit1"></div>
							</div>
						</div>
						<div class="home-channel-collection-box2-contentAssistantBox-reduced">
						
						</div>
					</div>


			</div>

			<div class="SectionSplit4"></div>
<!-- 			<div class="TopInTopsContainer">
				<a href="" id="TopInTopsPlaceholder">TopInTopsPlaceholder</a>
			</div>

			<div class="SectionSplit3" id="one"></div>
			<div class="NOOneVotedTagContainer">
				<div class="NOOneVotedTagContentsWrapper">
					<div class="reusableContainer1">
						
					</div>
					<div class="reusableContainer2"><a href=""></a></div>
					<div class="reusableContainer3"><a href=""></a></div>
					<div class="reusableContainer4"><a href=""></a></div>
					<div class="reusableContainer5"><a href=""></a></div>
					<div class="reusableContainer6"><a href=""></a></div>
				</div>
			</div>
			<div class="SectionSplit3" id="two"></div>
			<div class="NOTwoVotedTagContainer">
				<div class="NOTwoVotedTagContentsWrapper">
					
				</div>
			</div>
			<div class="SectionSplit3" id="three"></div>
			<div class="NOThreeVotedTagContainer">
				<div class="NOThreeVotedTagContentsWrapper"></div>
			</div>
			<div class="SectionSplit3" id="four"></div>
			<div class="NOFourVotedTagContainer">
				<div class="NOFourVotedTagContentsWrapper"></div>
			</div>
			<div class="SectionSplit3" id="five"></div>
			<div class="NOFiveVotedTagContainer">
				<div class="NOFiveVotedTagContentsWrapper"></div>
			</div> -->
			<div class="SectionSplit3" id="five"></div>
			<div class="SectionSplit2" id="five"></div>
<!-- 			<div class="LoadMoreContainer">
				<div class="LoadMoreButton"><a href=""><spLoad More</a></div>
			</div>
			<div class="SectionSplit1" id="six"></div> -->
	</div>



<!-- added in youtube API, vimeo, API for videos,   flicker API for photos -->





	<div class="SectionSplit3" id="six"></div>

	<div class="whatsMoreContainer" id="whatsMoreContainer" style="height:0px;">
		
	</div>
	<div class="SectionSplit3" id="six"></div>
	<?php include "../pageElements/completeFooter.php"; ?>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="../../web/js/slick/slick.min.js"></script>
  	<script src="../../web/js/slick.js"></script>
	<script>
		// $('#uploadText').click(function(){
		// 	var obj = $('#uploadToolsWrapper');
			
		// 	// alert(JSON.stringify(obj, null, 4));
		// 	$("#uploadToolsWrapper.uploadToolsWrapper").animate({border:'2px solid blue'},900);
  // 		});

  		// function showTools(){
  		// 	$('#uploadToolsWrapper').animate({height:'400px'},900);
  		// }

		// function showTools(theFrame){
		// 	theFrame.animate({height:'400px'},900);
		// }

  // 		window.onload = function() {
  //   	var theframe = document.getElementById('uploadToolsWrapper');
  //   	showTools(theframe);
// };
	</script>
	<script src="../../web/js/home-video-hover.js"></script>


</body>

	<!-- html ends with pure html end tag -->
<?php  include '../pageElements/htmlEndWithNothing.php'; ?>
