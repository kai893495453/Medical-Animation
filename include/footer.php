<footer class="footer">
  <div class="footer-row1">
    <div class="footer-row1-link w1000 mAuto">
      <dl>
        <?php foreach ($navs as $v): ?>
        <dd class="listitem"><a href="<?php echo $v['alink']; ?>"><?php echo $v['name']; ?></a> </dd>
      <?php endforeach; ?>
        <dt class="listitem-next"><a href="#">前往旭日器械商城&gt;</a></dt>
        <dd class="cb"></dd>
      </dl>
    </div>
  </div>
  <div class="footer-row2">
    <div class="footer-row2-detail w1000 mAuto">
      <div class="fl pt20">
      <?php foreach ($contactArr as $k => $v):?>
        <p class="pb10"><img src="<?php echo $v['icon']; ?>" hspace="5" vspace="0" align="absmiddle" />
        <?php echo $v['company_title'].$v['company_info']; ?>
        </p>
        <?php if(($k+1)%2==0): ?>
      </div>
      <div class="fl pt20 footer-row2-detail-col2">
        <?php endif; ?>
      <?php endforeach; ?>
      </div>
      <p class="fr pt20 code"><img src="images/code.png" width="73" height="73"></p>
      <div class="cb"></div>
      <p class="pl5 pt10 fl address">&copy;1996-2015 ZhengBang京ICP备050567892号<span class="textIndent">旭阳医疗动漫科技有限公司</span></p>
      <p class="fr pr5 pt10 scan"><span>扫一扫关注旭阳微信</span></p>
      <p class="cb"></p>
    </div>
  </div>
  </div>
</footer>
<?php 
  mysqli_close($_ENV['connect']);
?>