<?php

/*
Theme Name: Web 2017 HCPC 
Theme URI: https://github.com/SherrodWare/web170/tree/master/hcpc
Author: Sherrod Ware
Author URI: http://sherrodware.com
Description: This is my HCPC project for Web 170 WordPress
section 01 spring 2017
Version 42.0
*/

//Register My Sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
//

//register my menu
register_nav_menus(array(
    'main-menu' => __( 'Main' ),
));

//add theme support for post thumbnails and fearured images
add_theme_support('post-thumbnails');

//create page excerpts
add_post_type_support( 'page', 'excerpt' );
//

?>