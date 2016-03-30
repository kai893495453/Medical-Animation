<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[查询轮播图]*/
  $carouselArr = get_all("select * from carousel where n_id = 2 order by c_id desc limit 1");
  /**[招聘岗位]*/
  $recruit = get_all("select * from recruit");
  $recruit_info = get_all("select * from recruit_info");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招贤纳士</title>
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
        <div class=""><a href="aboutAs.php">关于旭阳</a></div>
        <div class=""><a href="contact.php">联系旭阳</a></div>
        <div class="active"><a href="recruit.php">招贤纳士</a></div>
        <div class=""><a href="shopMap.php">销售网络</a></div>
      </div>
      <div class="cb"></div>
    </div>
    <div class="fr content-main">
      <article class="breadcrumbs f12">当前位置： <a href="index.php">首页</a> > <a href="#">走进旭阳</a> > <a href="#"> 招贤纳士</a></article>
      <div class="line"></div>
      <div class="list">
        	<div class="pt30"><img src="images/pic1.png" width="738" height="309"></div>
            <dl>
            	<dt><span>公司的人才战略规划</span></dt>
                <dd>蚌埠市旭阳医疗动漫科技有限公司成立于2012年11月，是集研发、生产、销售为一体的高尖端新型科技企业，也是安徽省众多高校的产学研究基地。公司专门为需要康复的患者提供科学、有趣的治疗方法，将充满欢乐的动漫元素融入枯燥的康复治疗之中，让患者开心主动地康复，提高了康复机构治疗的效率。
                </dd>
            	<dt><span>热招职位如下：</span></dt>
                <dd>
                	<ol>
                      <?php foreach($recruit as $val): ?>
                    	<li><?php echo $val['job_info']; ?></li>
                      <?php endforeach; ?>
                    </ol>
                </dd>
            	<dt><span>报名：</span></dt>
                <dd>
                	<ol class="signUp">
                    	<?php foreach($recruit_info as $v): ?>
                        <li><?php echo $v['rinfo_title']; ?>
                          <p><?php echo $v['rinfo_content']; ?></p>
                        </li>
                      <?php endforeach; ?>
                  </ol>
                </dd>
            </dl>
      </div>
    </div>
    <div class="cb"></div>
  </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>