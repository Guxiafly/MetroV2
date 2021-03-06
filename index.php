<?php get_header(); ?>
	<div id="primary" class="site-content">
		<section>

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" class="entry-post">
				<header class="entry-header">
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<span>分类：<?php the_category(', ') ?> | 发布：<?php the_time('Y-m-d'); ?> | 评论：<?php comments_popup_link('0条', '1条', '%条'); ?></span>
				</header>
                    <div class="clear"></div>
				<section class="entry-content">
                       <?php
                            $t1=$post->post_date;
                            $t2=date("Y-m-d H:i:s");
                            $diff=(strtotime($t2)-strtotime($t1))/7200;
                            $views = (int)get_post_meta($post->ID, 'views', true);
                            $comments = $post->comment_count;
                            if($diff<24)
                            {
                                echo '<div class="new-entry"></div>';
                            }
                            elseif($views > 1000 || $comments > 10)
                            {
                                echo '<div class="hot-entry"></div>';
                            }
                         ?>
					   <a class="entry-content-image" href="<?php the_permalink() ?>" rel="bookmark" target="_blank" title="<?php the_title(); ?>">
                         <?php $thumb_img = has_post_thumbnail() ? get_the_post_thumbnail( $post->ID, 'thumbnail', array('alt' => trim(strip_tags( $post->post_title )),'title'=> trim(strip_tags( $post->post_title ))) ) : metrostyle_get_post_img(380, 232, TRUE);?>   
                         <?php echo $thumb_img;?> 
                       </a>
                       <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 320,"……"); ?>
				       <div style="clear: both"></div>
                </section>
				<footer class="entry-meta">
					<span class="entry-tags"><?php echo get_the_tag_list( '', ' ');?></span>
				    <span class="entry-views"><span class="views-sum"><?php metrostyle_post_views('', '')?>人已围观</span><span class="add-views"><a href="<?php the_permalink() ?>" target="_blank" title="围观+1" rel="bookmark">+</a></span></span>
                    <div class="clear"></div>
                </footer>
			</article>

			<?php endwhile; ?>

			<nav class="post_nav">
				<?php metrostyle_posts_nav_link($query_string); ?>
			</nav>

			<?php else : ?>

			<article>
				<h1>木有文章</h1>
				<p>Sorry, but the requested resource was not found on this site.</p>
				<?php get_search_form(); ?>
			</article>

			<?php endif; ?>
		</section>
        </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>