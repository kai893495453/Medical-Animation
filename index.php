<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
?>
<?php
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 1 order by c_id desc limit 0,3");
  /**[导航]*/
  $navs = get_all("select * from nav where fid = 0");
  foreach($navs as $k=>$v){
    $navs[$k]['subnavArr'] = get_all("select * from nav where fid =".$v['n_id']);
  }
  /**[查询新闻动态]*/
  $newsArr = get_all("select * from news where ntid = 2 order by nid desc limit 0,9");
  /**[查询联系方式]*/
  $contactArr = get_all("select * from contact");
  $productTitle = mysqli_query($connect,"select * from nav where fid = 10");
  while($productTitles = mysqli_fetch_array($productTitle)){
    $productTitleArr[] = $productTitles;
    /**[查询医疗器械产品]*/
    $product = mysqli_query($connect,"select * from product where tag_id=".$productTitles['n_id']." order by p_id desc limit 5;");
    while($products = mysqli_fetch_array($product)){$productArr[] = $products;}
  }
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
<?php require_once "include/header.php"; ?>
<div>
  <div class="main-product w1000">
    <div class="main-product-nav">
      <div class="title fl">
        <h2>医疗器械</h2>
        <h3 class="mt10 pl5">Medical Equipment</h3>
        <div class="cb"></div>
      </div>
      <div class="fr main-product-nav-ul" id="product-list">
        <?php foreach($productTitleArr as $k=>$v): ?>
          <a class="main-product-nav-listitem <?php if($k==0){ ?> main-product-nav-listitemCurrent <?php } ?>"><?php echo $v['name']; ?></a>
        <?php endforeach; ?>
      </div>
      <div class="cb"></div>
      <?php if(@is_array($productArr)){ for($i=0;$i<=$k;$i++): ?>
      <div class="main-product-show mt15">
        <div class="main-product-list01 fl"><img src="<?php echo $productArr[5*$i]['img_url']; ?>" /></div>
        <div class="main-product-list02 fl">
          <?php for($j=1;$j<5;$j++):?>
          <div class="pb10 pr fl ml10">
            <img src="<?php echo $productArr[5*$i+$j]['img_url']; ?>" />
            <span class="pa"><?php echo $productArr[5*$i+$j]['title']; ?></span>
          </div>
          <?php endfor; ?>
          <div class="cb"></div>
        </div>
        <div class="cb"></div>
      </div><!--main-product-show-->
      <?php endfor;} ?>
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
            <?php foreach($newsArr as $key => $value): ?>
              <li><a href="news-detail.php?id=<?php echo $value['nid']; ?>">
                <div><img class="productImg" src=<?php echo $value['img_url']; ?>></div>
                <div class="productDetail"><img src="images/list.png" width="5" height="5" align="absmiddle">&nbsp;&nbsp;<?php echo $value['title']; ?></div>
              </a></li>
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
<?php require_once "include/footer.php"; ?>
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
    $("#product-list a").mouseover(function(){
      $(this).addClass("main-product-nav-listitemCurrent").siblings().removeClass("main-product-nav-listitemCurrent")
      $(".main-product-show").hide().eq($(this).index()).show()
    })

    //新闻动态效果
    $("#news-list ul").scroll("left",-$("#news-list").width(),3,3000,$("#prevList"),$("#nextList"));

  })
</script>
</body>
</html>