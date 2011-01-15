<?php
if (!class_exists('TL_Latest_News_Widget_Utils')) {
	class TL_Latest_News_Widget_Utils {
		function the_content_limit($max_char, $more_link_text = '(more...)', $stripteaser = 0) {
			$content = TL_Latest_News_Widget_Utils::get_the_content_limit($max_char, $more_link_text, $stripteaser);
			echo apply_filters('the_content_limit', $content);	
		}
		
		function get_the_content_limit($max_char, $more_link_text = '(more...)', $stripteaser = 0) {
			$content = get_the_content('', $stripteaser);
			$content = strip_tags(strip_shortcodes($content), apply_filters('get_the_content_limit_allowedtags', '<script>,<style>'));
			$content = trim(preg_replace('#<(s(cript|tyle)).*?</\1>#si', '', $content));
			if ( (strlen($content) > $max_char) && ($espacio = strpos($content, ' ', $max_char )) ) {
				$content = substr($content, 0, $espacio);
			} if ( $more_link_text ) {
				$link = apply_filters('get_the_content_more_link', '&hellip; <a href="'. get_permalink() .'" class="more-link" rel="nofollow">'. $more_link_text .'</a>', $more_link_text);
				$output = sprintf('<p>%s %s</p>', $content, $link);
			} else {
				$output = sprintf('<p>%s</p>', $content);
			}
			return apply_filters('get_the_content_limit', $output, $content, $link, $max_char);
		}
	}
}
?>