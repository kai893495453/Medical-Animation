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
          <div class="stepCurrent"><span>1</span></div>
          <div class="stepCurrent-detail"><span>填写账户名</span></div>
        </li>
        <li>
          <div class="step"><span>2</span></div>
          <div class="step-detail"><span>设置新密码</span></div>
        </li>
        <li>
          <div class="step step-last"><span>√</span></div>
          <div class="step-detail"><span>完成</span></div>
        </li>
        <div class="cb"></div>
      </ul>
      <div class="forgetForm forgetForm-1 mAuto">
        <form method="post" enctype="application/x-www-form-urlencoded">
          <dl>
            <dt>账户角色：</dt>
            <dd>
              <input name="role" type="radio" class="role" id="roleNormal" value="普通用户" checked="checked" />
              <label for="roleNormal" class="pr10">普通用户</label>
              <input name="role" id="roleDr" class="role" type="radio" value="医生" />
              <label for="roleDr">医生</label>
            </dd>
            <dt>
              <label for="phone">手机：</label>
            </dt>
            <dd>
              <input name="phone" id="phone" class="phone" type="number" placeholder="预留的手机号码" maxlength="11" />
            </dd>
            <dt>
              <label for="identityCode">验证码：</label>
            </dt>
            <dd>
              <input name="identityCode" id="identityCode" class="identityCode fl" type="text"/>
              <a href="#" class="getCode fl ml10">获取验证码</a>
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