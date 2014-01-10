<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage MetroStyle
 * @since MetroStyle 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns:wb=“http://open.weibo.com/wb”>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php include('inc/seo.php'); ?>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/javascript/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="shortcut icon" href="http://wwww.itkes.com/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<script src="<?php bloginfo('template_directory'); ?>/javascript/metrostyle.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?f70aad2a9021b3ed988694ccce8dc8d4";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
	<body <?php body_class(); ?>>
           <div class="mobile-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
           </div>
        <div id="page" class="site" style="position:relative">
 
		<header id="masthead" class="site-header" role="banner">
            <a class="logo" title="返回 <?php bloginfo('name'); ?> 首页" href="<?php bloginfo('url'); ?>"></a>
            <div class="header-meta">
               <a class="meta-RSS" href="<?php bloginfo('rss2_url'); ?>" rel="bookmark" target="_blank" title="订阅到RSS"></a>
               <a class="meta-Sina" href="<?php echo stripslashes(get_option('ms_sina'))?>" rel="bookmark" target="_blank" title="关注新浪微博"></a>
               <a class="meta-Mail" href="<?php bloginfo('url'); ?>/message-boards" target="_blank" title="留言给我们"></a>
               <a class="meta-QQ"  href="<?php echo stripslashes(get_option('ms_tengxun'))?>" rel="bookmark" target="_blank" title="关注腾讯微博"></a>
            </div>
            <div style="clear:both"></div>
		</header>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-toggle">菜单</div>
            <div class="left-menu">
			    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
            </div>
            <div id="search">
	            <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
		        <input type="text" placeholder=" 找不到，那搜一下吧！" value="<?php the_search_query(); ?>" name="s" id="s"/>
			    <input type="submit" id="searchsubmit" title="搜索" value=""></input>
		        </form>
             </div>
            <div class="clear"></div>
		</nav><!-- #site-navigation -->
        <?php if (get_option('ms_slide') == 'Display') { ?>
        <?php if ( is_home() ) { ?>
        <div class="metro-slide">
            <div class="big-slide">
                <div id="slide">
                <ul>
                <?php $imgCount = 1; ?>
                <?php query_posts('meta_key=top&showposts=5&ignore_sticky_posts=1');
                            if (have_posts()) :
                            while (have_posts()) : the_post();?>
                                <?php if($imgCount == 1) : ?>
                                <li class="first">
                                    <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                                        <?php the_post_thumbnail("thumbnail");?>
                                        <p><?php the_title(); ?></p> 
                                    </a>
                                </li> 
                                <?php else:?>
                                <li>
                                    <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                                        <?php the_post_thumbnail("thumbnail");?> 
                                        <p><?php the_title(); ?></p> 
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php $imgCount++; ?> 
                  <?php endwhile;endif; ?>
                <?php wp_reset_query(); ?>
            </ul>
            </div>
            </div>
            <div class="small-slide">
                <?php $count = 1; ?>
                    <?php query_posts(array('orderby' => 'rand', 'ignore_sticky_posts'=>1, 'showposts' => 6));
                     if (have_posts()) :
                     while (have_posts()) : the_post();?>
                        <?php if(($count == 2) || ($count ==4) || ($count == 6)) : ?>
			                <a class="span-slide" target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                                <?php the_post_thumbnail("thumbnail");?>
                            </a>
                        <?php else:?>
                            <a class="normal-slide" target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                                <?php the_post_thumbnail("thumbnail");?>
                            </a>
                        <?php endif; ?>
                    <?php $count++; ?>
                    <?php endwhile;endif; ?>
                    <?php wp_reset_query(); ?>
            </div>
            <div class="clear"></div>
        </div>
        <?php }} ?>
    <div id="main" class="wrapper">