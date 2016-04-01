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
  $col = get_one("select * from ")
  /**[查询该栏目的内容]*/
  $page = @$_GET['page']==null||@$_GET['page']==""||@$_GET['page']<1? 1 : $_GET['page'];
  $pagesize = 3;
  $p = $pagesize * ($page-1);
  $article = get_all("select * from news where ntid = ")

  $arr = array(
    0=>array(
      'date'=>'2015-8-04',
      'title'=>'成年人是否需要补充维生素D？',
      'content'=>'众多的中国人从小就烙上了深深的补钙情节，似乎很多的问题都可以归结到缺钙上，补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙……',
      'id'=>'#0'),
    1=>array(
      'date'=>'2015-8-04',
      'title'=>'成年人是否需要补充维生素D？',
      'content'=>'众多的中国人从小就烙上了深深的补钙情节，似乎很多的问题都可以归结到缺钙上，补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙……',
      'id'=>'#1'),
    2=>array(
      'date'=>'2015-8-04',
      'title'=>'成年人是否需要补充维生素A？',
      'content'=>'众多的中国人从小就烙上了深深的补钙情节，似乎很多的问题都可以归结到缺钙上，补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙……',
      'id'=>'#2')
  );
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
                      foreach ($arr as $value):
                    ?>
                    <li>
                      <div class="fl">
                          <div class="dates">
                            <div class="day"><?php echo substr($value['date'],strripos($value['date'],"-")+1); ?></div>
                            <div class="month"><?php echo substr($value['date'],0,strripos($value['date'],'-')); ?></div>
                            </div>
                        </div>
                        <div class="fl news-img"><img src="images/news-list.png"/></div>
                        <div class="fl news-content">
                          <h2><a href=health-detail.php?id=<?php echo $value['id']; ?>><?php echo $value['title'];  ?></a></h2>
                            <p><?php echo $value['content'];  ?></p>
                            <a href=health-detail.php?id=<?php echo $value['id'];  ?> class="detail">[ 查看详情 ]</a>
                        </div>
                      <div class="cb f0"></div>
                    </li>
                    <?php
                      endforeach;
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