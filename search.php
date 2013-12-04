<?php get_header(); ?>

<div id="primary" class="site-content">	
    <section class="archive-content">
        <header class="archive-title">
			<?php if (have_posts()) : ?>
				<h1>搜索 &ldquo;<?php the_search_query(); ?>&rdquo;的结果：</h1>
        </header>
		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" class="entry-post">
				<header class="entry-header">
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<span>分类：<?php the_category(', ') ?> | 发布：<?php the_time('Y-m-d'); ?> | 评论：<?php comments_popup_link('0条', '1条', '%条'); ?></span>
				</header>
                <div class="clear"></div>
				<section class="entry-content">
					   <a class="entry-content-image" href="<?php the_permalink() ?>" rel="bookmark" target="_blank" title="<?php the_title(); ?>">
                         <?php $thumb_img = has_post_thumbnail() ? get_the_post_thumbnail( $post->ID, 'thumbnail', array('alt' => trim(strip_tags( $post->post_title )),'title'=> trim(strip_tags( $post->post_title ))) ) : hellometro_get_post_img(380, 232, TRUE);?>   
                         <?php echo $thumb_img;?> 
                       </a>
                       <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 320,"……"); ?>
				       <div style="clear: both"></div>
                </section>
				<footer class="entry-meta">
					<span class="entry-tags"><?php echo get_the_tag_list( '', '  ');?></span>
				    <span class="entry-views"><span class="views-sum"><?php hellometro_post_views('', '')?>人已围观</span><span class="add-views"><a href="<?php the_permalink() ?>" target="_blank" title="围观+1" rel="bookmark">+</a></span></span>
                    <div class="clear"></div>
                </footer>
                <div class="entry-border"></div>
			</article>

					<?php endwhile; ?>
			<nav class="post_nav">
				<?php hellometro_posts_nav_link($query_string); ?>
			</nav>

			<?php else : ?>

			<article>
				<h1>没有找到任何结果</h1>
				<p>对不起，你要找的内容本站暂时没有！也许你可以搜索相近的关键词！</p>
               <div id="search" style="float: none">
	            <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
		        <input type="text" placeholder=" 找不到，那搜一下吧！" value="<?php the_search_query(); ?>" name="s" id="s" x-webkit-speech />
			    <input type="submit" id="searchsubmit" title="搜索" value=""></input>
		        </form>
             </div>
			</article>

			<?php endif; ?>

		</section>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>