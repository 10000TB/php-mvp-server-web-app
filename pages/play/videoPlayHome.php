<!-- DB Connection Here -->

<!-- Document type -->
<!DOCTYPE html>

<!-- html start <html and head contents included -->
<?php include "../pageElements/htmlStartWithHeads.php"; ?>

<link rel="stylesheet" type="text/css" href="../../web/js/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="../../web/js/slick/slick-theme.css"/>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
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
	<div class="video-play-main">
		
		
	</div>


	<div class="SectionSplit4"></div>
	<div class="SectionSplit3" id="six"></div>


</body>

	<!-- html ends with pure html end tag -->
<?php  include '../pageElements/htmlEndWithNothing.php'; ?>
