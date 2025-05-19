<?php
function my_enqueue_scripts() {
  // CSS
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), filemtime(get_theme_file_path('css/reset.css')), 'all');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_theme_file_path('style.css')), 'all');
  wp_enqueue_style('swiper-style', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.css', array(), null);

  // JS
  wp_enqueue_script('jquery'); // WordPress標準のjQuery
  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery', 'swiper-js'), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
?>


