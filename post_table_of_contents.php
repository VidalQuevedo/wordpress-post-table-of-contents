<?php
/*
Plugin Name: Table of Contents
Description: Generates a jQuery-based table of contents based on heading tags (h1 - h6) within the body of a post.
Author: Vidal Quevedo
Author URI: http://www.vidalquevedo.com
License: GPL2
Version: 0.1
*/
?>
<?php 
wp_enqueue_script( $handle = 'post_table_of_contents', $src = plugins_url('/lib/js/post_table_of_contents.js', __FILE__), $deps = array('jquery'), $ver = false, $in_footer = true );

wp_enqueue_style( $handle = 'post_table_of_contents', $src = plugins_url('/lib/css/post_table_of_contents.css', __FILE__), $deps = array(), $ver = false, $media = 'all' )
?>