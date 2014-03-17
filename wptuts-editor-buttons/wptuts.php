<?php

add_shortcode('g10Submit', 'g10_Submit');
function g10_Submit($atts){
	$html = "<img src='../../wp-content/themes/YourThemeFolder/images/g10Submit.png' />";
	wp_reset_query();
	return $html;
}

add_shortcode('g10Add', 'g10_Add');
function g10_Add($atts){
	$html = "<img src='../../wp-content/themes/YourThemeFolder/images/g10Submit.png' />";
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
