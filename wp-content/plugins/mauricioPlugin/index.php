<?php
/*
Plugin Name: Mi plugin de funciones
Description: Funciones adicionales para mi proyecto WordPress (no desactivar).
Version: 1.0
Author: Gestionatuweb.net
Author URI: https://www.gestionatuweb.net
*/

function social_aulaformativa($atts){
		
		$args = shortcode_atts(
			array(
				'facebook' => 'https://facebook.com'
			),$atts
		);
		
		$uf =	$args['facebook'];
		
		$facebook = '<a href="'.$uf.'">face</a>';
		
		$social = $facebook;
		
		return $social;
		
	}
add_shortcode("social_aulaformativa","social_aulaformativa");
?>
