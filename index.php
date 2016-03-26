<?php
  $carouselArr = array(
    0=>array("imgAddr"=>"images/banner.png","urlAddr"=>"#1"),
    1=>array("imgAddr"=>"images/banner.png","urlAddr"=>"#2"),
    2=>array("imgAddr"=>"images/banner.png","urlAddr"=>"#3")
  );
  $newsArr = array(
  	0=>array("news_title"=>"旭阳新研发的医疗器械上市1","img_url"=>"images/news02.png"),
  	1=>array("news_title"=>"旭阳新研发的医疗器械上市2","img_url"=>"images/news02.png"),
  	2=>array("news_title"=>"旭阳新研发的医疗器械上市3","img_url"=>"images/news02.png"),
  	3=>array("news_title"=>"旭阳医疗动漫科技分公司成立1","img_url"=>"images/news01.png"),
  	4=>array("news_title"=>"旭阳医疗动漫科技分公司成立2","img_url"=>"images/news01.png"),
  	5=>array("news_title"=>"旭阳医疗动漫科技分公司成立3","img_url"=>"images/news01.png"),
  	6=>array("news_title"=>"旭阳新研发的医疗器械1","img_url"=>"images/news03.png"),
  	7=>array("news_title"=>"旭阳新研发的医疗器械2","img_url"=>"images/news03.png"),
  	8=>array("news_title"=>"旭阳新研发的医疗器械3","img_url"=>"images/news03.png")
  );
  // $productArr = array();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>旭阳动漫医疗器械</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/index.css" rel="stylesheet" />
</head>

<body>
<div id="banner" class="">
  <div class="banner-img"><img src="images/banner.png"></div>
  <p class="tc"><span></span></p>
</div>
<!--头部特效结束-->
<div id="nav" class="nav">
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
    <div class="nav-focus-imgList" id="carousel">
      <ul>
      <?php
        foreach($carouselArr as $carousel):
      ?>
        <li><img src=<?php echo $carousel['imgAddr']; ?> width="100%" height="100%"/></li>
      <?php
        endforeach;
      ?>
        <div class="cb"></div>
      </ul>
      <div class="nav-ul-transparent"></div>
    </div>
    <div class="nav-focus-div pa">
      <ol class="nav-focus-ol w200 mAuto" id="ctrl-carsousel">
        <?php
          foreach($carouselArr as $key=>$carousel):
        ?>
        <li class="nav-focus-listitem nav-focus-itemCurrrent"><a><?php echo $key+1; ?></a></li>
        <?php
          endforeach;
        ?>
        <div class="cb"></div>
      </ol>
    </div>
    <div class="pa top nav-div-list">      <dl class="w1000 mAuto nav-list">
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
        	<a href="#">前往器械商城</a>
        </dt>
        <div class="cb"></div>
      </dl>
    </div>
  </div>
