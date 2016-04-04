<?php 
  /**[导航]*/
  $navs = get_all("select * from nav where fid = 0");
  foreach($navs as $k=>$v){
    $navs[$k]['subnavArr'] = get_all("select * from nav where fid =".$v['n_id']);
  }
?>
<div id="nav" class="nav">
  <div id="nav-logo" class="nav-logo">
    <div id="nav-logo-img" class="nav-logo-img"><a href="index.php"><img src="images/logo.png"/></a></div>
    <div id="nav-logo-account" class="nav-logo-account">
      <?php if(isset($_SESSION['username'])): ?>
      <div class="nav-account"><?php echo "用户:".$_SESSION['username']; ?> <a href="logout.php">退出</a></div>
      <?php else: ?>
      <div class="nav-account"><a href="login.php">登录</a> | <a href="register.php">注册</a></div>
      <?php endif; ?>
      <div class="nav-search">
        <form method="post" enctype="application/x-www-form-urlencoded">
          <select name="nav-search-select" class="nav-search-select selectArrow" >
            <option>分类</option>
            <option>其他</option>
          </select>
          <input name="nav-search-input" type="text" class="nav-search-input" size="18" />
          <input name="nav-search-submit" type="submit" class="nav-search-submit" value=" " />
        </form>
      </div>
    </div>
    <div class="cb"></div>
  </div>
  <div id="nav-focus" class="nav-focus mAuto">
    <div class="nav-focus-imgList" id="carousel">
      <ul>
      <?php
        foreach($carouselArr as $v):
      ?>
        <li><a href="<?php echo $v['alink']; ?>"><img src=<?php echo $v['img_url']; ?> width="100%" height="100%"/></a></li>
      <?php
        endforeach;
      ?>
        <div class="cb"></div>
      </ul>
      <div class="nav-ul-transparent"></div>
    </div>
    <div class="nav-focus-div pa">
      <ol class="nav-focus-ol w200 mAuto" id="ctrl-carsousel">
        <?php
          foreach($carouselArr as $key=>$carousel):
          if(count($carouselArr)>1):
        ?>
        <li class="nav-focus-listitem nav-focus-itemCurrrent"><a><?php echo $key+1; ?></a></li>
        <?php
          endif;
          endforeach;
        ?>
        <div class="cb"></div>
      </ol>
    </div>
    <div class="pa top nav-div-list">
      <dl class="w1000 mAuto nav-list">
        <?php foreach($navs as $k=>$v): ?>
        <dd>
          <a href="<?php echo $v['alink']; ?>" <?php if($k==0){echo "class='aCurrent nav-list-current'";} ?>><?php echo $v['name']; ?></a>
          <ul class="nav-list-subnav">
          <?php
              if(is_array($v['subnavArr'])):
              foreach($v['subnavArr'] as $subval):
          ?>
            <li><a href="<?php echo $subval['alink']; ?>?id=<?php echo $subval['n_id']; ?>"><?php echo $subval['name']; ?></a></li>
          <?php endforeach; endif; ?>
          </ul>
        </dd>
        <?php endforeach; ?>
        <dt class="fr">
            <div></div>
          <a href="#">前往器械商城</a>
        </dt>
        <div class="cb"></div>
      </dl>
    </div>
  </div>
</div>