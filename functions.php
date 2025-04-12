<?php

function ng_replace_jquery() {
    // Удаляем встроенный jQuery
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.7.1.min.js', false, null, true);
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'ng_replace_jquery', 0);

function ng_theme_scripts() {
    // Стили
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('ng-style', get_template_directory_uri() . '/css/style.css');

    // Скрипты
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('ng-main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ng_theme_scripts');

function ng_theme_setup() {
    register_nav_menus(array(
        'main_menu' => 'Главное меню',
    ));
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'ng_theme_setup');
require_once get_template_directory() . '/inc/class-bootstrap-navwalker.php';

add_action('wp_head', function () {
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon.ico" type="image/x-icon">' . PHP_EOL;
});

add_theme_support('title-tag');

?>
