<?php
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 4 order by c_id desc limit 1");

  $page = @$_GET['page']<1||@$_GET['page']==null||@$_GET['page']==""?1:$_GET['page'];
  $pagesize = 11;
  $total = ceil(get_one("select count(*) as c from news where ntid = 1")['c']/$pagesize);
  $page = min($page,$total);
  $p = $pagesize*($page-1);
  $start = max($page-1,1);
  $end = min($page+1,$total);
  $article = get_all("select * from news where ntid = 1 order by nid desc limit $p,$pagesize");
  function cut($page,$total,$start,$end){
    $html = "";
    if($page>1){
        $prev = $page -1;
        $html .= "<a href=\"?page={$prev}\" class=\"prevPage fl\">&laquo; 上一页</a>";
    }
    if($start<$page){
        for($i=$start;$i<$page;$i++){
            $html .= "<a href=\"?page={$i}\" class=\"nextNumber fl\">{$i}</a>";
        }
    }
    $html .= "<a href=\"#\" class=\"numberCurrent fl\">{$page}</a>";
    if($end>$page){
        for($i=$page+1;$i<=$end;$i++){
            $html .= "<a href=\"?page={$i}\" class=\"nextNumber fl\">{$i}</a>";
        }
    }
    if($page<$total){
        $next = $page+1;
        $html .= "<a href=\"?page={$next}\" class=\"fl lastItem\">下一页 &raquo;</a>";
    }
    $html .= "<span class=\"fl\">共{$total}页，到第</span><input class=\"fl\" name=\"page\" type=\"text\" /> <span class=\"fl\">页</span> <input class=\"fl\" name=\"confirmSkip\" type=\"submit\" value=\"确定\" />";
    echo $html;
  }
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
                  foreach($article as $key=>$value):
                ?>
                	<dt <?php if($key<3){echo "class=\"topThree\"";} ?>><a href=case-detail.php?id=<?php echo $value['nid']; ?>><?php echo $value['title']; ?></a></dt>
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
            	<?php echo cut($page,$total,$start,$end); ?>
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