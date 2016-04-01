<!DOCTYPE html>

<html>
<head>
   <title>ChyWaWa</title>

   <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="../../web/imgs/ChyWaWaSiteIconSolid.png" />

<link rel="stylesheet" type="text/css" href="../../web/css/helpers.css"/>
</head>
<body>

<div style="position:absolute;width:100%;height:1500px;top:0px;background-color:rgba(0,49,107,1);margin:0px 0px;">
	<div id="authenticateBetaAccess" style="width:300px;height:80px;background:rgba(0,0,0,0.3);position:absolute auto;margin:50px auto;opacity:0;">
		<div class="title" style="width:auto;height:20;position:relative;">
			<span style="color:white;font-size:18px;background-color:transparent;width:100%;height:auto;display:inline-block;text-align:center;">enter invitation code</span>
		</div>
		<div class="invitation-code-enter" style="width:100%;height:36px;background-color:transparent;border-bottom:2px solid white;position:relative;">
			<input type="text" style="width:290px;height:20px;position:relative;;margin:5px auto;left:3px;"/>
		</div>
		<div clas="button" style="font-size:15px;width:100%;height:20px;position:relative;background-color:transparent;color:white;text-align:center;">
			<div class="go" style="width:50%;height:100%;float:left;">Go</div><div class="cancel" style="float:left;width:50%;height:100%;">Cancel</div>
		</div>
	</div>
	<div class="inbuilding-logo" style="width:150px;height:75px;background-color:trasparent;margin:200px auto;margin-bottom:0px;position:relative;">
		<a id="inbuilding-logo" href="">logo</a>
	</div>
	<div class="inbuilding-info" style="width:auto;height:auto;margin:30px auto;background-color:transparent;text-align:center;color:white;">
		For more about ChyWaWa and our story<br> <a href="">admin@chywawa.com</a> <br> <br>For investor(s)<br>  <a href="">raise@chywawa.com</a> 
		<br><br><a id="accessBeta" href="#" style="width:0px;"></a>
	</div>
</div>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
   $("#accessBeta").click(function(){
   		$("#authenticateBetaAccess").animate({
   			opacity: 1,
   		},299,function(){
   		$("#authenticateBetaAccess").css("opacity","1"); 
   		});  
	
   });

   $(".button").hover(function(){
   	 $(".button").css("background-color","rgba(0,49,107,0.3)");
   },function(){});
</script>

</body>
</html>
