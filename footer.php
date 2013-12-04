		
</div><!-- #main .wrapper -->
<footer class="footer-main">
<div id="footer-body">
<div id="footer-subbody">
<div class="footerLink">
<?php wp_list_bookmarks('orderby=id&category=0'); ?>
<div class="clear">
</div>
</div>
<div class="footerLink" id="footerNavgate">
        <h2>站内导航</h2>
        <ul>
            <li>联系站长</li>
            <li><a href="<?php bloginfo('url'); ?>/message-boards" target="_blank">我想留言</a></li>
            <li>关于本站</li>
            <li><a href="<?php bloginfo('url'); ?>/test" target="_blank">本站归档</a></li>
        </ul>
   </div>
    <div class="footerLink" id="footerNavgate">
        <h2>关注我们</h2>
        <ul>
            <li>新浪微博：</li>
            <li><wb:follow-button uid="2652938181" type="red_1" width="67" height="24" ></wb:follow-button></li>
            <li>腾讯微博：</li>
            <li><iframe src="http://follow.v.t.qq.com/index.php?c=follow&a=quick&name=itkezhancn&style=5&t=1357921605453&f=0" frameborder="0" scrolling="auto" width="125" height="24" marginwidth="0" marginheight="0" allowtransparency="true"></iframe></li>
        </ul>
    </div>
    <div class="footerLink" id="footer-about">
        <h2>本站简介</h2>
        <ul>
            <li>
                 IT客栈是一个旨在给大家分享T江湖那些奇闻趣事，那些IT牛人的传说，那些稀奇古怪的网站，那些爱不释手的应用软件！
            </li>
        </ul>
    </div>
    <div class="clear"></div>
</div>

<div id="footer-content">
Copyright <?php echo helloMetro_copyright(); ?> <?php bloginfo('name'); ?> |  
<a href="<?php bloginfo('url'); ?>/sitemap.html" target="_blank">站点地图</a> |  <?php if (get_option('swt_beian') == 'Display') { ?>
<a href="<?php bloginfo('url'); ?>" rel="external"><?php echo stripslashes(get_option('swt_beianhao')); ?></a>
<?php { echo '|'; } ?><?php } else { } ?> 
<a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f70aad2a9021b3ed988694ccce8dc8d4" rel="external">百度统计</a><div style="display: none;" id="tongji"><?php if (get_option('swt_tj') == 'Display') { ?><?php echo stripslashes(get_option('swt_tjcode')); ?><?php { echo '|'; } ?>	<?php } else { } ?></div>
| 主题由<a href="http://www.itkes.com/" target="_blank"> IT客栈</a> 制作 | 本主题基于<a href="http://www.wordpress.org/" rel="external">WordPress</a>技术构建 <!-- 返回顶部 -->

<div id="share">
	<a id="totop" title="返回顶部">返回顶部</a>
	<a href="http://weibo.com/guixiafly" target="_blank" class="sina">关注新浪微博</a>
	<a href="http://t.qq.com/itkezhancn" target="_blank" class="tencent">关注腾讯微博</a>
</div>
<!-- 返回顶部END -->
<?php
if( is_single() ){?>
<script type="text/javascript" charset="utf-8">
$(function(){
$("#btn_page_prev,#btn_page_next").hover(function(){$(this).find("span").show();},function(){$(this).find("span").hide();});
});
</script>

<?php }?>
</div>
<?php wp_footer(); ?>
    </div>
</footer>
</div><!-- #page -->
		<?php wp_footer(); ?>

	</body>
</html>