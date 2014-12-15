<?php
$id = $_GET['id'];
$id_start = $id; 
$id_end = $id + 5;
include_once("connection.php");
									
	$sql = "select * from pht_gly where id >'".$id_start."' AND id <='".$id_end."'";
	$ex_q = mysql_query($sql);
	
	$sql_tot = "select * from pht_gly";
	$ex_count = mysql_query($sql_tot);
	$total = mysql_num_rows($ex_count);
	if($id_end > $total)
	{
		$id_end = $id_start;
	}
	
?>
	<div id="gly_nav">
<?php
	while($v= mysql_fetch_assoc($ex_q))
	{
		$img_nm= "'".$v['path'].$v['img_no']."'";
		$img_tag = $v['img_nm'];
		echo "<input type='hidden' name='".$v['img_nm']."' id=".$v['id'].">";
		echo "<img src=".$img_nm." id='".$v['id']."' class='un1' onclick=img_show(".$v['id'].")>";
	}
	$id_start = $id_start -5;
?>
		<input type="hidden" id="pre_value" value="<?php echo $id_start;?>">
		<input type="hidden" id="next_value" value="<?php echo $id_end;?>">
	</div>
