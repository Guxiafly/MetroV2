<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 */
?>
    <div id="secondary" class="widget-area" role="complementary">
    <?php if (get_option('ms_mostviewed') == 'Display') { ?>    
    <h3 class="widget-title">
            热门围观
        </h3>
        <div class="tab_content tab_most">
          <div>
            <ul class="tab_post_links">
                <?php metrostyle_get_mostviewed_posts(); ?>
            </ul>
          </div>
        </div>
        <?php } ?>
         <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
	    <?php endif; ?>
        <div class="tab_ad">
             <?php if (get_option('ms_ada') == 'Display') { ?><?php echo stripslashes(get_option('ms_adacode')); }?>
	    </div>
        <?php if (get_option('ms_comment') == 'Display') { ?>
        <aside class="widget_comments"><h3 class="widget-title">最新评论</h3>
            <ul>
	            <?php metrostyle_get_comments() ?> 	
            </ul>
        </aside>
        <?php } ?>
        <?php if (get_option('ms_cloudTag') == 'Display') { ?>
        <aside class="widget_tag"><h3 class="widget-title">标签云集</h3>
            <ul>
	            <?php wp_tag_cloud('smallest=14&largest=20&unit=px&number=20&orderby=count&order=RAND');?>		
            </ul>
        </aside>
        <?php } ?>
        <?php if (get_option('ms_randomPost') == 'Display') { ?>
        <h3 class="widget-title">
            随机文章
        </h3>
        <div class="tab_content tab_most">
            <div>
                <ul class="tab_post_links">
                    <?php metrostyle_get_latest_posts(1); ?>
                </ul>
            </div>
        </div>
	   <?php } ?>
       <?php if (get_option('ms_blogtj') == 'Display') { ?>
        <h3 class="widget-title">
            博客统计
        </h3>
        <div class="tab_content tab_most">
            <div>
                <ul class="tab_post_links tab_post_statistics">
                    <?php metrostyle_get_blog_statistics(); ?>
                </ul>
            </div>
        </div>
	   <?php } ?>
    </div><!-- #secondary -->
    <div style="clear: both"></div>