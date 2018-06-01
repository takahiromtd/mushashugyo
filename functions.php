<?php

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = "https://dummyimage.com/1600x900/eee/222&text=noimage";
    }
    return $first_img;
}

add_filter( 'user_can_richedit', 'disable_visual_editor' );
function disable_visual_editor( $default ) {
  $screen = get_post_type();
  if ( $screen == 'page' || $screen == 'qas') {
    return false;
  } else {
    return $default;
  }
}



function write_template_url() {
  return get_template_directory_uri();
}
add_shortcode( 'theme_url', 'write_template_url' );