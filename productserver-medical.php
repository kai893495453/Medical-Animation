<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>医疗器械</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/productserver-medical.css" rel="stylesheet" />
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
        <li><img src="images/banner-productserver-detail.png" width="100%" height="100%"/></li>
        <div class="cb"></div>
      </ul>
      <div class="nav-ul-transparent"></div>
    </div>
    <div class="pa top nav-div-list">
      <dl class="w1000 mAuto nav-list">
        <dd class="nav-list-current"><a href="index.html" class="aCurrent">首页</a></dd>
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
            	<li><a href="productserver-medical.html">医疗器械</a></li>
            </ul>
        </dd>
        <dd>
        	<a href="#">营养保健</a>
            <ul class="nav-list-subnav">
                <li><a href="health-assort.html">按功效分类</a></li>
                <li><a href="health-mineral.html">矿物质</a></li>
                <li><a href="health-vitamin.html">维生素</a></li>
                <li><a href="health-nutrient.html">营养素</a></li>
            </ul>
        </dd>
        <dd>
        	<a href="#">健康分享</a>
            <ul class="nav-list-subnav">
            	<li><a href="case-share.html">案例分享</a></li>
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
<article class="breadcrumbs f12">当前位置： <a href="index.html">首页</a> > <a href="#">产品服务</a> > <a href="#">医疗器械</a></article>
<!--正文开始-->
<main>
  <div class="content w1000 mAuto">
    <div class="title">
      <div class="fl">
        <h2>医疗器械</h2>
        <h3 class="mt10 pl5">Medical Equipment</h3>
        <h4 class="cb"></h4>
      </div>
      <div class="fr main-product-nav-a">
        <dl>
          <dt class="showItem pr" href="#">轮椅助行<span></span>
            <ul class="pa left">
              <li>自动轮椅</li>
              <li>手动轮椅</li>
              <li>代步车</li>
              <li>助行架</li>
              <li>拐杖</li>
            </ul>
          </dt>
          <dd class="aitem" href="#"><a>日常护理</a><i>|</i></dd>
          <dd class="aitem" href="#"><a>检测</a><i>|</i></dd>
          <dd class="aitem" href="#"><a>中医理论</a><i>|</i></dd>
          <dd class="aitem" href="#"><a>关节护具</a><i>|</i></dd>
          <dd class="aitem" href="#"><a>康复</a><i>|</i></dd>
          <dd class="aitem" href="#"><a>其他</a></dd>
          <div class="cb"></div>
        </dl>
      </div>
      <div class="cb"></div>
    </div>
    <div class="content-main w1000 mAuto">
      <div class="products">
        <ul class="pb50">
          <?php
            $arr = array(
              0 => array("imgAddr"=>"images/product/product-01.png","title"=>"多功能带便孔护理床1","urlAddr"=>"#a1"),
              1 => array("imgAddr"=>"images/product/product-01.png","title"=>"多功能带便孔护理床2","urlAddr"=>"#a2"),
              2 => array("imgAddr"=>"images/product/product-01.png","title"=>"多功能带便孔护理床3","urlAddr"=>"#a3"),
              3 => array("imgAddr"=>"images/product/product-01.png","title"=>"多功能带便孔护理床4","urlAddr"=>"#a4"),
              4 => array("imgAddr"=>"images/product/product-01.png","title"=>"多功能带便孔护理床5","urlAddr"=>"#a5"),
              5 => array("imgAddr"=>"images/product/product-01.png","title"=>"多功能带便孔护理床6","urlAddr"=>"#a6"),
              6 => array("imgAddr"=>"images/product/product-01.png","title"=>"多功能带便孔护理床7","urlAddr"=>"#a7"),
              7 => array("imgAddr"=>"images/product/product-01.png","title"=>"多功能带便孔护理床8","urlAddr"=>"#a8"),
              8 => array("imgAddr"=>"images/product/product-01.png","title"=>"多功能带便孔护理床9","urlAddr"=>"#a9")
            );
            foreach($arr as $value):
          ?>
          <li class="pt40 fl ml25">
            <div>
              <a href=<?php echo $value['urlAddr']; ?> class="mb10"><img src=<?php echo $value[imgAddr]; ?> /></a>
              <span class="pl20"><?php echo $value[title]; ?></span>
            </div>
          </li>
          <?php
            endforeach;
          ?>
          <div class="cb"></div>
        </ul>
      </div>
    </div>
    <div class="pages">
      <form method="post" enctype="application/x-www-form-urlencoded">
        <div class="pageNumber h50 fr"> <a href="#" class="prevPage fl">&laquo; 上一页</a> <a href="#" class="numberCurrent fl">1</a> <a href="#" class="nextNumber fl">2</a> <a href="#" class="nextNumber fl lastItem">3</a> <span class="fl">...</span> <a href="#" class="fl lastItem">下一页 &raquo;</a> <span class="fl">共100页，到第</span>
          <input class="fl" name="skipPage" type="text" value="1" />
          <span class="fl">页</span>
          <input class="fl" name="confirmSkip" type="submit" value="确定" />
          <div class="cb"></div>
        </div>
        <div class="cb"></div>
      </form>
    </div>
  </div>
</main>
<!--正文结束-->
<footer class="footer">
  <div class="footer-row1">
    <div class="footer-row1-link w1000 mAuto">
      <dl>
        <dd class="listitem"><a href="index.html">首页</a> </dd>
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