<?php

/* */
function cc_wp_excerpt_readmore_filter($more) {
  $link = get_permalink($post->ID);
	return '... <a href="' . $link . '" class="readmore">Read More</a>';
}
add_filter('excerpt_more', 'cc_wp_excerpt_readmore_filter');

?>
