<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[导航]*/
  $navs = get_all("select * from nav where fid = 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>找回密码</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/forget.css" rel="stylesheet" />
</head>

<body>
<nav id="nav" class="nav">
  <div id="nav-logo" class="nav-logo">
    <div id="nav-logo-img" class="nav-logo-img">
    	<a href="index.php"><img src="images/logo.png"/></a>
    </div>
    <div class="cb"></div>
  </div>
</nav>
<main>
	<div class="w1000 mAuto boxshadow mt20 mb50">
    	<div class="forgetFrame mAuto">
          <ul class="pb50 mAuto">
            <li>
              <div class="stepFinish"><span>1</span></div>
              <div class="stepCurrent-detail"><span>填写账户名</span></div>
            </li>
            <li>
              <div class="stepFinish"><span>2</span></div>
              <div class="stepCurrent-detail"><span>设置新密码</span></div>
            </li>
            <li>
              <div class="stepCurrent step-last"><span>√</span></div>
              <div class="stepCurrent-detail"><span>完成</span></div>
            </li>
            <div class="cb"></div>
          </ul>
          <div class="forgetForm forgetForm-3 mAuto">
          	<div class="pic fl pr25 pt5"><img src="images/forget.png"/></div>
            <div class="tips fl"><div>新密码设置成功！</div>请牢记您新设置的密码。<a href="index.php">返回首页</a></div>
            <div class="cb"></div>
          </div>
        </div>
    </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>