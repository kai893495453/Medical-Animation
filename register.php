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
<title>普通用户注册</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/register.css" rel="stylesheet" />
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
<div class="mAuto w1000 boxshadow registerFrame">
    	<div class="fl registerForm">
        	<form method="post" enctype="application/x-www-form-urlencoded">
           	  <label for="phone">手机号码</label>
              <input name="phone" class="phone" id="phone" maxlength="11" onblur="keyblur(this,'^[0-9]{11}')" />
              <span class="warmming">* 请正确填写手机号码。</span>
           	  <label for="password">密码</label>
              <input name="password" type="password" class="password" id="password" maxlength="16" onkeyup="pwdStrong(this)" onblur="keyblur(this,'[a-zA-Z0-9]{6,}')" />
              <span class="warmming">* 登录密码不能少于6个字符。</span>
              <div class="passwordTips tc f12"><span class="pr5">密码强度</span><span class="passwordTips-0 pwdStrong">弱</span><span class="passwordTips-1 pwdStrong">中</span><span class="passwordTips-1 pwdStrong">强</span></div>
           	  <label for="confirmPassword">确定密码</label>
              <input name="confirmPassword" type="password" class="confirmPassword" id="confirmPassword" maxlength="16" onblur="reValue(this,document.getElementById('password'))" />
              <span class="warmming">* 与密码不相同。</span>
           	  <label for="mail">邮箱（选项）</label>
              <input name="mail" class="mail" id="mail" />
           	  <label for="imageCode">验证码</label>
              <input name="imageCode" class="imageCode fl mr10" id="imageCode" />
              <img class="codeImg fl" src="images/identifyingCode.png"/><a class="changeCode" href="#changeCode">换一张</a>
              <span class="warmming codeWarm">* 验证码错误。</span>
              <div class="cb"></div>
              <input type="checkbox" name="cb[]" id="agree" class="agree" />
              <div class="agreeClause fl">我已阅读并接受<a class="clauseLink" href="#">《旭阳医疗器械服务条款》。</a></div>
              <div class="cb"></div>
              <input name="submit" class="submit" type="submit" id="submit" value="注册" />
              <div class="loginQuestion mt10 f12 tr">已经注册？<a href="login.php" class="gotoLogin">请登录</a></div>
            </form>
		</div>
        <div class="fr company"><img src="images/company.png"></div>
        <div class="cb"></div>
    </div>
</main>
<?php require_once "include/footer.php"; ?>
<script type="text/javascript" src="js/checkInput.js"></script>
</body>
</html>