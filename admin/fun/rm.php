<?php 
	//先include数据库
	include "../include/config.php";
	include "../include/common.fun.php";
	//获取需要调用的函数名
	$type = $_GET['type'];
	//通过字符串拼接出我们定义的function
	$function = "delete_".$type;
	//判断该function是否存在。如果不存在就绝逼是非法操作
	if(function_exists($function)){
		//如果存在该方法就调用这个方法
		$function();
	}else{
		//不存在就非法操作
	}

	function delete_nav(){
		$id = (int)$_GET['id'];
		//非法
		if(!$id){
			echo "非法";
			die;
		}
        if(del("nav","n_id",$id)){
            header("Location:../nav-list.php"); 
        }
	}
	function delete_news(){}
	function delete_product(){}
?>