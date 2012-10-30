<?php
  $post = $wp_query->post;

  if (in_category('5')) {
      include(TEMPLATEPATH.'/today_yes.php');
  } else {
      include(TEMPLATEPATH.'/single_default.php');
  }
?>