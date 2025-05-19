<?php
function my_script_init( ) {
  wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
  wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true); 
}
add_action("wp_enqueue_scripts", "my_script_init");

function my_enqueue_scripts() {
  // CSS 読み込み
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), filemtime(get_theme_file_path('css/reset.css')), 'all');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_theme_file_path('style.css')), 'all');

  // jQuery（WordPress標準）
  wp_enqueue_script('jquery');

  // オリジナルのJS（ある場合）
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

?>

