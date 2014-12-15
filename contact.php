<style>

#send_button:hover{
	color:#1ef2c8;
}
#form{
	text-align:left; margin-left:20px; position:relative; font-weight:normal;
}
#contact_holder{
	padding-top:20px;
}
input{
	 width:200px; font-weight:normal; margin-top:7px;  color:#1ef2c8; height:20px; border-bottom:2px solid grey; border-left:0px solid; border-right: 0px solid; border-top:0px solid; background-color:#19191b; padding-left:5px;
	 outline:0px;
}
textarea{
 width:200px; font-weight:normal; margin-top:5px;  color:#1ef2c8; height:70px; border-bottom:2px solid grey; border-left:0px solid; border-right: 0px solid; border-top:0px solid; background-color:#19191b; padding-left:5px;
 outline:0px;
}
#caption{
	padding-top:5px;
}
#lable_border{
	border-bottom:1px solid grey;
}
#contact_box{
	width:250px;  
	height:350px; 
	float:left; 
	bottom:10px; 
	box-shadow:0px 5px 5px 3px #222; 
	padding:4px;  
	margin-top:-400px; 
	z-index:60; 
	position:relative; 
	opacity:0.9; 
	background-color:#19191b; 
	color:white; 
	font-size: 17px;
}
</style>
</br>
<div id="contact_holder">
	
	<center>
		<img src="./img/line.png">
		<h1>Hello friends! Get in touch with me:)</h1>
		<img src="./img/line.png">
	</center>
	</br>
	
		<iframe width="960" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.nz/?ie=UTF8&amp;t=p&amp;ll=-36.851501,174.762182&amp;spn=0.018887,0.041199&amp;z=15&amp;output=embed"></iframe>
	<div id="contact_box">	
		<center>
		
		Say Hello!
		<img src="./img/line.png" style="margin-top:-15px;">
		
		<div id="form">
			<span id="lable_border">Name</span></br><input type="text" />
			<div id="caption"><span id="lable_border">Email</span></br><input type="text" /></div>
			<div id="caption"><span id="lable_border">Subject</span></br><input type="text" /></div>
			<div id="caption"><span id="lable_border">Message</span></br><textarea style=""></textarea></div>
			<h3 style="margin-top:10px; cursor:pointer; " id="send_button">Send</h3>
		</div>
		</center>
	</div>
	
	
	
</div>

<?php include_once('footer.php');?>