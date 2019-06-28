
<?php
  $post = $wp_query->post;
  if ( in_category('case-category') ) {
  include(TEMPLATEPATH . '/single-post-case.php');
  } elseif ( in_category('team-category') ) {
  include(TEMPLATEPATH . '/single-post-team.php');
  }
?>
