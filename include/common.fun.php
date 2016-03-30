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
	function insert($tbname,$data,$link=""){
		if(! $link) $link = $_ENV['connect'];
		if (is_array($data)) {
			$sql = "insert into `{$tbname}` set ";
			foreach ($data as $key => $value) {
				$sql .= "{$key}='{$value}',";
			}
			$sql = substr($sql,0,-1).";";
			if(mysqli_query($link,$sql)){
				return 1;
			}else{
				echo "错误了，错误提示：".mysqli_error($link);
				return 0;
			}
		}
	}
?>