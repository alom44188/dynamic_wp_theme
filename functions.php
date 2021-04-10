<?php

//for main css//

function main_style(){

    wp_enqueue_style('maincss',get_stylesheet_uri(),'','1.0.1');
    wp_enqueue_style('default',get_template_directory_uri().'/default/default.css','','1.0.0');
    wp_enqueue_style('light',get_template_directory_uri().'/light/light.css','','1.0.0');
    wp_enqueue_style('dark',get_template_directory_uri().'/dark/dark.css','','1.0.0');
    wp_enqueue_style('bar',get_template_directory_uri().'bar/bar.css','','1.0.0');
    wp_enqueue_style('nivo',get_template_directory_uri().'/nivo-slider.css','','1.0.0');

        //slider_js

    //wp_enqueue_scripts('slider_js',get_template_directory_uri().'/scripts/jquery-1.9.0.min.js');
   // wp_enqueue_scripts('slider_nivo',get_template_directory_uri().'/jquery.nivo.slider.js');

}

add_action('wp_enqueue_scripts','main_style');


//for menu

function theme_setup(){

    register_nav_menus(
        array(

            'main_menu'=>'primary_Menu'
        )
    );

    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','theme_setup');

//for sidebar

function sidebar(){

    register_sidebar(array(
         
        'before_widget'=> '<div class="treading">',
        'after_widget'=> '</div>',
        'before_title'=>'<div class="ttle">',
        'after_title'=>'</div>',
    ));
}
add_action('widgets_init','sidebar');

register_post_type('Our_sidebar',array(

    'labels'=>array(
        'name'=>'Our Sidebar',
        'add_new'=>' add news',
        'Add_New_Post'=> 'Add New News',
    ),

    'public'=>true,

    'supports'=> array(
        'editor','thumbnail'
    ),


));

