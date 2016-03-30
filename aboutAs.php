<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 2 order by c_id desc limit 1");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关于旭阳</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/contact.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require_once "include/header.php"; ?>
<main>
  <div class="content w1000 mAuto">
    <div class="fl content-tag">
      <div class="title">走近旭阳</div>
      <div class="f12">ABAOUT US</div>
      <div class="line"></div>
      <div class="subtag">
        <div class="active"><a href="aboutAs.php">关于旭阳</a></div>
        <div class=""><a href="contact.php">联系旭阳</a></div>
        <div class=""><a href="recruit.php">招贤纳士</a></div>
        <div class=""><a href="shopMap.php">销售网络</a></div>
      </div>
      <div class="cb"></div>
    </div>
    <div class="fr content-main">
      <article class="breadcrumbs f12">当前位置： <a href="index.php">首页</a> > <a href="#">走进我们</a> > <a href="#"> 关于旭阳</a></article>
      <div class="line"></div>
      <div class="list">
      		<div class="aboutAs">
            	<img src="images/company-1.png"/>
                <div class="pl25 fl details">
                	<h2>公司简介</h2>
                    <p>
                    	蚌埠市旭阳医疗动漫科技有限公司成立于2012年11月，是集研发、生产、销售为一体的高尖端新型科技企业，也是安徽省众多高校的产学研究基地。公司专门为需要康复的患者提供科学、有趣的治疗方法，将充满欢乐的动漫元素融入枯燥的康复治疗之中，让患者开心主动地康复，提高了康复机构治疗的效率。
                    </p>
                </div>
                <div class="cb"></div>
            </div>
      		<div class="aboutAs">
                <div class="pr25 fl details">
                	<h2>企业文化</h2>
                    <p>
                    旭阳科技贯彻"以人为本"的经营理念，始终站在时代的前沿，不断引进新思维、新方法、新技术来改变传统的康复训练模式，致力于为医疗行业研发新型、高效、精密的产品，为国内的主动康复领域做出巨大贡献！致力于为医疗行业研发新型、高效、精密的产品，为国内的主动康复领域做出巨大贡献！   
                    </p>
                </div>
            	<img src="images/company-2.png"/>
                <div class="cb"></div>
            </div>
      		<div class="aboutAs">
                <div class="details-bottom">
                	<h2>环境展示</h2>
                    <p>
                    蚌埠市旭阳医疗动漫科技有限公司成立于2012年11月，是集研发、生产、销售为一体的高尖端新型科技企业，也是安徽省众多高校的产学研究基地。公司专门为需要康复的患者提供科学、有趣的治疗方法，将充满欢乐的动漫元素融入枯燥的康复治疗之中，让患者开心主动地康复，提高了康复机构治疗的效率。
                    </p>
                </div>
                <ol>
                	<li>
                    	<div>
	                    	<img src="images/company.png"/>
                            <p>公司环境展示：前台</p>
                    		<div class="cb"></div>
                        </div>
                    </li>
                	<li>
                    	<div>
	                    	<img src="images/company-3.png"/>
                            <p>公司环境展示：办公区</p>
                    		<div class="cb"></div>
                        </div>
                    </li>
                	<li class="lastItem">
                    	<div>
	                    	<img src="images/company-4.png"/>
                            <p>公司环境展示：休息区</p>
                    		<div class="cb"></div>
                        </div>
                    </li>
                    <div class="cb"></div>
                </ol>
            </div>
      </div>
    </div>
    <div class="cb"></div>
  </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>