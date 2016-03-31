<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[导航]*/
  $navs = get_all("select * from nav where fid = 0");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link href="css/base.css" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/login.css" rel="stylesheet" />
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
<main class="main">
	<div class="pt40 w1000 mAuto loginFrame">
        <div class="fl company"><img src="images/company.png"></div>
        <div class="fr loginForm">
        	<div class="tag">
              <a class="tagCurrent fl tc" href="#">普通用户</a>
              <a class="tagOther fl tc" href="#">医生用户</a>
              <div class="cb"></div>
            </div>
            <div class="login">
            	<form method="post" enctype="application/x-www-form-urlencoded">
                <p class="mb20">
               	  <label for="username">账户</label>
                  <input name="username" class="username" id="username" maxlength="11" placeholder="手机号码" />
                  <label for="password" class="passwordLabel">密码</label>
                  <a class="forgetPasswordA" href="forget-1.php">忘记密码?</a>
                  <a class="cb"></a>
                  <input name="password" type="password" class="password" id="password"  maxlength="16" placeholder="输入密码" />
                </p>
                <input type="submit" value="登录" name="submit" id="submit" class="confirmLogin" />
                <a class="registerA" href="register.php">免费注册</a>
                </form>
          </div>
      </div>
        <div class="cb"></div>
    </div>
</main><!--正文结束-->
<?php require_once "include/footer.php"; ?>
</body>
</html>