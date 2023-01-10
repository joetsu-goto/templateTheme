<?php
/* JS読み込み　*/
function my_script_init()
{
  // WordPress本体のjquery.jsを読み込まない
  wp_deregister_script('jquery');
  // jquery.jsを読み込む
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
  // 共通JS読み込み
  wp_enqueue_script('all', '/common/js/script.js');


  // カスタム投稿タイプ
  if (is_front_page()) {
    wp_enqueue_script('index', '/index/js/script.js');
  }
}
add_action('wp_footer', 'my_script_init');
