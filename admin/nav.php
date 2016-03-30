<?php 
	require_once "../include/config.php";
	require_once "../include/common.fun.php";
	function get_all_nav($fid){
		//获取一个数组
		$navs = get_all("select * from nav where fid = {$fid}");
		//判断是否数组
		if(is_array($navs)){
			echo "<ul>";
			//如果是数组就继续遍历
			foreach ($navs as $key => $value) {
				echo "<li><a>{$value['name']}</a>------<a href='addNav.php?id={$value['n_id']}'>[添加导航栏目]</a></li>";
				//多加一维数组,把自己的id传进去调用回自己判断还有没有子类别
				$navs[$key]["subnav"] = get_all_nav($value['n_id']);
			}
			echo "</ul>";
		}
		//return这个数组
		return $navs;
	}
	get_all_nav(0);
?>