<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  require "include/cut_page.php";
  require_once "include/breadcrumb.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 3 order by c_id desc limit 1");
  /**[查询栏目标题]*/
  $id = @$_GET['id']!=null||@$_GET['id']!="" ? $_GET['id']:10;
  $sonNav = @get_one("select * from nav where n_id = {$id} limit 1");
  $childNav = @get_all("select * from nav where fid = {$id}");
  if(!is_array($childNav)){
    $fid = @get_one("select fid from nav where n_id={$id} limit 1");
    if(is_array($fid)){
      $childNav = @get_all("select * from nav where fid = {$fid['fid']}");
    }
  }
  //分页查询
  //通过get的page参数获取当前页码，如果为空默认为1
  $page = @(int)$_GET['page'] > 0 ? (int)$_GET['page'] : 1;
  $pagesize = 9;
  $list = $pagesize * ($page-1);
  /**[查询产品]*/
  $productArr = @get_all("select * from product where tag_id={$id} order by p_id desc limit {$list},{$pagesize}");
  $total = @get_one("select count(*) as c from product where tag_id={$id} order by p_id desc");
  $total = $total['c'];
  //如果查出来的不是数组，就通过get带过来的id查它儿子
  if (!is_array($productArr)){
    $product = @get_one("select * from nav where fid={$id} limit 1");
    if(is_array($product)){
      $productArr = get_all("select * from product where tag_id={$product['n_id']} order by p_id desc limit {$list},{$pagesize}");
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $sonNav['name']; ?></title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/productserver-medical.css" rel="stylesheet" />
</head>

<body>
<?php require_once "include/header.php"; ?>
<article class="breadcrumbs f12">当前位置： <a href="index.php">首页</a> > <?php get_bread($id);?></article>
<!--正文开始-->
<main>
  <div class="content w1000 mAuto">
    <div class="title">
      <div class="fl">
        <h2><?php echo $sonNav['name']; ?></h2>
        <h3 class="mt10 pl5">Medical Equipment</h3>
        <h4 class="cb"></h4>
      </div>
      <div class="fr main-product-nav-a">
        <dl>
          <?php if(is_array($childNav)): ?>
          <?php foreach($childNav as $v): ?>
          <dd class="aitem">
            <a href="<?php $v['alink']; ?>?id=<?php echo $v['n_id']; ?>"><?php echo $v['name']; ?></a>
          </dd>
          <?php endforeach; ?>
          <?php endif; ?>
          <div class="cb"></div>
        </dl>
      </div>
      <div class="cb"></div>
    </div>
    <div class="content-main w1000 mAuto">
      <div class="products">
        <ul class="pb50">
          <?php
            if(is_array($productArr)):
            foreach($productArr as $value):
          ?>
          <li class="pt40 fl ml25">
            <div>
              <a href=productserver-detail.php?id=<?php echo $value['p_id']; ?> class="mb10"><img src=<?php echo $value['img_url']; ?> /></a>
              <span class="pl20"><?php echo $value['title']; ?></span>
            </div>
          </li>
          <?php
            endforeach;
            endif;
          ?>
          <div class="cb"></div>
        </ul>
      </div>
    </div>
    <div class="pages">
      <form>
        <div class="pageNumber h50 fr">
          <?php echo cut_page($pagesize,$page,$total); ?>
          <div class="cb"></div>
        </div>
        <div class="cb"></div>
      </form>
    </div>
  </div>
</main>
<!--正文结束-->
<?php require_once "include/footer.php"; ?>
</body>
</html>