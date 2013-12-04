<?php get_header(); ?>
	<div id="primary" class="site-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section>
			<article id="post-<?php the_ID(); ?>">
				<header class="entry-header">
					<h1 ><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<span>分类：<?php the_category(', ') ?> | 发布：<?php the_time('Y-m-d'); ?> | 评论：<?php comments_popup_link('0条', '1条', '%条'); ?></span>
				</header>
                <div class="clear"></div>
				<section class="singleContent">
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

				</section>
				<footer>
                    <?php hellometro_single_link_pages() ?>	
				</footer>
			</article>
                <footer class="nav-single">
                    <?php 
                        $copyright = get_post_meta($post->ID, 'copyright', true);
                        $copyrighturl = get_post_meta($post->ID, 'copyrighturl', true);
                        $blogName= get_bloginfo('name');
                        if($copyright){
                            echo "<div class='nav-previous'><span class='meta-nav'>版权信息：</span>"." 转自<a href='$copyrighturl' target='blank' rel='nofllow'>$copyright</a></div>";}
                        else 
                            echo "<div class='nav-previous'><span class='meta-nav'>版权信息：</span>"." 本站原创：<a title=".$blogName." href=".get_bloginfo("url")." target='_blank'>".$blogName."</a> 转载请注明出处</div>"
                    ?>
                    <div class="nav-previous"><span class="meta-nav">上篇文章：</span> <?php if (get_previous_post()) { previous_post_link('%link','%title');} else { echo "没有了，已经是最后文章";} ?></div>
                    <div class="nav-next"><span class="meta-nav">下篇文章：</span> <?php if (get_next_post()) { next_post_link('%link','%title');} else { echo "木有了，已经是最新文章";} ?></div>
                </footer><!-- .nav-single -->
                
				<?php comments_template( '', true ); ?>
		</section>

	<?php endwhile; else: ?>

		<section>
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>