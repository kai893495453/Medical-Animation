<?php
	get_thumb("../images/banner.png",200,200);
	function get_thumb($file,$width,$height){
		//3.因为需要源文件，所以需要打开源文件
		//3-1.通过get获取图片基本信息，例如图片宽度高度文件格式
		$imageInfo = getimagesize($file);
		//3-2.设置响应头，伪装成图片格式
		header("Content-Type:{$imageInfo['mime']}");
		//3-3.新建一个数组放图片打开方式
		$open_fun = array(
			//因为PHP定义了一些图片的常量所以可以拿来使用,这里的3是因为png格式应该是3
			IMG_PNG => "imagecreatefrompng",
			3 => "imagecreatefrompng",
			IMG_JPEG => "imagecreatefromjpeg",
			IMG_JPG => "imagecreatefromjpg",
			IMG_GIF => "imagecreatefromgif"
		);
		//3-4.通过$open_fun这个函数获取打开图片的函数
		$image = $open_fun[$imageInfo[2]]($file);
		//4.设置目标文件宽度和高度
		$w = $imageInfo[0];
		$h = $imageInfo[1];
		if($w>$h){
			$nh = min($height,$h);
			//因为是等比例缩放所以可以通过3个值求出第4个值
			$nw = $nh / $h * $w;
		}else{
			$nw = min($width,$w);
			$nh = $nw / $w * $h;
		}
		$x = ($width - $nw) /2;
		$y = ($height - $nh) /2;
		//2.因为需要目标图片，所以新建一个新的图片
		$newImg = imagecreatetruecolor($width,$height);
		//1.通过imagecopyresampled做缩略图
		imagecopyresampled($newImg,$image,$x,$y,0,0,$nw,$nh,$imageInfo[0],$imageInfo[1]);
		//5.把缩略图显示出来
		$show_fun = array(
			IMG_PNG => "imagepng",
			3 => "imagepng",
			IMG_JPEG => "imagejpeg",
			IMG_JPG => "imagejpg",
			IMG_GIF => "imagegif"
		);
		$show_fun[$imageInfo[2]]($newImg);
	}
?>