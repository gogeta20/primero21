<?php
/*
Plugin Name: Mi plugin mau
Description: Funciones adicionales para mi proyecto WordPress (no desactivar).
Version: 1.0
Author: mauricio vargas
Author URI: 
*/

function cargarEstilo(){

    wp_register_style('estilos',get_template_directory_uri().'/css/estilosMau.css',array(),'1.0');
    //wp_register_style('estilosMau',plugins_url( '/estilosMau.css' ));
    wp_enqueue_style('estilos');

}
add_action('wp_enqueue_scripts','cargarEstilo');
?>