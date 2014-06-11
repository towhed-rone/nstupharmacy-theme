<?php 

function rone_widget_areas() {
	register_sidebar( array(
		'name' => __( 'Slider Right Menu', 'rone' ),
		'id' => 'slider_right_sidebar',
		'before_widget' => '<div class="single_sidebar">',
		'after_widget' => '</div>',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>',
	) );
}
add_action('widgets_init', 'rone_widget_areas');

/*for dynamic manu*/
add_action('init', 'wpj_register_menu');

function wpj_register_menu() {

    if (function_exists('register_nav_menu')) {

        register_nav_menu( 'main-menu', __( 'Main Menu') );
    }
}

?>