<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 4 order by c_id desc limit 1");
  $id = $_GET['id'];
  $prev = $id -1;
  $next = $id +1;
  $article = get_one("select * from news where nid = {$id} limit 1");
  $articlePrev = get_one("select * from news where nid = {$prev} limit 1");
  $articleNext = get_one("select * from news where nid = {$next} limit 1");
  $product = get_all("select * from product order by p_id limit 0,4");
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
        	<article class="breadcrumbs f12">当前位置：  <a href="index.php">首页</a>  >  <a href="case-share.php">健康分享</a>  >  <a href="#">  案例分享</a></article>
            <div class="line"></div>
            <div class="detail mAuto">
            	<h1><?php echo $article['title']; ?></h1>
                <div class="releaseTime">发布时间：<?php echo $article['publish_date']; ?></div>
                <div class="body"><?php echo $article['content']; ?></div>
                <div class="collect">收藏</div>
                <div class="cb"></div>
                <div class="recommend">
                	<div class="title">产品推荐</div>
                    <ul>
                        <?php foreach($product as $k=>$v): ?>
                    	<li <?php if($k==count($product)-1){echo "class=\"lastItem\"";} ?>>
                        	<a href="productserver-detail.php?id=<?php echo $v['p_id']; ?>"><img src="<?php echo $v['img_url']; ?>" /></a>
                            <span><?php echo $v['title']; ?></span>
                        </li>
                        <?php endforeach; ?>
                        <div class="cb"></div>
                    </ul>
                </div>
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
    	<div class="cb"></div>
    </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>