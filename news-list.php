<?php 
	$arr = array(
		0=>array("news_date"=>"2015-10-04","img_url"=>"images/news-list.png","news_title"=>"蚌埠市旭阳医疗动漫科技分公司成立0","news_detail"=>"2015年8月4日，旭阳医疗科技《第118期情景实战潜能口才特训营》隆重开幕。本次课程由口才中国创始人、亚洲情景实战潜能;口才第一教练罗盛华导师亲自主讲。120名学员怀着对课程的无比期5","id"=>"0"),
		1=>array("news_date"=>"2015-12-03","img_url"=>"images/news-list.png","news_title"=>"蚌埠市旭阳医疗动漫科技分公司成立1","news_detail"=>"2015年8月4日，旭阳医疗科技《第118期情景实战潜能口才特训营》隆重开幕。本次课程由口才中国创始人、亚洲情景实战潜能;口才第一教练罗盛华导师亲自主讲。120名学员怀着对课程的无比期4","id"=>"1"),
		2=>array("news_date"=>"2015-8-02","img_url"=>"images/news-list.png","news_title"=>"蚌埠市旭阳医疗动漫科技分公司成立2","news_detail"=>"2015年8月4日，旭阳医疗科技《第118期情景实战潜能口才特训营》隆重开幕。本次课程由口才中国创始人、亚洲情景实战潜能;口才第一教练罗盛华导师亲自主讲。120名学员怀着对课程的无比期3","id"=>"2"),
		3=>array("news_date"=>"2015-2-01","img_url"=>"images/news-list.png","news_title"=>"蚌埠市旭阳医疗动漫科技分公司成立3","news_detail"=>"2015年8月4日，旭阳医疗科技《第118期情景实战潜能口才特训营》隆重开幕。本次课程由口才中国创始人、亚洲情景实战潜能;口才第一教练罗盛华导师亲自主讲。120名学员怀着对课程的无比期2","id"=>"3"),
		4=>array("news_date"=>"2015-8-05","img_url"=>"images/news-list.png","news_title"=>"蚌埠市旭阳医疗动漫科技分公司成立4","news_detail"=>"2015年8月4日，旭阳医疗科技《第118期情景实战潜能口才特训营》隆重开幕。本次课程由口才中国创始人、亚洲情景实战潜能;口才第一教练罗盛华导师亲自主讲。120名学员怀着对课程的无比期1","id"=>"4"),
	);
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
<nav id="nav" class="nav">
  <div id="nav-logo" class="nav-logo">
    <div id="nav-logo-img" class="nav-logo-img"><a href="index.php"><img src="images/logo.png"/></a></div>
    <div id="nav-logo-account" class="nav-logo-account">
      <div class="nav-account"><a href="#登录">登录</a> | <a href="#注册">注册</a></div>
      <div class="nav-search">
        <form method="post" enctype="application/x-www-form-urlencoded">
          <select name="nav-search-select" class="nav-search-select selectArrow" >
            <option>分类</option>
            <option>其他</option>
          </select>
          <input name="nav-search-input" type="text" class="nav-search-input" size="18" />
          <input name="nav-search-submit" type="submit" class="nav-search-submit" value=" " />
        </form>
      </div>
    </div>
    <div class="cb"></div>
  </div>
  <div id="nav-focus" class="nav-focus mAuto">
    <div class="nav-focus-imgList">
      <ul>
        <li><img src="images/banner-news.png" width="100%" height="100%"/></li>
        <div class="cb"></div>
      </ul>
      <div class="nav-ul-transparent"></div>
    </div>
    <div class="pa top nav-div-list">
      <dl class="w1000 mAuto nav-list">
        <dd class="nav-list-current"><a href="index.php" class="aCurrent">首页</a></dd>
        <dd>
        	<a href="#">走进旭阳</a>
            <ul class="nav-list-subnav">
                <li><a href="aboutAs.php">关于旭阳</a></li>
                <li><a href="contact.php">联系旭阳</a></li>
                <li><a href="shopMap.php">销售网络</a></li>
                <li><a href="recruit.php">招贤纳士</a></li>
            </ul>
        </dd>
        <dd>
        	<a href="#">产品服务</a>
            <ul class="nav-list-subnav">
            	<li><a href="productserver-medical.php">医疗器械</a></li>
            </ul>
        </dd>
        <dd>
        	<a href="#">营养保健</a>
            <ul class="nav-list-subnav">
                <li><a href="health-assort.php">按功效分类</a></li>
                <li><a href="health-mineral.php">矿物质</a></li>
                <li><a href="health-vitamin.php">维生素</a></li>
                <li><a href="health-nutrient.php">营养素</a></li>
            </ul>
        </dd>
        <dd>
        	<a href="#">健康分享</a>
            <ul class="nav-list-subnav">
            	<li><a href="case-share.php">案例分享</a></li>
            </ul>
        </dd>
        <dt class="fr">
          <div></div>
          <a href="#">前往器械商城</a> </dt>
        <div class="cb"></div>
      </dl>
    </div>
  </div>
