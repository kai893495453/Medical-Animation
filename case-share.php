<?php
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 4 order by c_id desc limit 1");
  $arr = array(
    0=>array('title'=>"撞车后腿不能动，需要康复，该怎么办0？",'publish_date'=>"2015-07-07",'url_link'=>"0"),
    1=>array('title'=>"撞车后腿不能动，需要康复，该怎么办1？",'publish_date'=>"2015-07-07",'url_link'=>"1"),
    2=>array('title'=>"撞车后腿不能动，需要康复，该怎么办2？",'publish_date'=>"2015-07-07",'url_link'=>"2"),
    3=>array('title'=>"撞车后腿不能动，需要康复，该怎么办3？",'publish_date'=>"2015-07-07",'url_link'=>"3"),
    4=>array('title'=>"撞车后腿不能动，需要康复，该怎么办4？",'publish_date'=>"2015-07-07",'url_link'=>"4"),
    5=>array('title'=>"撞车后腿不能动，需要康复，该怎么办5？",'publish_date'=>"2015-07-07",'url_link'=>"5"),
    6=>array('title'=>"撞车后腿不能动，需要康复，该怎么办6？",'publish_date'=>"2015-07-07",'url_link'=>"6"),
    7=>array('title'=>"撞车后腿不能动，需要康复，该怎么办7？",'publish_date'=>"2015-07-07",'url_link'=>"7"),
    8=>array('title'=>"撞车后腿不能动，需要康复，该怎么办8？",'publish_date'=>"2015-07-07",'url_link'=>"8"),
    9=>array('title'=>"撞车后腿不能动，需要康复，该怎么办9？",'publish_date'=>"2015-07-07",'url_link'=>"9"),
    10=>array('title'=>"撞车后腿不能动，需要康复，该怎么办10？",'publish_date'=>"2015-07-07",'url_link'=>"10")
  )
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
            <div class="list mAuto">
            	<dl>
                <?php
                  foreach($arr as $key=>$value):
                ?>
                	<dt <?php if($key<3){echo "class=\"topThree\"";} ?>><a href=case-detail.php?id=<?php echo $value['url_link']; ?>><?php echo $value['title']; ?></a></dt>
                    <dd><?php echo $value['publish_date']; ?></dd>
                <?php
                  endforeach;
                ?>
                    <div class="cb"></div>
                </dl>
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