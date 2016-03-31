<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  require_once "include/breadcrumb.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 2 order by c_id desc limit 1");
  /**[查询联系方式]*/
  $contactArr = get_all("select * from contact");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们</title>
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
        <div class="active"><a href="contact.php">联系旭阳</a></div>
        <div class=""><a href="recruit.php">招贤纳士</a></div>
        <div class=""><a href="shopMap.php">销售网络</a></div>
      </div>
      <div class="cb"></div>
    </div>
    <div class="fr content-main">
      <article class="breadcrumbs f12">当前位置： <a href="index.php">首页</a> > <?php @get_bread($_GET['id']); ?></article>
      <div class="line"></div>
      <div class="list">
        <ul>
          <?php foreach($contactArr as $v): ?>
          <li><img src="<?php echo $v['icon']."_light.png" ?>" align="absmiddle"><?php echo $v['company_title'].$v['company_info']; ?></li>
          <?php endforeach; ?>
        </ul>
        <div class="map">
        	<img src="images/map.png" width="740" height="311"></div>
        </div>
    </div>
    <div class="cb"></div>
  </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>