<style>
#profile_container{
	margin-top:0px;
	
	text-align:left;
	background-image: url('./img/tourch3.jpg');
	background-size: 960px 600px;
	background-repeat: no-repeat;
	height: 600px;
	width: 960px;
	
}
#profile_detail{
	padding-top:30px;
	padding-left:160px;
	color: silver;
	font-weight:normal;
	font-size:13px;
}
#title{
	color: silver;
	font-weight:normal;
	font-size:18px;
	margin-left:25px;
}
#inner_detail{
	margin-left:45px;
	margin-top:0px;
}
#profile_nav{
	float:left; margin-top:30px; color:silver; margin-left:15px;
	font-size:14px;
	padding-top:2px;
}
#nav1:hover{
	border-bottom: 1px solid grey;
	cursor:pointer;
	color:white;
	
}
</style>
<script>

</script>
<div id="profile_container">
	<div id="profile_nav">
		<span id="nav1" onclick="profile_display('my_edu')">My Education</span></br>
		<span id="nav1" onclick="profile_display('my_skills')">My Skills</span></br>
		
		
	</div>
	<div id="profile_detail">
		<span id="title"><img src="./img/edu.png" height="25px" width="25px">My Education</span></br><img src="./img/line.png" style="margin-top:-10px;">
		<div id="inner_detail">
		Postgraduate Diploma in Computer Information Science (CIS)</br>
		[Year - 2013]</br>
		<strong>From </strong>Auckland University of Technology (AUT)
		</br></br>
		Graduate Diploma in ICT (Software Development)</br>
		[Year - 2011-With Distinction]</br>
		<strong>From </strong>Universal College of Learning (UCOL)
		</br></br>
		Graduate Certificate in Information Assurance & Security (Networking)</br>
		[Year - 2010]</br>
		<strong>From </strong>Wellington Institute of Technology (WELTEC)
		</br></br>
		Bachelor in Computer Application</br>
		[Year -2008- With Second Class]</br>
		<strong>From </strong>Saurashtra University - India
		</div>
	</div>
</div>
