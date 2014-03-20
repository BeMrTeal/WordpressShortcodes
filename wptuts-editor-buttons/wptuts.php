<?php
add_shortcode('g10Submit', 'g10_Submit');
function g10_Submit($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10Submit.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10Add', 'g10_Add');
function g10_Add($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10Add.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10Clear', 'g10_Clear');
function g10_Clear($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10Submit.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10Delete', 'g10_Delete');
function g10_Delete($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10Submit.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10Edit', 'g10_Edit');
function g10_Edit($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10Submit.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10ReloadGrid', 'g10_ReloadGrid');
function g10_ReloadGrid($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10Submit.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10RunReport', 'g10_RunReport');
function g10_RunReport($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10Submit.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10Save', 'g10_Save');
function g10_Save($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10Submit.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10Search', 'g10_Search');
function g10_Search($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10Submit.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10FuturesMonth', 'g10_FuturesMonth');
function g10_FuturesMonth($atts){
	$html = "<img src='". get_bloginfo('template_url') . "/images/g10FuturesMonth.png' class='shortcodeImage' />";
	wp_reset_query();
	return $html;
}



add_action( 'init', 'wptuts_buttons' );
function wptuts_buttons() {
	add_filter("mce_external_plugins", "wptuts_add_buttons");
    add_filter('mce_buttons', 'wptuts_register_buttons');
}	
function wptuts_add_buttons($plugin_array) {
	$plugin_array['wptuts'] = get_template_directory_uri() . '/wptuts-editor-buttons/wptuts-plugin.js';
	return $plugin_array;
}
function wptuts_register_buttons($buttons) {
	array_push( $buttons, 'dropcap', 'showrecent', 'g10Shortcodes'); // dropcap', 'recentposts
	return $buttons;
}
?>
