<?php 
/*
Template Name: 友情链接
*/
get_header(); 
$linkcats = $wpdb->get_results("SELECT T1.name AS name FROM $wpdb->terms T1, $wpdb->term_taxonomy T2 WHERE T1.term_id = T2.term_id AND T2.taxonomy = 'link_category'");
?>
	<div id="primary" class="site-content">
		<section>

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
                <?php if($linkcats) : foreach($linkcats as $linkcat) : ?>
    <!-- 开始输出links-->
    <div class="linkcaption">
      <h3><?php echo $linkcat->name; ?></h3>
    </div>
    <!-- 输出分类-->
    <div class="link-content">
      <!--开始ul-->
      <ul>
        <?php $bookmarks = get_bookmarks('orderby=date&category_name=' . $linkcat->name);if ( !empty($bookmarks) ) {foreach ($bookmarks as $bookmark) {echo '<li><a href="' . $bookmark->link_url . '" title="' . $bookmark->link_description . '" target="_blank" >' . $bookmark->link_name . '</a><div>' . $bookmark->link_description . '</div></li>';}} ?>
      </ul>
      <div class="fix"></div>
    </div>
    <!-- end link-content -->
    <?php endforeach; endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
<?php comments_template( '', true ); ?>
		</section>
        </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>