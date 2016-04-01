<?php
  require_once "include/config.php";
  require_once "include/common.fun.php";
  require_once "include/breadcrumb.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 4 order by c_id desc limit 1");
  $id = @$_GET['id']==null||@$_GET['id']==""||@$_GET['id']<0 ? 11:$_GET['id'];
  //id==11是代表nav表中id是11的“按功效分类”,如果是这类才查询之后的导航
  if ($id == 11) {
    $arrNav = get_all("select * from news_type where fid = 19");
  }
  $fid = get_one("select * from nav where n_id = {$id}");
  $leftNav = get_all("select * from nav where fid = {$fid['fid']}");
  $col = get_one("select * from news_type where typename = '{$fid['name']}'"); 
  /**[查询该栏目的内容]*/
  $page = @$_GET['page']==null||@$_GET['page']==""||@$_GET['page']<1? 1 : $_GET['page'];
  $pagesize = 3;
  $p = $pagesize * ($page-1);
  $article = get_all("select * from news where ntid = {$col['ntid']} limit $p,$pagesize");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>按功效分类</title>
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
                <div <?php if($v['n_id']==$fid['n_id']){echo "class=\"active\"";} ?>><a href="health-list.php?id=<?php echo $v['n_id']; ?>"><?php echo $v['name'] ?></a></div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
        	<div class="cb"></div>
        </div>
    	<div class="fr content-main">
        	<article class="breadcrumbs f12">当前位置：  <a href="index.php">首页</a>  >  <?php get_bread($fid['n_id']); ?></article>
            <div class="line"></div>
            <div class="list mAuto">
            	<div class="filter">
                <?php if(is_array(@$arrNav)): ?>
                <?php foreach($arrNav as $key => $value): ?>
                	<a class=<?php if($key==0)echo "active";?> href="#"><?php echo $value['typename']; ?></a>
                <?php endforeach; ?>
                <?php endif; ?>
                  <div class="cb"></div>
                </div>
                <div class="main-list mAuto">
                  <ul>
                    <?php
                      if(is_array($article)):
                      foreach ($article as $value):
                    ?>
                    <li>
                      <div class="fl">
                          <div class="dates">
                            <div class="day"><?php echo substr(strrchr($value['publish_date'],"-"),1,2); ?></div>
                            <div class="month"><?php echo substr($value['publish_date'],0,strrpos($value['publish_date'],"-")); ?></div>
                            </div>
                        </div>
                        <div class="fl news-img"><img src="<?php echo $value['img_url']; ?>"/></div>
                        <div class="fl news-content">
                          <h2><a href=health-detail.php?id=<?php echo $value['nid']; ?>><?php echo $value['title'];  ?></a></h2>
                            <p><?php echo $value['content'];  ?></p>
                            <a href=health-detail.php?id=<?php echo $value['nid'];  ?> class="detail">[ 查看详情 ]</a>
                        </div>
                      <div class="cb f0"></div>
                    </li>
                    <?php
                      endforeach;
                      endif;
                    ?>
                    <div class="cb f0"></div>
                  </ul>
                </div>
            </div>
            <div class="pages">
            <form method="post" enctype="application/x-www-form-urlencoded">
        	<div class="pageNumber h50 fr">
            	<a href="#" class="prevPage fl">&laquo; 上一页</a>
            	<a href="#" class="numberCurrent fl">1</a>
            	<a href="#" class="nextNumber fl">2</a>
            	<a href="#" class="nextNumber fl lastItem">3</a>
                <span class="fl">...</span>
            	<a href="#" class="fl lastItem">下一页 &raquo;</a>
                <span class="fl">共100页，到第</span><input class="fl" name="skipPage" type="text" value="1" />
                <span class="fl">页</span>
                <input class="fl" name="confirmSkip" type="submit" value="确定" />
                <div class="cb"></div>
  			</div>
            <div class="cb"></div>
            </form>
        </div>
        </div>
    	<div class="cb"></div>
    </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>