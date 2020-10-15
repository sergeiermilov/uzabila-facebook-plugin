<?php 

function uzabila_facebook_add_footer($content){

	global $uzabila_facebook_options;
	
	$footer_output = '<hr>';
	$footer_output .= '<div class="footer-content">';
	$footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a href="'. $uzabila_facebook_options['facebook_url'] .'" target="_blank" style="color:' . $uzabila_facebook_options['link_color'] . ';">Facebook</a>';
	$footer_output .= '</div>';

	if ($uzabila_facebook_options['show_in_feed']){
		if ( is_single() || is_home() && $uzabila_facebook_options['enable'] ) {
			return $content . $footer_output;	
		}
	} else {
		if (is_single() && $uzabila_facebook_options['enable'] ) {
			return $content . $footer_output;	
		}
	}
	

	return $content;

	
}
add_filter( 'the_content', 'uzabila_facebook_add_footer', 10, 1 );