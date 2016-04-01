var currentSelected="";
var currentHighlighted="";

$(document).ready(function(){
		//video

    	$("#VideoLi").hover(function(){
    		removeSelected();
    		currentSelected="VideoLi";
    		removeHighlighted();
    		$('#VideoLiText').addClass("TextActive");
    		currentHighlighted="VideoLiText";

    		$('.category-video').addClass("active");
    		if($('.category-video').hasClass("hidden")){
    			$('.category-video').removeClass("hidden");
    		}

       		$('#topTabsWrapperSubCategory').stop().animate({
       			'opacity': '1',
       		}, 700);
    	},function(){
    			$('#VideoLiText').removeClass("TextActive");

    			var selectted=0;

		    	$(".topTabsWrapper2").hover(function(){
		    			// mouse over top tabsWrapper2, do nothing
			    		var highlightText="#"+currentSelected+"Text";
			    		removeHighlighted();
			    		$(highlightText).addClass("TextActive");
			    		currentHighlighted=currentSelected;
		    			selectted=1;
		    	},function(){
		    			$('#VideoLiText').removeClass("TextActive");
		    				    			// otherwise, rehide the tabsWrapper2
			    		$('.category-video').addClass("hidden");
			    		if($('.category-video').hasClass("active")){
			    			$('.category-video').removeClass("active");
			    		}
			    		$('#topTabsWrapperSubCategory').stop().animate({
			    			'opacity': '0',
			    		}, 700);
		    	});

		    	$(".topControlContainer").hover(function(){
				    		$('.category-video').addClass("hidden");
				    		if($('.category-video').hasClass("active")){
				    			$('.category-video').removeClass("active");
				    		}
				    		$('#topTabsWrapperSubCategory').stop().animate({
				    			'opacity': '0',
				    		}, 700);
		    	}, function(){

		    	});

		    	setTimeout(
		    		function(){
		    			if(selectted==1){

			    		}else{

			    			if(currentSelected!=""){

			    			}else{
						    		$('.category-video').addClass("hidden");
						    		if($('.category-video').hasClass("active")){
						    			$('.category-video').removeClass("active");
						    		}
						    		$('#topTabsWrapperSubCategory').stop().animate({
						    			'opacity': '0',
						    		}, 700);
				    		}
				    	}
		    	},100);




    	});




    	$("#PhotoLi").hover(function(){
    		removeSelected();
    		currentSelected="PhotoLi";
    		removeHighlighted();
    		$('#PhotoLiText').addClass("TextActive");
    		currentHighlighted="PhotoLiText";

    		$('.category-photo').addClass("active");
    		if($('.category-photo').hasClass("hidden")){
    			$('.category-photo').removeClass("hidden");
    		}

       		$('#topTabsWrapperSubCategory').stop().animate({
       			'opacity': '1',
       		}, 700);

    	},function(){
    			$('#PhotoLiText').removeClass("TextActive");

    			var selectted=0;

		    	$(".topTabsWrapper2").hover(function(){
		    			// mouse over top tabsWrapper2, do nothing
			    		var highlightText="#"+currentSelected+"Text";
			    		removeHighlighted();
			    		$(highlightText).addClass("TextActive");
			    		currentHighlighted=currentSelected;
		    			selectted=1;
		    	},function(){
		    			$('#PhotoLiText').removeClass("TextActive");
		    				    			// otherwise, rehide the tabsWrapper2
			    		$('.category-photo').addClass("hidden");
			    		if($('.category-photo').hasClass("active")){
			    			$('.category-photo').removeClass("active");
			    		}
			    		$('#topTabsWrapperSubCategory').stop().animate({
			    			'opacity': '0',
			    		}, 700);
		    	});

		    	$(".topControlContainer").hover(function(){
				    		$('.category-photo').addClass("hidden");
				    		if($('.category-photo').hasClass("active")){
				    			$('.category-photo').removeClass("active");
				    		}
				    		$('#topTabsWrapperSubCategory').stop().animate({
				    			'opacity': '0',
				    		}, 700);
		    	}, function(){

		    	});

		    	setTimeout(
		    		function(){
		    			if(selectted==1){

			    		}else{

			    			if(currentSelected!=""){

			    			}else{
						    		$('.category-photo').addClass("hidden");
						    		if($('.category-photo').hasClass("active")){
						    			$('.category-photo').removeClass("active");
						    		}
						    		$('#topTabsWrapperSubCategory').stop().animate({
						    			'opacity': '0',
						    		}, 700);
				    		}
				    	}
		    	},100);


    	});



    	$("#SoundsLi").hover(function(){

    		removeHighlighted();
    		$('#SoundsLiText').addClass("TextActive");
    		currentHighlighted="SoundsLiText";

    		removeSelected();
    		$('.category-sound').addClass("active");
    		if($('.category-sound').hasClass("hidden")){
    			$('.category-sound').removeClass("hidden");
    		}
       		$('#topTabsWrapperSubCategory').stop().animate({
       			'opacity': '1',
       		}, 700);
    		currentSelected="SoundsLi";
    	},function(){
    		    $('#SoundsLiText').removeClass("TextActive");

    			var selectted=0;

		    	$(".topTabsWrapper2").hover(function(){
		    			// mouse over top tabsWrapper2, do nothing
			    		var highlightText="#"+currentSelected+"Text";
			    		removeHighlighted();
			    		$(highlightText).addClass("TextActive");
			    		currentHighlighted=currentSelected;
		    			selectted=1;
		    	},function(){
		    			$('#SoundsLiText').removeClass("TextActive");
		    			currentHighlighted="";
		    			currentSelected="";
		    				    			// otherwise, rehide the tabsWrapper2
			    		$('.category-sound').addClass("hidden");
			    		if($('.category-sound').hasClass("active")){
			    			$('.category-sound').removeClass("active");
			    		}

			    		$('#topTabsWrapperSubCategory').stop().animate({
			    			'opacity': '0',
			    		}, 700);
		    	});

		    	$(".topControlContainer").hover(function(){
					    		$('.category-sound').addClass("hidden");
					    		if($('.category-sound').hasClass("active")){
					    			$('.category-sound').removeClass("active");
					    		}
					    		$('#topTabsWrapperSubCategory').stop().animate({
					    			'opacity': '0',
					    		}, 700);
		    	}, function(){

		    	});

		    	setTimeout(
		    		function(){
		    			if(selectted==1){
		    				console.log("haha");
			    		}else{

			    			if(currentSelected!=""){
			    					// alert("haha");
			    			}else{
			    					
						    		$('.category-sound').addClass("hidden");
						    		if($('.category-sound').hasClass("active")){
						    			$('.category-sound').removeClass("active");
						    		}
						    		$('#topTabsWrapperSubCategory').stop().animate({
						    			'opacity': '0',
						    		}, 700);
				    		}
				    	}
		    	},100);


    	});



    	
    	$("#StoriesLi").hover(function(){
    		removeSelected();
    		currentSelected="StoriesLi";
    		removeHighlighted();
    		$('#StoriesLiText').addClass("TextActive");
    		currentHighlighted="StoriesLiText";

    		$('.category-story').addClass("active");
    		if($('.category-story').hasClass("hidden")){
    			$('.category-story').removeClass("hidden");
    		}

       		$('#topTabsWrapperSubCategory').stop().animate({
       			'opacity': '1',
       		}, 700);
    	},function(){
    			$('#StoriesLiText').removeClass("TextActive");

    			var selectted=0;

		    	$(".topTabsWrapper2").hover(function(){
		    			// mouse over top tabsWrapper2, do nothing
			    		var highlightText="#"+currentSelected+"Text";
			    		removeHighlighted();
			    		$(highlightText).addClass("TextActive");
			    		currentHighlighted=currentSelected;
		    			selectted=1;
		    	},function(){
		    			$('#StoriesLiText').removeClass("TextActive");
		    				    			// otherwise, rehide the tabsWrapper2
			    		$('.category-story').addClass("hidden");
			    		if($('.category-story').hasClass("active")){
			    			$('.category-story').removeClass("active");
			    		}
			    		$('#topTabsWrapperSubCategory').stop().animate({
			    			'opacity': '0',
			    		}, 700);
		    	});

		    	$(".topControlContainer").hover(function(){
				    		$('.category-story').addClass("hidden");
				    		if($('.category-story').hasClass("active")){
				    			$('.category-story').removeClass("active");
				    		}
				    		$('#topTabsWrapperSubCategory').stop().animate({
				    			'opacity': '0',
				    		}, 700);
		    	}, function(){

		    	});

		    	setTimeout(
		    		function(){
		    			if(selectted==1){

			    		}else{

			    			if(currentSelected!=""){

			    			}else{
						    		$('.category-story').addClass("hidden");
						    		if($('.category-story').hasClass("active")){
						    			$('.category-story').removeClass("active");
						    		}
						    		$('#topTabsWrapperSubCategory').stop().animate({
						    			'opacity': '0',
						    		}, 700);
				    		}
				    	}
		    	},100);



    	});


    	function removeSelected(){
    		if(currentSelected==""){

    		}else{
    			switch(currentSelected){
    				case "VideoLi":
    					if($('.category-video').hasClass("active")){
    						$('.category-video').removeClass("active");
    						$('.category-video').addClass("hidden");
    						currentSelected="";
    					}
    					break;

    				case "PhotoLi":
    					if($('.category-photo').hasClass("active")){
    						$('.category-photo').removeClass("active");
    						$('.category-photo').addClass("hidden");
    						 currentSelected="";
    					}
    					break;

    				case "SoundsLi":
    					if($('.category-sound').hasClass("active")){
    						$('.category-sound').removeClass("active");
    						$('.category-sound').addClass("hidden");
    						 currentSelected="";

    					}
    					break;

    				case "StoriesLi":
    					if($('.category-story').hasClass("active")){
    						$('.category-story').removeClass("active");
    						$('.category-story').addClass("hidden");
    						currentSelected="";
    					}

    					break;
    			}
    		}
    	}

    	function removeHighlighted(){
    		if(currentHighlighted==""){

    		}else{
    			switch(currentHighlighted){
    				case "VideoLi":
    					if($('#VideoLiText').hasClass("TextActive")){
    						$('#VideoLiText').removeClass("TextActive");
    						currentHighlighted="";
    					}
    					break;

    				case "PhotoLi":
    					if($('#PhotoLiText').hasClass("TextActive")){
    						$('#PhotoLiText').hasClass("TextActive");
    						 currentHighlighted="";
    					}
    					break;

    				case "SoundsLi":
    					if($('#SoundsLiText').hasClass("TextActive")){
    						$('#SoundsLiText').removeClass("TextActive")
    						currentHighlighted="";
    					}
    					break;

    				case "StoriesLi":
    					if($('#StoriesLiText').hasClass("TextActive")){
    						$('#StoriesLiText').removeClass("TextActive");
    						currentHighlighted="";
    					}
    					break;
    			}

    		}
    	}
 });
