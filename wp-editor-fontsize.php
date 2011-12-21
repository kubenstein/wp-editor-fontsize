<?php
/*
Plugin Name: EditorFontsize
Plugin URI: https://github.com/kubenstein/wp-editor-fontsize
Description: Add font size dropdown menu to tinyMCE content editor
Version: 1.0
Author: kubenstein
Author URI: https://github.com/kubenstein
Tags: admin, tinymce, fontsize, size, font, editor
*/


function wp_editor_fontsize_filter( $options ) {
	array_shift( $options );
	array_unshift( $options, 'fontsizeselect');
	array_unshift( $options, 'formatselect');
	return $options;
}
add_filter('mce_buttons_2', 'wp_editor_fontsize_filter');

