<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php 
	
?>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jimil Sumra - Web Developer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <!--script src="js/plugins.js"></script-->
        <!--script src="js/main.js"></script-->
		
		<!-- include Cycle plugin -->
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		
		<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

<script>
$(document).ready(function(){
	
	$('.slideshow').cycle({
	  
 
		fx: 'fade',  // choose your transition type, ex:zoom, fade, scrollUp, shuffle, etc...
		 speedIn:  2000, timeout:   4470 
		
	});
	$('#chan').cycle({
	    //fx: 'fade',  // choose your transition type, ex:zoom, fade, scrollUp, shuffle, etc...
		fx:    'fade', 
        delay: -2000	
	});
	
	$("#curtain").click(function ()
	{
		//$("#left").hide("slide", {direction: "up"}, 2300); //working slide up design-1
		$("#curtain_title").hide();
		$("#right").hide("slide", {direction: "right"}, 3000);
		$("#left").hide("slide", {direction: "left"}, 500);
		
		$("#body").css('overflow','visible');
		$("#container").css('disply','block');
	});
	
	/*Box curtain*/
	$("#box_1").mouseenter(function(){
		//$("#mask_1").stop(true,true).show("slide", {direction:"left"}, 600);//effect-1
		$("#mask_1").stop(true,true).slideDown(600);
	});
	$("#mask_1").mouseleave(function(){
		//$("#mask_1").stop(true,true).hide("slide", {direction:"left"}, 800);//effect-1
		$("#mask_1").stop(true,true).slideUp(700);
	});
	$("#box_2").mouseenter(function(){
		$("#mask_2").stop(true,true).slideDown(600);
	});
	$("#mask_2").mouseleave(function(){
		$("#mask_2").stop(true,true).slideUp(700);
	});
	$("#box_3").mouseenter(function(){
		$("#mask_3").stop(true,true).slideDown(600);
	});
	$("#mask_3").mouseleave(function(){
		$("#mask_3").stop(true,true).slideUp(700);
	});
	$("#box_4").mouseenter(function(){
		$("#mask_4").stop(true,true).slideDown(600);
	});
	$("#mask_4").mouseleave(function(){
		$("#mask_4").stop(true,true).slideUp(700);
	});
	$("#box_5").mouseenter(function(){
		$("#mask_5").stop(true,true).slideDown(600);
	});
	$("#mask_5").mouseleave(function(){
		$("#mask_5").stop(true,true).slideUp(700);
	});
	$("#box_6").mouseenter(function(){
		$("#mask_6").stop(true,true).slideDown(600);
	});
	$("#mask_6").mouseleave(function(){
		$("#mask_6").stop(true,true).slideUp(700);
	});
	
	
	
	
	
	
	/*Mask button to display item and close item*/
	$("#mask_button").click(function(){
		$("#display_item").slideDown("swing");
		$("#item_info").delay(1300).fadeIn("slow");	
	});
	$("#close_item").click(function(){
		$("#display_item").slideUp("swing");
		$("#item_info").delay(1000).fadeOut("slow");
	});
	
	/*Item photo slide for show information on item*/
	$(".s1").mouseenter(function(){
		$("#info_slide").stop(true,true).show("slide", {direction:"down"}, 500);
	});
	$(".s1").mouseleave(function(){
		$("#info_slide").stop(true,true).hide("slide", {direction:"down"}, 500);
	});
	
});
</script>
<script>
	function page_displayer(pg_nm)
	{
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
       {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	   }
		  xmlhttp.onreadystatechange=function()
	   {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				
			document.getElementById("main_content").innerHTML=xmlhttp.responseText;
			}
		}
		var pg = pg_nm + ".php";
		
		xmlhttp.open("GET",pg,true);
		xmlhttp.send();
	}	
</script>		
		
