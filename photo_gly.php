<style>
#photo_nav_holder{
	background-image: url('./img/photo_album/try4.1.jpg');
	background-size: 960px 140px;
	height:140px;
	width:960px;
	color: silver;
	font-size:24px;
	font-weight:normal;
}
#gly_title{
	padding-top:0px;
	margin-left:25px;
	float:left;
}
#gly_show{

}
#gly_img{
	height:590px;
	width:960px;
	
}

#gly_nav_img{

}
.un1{
	margin-top:15px;
	padding:0px;
	height:100px;
	width:120px;
	border-radius: 2px 2px 2px 2px;		
	margin-right:5px;
	margin-left:5px;
	
}
.un1:hover{
	box-shadow: 0px 0px 8px #1ef2cd;
	cursor:pointer;
}

/*::-webkit-scrollbar{
	height:10px;
	width:20px;
	border-radius: 4px 4px 4px 4px;
	background-color:#353538;
}
::-webkit-scrollbar-thumb{
	background-color:#1ef2cd;
	border-radius: 4px 4px 4px 4px;
}*/

#nav_button{
	height:30px;
	width:30px;
	cursor:pointer;
}
#gly_nav_holder{
	position:relative;
	height:110px;
	width:710px;
	border: 0px solid red;
	margin-top:0px;
	margin-left: 220px;
}
#gly_nav{
float:left; height:130px; width:650px;
margin-top:-10px;
}
#img_title{
	margin-left:20px;
}
#show_img_nm{
height:30px; width:960px; background-color:black; color:white; margin-top:-30px; font-size:16px; opacity:0.6;
}
#img_sentence{
	background-image: url('./img/photo_album/try4.1.jpg');
	background-size: 960px 50px;
	height:50px;
	font-size:16px;
	text-align: center;
	color:silver;
	font-style:italic;
	

}
</style>
<?php
	include_once('connection.php');
?>
<div id="photo_gly">
	<div id="photo_nav_holder">
	</br>
		<span id="gly_title">Photo Gallery</span>
		<div id="gly_nav_holder">
			<div style="float:left; height:30px; width:30px; margin-top:40px;">
			
				<img src="./img/left2.png" id="nav_button" onclick="gly_pre_list()">
			</div>
			<div id="gly_nav">
			<input type="hidden" id="pre_value" value="0">
				<?php
					$sql = mysql_query("select * from pht_gly where id>=1 AND id<=5");
					while($v = mysql_fetch_assoc($sql))
					{
						$img_no=$v['img_no'];
						$img_nm= "'".$v['path'].$v['img_no']."'";
						$img_tag = $v['img_nm'];
						echo "<input type='hidden' name='".$v['img_nm']."' id=".$v['id'].">";
						echo "<img src=".$img_nm." id='".$v['id']."' class='un1' onclick=img_show(".$v['img_no'].")>";
					}
				?>
				<input type="hidden" id="next_value" value="5">
				
			</div>
			<div style="float:left; height:30px; width:30px; margin-top:40px;">
				<img src="./img/right2.png" id="nav_button" onclick="gly_nxt_list()">
			</div>
		</div>
	</div>
	
	<div id="gly_show">
		<img id="gly_img" src="./img/photo_album/img_1.jpg" />
	</div>
	<div id="show_img_nm">
		<span id="img_title"><?php echo $img_tag;?></span>
	</div>
	<div id="img_sentence">
	
		There are no rules for good photographs, there are only good photographs.</br>
			-Ansel Adams
	</div>
</div>