</div>
<div>
  <div class="main-product w1000">
    <div class="main-product-nav">
      <div class="title fl">
        <h2>医疗器械</h2>
        <h3 class="mt10 pl5">Medical Equipment</h3>
        <div class="cb"></div>
      </div>
      <div class="fr main-product-nav-ul" id="product-list">
          <a class="main-product-nav-listitem main-product-nav-listitemCurrent">轮椅助行</a>
          <a class="main-product-nav-listitem">日常护理</a>
          <a class="main-product-nav-listitem">检测</a>
          <a class="main-product-nav-listitem">中医理论</a>
          <a class="main-product-nav-listitem">关节护具</a>
          <a class="main-product-nav-listitem">康复</a>
          <a class="main-product-nav-listitem">其他</a>
      </div>
      <div class="cb"></div>
      <div class="main-product-show mt15">
        <div class="main-product-list01 fl mr10"><img src="images/product01.png" /></div>
        <div class="main-product-list02 fl mr10">
          <div class="pb10 pr"><img src="images/product02.png" /><span class="pa">电动起立床1</span></div>
          <div class="pr"><img src="images/product03.png" /><span class="pa">超级悬吊系统</span></div>
        </div>
        <div class="main-product-list02 fl">
          <div class="pb10 pr"><img src="images/product05.png" /><span class="pa">电动病床</span></div>
          <div class="pr"><img src="images/product04.png" /><span class="pa">电动升降床</span></div>
        </div>
        <div class="cb"></div>
      </div><!--main-product-show-->
      <div class="main-product-show mt15">
        <div class="main-product-list01 fl mr10"><img src="images/product01.png" /></div>
        <div class="main-product-list02 fl mr10">
          <div class="pb10 pr"><img src="images/product02.png" /><span class="pa">电动起立床2</span></div>
          <div class="pr"><img src="images/product03.png" /><span class="pa">超级悬吊系统</span></div>
        </div>
        <div class="main-product-list02 fl">
          <div class="pb10 pr"><img src="images/product05.png" /><span class="pa">电动病床</span></div>
          <div class="pr"><img src="images/product04.png" /><span class="pa">电动升降床</span></div>
        </div>
        <div class="cb"></div>
      </div><!--main-product-show-->
      <div class="main-product-show mt15">
        <div class="main-product-list01 fl mr10"><img src="images/product01.png" /></div>
        <div class="main-product-list02 fl mr10">
          <div class="pb10 pr"><img src="images/product02.png" /><span class="pa">电动起立床3</span></div>
          <div class="pr"><img src="images/product03.png" /><span class="pa">超级悬吊系统</span></div>
        </div>
        <div class="main-product-list02 fl">
          <div class="pb10 pr"><img src="images/product05.png" /><span class="pa">电动病床</span></div>
          <div class="pr"><img src="images/product04.png" /><span class="pa">电动升降床</span></div>
        </div>
        <div class="cb"></div>
      </div><!--main-product-show-->
      <div class="main-product-show mt15">
        <div class="main-product-list01 fl mr10"><img src="images/product01.png" /></div>
        <div class="main-product-list02 fl mr10">
          <div class="pb10 pr"><img src="images/product02.png" /><span class="pa">电动起立床4</span></div>
          <div class="pr"><img src="images/product03.png" /><span class="pa">超级悬吊系统</span></div>
        </div>
        <div class="main-product-list02 fl">
          <div class="pb10 pr"><img src="images/product05.png" /><span class="pa">电动病床</span></div>
          <div class="pr"><img src="images/product04.png" /><span class="pa">电动升降床</span></div>
        </div>
        <div class="cb"></div>
      </div><!--main-product-show-->
      <div class="main-product-show mt15">
        <div class="main-product-list01 fl mr10"><img src="images/product01.png" /></div>
        <div class="main-product-list02 fl mr10">
          <div class="pb10 pr"><img src="images/product02.png" /><span class="pa">电动起立床5</span></div>
          <div class="pr"><img src="images/product03.png" /><span class="pa">超级悬吊系统</span></div>
        </div>
        <div class="main-product-list02 fl">
          <div class="pb10 pr"><img src="images/product05.png" /><span class="pa">电动病床</span></div>
          <div class="pr"><img src="images/product04.png" /><span class="pa">电动升降床</span></div>
        </div>
        <div class="cb"></div>
      </div><!--main-product-show-->
      <div class="main-product-show mt15">
        <div class="main-product-list01 fl mr10"><img src="images/product01.png" /></div>
        <div class="main-product-list02 fl mr10">
          <div class="pb10 pr"><img src="images/product02.png" /><span class="pa">电动起立床6</span></div>
          <div class="pr"><img src="images/product03.png" /><span class="pa">超级悬吊系统</span></div>
        </div>
        <div class="main-product-list02 fl">
          <div class="pb10 pr"><img src="images/product05.png" /><span class="pa">电动病床</span></div>
          <div class="pr"><img src="images/product04.png" /><span class="pa">电动升降床</span></div>
        </div>
        <div class="cb"></div>
      </div><!--main-product-show-->
      <div class="main-product-show mt15">
        <div class="main-product-list01 fl mr10"><img src="images/product01.png" /></div>
        <div class="main-product-list02 fl mr10">
          <div class="pb10 pr"><img src="images/product02.png" /><span class="pa">电动起立床7</span></div>
          <div class="pr"><img src="images/product03.png" /><span class="pa">超级悬吊系统</span></div>
        </div>
        <div class="main-product-list02 fl">
          <div class="pb10 pr"><img src="images/product05.png" /><span class="pa">电动病床</span></div>
          <div class="pr"><img src="images/product04.png" /><span class="pa">电动升降床</span></div>
        </div>
        <div class="cb"></div>
      </div><!--main-product-show-->
    </div>
  </div>
  <div class="main-news">
    <div class="main-news-nav w1000 mAuto pt40">
      <div class="title fl ml50">
        <h2>新闻动态</h2>
        <h3 class="mt10 pl5">News</h3>
        <div class="cb"></div>
      </div>
      <div class="fr main-news-nav-ul"><a href="news-list.php">更多 &raquo;</a></div>
      <div class="cb"></div>
      <div class="main-news-show pb50">
        <a class="fl" id="prevList"><img src="images/prev.png" width="38" height="150"></a>
        <div class="fl">
          <div class="main-news-show-listPhoto" id="news-list">
            <ul>
            <?php foreach($newsArr as $value): ?>
              <li>
                <div><img class="productImg" src=<?php echo $value['img_url']; ?>></div>
                <div class="productDetail"><img src="images/list.png" width="5" height="5" align="absmiddle">&nbsp;&nbsp;<?php echo $value['news_title']; ?></div>
              </li>
             <?php endforeach; ?>
              <div class="cb"></div>
            </ul>
          </div>
        </div>
        <a class="fr" id="nextList"><img src="images/next.png" width="38" height="150"></a>
        <div class="cb"></div>
      </div>
    </div>
  </div>
  <div class="main-information w1000 mAuto">
    <div class="main-product-nav">
      <div class="title fl pb20">
        <h2>公司简介</h2>
        <h3 class="mt10 pl5">Company Profile</h3>
        <h4 class="cb"></h4>
      </div>
      <div class="cb"></div>
      <div class="main-information-content">
        <div class="fl main-information-content-image"><img src="images/company.png"></div>
        <div class="fr main-information-content-font">
          <p> 蚌埠市旭阳医疗动漫科技有限公司成立于2012年11月，是集研发、生产、销售为一体的高尖端新型科技企业，也是安徽省众多高校的产学研究基地。公司专门为需要康复的患者提供科学、有趣的治疗方法，将充满欢乐的动漫元素融入枯燥的康复治疗之中，让患者开心主动地康复，提高了康复机构治疗的效率。旭阳公司的核心产品"康复之星"治疗仪，将动漫游戏，电子技术，医疗康复三个领域的知识相结合，具备了预防、诊断、治疗、康复……</p>
        </div>
        <div class="main-information-content-more"><a href="#更多">更多 &raquo;</a></div>
        <div class="cb"></div>
      </div>
    </div>
  </div>
