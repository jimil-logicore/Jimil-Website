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
		$("#right").hide("slide", {direction: "right"}, 7500);
		$("#left").hide("slide", {direction: "left"}, 2400);
		
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
	
	
	$("#my_port").click(function(){
		$(".first_li").toggle("fold", "slow");//fold
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
	<div id="main_content" style="background-color:#eee; height:;">
			<center>
				<div id="welcome" style="margin-top:0px;border:0px solid red;">
					<div id="show_page"><!--Display page -->
						<div id="slider">
							<div class="slideshow">
								<img src="./img/slide_1.jpg" style="width:960px; height:370px;">
								<!--img src="./img/slide_2.jpg" style="width:960px; height:370px;">
								
								<img src="./img/slide_4.jpg" style="width:960px; height:370px;">
								<img src="./img/slide_3.2.jpg" style="width:960px; height:370px;"-->
							</div>
						</div>
						<div class="progress-bar"></div>	
						<div style="margin-top:410px; width:600px; height:70px">
							<!--img style="margin-left:-570px;  padding:2px; border:none; position:relative;" src="./img/d1.png">
							<h2 style="margin-top:-15px; font-weight:normal;font-variant: small-caps; line-height:180%; ">HELLO! I'M JIMIL SUMRA, I'M PASSIONATE FOR WEB DEVELOPMENT & FRONT-END DEVELOPMENT.</h2>
							<img style="margin-left:550px;  padding:2px; margin-top:-70px; border:none; position:relative;" src="./img/d2.png"-->
							<h1>Welcome to My Portfolio</h1>
						</div>
					</div>
				</div>
			</center>
				
				<div id="nav_content" style=" height:50px; background-color:#eee;">
					<div class="ribbon"style="background-color:#1b1b19;">
						<div id="nav" style="padding:5px; float:left; margin-left:20px;">		
							<nav>
								<a href="#" id="home">All</a>
								<a style="cursor:pointer;" id="my_port">My Portfolio</a>
								<a href="#" id="contact">My CV</a>
								<a href="#" id="contact">Photo Gallery</a>
								<a href="#" id="contact">I <img src="./img/love.png" style="height:14px; width:14px; margin-top:-2px;"> Doing</a>
								
							</nav>
						</div>
					</div>
					<div class="arrow_left"></div>	
					<div class="arrow_right"></div>
					
				</div>


				
				<div id="display_item" style="display:none;">
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
								<div id="more_info_holder" style="float:right;"><span id="more_info">More Info</span><img id="more_info_img" src="./img/more_info.png"></div>
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
					
					<div id="photo_holder" style="margin-left:0px; margin-right:0px; background-color:redc; position:relative;">
											
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
										<div id="mask_button"><strong>More Info</strong></div>
									</center>
								</div>
								
								
							</li>
							<li>
								<div id="box" style="z-index:1; position:relative; height: 275px; width:240px;">
									<img src="./img/2.jpg">
									<center><div id="img_nm">BIRDS FLYING</div></center>
								</div>
								<div id="mask"><center><strong>cccl</strong></center></div>
							</li>
							<li >
								<div id="box">
									<img src="./img/1.jpg">
									<center><div id="img_nm">SEA BEAUTY</div></center>
								</div>
								<div id="mask"><center><strong>cccl</strong></center></div>
							</li>						
							<li class="first_li">
								<div id="box">
									<img src="./img/9.jpg">
									<center><div id="img_nm">ENJOY SUNSET</div></center>
								</div>
								<div id="mask"><center><strong>cccl</strong></center></div>
							</li>
							<li >
								<div id="box">
									<img src="./img/web_work/blk.jpg">
									<center><div id="img_nm">BLAKE NORTHOVER</div></center>
								</div>
								<div id="mask"><center><strong>cccl</strong></center></div>
							</li>
							<li >
								<div id="box">
									<img src="./img/3.jpg">
									<center><div id="img_nm">PEHA BEACH</div></center>
								</div>
								<div id="mask"><center><strong>cccl</strong></center></div>
							</li>
						</ul>
					</div><!--End of photo holder-->	
				</div><!--End of photo panel-->
				
					
					
				</br></br></br></br></br></br></br>


		</div><!--End of main-content-->