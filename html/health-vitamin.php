<?php
  $arr = array(
    0=>array(
      'date'=>'2015-8-04',
      'title'=>'成年人是否需要补充维生素D？',
      'content'=>'众多的中国人从小就烙上了深深的补钙情节，似乎很多的问题都可以归结到缺钙上，补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙……',
      'url'=>'#0'),
    1=>array(
      'date'=>'2015-8-04',
      'title'=>'成年人是否需要补充维生素D？',
      'content'=>'众多的中国人从小就烙上了深深的补钙情节，似乎很多的问题都可以归结到缺钙上，补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙……',
      'url'=>'#1'),
    2=>array(
      'date'=>'2015-8-04',
      'title'=>'成年人是否需要补充维生素D？',
      'content'=>'众多的中国人从小就烙上了深深的补钙情节，似乎很多的问题都可以归结到缺钙上，补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙补钙的问题也延伸到了成年身上，颈椎痛补钙、腰椎痛补钙……',
      'url'=>'#2')
  );
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>维生素</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/health.css" rel="stylesheet" type="text/css" />
</head>
<body>

<nav id="nav" class="nav">
  <div id="nav-logo" class="nav-logo">
    <div id="nav-logo-img" class="nav-logo-img"><a href="index.html"><img src="images/logo.png"/></a></div>
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
        <li><img src="images/banner-case.png" width="100%" height="100%"/></li>
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
                <li><a href="aboutAs.html">关于旭阳</a></li>
                <li><a href="contact.html">联系旭阳</a></li>
                <li><a href="shopMap.html">销售网络</a></li>
                <li><a href="recruit.html">招贤纳士</a></li>
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
    	<div class="fl content-tag">
        	<div class="title">营养保健</div>
        	<div class="f12">NITRITION  HEALTH</div>
        	<div class="line"></div>
            <div class="subtag">
                <div class="active"><a href="health-vitamin.php">维生素</a></div>
                <div class=""><a href="health-mineral.php">矿物质</a></div>
                <div class=""><a href="health-nutrient.php">营养素</a></div>
                <div class=""><a href="health-assort.php">按功效分类</a></div>
            </div>
        	<div class="cb"></div>
        </div>
    	<div class="fr content-main">
        	<article class="breadcrumbs f12">当前位置：  <a href="index.php">首页</a>  >  <a href="#">营养保健</a>  >  <a href="#">  维生素</a></article>
            <div class="line"></div>
            <div class="list mAuto">
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
                      	<h2><a href="#"><?php echo $value['title'];  ?></a></h2>
                          <p><?php echo $value['content'];  ?></p>
                          <a href=<?php echo $value['url'];  ?> class="detail">[ 查看详情 ]</a>
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
<footer class="footer">
  <div class="footer-row1">
    <div class="footer-row1-link w1000 mAuto">
      <dl>
        <dd class="listitem"><a href="index.php">首页</a> </dd>
        <dd class="listitem"><a href="aboutAs.html">走进旭阳</a> </dd>
        <dd class="listitem"><a href="productserver-medical.html">产品服务</a> </dd>
        <dd class="listitem"><a href="health-assort.html">营养保健</a> </dd>
        <dd class="listitem"><a href="case-share.html">健康分享</a> </dd>
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