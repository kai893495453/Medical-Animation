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
<title>医生用户注册</title>
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
              <input name="password" type="password" class="password" id="password" maxlength="16" onkeyup="pwdStrong(this)" onblur="keyblur(this,'[a-zA-Z0-9]{6,}')"/>
              <span class="warmming">* 登录密码不能少于6个字符。</span>
              <div class="passwordTips tc f12"><span class="pr5">密码强度</span><span class="passwordTips-0 pwdStrong">弱</span><span class="passwordTips-1 pwdStrong">中</span><span class="passwordTips-1 pwdStrong">强</span></div>
           	  <label for="confirmPassword">确定密码</label>
              <input name="confirmPassword" type="password" class="confirmPassword" id="confirmPassword" maxlength="16" onblur="reValue(this,document.getElementById('password'))" />
              <span class="warmming">* 与密码不相同。</span>
           	  <label for="realname">真实姓名</label>
              <input name="realname" class="realname" id="realname" />
           	  <label for="mail">邮箱</label>
              <input name="mail" class="mail" id="mail" />
           	  <label for="hospital">所属医院</label>
              <input name="hospital" class="hospital" id="hospital" onblur="keyblur(this,'[\u4E00-\u9FA5\uF900-\uFA2D]')" />
              <span class="warmming">* 请填写医院全名</span>
           	  <label for="department">所属科室</label>
              <select class="department" name="department" id="department">
              	<option>请选择科室</option>
              	<option>A1</option>
              </select>
           	  <label for="professional">职称</label>
              <select class="professional" name="professional" id="professional">
              	<option>请选择职称</option>
              	<option>职称1</option>
              	<option>职称2</option>
              </select>
           	  <label for="telphone">科室电话</label>
              <input name="telphone" class="telphone" id="telphone" />
           	  <label for="hobby">擅长及增加介绍</label>
              <textarea class="hobby" id="hobby" name="hobby"></textarea>
           	  <label for="invitationCode">邀请码（选填）</label>
              <input name="invitationCode" class="invitationCode" id="invitationCode" />
           	  <label for="imageCode">验证码</label>
              <input name="imageCode" class="imageCode fl mr10" id="imageCode" />
              <img class="codeImg fl" src="images/identifyingCode.png"/><a class="changeCode" href="#changeCode">换一张</a>
              <span class="warmming codeWarm">* 验证码错误。</span>
              <div class="cb"></div>
              <input type="checkbox" name="cb[]" id="agree" class="agree" />
              <div class="agreeClause fl">我已阅读并接受<a class="clauseLink" href="#">《旭阳医疗器械服务条款》。</a></div>
              <div class="cb"></div>
              <input name="submit" class="submit" type="submit" id="submit" value="注册" />
              <div class="loginQuestion mt10 f12 tr">已经注册？<a href="#" class="gotoLogin">请登录</a></div>
            </form>
		</div>
        <div class="fr company-dr"><img src="images/company.png"></div>
        <div class="cb"></div>
    </div>
</main>
<?php require_once "include/footer.php"; ?>
<script type="text/javascript" src="js/checkInput.js"></script>
</body>
</html>