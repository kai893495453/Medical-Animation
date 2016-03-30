<?php 
	set_time_limit(0);
	$connect = mysqli_connect("127.0.0.1","root","qingkai");
	mysqli_select_db($connect,"xuyang");
	mysqli_query($connect,"set names utf8");
	$t = array("电动起立床","电动病床","超级悬吊系统","电动升降床","很厉害的床","多功能带便孔护理床");
	$img = array("images/product01.png","images/product02.png","images/product05.png","images/product03.png","images/product04.png","images/product/product-01.png");
	$tag = array(16,17,18,19,20,21,22);
	$feature = array("很厉害咯","不错的啊","非常好啊","牛逼轰轰","帅死了","可以可以");
	$title = "";
	$img_url = "";
	$info = "";
	$tag_id = "";
	$saleservice = "";
	for($i=0;$i<200;$i++){
		$title = $t[mt_rand(0,5)].$i;
		$img_url = $img[mt_rand(0,5)];
		$info = $title.$title.$title.$title.$title.$title.$title.$title;
		$tag_id = $tag[mt_rand(0,6)];
		$saleservice = "售后服务是：".$info;
		$sql = "insert into product values(null,'".$title."','".$img_url."','".$info."','".$tag_id."','".$saleservice."');";
		mysqli_query($connect,$sql);
		$con = "我是内容，很多img".$i."我是内容，很多img".$i."我是内容，很多img".$i."我是内容，很多img".$i;
		$sql = "insert into product_detail value(null,'".$i."','".$con."')";
		mysqli_query($connect,$sql);
		$r = mt_rand(1,4);
		for($i=0;$i<$r;$i++){
			mysqli_query($connect,"insert into product_feature values(null,$i,'".$feature[mt_rand(0,5)]."')");
		}
		if(mysqli_query($connect,"insert into product_parameter values(null,$i,'产品名称','".$title."')")){
			if(mysqli_query($connect,"insert into product_parameter values(null,$i,'规格型号','1台/箱".$i."')")){
				if(mysqli_query($connect,"insert into product_parameter values(null,$i,'生产厂家','蚌埠市旭阳医疗动漫有限公司".$i."')")){
					if(mysqli_query($connect,"insert into product_parameter values(null,$i,'注册证号','abcdefg".$i."')")){
						if(mysqli_query($connect,"insert into product_parameter values(null,$i,'包装清单','原厂产品".$i."')")){
						}
					}
				}
			}
		}
		$title = "";
		$img_url = "";
		$info = "";
		$tag_id = "";
		$saleservice = "";
	}
	echo "完成";
?>