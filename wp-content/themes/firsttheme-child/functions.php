<?php 

function _themename_post_meta(){
    echo 'Some os';
}

add_action('wp_enqueue_scripts', 'firsttheme_child_scripts');

function firsttheme_child_scripts(){
    wp_enqueue_style('firsttheme-child-styles', get_stylesheet_directory_uri() . '/bundle.css', array('_themename-stylesheet'),
    '1.0.0',
    'all');
}

function after_pagination(){
    echo "sooe";
}
add_action('_themename_after_pagination', 'after_pagination');

add_action('pre_get_posts', 'function_to_add');

function function_to_add($query){
    if($query->is_main_query()){
        $query->set('posts_per_page', 10);
    }
}

function no_posts_text($text){
    return esc_html__('No Posts', 'show-child');
}

add_filter('_themename_no_posts_text', 'no_posts_text');

function filter_title($title){
    return 'Filter ' . $title;
}
add_filter('the_title', 'filter_title');