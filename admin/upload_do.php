<?php 
	require_once "../include/config.php";
	$username = $_POST['username'];
	$publish_date = $_POST['publish_date'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$info = $_POST['info'];
	$tag = $_POST['tag'];
	$file = $_FILES['file'];
	//判断是否本次上传的文件
	if(is_uploaded_file($file['tmp_name'])){
		//生成一个文件上传的路径
		$dir = returnDir($file);
		move_uploaded_file($file['tmp_name'],$dir);
	}
	function returnDir($f){
		//判断文件头是否图片格式
		$file = fopen($f['tmp_name'],"r");
		$imgType = array(
			'FFD8FFE1'=>"jpg",
			'89504E47'=>"png",
			'47494638'=>"gif"
		);
		$type = $imgType[strtoupper(bin2hex(fread($file,4)))];
		$y = date("y");
		$m = date("m");
		$d = date("d");
		//生成一个随机数防止有冲突
		$name = date("His");
		for($i=0;$i<6;$i++){
			$name .=  chr(mt_rand(65,91));
		}
		//判断是否存在这个文件夹
		$addr = "../upload/".$y."/".$m."/".$d."/";
		if(!is_dir($addr)){
			mkdir($addr,0700,true);
		}
		return $addr.$name.$type;
	}
?>