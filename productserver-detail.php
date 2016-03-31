<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  require_once "include/breadcrumb.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 3 order by c_id desc limit 1");
  /**[通过传进来的id查询该产品信息]*/
  $id = $_GET['id'];
  $product = get_one("select * from product where p_id = {$id}");
  $tag = get_all("select * from product where tag_id = {$product['tag_id']} and p_id<>{$id} order by p_id desc limit 0,4");
  $product_feature = get_all("select * from product_feature where product_id = {$id}");
  $product_para = get_all("select * from product_parameter where product_id = {$id}");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>旭阳动漫医疗器械_产品服务</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/productserver-detail.css" rel="stylesheet" />
</head>

<body>
<?php require_once "include/header.php"; ?>
<article class="breadcrumbs f12">当前位置：  <a href="index.php">首页</a>  >  <?php get_bread($product['tag_id']);echo $product['title']; ?></article>
<main>
	<div class="contentBar mAuto w1000">
   	  <h1 class="pt20 pl25 pb20"><?php echo $product['title']; ?></h1>
        <div class="ml25 mb20 fl contentBar-img">
        	<img src="<?php echo $product['img_url']; ?>" />
        </div>
        <div class="fl productInformation">
        	<div class="product-detail">
            	<h2>产品介绍</h2>
                <article><p><?php echo $product['product_info']; ?></p></article>
            </div>
            <div class="product-salepoint mt25">
            	<h2>产品特点</h2>
                <ul>
                  <?php if(is_array($product_feature)): ?>
                  <?php foreach($product_feature as $v): ?>
                    <li><img class="pr10" src="images/listImage.png"/><?php echo $v['title']; ?></li>
                  <?php endforeach; ?>
                  <?php else: ?>
                   	<li><img class="pr10" src="images/listImage.png"/>毫无特点可言</li>
                  <?php endif; ?>
                </ul>
            </div>
            <div class="product-buy mt20"><a href="#">前往购买</a></div>
        </div>
      <div class="cb"></div>
    </div>
	<div class="content w1000 mAuto">
    	<div class="fl content-columnList mr10">
        	<div class="content-columnList-title pl20 pt10 pr20 pb10"><h4>同类商品</h4></div>
            <div class="content-columnList-main">
            	<dl>
                <?php if(is_array($tag)): ?>
                  <?php foreach($tag as $v): ?>
                	<dd class="pl15 pt15"><img src="<?php echo $v['img_url']; ?>"/></dd>
                  <dt class="pl20 pt10 pb10 pr20"><?php echo $v['title']; ?></dt>
                  <?php endforeach; ?>
                <?php endif; ?>
              </dl>
            </div>
        </div>
    	<div class="fr content-columnCArea">
        	<div class="content-columnCArea-nav mb20">
            	<ul>
                	<li class="content-columnCArea-nav-liCurrent">产品详情</li>
                	<li>产品参数</li>
                	<li>售后保障</li>
                    <div class="cb"></div>
                </ul>
            </div>
            <div class="content-columnCArea-main">
              <?php if(is_array($product_para)): ?>
              <table class="mb20" width="100%" border="0" cellspacing="0" cellpadding="0">
              <?php foreach($product_para as $v): ?>
                <tr>
                  <td class="content-columnList-main-title"><?php echo $v['title']; ?></td>
                  <td class="content-columnList-main-detail"><?php echo $v['info']; ?></td>
                </tr>
              <?php endforeach; ?>
              </table>
              <?php endif; ?>
              <?php echo $product['content']; ?>
          </div>
        </div>
        <div class="cb"></div>
    </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>