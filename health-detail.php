<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  require_once "include/breadcrumb.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 4 order by c_id desc limit 1");
  $id = @$_GET['id']==null||@$_GET['id']==""||@$_GET['id']<1? 1 : $_GET['id'];
  $article = get_one("select * from news where nid = $id limit 1");
  $active = get_one("select * from news_type where ntid = {$article['ntid']} limit 1");
  $a = get_one("select * from nav where name = '".$active['typename']."'");
  $leftNav = get_all("select * from nav where fid = {$a['fid']}");
  $articlePrev = get_one("select title,nid from news where nid < $id and ntid = {$article['ntid']} order by nid desc limit 1");
  $articleNext = get_one("select title,nid from news where nid > $id and ntid = {$article['ntid']} limit 1");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $article['title'] ?></title>
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
              <?php if(is_array($leftNav)): ?>
                <?php foreach($leftNav as $v): ?>
                <div <?php if($v['n_id']==$a['n_id']){echo "class=\"active\"";} ?>><a href="health-list.php?id=<?php echo $v['n_id']; ?>"><?php echo $v['name'] ?></a></div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
        	<div class="cb"></div>
        </div>
    	<div class="fr content-main">
        	<article class="breadcrumbs f12">当前位置：  <a href="index.php">首页</a>  >  <?php get_bread($a['n_id']);echo $article['title']; ?></article>
            <div class="line"></div>
            <div class="list mAuto">
              <div class="detail mAuto">
                <h1><?php echo $article['title']; ?></h1>
                <div class="releaseTime">发布时间：<?php echo $article['publish_date']; ?></div>
                <div class="body"><?php echo $article['content']; ?></div>
                <div class="collect mb20">收藏</div>
                <div class="cb"></div>
              </div>
              <div class="line liner"></div>
    <div class="jump mAuto">
       <p class="jumpLink pt25 pb15">上一篇：
          <?php if($articlePrev): ?>
            <a href="?id=<?php echo $articlePrev['nid']; ?>"><?php echo $articlePrev['title']; ?></a>
          <?php else: ?>
            <a>没有了</a>
          <?php endif; ?>
        </p>
        <p class="jumpLink">下一篇：
          <?php if($articleNext): ?>
            <a href="?id=<?php echo $articleNext['nid']; ?>"><?php echo $articleNext['title']; ?></a>
          <?php else: ?>
            <a>没有了</a>
          <?php endif; ?>
        </p>
    </div>
            </div>
    	</div>
    	<div class="cb"></div>
    </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>