<?php 
/*
Template Name: GuestBook
*/
get_header(); 
?>
<div id="primary" class="site-content">
		<section>
         <header class="archive-title">
				<h1>读者墙</h1>
        </header>
<!-- start 读者墙  Edited By iSayme-->
<?php
$query="SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 3 MONTH ) AND user_id='0' AND comment_author_email != 'guxiafly@163.com' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 24";
$wall = $wpdb->get_results($query);
$maxNum = $wall[0]->cnt;
foreach ($wall as $comment)
 {
 $width = round(40 / ($maxNum / $comment->cnt),2);//此处是对应的血条的宽度
 if( $comment->comment_author_url )
 $url = $comment->comment_author_url;
 else $url="#";
 $avatar = get_avatar( $comment->comment_author_email, $size = '36');
 $tmp = "<li><a target=\"_blank\" href=\"".$comment->comment_author_url."\">".$avatar."<em>".$comment->comment_author."</em> <strong>+".$comment->cnt."</strong></br></a></li>";
 $output .= $tmp;
}
 $output = "<ul class=\"readers-list\">".$output."</ul>";
 echo $output ;
?>
<!-- end 读者墙 -->

<?php comments_template( '', true ); ?>
		</section>
        </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>