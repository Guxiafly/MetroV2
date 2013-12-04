<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 */
?>
    <div id="secondary" class="widget-area" role="complementary">
        <h3 class="widget-title">
            广而告之
        </h3>
         <div class="tab_content tab_most">
          <div>
            <ul class="tab_post_links">
               本站主题现在进行IE7，IE8的兼容性测试，由于本人没有这样的环境，如果谁有这样的环境麻烦看一下，有什么问题请给我留言，万分感谢！
            </ul>
          </div>
        </div>
        <h3 class="widget-title">
            热门围观
        </h3>
        <div class="tab_content tab_most">
          <div>
            <ul class="tab_post_links">
                <?php hellometro_get_mostviewed_posts(); ?>
            </ul>
          </div>
        </div>
         <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
	    <?php endif; ?>
        <div class="tab_ad">
             	<script type="text/javascript">
     document.write('<a style="display:none!important" id="tanx-a-mm_46246341_4214430_13772303"></a>');
     tanx_s = document.createElement("script");
     tanx_s.type = "text/javascript";
     tanx_s.charset = "gbk";
     tanx_s.id = "tanx-s-mm_46246341_4214430_13772303";
     tanx_s.async = true;
     tanx_s.src = "http://p.tanx.com/ex?i=mm_46246341_4214430_13772303";
     tanx_h = document.getElementsByTagName("head")[0];
     if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
</script>
	</div>
        <aside class="widget_comments"><h3 class="widget-title">最新评论</h3>
            <ul>
	            <?php hellometro_get_comments() ?> 	
            </ul>
        </aside>
        <aside class="widget_tag"><h3 class="widget-title">标签云集</h3>
            <ul>
	            <?php wp_tag_cloud('smallest=14&largest=20&unit=px&number=20&orderby=count&order=RAND');?>		
            </ul>
        </aside>
        <h3 class="widget-title">
            随机文章
        </h3>
        <div class="tab_content tab_most">
            <div>
                <ul class="tab_post_links">
                    <?php hellometro_get_latest_posts(1); ?>
                </ul>
            </div>
        </div>
	   
    </div><!-- #secondary -->
    <div style="clear: both"></div>