</nav>
<main>
  <div class="content w1000 mAuto">
    <article class="breadcrumbs f12">当前位置： <a href="index.php">首页</a> > <a href="#">新闻动态</a></article>
    <div class="line"></div>
    <div class="main-list mAuto">
      <ul>
      <?php foreach($arr as $value): ?>
      	<li>
   	  		<div class="fl">
            	<div class="dates pl15">
                	<div class="day"><?php echo substr(strrchr($value['news_date'],"-"),1); ?></div>
                	<div class="month"><?php echo substr($value['news_date'],0,strrpos($value['news_date'],"-")); ?></div>
                </div>
            </div>
            <div class="fl news-img"><img src=<?php echo $value['img_url']; ?>></div>
            <div class="fl news-content">
            	<h2><a href=news-detail.php?id=<?php echo $value['id']; ?>><?php echo $value['news_title']; ?></a></h2>
                <p><?php echo $value['news_detail']; ?>
                <a href=news-detail.php?id=<?php echo $value['id']; ?> class="detail">[详情]</a></p>
            </div>
        	<div class="cb f0"></div>
        </li>
      <?php endforeach; ?>
        <div class="cb f0"></div>
      </ul>
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
  </div>
</main>
<footer class="footer">
  <div class="footer-row1">
    <div class="footer-row1-link w1000 mAuto">
      <dl>
        <dd class="listitem"><a href="index.php">首页</a> </dd>
        <dd class="listitem"><a href="aboutAs.php">走进旭阳</a> </dd>
        <dd class="listitem"><a href="productserver-medical.php">产品服务</a> </dd>
        <dd class="listitem"><a href="health-assort.php">营养保健</a> </dd>
        <dd class="listitem"><a href="case-share.php">健康分享</a> </dd>
        <dt class="listitem-next"><a href="#">前往旭日器械商城&gt;</a></dt>
        <dd class="cb"></dd>
      </dl>
    </div>
  </div>
  <div class="footer-row2">
    <div class="footer-row2-detail w1000 mAuto">
      <div class="fl pt20">
        <p class="pb10"><img src="images/detail_address.png" hspace="5" vspace="0" align="absmiddle" />地址：广州市天河区燕岭路120号金燕大厦502</p>
        <p class="pb10"><img src="images/detail_mail.png" hspace="5" vspace="0" align="absmiddle" />邮箱：123456789@qq.com</p>
      </div>
      <div class="fl pt20 footer-row2-detail-col2">
        <p class="pb10"><img src="images/detail_phone.png" hspace="5" vspace="0" align="absmiddle" />联系电话：440-009-9778</p>
        <p class="pb10"><img src="images/detail_fax.png" hspace="5" vspace="0" align="absmiddle" />传真：1234567891231</p>
      </div>
      <p class="fr pt20 code"><img src="images/code.png" width="73" height="73"></p>
      <div class="cb"></div>
      <p class="pl5 pt10 fl address">&copy;1996-2015 ZhengBang京ICP备050567892号<span class="textIndent">旭阳医疗动漫科技有限公司</span></p>
      <p class="fr pr5 pt10 scan"><span>扫一扫关注旭阳微信</span></p>
      <p class="cb"></p>
    </div>
  </div>
  </div>
</footer>
</body>
</html>