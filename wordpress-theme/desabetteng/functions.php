<?php
function desabetteng_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', [
    'height' => 96,
    'width' => 96,
    'flex-height' => true,
    'flex-width' => true,
  ]);
  register_nav_menus([
    'primary' => __('Menu Utama', 'desabetteng'),
    'footer' => __('Menu Footer', 'desabetteng'),
  ]);
}
add_action('after_setup_theme', 'desabetteng_setup');

function desabetteng_assets() {
  wp_enqueue_style('desabetteng-main', get_template_directory_uri() . '/assets/css/style.css', [], '0.1.0');
  wp_enqueue_script('desabetteng-main', get_template_directory_uri() . '/assets/js/main.js', [], '0.1.0', true);
}
add_action('wp_enqueue_scripts', 'desabetteng_assets');
