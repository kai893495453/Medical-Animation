<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 4 order by c_id desc limit 1");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>案例分享</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/case.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require_once "include/header.php"; ?>
<main>
	<div class="content w1000 mAuto">
    	<div class="fl content-tag">
        	<div class="title">健康分享</div>
        	<div class="f12">HEALTN SHARING</div>
        	<div class="line"></div>
            <div class="subtag">
                <div class="active"><a href="#">案例分享</a></div>
            </div>
        	<div class="cb"></div>
        </div>
    	<div class="fr content-main">
        	<article class="breadcrumbs f12">当前位置：  <a href="index.php">首页</a>  >  <a href="#">健康分享</a>  >  <a href="#">  案例分享</a></article>
            <div class="line"></div>
            <div class="detail mAuto">
            	<h1>撞车后腿不能动，需要康复，该怎么办？</h1>
                <div class="releaseTime">发布时间：2016-01-13</div>
                <div class="body">这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容</div>
                <div class="collect">收藏</div>
                <div class="cb"></div>
                <div class="recommend">
                	<div class="title">产品推荐</div>
                    <ul>
                    	<li>
                        	<a href="#"><img src="images/product/product-01.png" /></a>
                            <span>多功能带便孔护理床</span>
                        </li>
                    	<li>
                        	<a href="#"><img src="images/product/product-01.png" /></a>
                            <span>多功能带便孔护理床</span>
                        </li>
                    	<li>
                        	<a href="#"><img src="images/product/product-01.png" /></a>
                            <span>多功能带便孔护理床</span>
                        </li>
                    	<li class="lastItem">
                        	<a href="#"><img src="images/product/product-01.png" /></a>
                            <span>多功能带便孔护理床</span>
                        </li>
                        <div class="cb"></div>
                    </ul>
                </div>
                <p class="jumpLink pt25 pb15">上一篇：<a href="#">如何用维生素</a></p>
                <p class="jumpLink">下一篇：<a href="#">维生素的妙处</a></p>
            </div>
        </div>
    	<div class="cb"></div>
    </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>