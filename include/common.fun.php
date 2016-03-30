<?php 
	function get_all($sql,$link=""){
		if(! $link) $link = $_ENV['connect'];
		$data = mysqli_query($link,$sql);
		while($datas = mysqli_fetch_array($data)){
			$dataArr[] = $datas;
		}
		return @$dataArr;
	} 
	function get_one($sql,$link=""){
		if(! $link) $link = $_ENV['connect'];
		$data = mysqli_query($link,$sql);
		$datas = mysqli_fetch_array($data);
		return $datas;
	}
?>