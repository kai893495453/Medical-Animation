<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  require_once "include/breadcrumb.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 23 order by c_id desc limit 1");
  //查内容
  $id = $_GET['id'];
  $news = get_one("select * from news where nid = $id limit 1");
  $newsPrev = get_one("select title,nid from news where nid < $id order by nid desc limit 1");
  $newsNext = get_one("select title,nid from news where nid > $id limit 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻详情</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/news.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php require_once "include/header.php"; ?>
<main>
  <div class="content w1000 mAuto">
    <article class="breadcrumbs f12">当前位置： <a href="index.php">首页</a> > <a href="news-list.php">新闻动态</a> > <a href="#"> <?php echo $news['title']; ?></a></article>
    <div class="line"></div>
    <div class="content-main mAuto">
      <div class="detail mAuto">
        <h1><?php echo $news['title']; ?></h1>
        <div class="releaseTime">发布时间：<?php echo $news['publish_date']; ?></div>
        <div class="body"><?php echo $news['content'] ?></div>
        <div class="collect mb20">收藏</div>
        <div class="cb"></div>
      </div>
    </div>
    <div class="line liner"></div>
    <div class="jump mAuto">
        <p class="jumpLink pt25 pb15">上一篇：
          <?php if($newsPrev): ?>
            <a href="?id=<?php echo $newsPrev['nid']; ?>"><?php echo $newsPrev['title']; ?></a>
          <?php else: ?>
            <a>没有了</a>
          <?php endif; ?>
        </p>
        <p class="jumpLink">下一篇：
          <?php if($newsNext): ?>
            <a href="?id=<?php echo $newsNext['nid']; ?>"><?php echo $newsNext['title']; ?></a>
          <?php else: ?>
            <a>没有了</a>
          <?php endif; ?>
        </p>
    </div>
  </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>