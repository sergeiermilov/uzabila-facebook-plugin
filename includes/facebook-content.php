<?php 

function uzabila_facebook_add_footer($content){
	
	$footer_output = '<hr>';
	$footer_output .= '<div class="footer-content">';
	$footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a href="https://facebook.com" target="_blank">Facebook</a>';
	$footer_output .= '</div>';

	return $content . $footer_output;
}
add_filter( 'the_content', 'uzabila_facebook_add_footer', 10, 1 );