</div>
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
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/jquery-scroll.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    //引导页效果
    $("#banner").css({marginTop:-$("#banner").height()})
    $("#banner").animate({marginTop:0},1500)
    $("#banner span").click(function(){
      $("#banner").animate({marginTop:-$("#banner").height()},1500)
    })

    //焦点图效果
    var wid = $("#carousel").width();
    $("#carousel ul").find("li").css({width:wid});
    $("#carousel ul").scroll("left",-$("#carousel").width(),3,3000)
    function changeCtrl(i){
      if (i>=3){i=0}
      $("#ctrl-carsousel li").eq(i).addClass("nav-focus-itemCurrrent").siblings().removeClass("nav-focus-itemCurrrent")
      setTimeout(function(){changeCtrl(++i)},3000)
    }
    changeCtrl(0);
    $("#ctrl-carsousel li").click(function(){
      $(this).addClass("nav-focus-itemCurrrent").siblings().removeClass("nav-focus-itemCurrrent")
      var l = (-$(this).index())*$("#carousel").width()+"px";
      $("#carousel ul").animate({left:l},300);
    })

    //产品展示效果
    $(".main-product-show").first().show()
    $("#product-list a").click(function(){
      $(this).addClass("main-product-nav-listitemCurrent").siblings().removeClass("main-product-nav-listitemCurrent")
      $(".main-product-show").hide().eq($(this).index()).show()
    })

    //新闻动态效果
    $("#news-list ul").scroll("left",-$("#news-list").width(),3,3000,$("#prevList"),$("#nextList"));

  })
</script>
</body>
</html>