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
	function del($tbname,$field,$id,$link=""){
		if(! $link) $link = $_ENV['connect'];
		if(mysqli_query($link,"delete from {$tbname} where {$field} = {$id}")){
			return 1;
		}else{
			echo "错误了，错误提示：".mysqli_error($link);
			return 0;
		}
	}
	function update($tablename,$data,$where,$link=""){
		$sql = "update `$tablename` set ";
		foreach($data as $field_name => $field_value)
		{
			$sql .= " `$field_name` = '$field_value',";
		}
		$sql = substr($sql,0,-1);
		$sql = $sql . " where $where;";
		if (! $link) $link = $_ENV['db_link'];
		$ret = mysqli_query($link,$sql);
		if (!$ret) die(mysqli_error($link));
		return $ret;
	}
	function showMsg($msg,$url=''){
		$url =$url ? $url : $_SERVER['HTTP_REFERER'];
		$is_history_back = $url == 'js' ? 1 : 0;
?>
<!DOCTYPE html>
<html>
	<body>
		<style>
			div.parent{width:40%;400px;font-size:12px;padding-bottom:30px;margin:0 auto;border:1px solid #CCC;margin-top:100px;}
			h1{font-size:14px;border-bottom:1px solid #ccc;padding:10px;}
			.body{text-align;centern;padding:30px;}
			a{float:right;color:#333;padding-right:30px;}
		</style>
		<div class="parent">
			<h1>友情提示:</h1>
			<div class="body"><?php echo $msg;?></div>
			<a href="<?php echo $url;?>">返回上一页</a>
			<script>
				setTimeout(function(){
					<?php if ($is_history_back) :?>
						history.back();
					<?php else:?>
						location='<?php echo $url?>';
					<?php endif;?>
				},2000);
			</script>
		</div>
	</body>
</html>
<?php
die;
}
?>