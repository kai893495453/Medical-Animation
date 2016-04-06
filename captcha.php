<?php 
session_start();
error_reporting(7);
captcha(114,36,20,"font.ttf");
	function captcha($width,$height,$size,$font){
		header("Content-type:image/png");
		$image = imagecreatetruecolor($width,$height);
		$gray = imagecolorallocate($image,100,100,100);
		imagefill($image,0,0,$gray);
		$text = "";
		for($i=0;$i<4;$i++){
			$text .= chr(mt_rand(65,90));
		}
		$_SESSION['code'] = $text;
		$color = array(
			imagecolorallocate($image,255,255,255)
		);
		for($i=0;$i<9;$i++){
			$color[] = 	imagecolorallocate($image,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		}
		imagettftext($image,mt_rand($size-4,$size),mt_rand(-25,15),mt_rand(2,5),mt_rand(20,30),$color[array_rand($color)],$font,$text[0]);
		imagettftext($image,mt_rand($size-4,$size),mt_rand(-25,15),mt_rand(15,25),mt_rand(20,30),$color[array_rand($color)],$font,$text[1]);
		imagettftext($image,mt_rand($size-4,$size),mt_rand(-25,15),mt_rand(35,45),mt_rand(20,30),$color[array_rand($color)],$font,$text[2]);
		imagettftext($image,mt_rand($size-4,$size),mt_rand(-25,15),mt_rand(58,65),mt_rand(20,30),$color[array_rand($color)],$font,$text[3]);
		for($i=0;$i<6;$i++){
			imageline($image,mt_rand(1,$width),mt_rand(1,$height),mt_rand(1,$width),mt_rand(1,$height),$color[array_rand($color)]);
		}
		return imagepng($image);
	}
?>