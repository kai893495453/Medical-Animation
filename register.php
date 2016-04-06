<?php 
  require_once "include/config.php";
  require_once "include/common.fun.php";
  /**[导航]*/
  $navs = get_all("select * from nav where fid = 0");
?>
<?php 
  $errors = array();
  //判断是否有post值
  if($_POST){
    if(isset($_POST['agree'])){
      //获取用户名是否按规定输入内容
      $phone = $_POST['phone'];
      //判断是否存在该帐号
      if(get_one("select * from user where phone = {$phone}")){
          $errors['isexist'] = 1;
      }else{
        if(!isPhone($phone)){
          $errors["phone"] = 1;
        }
        $password = $_POST['password'];
        if(!isPass($password)){
          $errors['password'] = 1;
        }
        $rePassword = $_POST['confirmPassword'];
        if(!isRePass($password,$rePassword)){
          $errors["rePassword"] = 1;
        }
        $mail = $_POST['mail'];
        if($mail&&!isMail($mail)){
          $errors['mail'] = 1;
        }
        if(empty($errors)){
          $data = array(
            "phone" => $phone,
            "password" => md5($password),
            "email" => $mail
          );
          //如果插入成功，就设置session，并返回首页
          if(insert("user",$data)){
            $_SESSION['username'] = $data['phone'];
            header("Location:index.php");
          }
        }
      }
    }else{
      $errors['agree'] = 1;
    }
  }
function isPhone($phone){
  //使用正则匹配是否为11位数字
  return preg_match("#^1\d{10}#",$phone);
}
function isPass($password){
  //使用正则匹配是否为6~16位内容
  return preg_match("#.{6,16}#",$password);
}
function isRePass($password,$rePassword){
  //判断是否两个密码相同
  return $password===$rePassword;
}
function isMail($mail){
  //使用正则匹配邮箱格式
  return preg_match("#.+@.+\..+#",$mail);
}
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
        	<form method="post">
           	  <label for="phone">手机号码</label>
              <input value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" name="phone" class="phone" id="phone" maxlength="11" onblur="keyblur(this,'^[0-9]{11}')" />
              <span class="warmming" <?php if(isset($errors['phone'])||isset($errors['isexist'])){echo "style=display:inline-block";} ?>>* <?php if(isset($errors['isexist'])){echo "已经存在该帐号";}else{ echo "请正确填写手机号码。";} ?></span>
           	  <label for="password">密码</label>
              <input name="password" type="password" class="password" id="password" maxlength="16" onkeyup="pwdStrong(this)" onblur="keyblur(this,'[a-zA-Z0-9]{6,}')" />
              <span class="warmming" <?php if(isset($errors['password'])){echo "style=display:inline-block";} ?>>* 登录密码不能少于6个字符。</span>
              <div class="passwordTips tc f12"><span class="pr5">密码强度</span><span class="passwordTips-0 pwdStrong">弱</span><span class="passwordTips-1 pwdStrong">中</span><span class="passwordTips-1 pwdStrong">强</span></div>
           	  <label for="confirmPassword">确定密码</label>
              <input name="confirmPassword" type="password" class="confirmPassword" id="confirmPassword" maxlength="16" onblur="reValue(this,document.getElementById('password'))" />
              <span class="warmming" <?php if(isset($errors['rePassword'])){echo "style=display:inline-block";} ?>>* 两次密码不相同。</span>
           	  <label for="mail">邮箱（选项）</label>
              <input name="mail" class="mail" id="mail" value="<?php if(isset($_POST['mail'])) echo $_POST['mail']; ?>" />
              <span class="warmming" <?php if(isset($errors['mail'])){echo "style=display:inline-block";} ?>>* 邮箱格式不正确。</span>
           	  <label for="imageCode">验证码</label>
              <input name="imageCode" class="imageCode fl mr10" id="imageCode" />
              <img class="codeImg fl" src="captcha.php" onclick="this.src='captcha.php'" /><a class="changeCode" onclick="this.previousElementSibling.src='captcha.php'">换一张</a>
              <span class="warmming codeWarm">* 验证码错误。</span>
              <div class="cb"></div>
              <input type="checkbox" name="agree" id="agree" class="agree" />
              <div class="agreeClause fl">我已阅读并接受<a class="clauseLink" href="#">《旭阳医疗器械服务条款》。</a></div>
              <span class="warmming" <?php if(isset($errors['agree'])){echo "style=display:inline-block";} ?>>* 请同意协议。</span>
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