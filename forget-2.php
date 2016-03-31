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
    <div id="nav-logo-img" class="nav-logo-img"> <a href="index.php"><img src="images/logo.png"/></a> </div>
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
          <div class="stepCurrent step-middle"><span>2</span></div>
          <div class="stepCurrent-detail"><span>设置新密码</span></div>
        </li>
        <li>
          <div class="step step-last"><span>√</span></div>
          <div class="step-detail"><span>完成</span></div>
        </li>
        <div class="cb"></div>
      </ul>
      <div class="forgetForm forgetForm-2 mAuto">
        <form method="post" enctype="application/x-www-form-urlencoded">
          <dl>
            <dt>
              <label for="password">密码：</label>
            </dt>
            <dd>
              <input name="password" id="password" class="password" type="password"/>
              <span class="warmming">* 登录密码不能少于6个字符。</span>
              <div class="passwordTips tc f12"><span class="pr10">密码强度</span><span class="passwordTips-0">弱</span><span class="passwordTips-1">中</span><span class="passwordTips-1">强</span></div>
            </dd>
            <div class="cb"></div>
            <dt>
              <label for="confirmPassword">确认密码：</label>
            </dt>
            <dd>
              <input name="confirmPassword" id="confirmPassword" class="confirmPassword" type="password"/>
            </dd>
            <div class="cb"></div>
            <input type="submit" class="submit mAuto" name="submit" value="提交" />
          </dl>
        </form>
      </div>
    </div>
  </div>
</main>
<?php require_once "include/footer.php"; ?>
</body>
</html>