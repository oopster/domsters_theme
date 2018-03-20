<?php
//Load CSS
function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'color_css', get_template_directory_uri() . '/styles/color.css');
    wp_enqueue_style( 'layout_css', get_template_directory_uri() . '/styles/layout.css');
    wp_enqueue_style( 'typography_css', get_template_directory_uri() . '/styles/typography.css');

//Load Javascript
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'global_js', get_template_directory_uri() . '/js/global.js' );
    wp_enqueue_script( 'home_js', get_template_directory_uri() . '/js/home.js' );
    wp_enqueue_script( 'about_js', get_template_directory_uri() . '/js/about.js' );
    wp_enqueue_script( 'contact_js', get_template_directory_uri() . '/js/contact.js' );
    wp_enqueue_script( 'live_js', get_template_directory_uri() . '/js/live.js' );
    wp_enqueue_script( 'photos_js', get_template_directory_uri() . '/js/photos.js' );
}

add_action('wp_enqueue_scripts', 'theme_styles');

/*=============================
=            Menus            =
=============================*/
add_theme_support( 'menus' );

function domsters_register_menu() {
  register_nav_menu('main-menu', _( 'Main Menu') );
}

add_action('init', 'domsters_register_menu');

function create_widget($name, $id, $description){
  register_sidebar(array(
    'name' => _( 'name' ),
    'id' => $id,
    'description' => _('description'),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage');
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the homepage');
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage');

?>
