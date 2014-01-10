<?php get_header(); ?>
<div id="primary" class="site-content">		
        <section>
			<article>
				<div id="error404"><span>4</span><span>0</span><span>4</span>
                <h2>哎呀，要找的文章不知去哪儿啦</h2>
                <div>
                    <a class="errorTitle" href="<?php bloginfo('url'); ?>/message-boards" target="_blank" title="发表留言">发表留言</a>
                    <a class="errorTitle" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=vNvJxNXd2tDF-M3Nkt-T0Q" target="_blank" title="联系站长">联系站长</a>
                    <a class="errorTitle" href="<?php bloginfo('url');?>" title="返回主页">返回主页</a>
                </div>
            </div>
			</article>
		</section>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>