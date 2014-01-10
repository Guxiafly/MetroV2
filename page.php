<?php get_header(); ?>

	<div id="primary" class="site-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section>
			<article id="post-<?php the_ID(); ?>">
				<header>
					<h1 id="pagetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</header>
				<section class="singleContent">
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

				</section>
				<footer>
                    <?php metrostyle_single_link_pages() ?>	
				</footer>
			</article>
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