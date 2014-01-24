<?php

$themename = "MetroStyle";
$shortname = "ms";

//$categories = get_categories('hide_empty=0&orderby=name');
//$wp_cats = array();
//foreach ($categories as $category_list ) {
//       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
//}
////Stylesheets Reader
//$alt_stylesheet_path = TEMPLATEPATH . '/css/';
//$alt_stylesheets = array();
//$alt_stylesheets[] = '';

//if ( is_dir($alt_stylesheet_path) ) {
//    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
//        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
//            if(stristr($alt_stylesheet_file, ".css") !== false) {
//                $alt_stylesheets[] = $alt_stylesheet_file;
//            }
//        }    
//    }
//}
//$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array (
	array(  "name" => $themename." Options",
      		"type" => "title"),

//各功能模块控制
    array(  "name" => "首页幻灯片设置",
            "type" => "section"),
    array(  "type" => "open"),

	array(  "name" => "是否显示首页幻灯片",
			"desc" => "默认不显示",
            "id" => $shortname."_slide",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),
            
    array(  "type" => "close"),
    array(  "name" => "侧边栏设置",
            "type" => "section"),
    array(  "type" => "open"),

	array(  "name" => "是否显示热门文章",
			"desc" => "默认不显示",
            "id" => $shortname."_mostviewed",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),
            
	array(  "name" => "是否显示最新评论",
			"desc" => "默认不显示",
            "id" => $shortname."_comment",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")), 
            
	array(  "name" => "是否显示彩色标签云",
			"desc" => "默认不显示",
            "id" => $shortname."_cloudTag",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),
            
	array(  "name" => "是否显示随机文章",
			"desc" => "默认不显示",
            "id" => $shortname."_randomPost",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(  "name" => "是否显示博客统计数据",
			"desc" => "默认不显示",
            "id" => $shortname."_blogtj",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(	"name" => "建站日期",
            "desc" => "",
            "id" => $shortname."_builddate",
            "type" => "textarea",
            "std" => "2012-12-9"),

//网站SNS设置
    array(  "type" => "close"),
	array(  "name" => "网站SNS设置(必填)",
			"type" => "section"),
	array(  "type" => "open"),

	array(	"name" => "新浪微博",
			"desc" => "",
			"id" => $shortname."_sina",
			"type" => "textarea",
            "std" => "输入你的新浪微博链接"),

	array(	"name" => "腾讯微博",
            "desc" => "",
            "id" => $shortname."_tengxun",
            "type" => "textarea",
            "std" => "输入你的腾讯微博链接"),

//SEO设置
    array(  "type" => "close"),
	array(  "name" => "网站SEO设置(必填)",
			"type" => "section"),
	array(  "type" => "open"),

	array(	"name" => "描述（Description）",
			"desc" => "",
			"id" => $shortname."_description",
			"type" => "textarea",
            "std" => "输入你的网站描述，一般不超过200个字符"),

	array(	"name" => "关键词（KeyWords）",
            "desc" => "",
            "id" => $shortname."_keywords",
            "type" => "textarea",
            "std" => "输入你的网站关键字，一般不超过100个字符"),

//网站统计、备案号
    array(  "type" => "close"),
	array(  "name" => "网站统计代码及备案号设置",
			"type" => "section"),
	array(  "type" => "open"),

	array(  "name" => "是否显示网站统计",
			"desc" => "默认不显示",
            "id" => $shortname."_tj",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

    array(  "name" => "输入你的网站统计代码",
            "desc" => "",
            "id" => $shortname."_tjcode",
            "type" => "textarea",
            "std" => ""),

	array(  "name" => "是否显示备案号",
			"desc" => "默认不显示",
            "id" => $shortname."_beian",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(  "name" => "输入您的备案号",
			"desc" => "",
            "id" => $shortname."_beianhao",
            "type" => "textarea",
            "std" => "苏ICP备10033488号"),

//广告设置
    array(  "type" => "close"),
	array(  "name" => "博客广告设置",
			"type" => "section"),
	array(  "type" => "open"),

	array(  "name" => "是否显示侧边栏广告",
			"desc" => "默认不显示",
            "id" => $shortname."_ada",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入侧边栏广告代码(250*250)",
            "desc" => "",
            "id" => $shortname."_adacode",
            "type" => "textarea",
            "std" => ""),

	array(	"type" => "close") 
);

function mytheme_add_admin() {
global $themename, $shortname, $options;
if ( $_GET['page'] == basename(__FILE__) ) {
	if ( 'save' == $_REQUEST['action'] ) {
		foreach ($options as $value) {
	update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
	header("Location: admin.php?page=theme_options.php&saved=true");
die;
}
else if( 'reset' == $_REQUEST['action'] ) {
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
	header("Location: admin.php?page=theme_options.php&reset=true");
die;
}
}
add_theme_page($themename." Options", "当前主题设置", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_add_init() {
$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/inc/options/options.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/inc/options/rm_script.js", false, "1.0");
}
function mytheme_admin() {
global $themename, $shortname, $options;
$i=0;
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 主题设置已保存</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 主题已重新设置</strong></p></div>';
?>

<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> 设置</h2>
<div class="rm_opts">
<!-- <div class="rm_opts">
 --><form method="post"> 
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "open":
?>
<?php break;
case "close":
?>
</div>
</div>
<br />
<?php break;
case "title":
?>
<?php break;
case 'text':
?>
<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php
break;
case 'textarea':
?>
<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php
break;
case 'select':
?>
<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option value="<?php echo $option;?>" <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>>
		<?php
		if ((empty($option) || $option == '' ) && isset($value['default_option_value'])) {
			echo $value['default_option_value'];
		} else {
			echo $option; 
		}?>
		
		</option><?php } ?>
</select>
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
case "checkbox":
?>
<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":
$i++;
?>
<div class="rm_section">
<div class="rm_title"><h3><img class="inactive" alt=""/><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="保存设置" />
</span><div class="clearfix"></div></div>
<div class="rm_options">
<?php break;
}
}
?>
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="恢复默认" /> <font color=#ff0000>提示：此按钮将恢复主题初始状态，您的所有设置将消失！</font>
<input type="hidden" name="action" value="reset" />
<span
</p>
</form>
 </div> 
 <div class="kg"></div>
 </div>
<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>