<?php 
function get_bread($nid,$tb="nav",$field="n_id"){
	$id = @get_one("select * from {$tb} where {$field} = {$nid}");
	if($id['fid']!=0){
		get_bread($id['fid']);
	}
	echo "<a href='{$id['alink']}?id={$id['n_id']}'>".$id['name']."</a> > ";
}
?>