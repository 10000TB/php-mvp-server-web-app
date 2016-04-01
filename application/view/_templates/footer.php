        <div class="footer">

        </div>
    </div><!-- close class="wrapper" -->

	<div class="onboarding-bottom-logo-container">
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

	<script>

		$( ".header-navi-home-tab" ).hover(
  			function() {
    			$( this ).css('background-color','rgba(0,75,171,1)');
  			}, function() {
    			$( this ).css('background-color','transparent');
  			}
		);



		$( document ).ready(function() {
						$(function() {
   			 $(window).scroll(sticky_relocate);
    		  sticky_relocate();
			});

		    	function sticky_relocate() {
		    		var window_top = $(window).scrollTop();
		    		var div_top = 0;
		    		if (window_top > div_top) {
		        		// $('#sticky').addClass('stick');
		        		// $('#sticky-anchor').height($('#sticky').outerHeight());
		        		$('#sticky').css("top",window_top);
		    		} else if(window_top < div_top){
		    			$('#sticky').css("top",0);
		        		// $('#sticky').removeClass('stick');
		        		// $('#sticky-anchor').height(0);
		    		}else{
		    			$('#sticky').css("top",0);
		    		}
				}
		});



	</script>

</body>
</html>