<?php 
function get_all_nav($fid){
	//获取一个数组
	$navs = get_all("select * from nav where fid = {$fid}");
	//判断是否数组
	if(is_array($navs)){
	// 	//如果是数组就继续遍历
		foreach ($navs as $key => $value) {
			echo "<tr>";
			echo "<td>{$value['n_id']}</td>";
			if ($value['fid']!=0) {
	        	echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;{$value['name']}</td>";
			}else{
	        	echo "<td>{$value['name']}</td>";
			}
          	echo "<td>";
            echo "<a href=\"addNav.php?id={$value['n_id']}&upd=1\"><i class=\"icon-pencil\"></i></a>&nbsp;";
            echo "<a onclick=\"location.href='fun/rm.php?id={$value['n_id']}&type=nav'\" role=\"button\" data-toggle=\"modal\"><i class=\"icon-remove\"></i></a>";
          	echo "</td>";
        	echo "</tr>";
			// 多加一维数组,把自己的id传进去调用回自己判断还有没有子类别
			$navs[$key]["subnav"] = get_all_nav($value['n_id']);
		}
	}
	return $navs;
}
?>