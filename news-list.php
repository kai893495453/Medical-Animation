<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  require_once "include/cut_page.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 23 order by c_id desc limit 1");
  /**[查询新闻]*/
  //获取当前页码
  $page = (int)@$_GET['page']>0 ? $_GET['page']:1;
  $pagesize = 5;
  $total = ceil(get_one("select count(*) as c from news where ntid = 2")['c']/$pagesize);
  $start = max($page-1,1);
  $end = min($page+1,$total);
  $p = $pagesize*($page-1);
  $newsArr = get_all("select * from news where ntid = 2 order by nid desc limit {$p},{$pagesize}");
  function cut($active=1,$total_page,$start_pos,$end_pos){
    $html = "";
    $prev = $active-1;
    $next = $active+1;
    //如果当前页大于1，就生成一个上一页
    if($active>1){
      $html .= "<a href=?page={$prev} class=\"prevPage fl\">&laquo; 上一页</a> ";
    }
    if ($start_pos<$active) {
      for($i=$start_pos;$i<$active;$i++){
        $html .= "<a href=\"?page={$i}\" class=\"nextNumber fl\">{$i}</a>";
      }
    }
    $html .= "<a href=\"#\" class=\"numberCurrent fl\">{$active}</a>";
    if ($end_pos>$active){
      for($i=$active+1;$i<=$end_pos;$i++){
        $html .= "<a href=\"?page={$i}\" class=\"nextNumber fl\">{$i}</a>";
      }
    }
    if($active<$total_page){
      $html .= "<a href=?page={$next} class=\"fl lastItem\">下一页 &raquo;</a>";
    }
    $html .= "<span class=\"fl\">共{$total_page}页，到第</span><input class=\"fl\" name=\"page\" type=\"text\" value=\"1\" /> <span class=\"fl\">页</span> <input class=\"fl\" name=\"confirmSkip\" type=\"submit\" value=\"确定\" />";
    echo $html;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻列表</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/news.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php require_once "include/header.php"; ?>
<main>
  <div class="content w1000 mAuto">
    <article class="breadcrumbs f12">当前位置： <a href="index.php">首页</a> > <a href="#">新闻动态</a></article>
    <div class="line"></div>
    <div class="main-list mAuto">
      <ul>
      <?php if(is_array($newsArr)): ?>
      <?php foreach($newsArr as $value): ?>
      	<li>
   	  		<div class="fl">
            	<div class="dates pl15">
                	<div class="day"><?php echo substr(strrchr($value['publish_date'],"-"),1,2); ?></div>
                	<div class="month"><?php echo substr($value['publish_date'],0,strrpos($value['publish_date'],"-")); ?></div>
                </div>
            </div>
            <div class="fl news-img"><img src=<?php echo $value['img_url']; ?>></div>
            <div class="fl news-content">
            	<h2><a href=news-detail.php?id=<?php echo $value['nid']; ?>><?php echo $value['title']; ?></a></h2>
                <p><?php echo $value['content']; ?>
                <a href=news-detail.php?id=<?php echo $value['nid']; ?> class="detail">[详情]</a></p>
            </div>
        	<div class="cb f0"></div>
        </li>
      <?php endforeach; ?>
      <?php endif; ?>
        <div class="cb f0"></div>
      </ul>
      <div class="pages">
            <form>
        	<div class="pageNumber h50 fr"><?php @cut($page,$total,$start,$end); ?><div class="cb"></div>
  			</div>
            <div class="cb"></div>
            </form>
        </div>
    </div>
  </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>