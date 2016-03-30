<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 2 order by c_id desc limit 1");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>销售网络</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/contact.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require_once "include/header.php"; ?>
<main>
  <div class="content w1000 mAuto">
    <div class="fl content-tag">
      <div class="title">走近旭阳</div>
      <div class="f12">ABAOUT US</div>
      <div class="line"></div>
      <div class="subtag">
        <div class=""><a href="aboutAs.php">关于旭阳</a></div>
        <div class=""><a href="contact.php">联系旭阳</a></div>
        <div class=""><a href="recruit.php">招贤纳士</a></div>
        <div class="active"><a href="shopMap.php">销售网络</a></div>
      </div>
      <div class="cb"></div>
    </div>
    <div class="fr content-main">
      <article class="breadcrumbs f12">当前位置： <a href="index.php">首页</a> > <a href="#">走进旭阳</a> > <a href="#"> 销售网络</a></article>
      <div class="line"></div>
      <div class="list">
        <div class="mapDetail f14 pt30">主要分布在以下地区:</div>
        <div class="showMap"><img src="images/showMap.png"></div>
      	<div class="pb50">"面向全国。开拓国际市场，构筑旭阳医疗营销大网络"，为满足市场不断变化的新需求，旭阳医疗团队力求不断的自我完善，提升售后服务水平，及时为客户提供全方位的咨询与解决方案，搭建旭阳医疗与用户零距离的沟通平台。</div>
      </div>
    </div>
    <div class="cb"></div>
  </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>