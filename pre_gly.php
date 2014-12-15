<?php
$id = $_GET['id'];																			


$id_start = $id; // 5
$id_end = $id +5;


	include_once("connection.php");
							//////////// >10                    <=15
	$sql = "select * from pht_gly where id >'".$id_start."' AND id <='".$id_end."'";
	$ex_q = mysql_query($sql);
	
	$sql_tot = "select * from pht_gly";///19
	$ex_count = mysql_query($sql_tot);///19
	$total = mysql_num_rows($ex_count);//19
if($id_start == 5)
{
	$id_start= 0;
}
else
{
	if($id_start == 0)
	{
	}
	else
	{
	$id_start = $id_start-5;
	}
}

?>
	<div id="gly_nav">
	<input type="hidden" id="pre_value" value="<?php echo $id_start;?>">
<?php
	while($v= mysql_fetch_assoc($ex_q))
	{
		$img_nm= "'".$v['path'].$v['img_no']."'";
		$img_tag = $v['img_nm'];
		echo "<input type='hidden' name='".$v['img_nm']."' id=".$v['id'].">";
		echo "<img src=".$img_nm." id='".$v['id']."' class='un1' onclick=img_show(".$v['id'].")>";
	}
	
?>
		
		<input type="hidden" id="next_value" value="<?php echo $id_end;?>">
	</div>