</head>
<body id="body" style="border:0px solid red; background-image: url('./img/test3.jpg');">
<div style="border: 0px solid yellow; background-color: #; ">
	<!--Working slide>
	<div id="left" style="float:left;color:white; display:; z-index:200; position:fixed; background-color:black; width:100%; opacity:0.9; height:100%;">
		<center>
		<img src="./img/fan_1.png" height="700px" width="150px">
		<div style="margin-left:0px; margin-top:-180px;"><h1>Welcome To Jimil Sumra</br>Website</h1></div>
		<span style="font-size:10px;margin-left:20px;"><a href="#" id="curtain">Click Me</a></span>
		</center>
	</div-->
	<!--Working two door-->
	<?php 
	//write something to get url
	$str = $_SERVER['PHP_SELF'];
	$tmp = explode('/',$str);
	//echo $tmp[3];
	if($tmp[3] == "index2.php")
	{	
	}
	else
	{
		include_once('door.php');
	}	
		
	?>



	<center>
	<div class="container" style="width:960px; border:0px solid green; margin-left:0px; border-left: 0px solid grey; border-right:0px solid grey; ">
	
		<div class="header" style="margin-top:0px;background-color:#eee;">
			<center>
			<div id="hd_holder" style="">
					<div id="logo" style="margin-top:25px;">
						<span style="font-size: 50px;">Jimil Sumra</span></br>
						<img src="./img/line.png" style="margin-top:-30px; margin-left:35px;padding:0px;"/>
						<div style="margin-left:105px; margin-top:-20px; font-size:16px;">Web Developer</div>
					</div>
					<div style="float:right; margin-right:30px; margin-top:10px;">
							<a id="tw" style="margin-left:10px;" href="#" class="icon-twitter icon-large"><span style="padding-left:4px;">Twitter</span></a>
							<a id="fb" style="margin-left:10px;" href="#" class="icon-facebook icon-large"><span style="padding-left:4px;">Facebook</span></a>
					</div>
			</div>
			</center>
		</div>
		
		
		<div id="nav_content" style="height:50px; background-color:#eee;">
				<div class="ribbon">
					<div id="nav" style="padding:5px;">		
						<nav>
							<a href="index2.php" onclick="" id="home">Home</a>
							<a href="#" onclick="page_displayer('about')" id="about">About Me</a>
							<a href="#" onclick="page_displayer('testimonial')" id="testimonial">Testimonial</a>
							<a href="#3" onclick="page_displayer('contact')" id="contact">Contact Me</a>
						</nav>
					</div>
				</div>
				<div class="arrow_left"></div>	
				<div class="arrow_right"></div>
		</div>
		
					
		
		<div id="main_content" style="background-color:#eee; height:;">
			<center>
				<div id="welcome" style="margin-top:0px;border:0px solid red;">
					<div id="show_page"><!--Display page -->
						<div id="slider">
							<div class="slideshow">
								<img src="./img/slide_1.jpg" style="width:960px; height:370px;">
								<img src="./img/slide_2.jpg" style="width:960px; height:370px;">
								<img src="./img/slide_4.jpg" style="width:960px; height:370px;">
								<img src="./img/slide_3.2.jpg" style="width:960px; height:370px;">
								
							</div>
						</div>
						<div class="progress-bar"></div>	
						<div style="margin-top:410px; width:600px; height:70px">
							<h1>Welcome to My Portfolio</h1>
						</div>
					</div>
				</div>
			</center>
				
				<div id="nav_content" style=" height:50px; background-color:#eee;">
					<div class="ribbon"style="background-color:#1b1b19;">
						<div id="nav" style="padding:5px; float:left; margin-left:20px;">		
							<nav>
								<a style="cursor:pointer;" href="index2.php" onclick="" id="my_port">My Portfolio</a>
								<a style="cursor:pointer;" onclick="page_displayer('profile')" id="my_profile">My Profile</a>
								<a style="cursor:pointer" onclick="page_displayer('photo_gly')" id="contact">Photo Gallery</a>
								<a href="#" id="contact">I <img src="./img/love.png" style="height:14px; width:14px; margin-top:-2px;"> Doing</a>
								
							</nav>
						</div>
					</div>
					<div class="arrow_left"></div>	
					<div class="arrow_right"></div>
					
				</div>


				
				<div id="display_item" style="display:none; text-align:left;">
					<!--Project details appear here-->
					</br>
					<div class="view">
						<div style="float:right;">
						<img src="./img/close2.png" id="close_item" style="height:15px; float:right; width:15px; margin-right:20px; cursor:pointer;">
						</br></br>
						<center>
							<div id="item_info" style="margin-right:50px; display:none; width:300px; font-size:13px;">
							
								<h2>CHAN RAK THAI SPA</h2><img src="./img/line.png" style="margin-top:-10px;padding:0px;"/></br>
								<strong>Project Type:</strong> freelancer</br>
								<strong>Published Year:</strong> 2011</br>
								<strong>Work:</strong> Design & Developement of website</br>
								<span style="border-bottom:1px solid #1b1b19;"><strong>Description</strong></span><p> I was engaged with Chan Rak Thai spa to design and develop website which displays services, promotions, receive messages from customers, 
								and with book online functionality and CMS to handle website dynamically.</p>
								</br></br>
								<div id="more_info_holder" style="float:right;"><span id="more_info">More Info</span><img id="more_info_img" onclick="page_displayer('project_detail')" src="./img/more_info.png"></div>
							</div>
						</center>
						</div>
						<div class="s1"> 
							
							<div id="info_slide">
								<div style="margin-left:20px;">
								Website Hints: 700</br>
								Website Health: Awesome</br>
								Visit Live Site: www.chanrakthaispa.co.nz
								</div>
							</div>
							
						</div>
						
					</div>
					</br></br>
				</div>
				



				
				<div id="photo_panel" style=" background-color:#eee;">
					
					<div id="photo_holder" style="margin-left:0px; margin-right:0px; position:relative;">
											
						<ul class="clearfix" style="positon:relative">
							
							<li id="portfolio_1" class="first_li">
								
								<div id="box_1">
									<img src="./img/web_work/chan.jpg">
									<center><div id="img_nm">CHAN RAK THAI SPA</div></center>
								</div>
								<div id="mask_1">
									</br></br>
									<center>
										</br><h2>Project Name</h2>
										Chan Rak Thai Spa</br></br>
										<h2>Project Year</h2>
										2010</br>
										</br>
										<div id="mask_button"><strong>View</strong></div>
									</center>
								</div>
								
								
							</li>
	<li>
								<div id="box_2">
									<img src="./img/web_work/civic_future.jpg">
									<center><div id="img_nm">CIVIC FUTURES</div></center>
								</div>
								<div id="mask_2">
									</br></br>
									<center>
										</br><h2>Project Name</h2>
										Civic Futures</br></br>
										<h2>Project Year</h2>
										2013</br>
										</br>
										<div id="mask_button"><strong>View</strong></div>
									</center>
								</div>
							</li>
							<li >
								<div id="box_3">
									<img src="./img/web_work/ufirst.jpg">
									<center><div id="img_nm">UFIRST</div></center>
								</div>
								<div id="mask_3">
									</br></br>
									<center>
										</br><h2>Project Name</h2>
										Ufirst</br></br>
										<h2>Project Year</h2>
										2013 - Going on</br>
										</br>
										<div id="mask_button"><strong>View</strong></div>
									</center>
								</div>
							</li>						
							<li class="first_li">
								<div id="box_4">
									<img src="./img/web_work/The_plaza.jpg">
									<center><div id="img_nm">THE PLAZA - SHOPPING MALL</div></center>
								</div>
								<div id="mask_4">
									</br></br>
									<center>
										</br><h2>Project Name</h2>
										The Plaza</br></br>
										<h2>Project Year</h2>
										2013 - Coming Soon</br>
										</br>
										<div id="mask_button"><strong>View</strong></div>
									</center>
								</div>
							</li>
							<li >
								<div id="box_5">
									<img src="./img/web_work/blk.jpg">
									<center><div id="img_nm">BLAKE NORTHOVER</div></center>
								</div>
								<div id="mask_5">
									</br></br>
									<center>
										</br><h2>Project Name</h2>
										Blake Northover</br></br>
										<h2>Project Year</h2>
										2013</br>
										</br>
										<div id="mask_button"><strong>View</strong></div>
									</center>
								</div>
							</li>
							<li >
								<div id="box_6">
									<img src="./img/web_work/harman_impex.jpg">
									<center><div id="img_nm">HARMAN IMPEX</div></center>
								</div>
								<div id="mask_6">
									</br></br>
									<center>
										</br><h2>Project Name</h2>
										Harman Impex</br></br>
										<h2>Project Year</h2>
										2013</br>
										</br>
										<div id="mask_button"><strong>View</strong></div>
									</center>
								</div>
							</li>
						</ul>
					</div><!--End of photo holder-->	
				</div><!--End of photo panel-->
				
					
					
				</br></br></br></br>
				<?php include_once("footer.php");?>

		</div><!--End of main-content-->
	</div><!--End of container-->
	</center>
</div>		
</body>
</html>
