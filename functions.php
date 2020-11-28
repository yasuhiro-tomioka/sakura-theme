<?php
// オプションキーと上下矢印で行がそのまま移動できます。
function sakura_theme_setup(){
    add_theme_support( 'post-thumbnails' ); 
    add_image_size( 'category-thumb', 300, 9999 ); // 横 300px (縦 制限なし)
}
add_action('after_setup_theme', 'sakura_theme_setup');


function sakura_theme_link(){
    // 決まりではないが、レスポンシブデザインの一つの手段として。
    // wp_mobile()でもモバイルかどうか判別できる。

    // if(wp_is_mobile()){
    //     wp_enqueue_style('sp-css', get_template_directory_uri() . '/css/style_sp.css');
    // }else{
    //     wp_enqueue_style('pc-css', get_template_directory_uri() . '/css/style_pc.css');
    // }

    wp_enqueue_style('sp-css', get_template_directory_uri() . '/css/style_sp.css', array(), '5', 'screen and ( max-width:769px )');
    wp_enqueue_style('pc-css', get_template_directory_uri() . '/css/style_pc.css', array(), '5', 'screen and ( min-width:769px )');
    wp_enqueue_style('drawer-css', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '1.0.0');
    wp_enqueue_script('iscroll', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', array('jquery'), '1.0.0');
    wp_enqueue_script('drawer-js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js', array('jquery','iscroll'), '1.0.0');
    wp_enqueue_script('common', get_template_directory_uri() . '/js/common.js', array('jquery', 'iscroll','drawer-js'), '1.0.0');

}
add_action('wp_enqueue_scripts', 'sakura_theme_link');
