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
<title>维生素详情页</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/health.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require_once "include/header.php"; ?>
<main>
	<div class="content w1000 mAuto">
    	<div class="fl content-tag">
        	<div class="title">营养保健</div>
        	<div class="f12">NITRITION  HEALTH</div>
        	<div class="line"></div>
            <div class="subtag">
                <div class="active"><a href="health-vitamin.php">维生素</a></div>
                <div class=""><a href="health-mineral.php">矿物质</a></div>
                <div class=""><a href="health-nutrient.php">营养素</a></div>
                <div class=""><a href="health-assort.php">按功效分类</a></div>
            </div>
        	<div class="cb"></div>
        </div>
    	<div class="fr content-main">
        	<article class="breadcrumbs f12">当前位置：  <a href="index.php">首页</a>  >  <a href="#">营养保健</a>  >  <a href="#">  维生素</a></article>
            <div class="line"></div>
            <div class="list mAuto">
              <div class="detail mAuto">
                <h1>撞车后腿不能动，需要康复，该怎么办？</h1>
                <div class="releaseTime">发布时间：2016-01-13</div>
                <div class="body">这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容</div>
                <div class="collect mb20">收藏</div>
                <div class="cb"></div>
              </div>
              <div class="line liner"></div>
    <div class="jump mAuto">
        <p class="jumpLink pt25 pb15">上一篇：<a href="#">蚌埠市旭阳医疗动漫科技分公司成立</a></p>
        <p class="jumpLink">下一篇：<a href="#">旭阳医疗动漫科技业绩上涨20%</a></p>
    </div>
            </div>
    	</div>
    	<div class="cb"></div>
    </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>