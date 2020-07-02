<?php
/*
Plugin Name: Mi plugin de funciones 2
Description: Funciones adicionales para mi proyecto WordPress (no desactivar).
Version: 1.0
Author: Gestionatuweb.net
Author URI: https://www.gestionatuweb.net
*/

function cargar_Estilo(){

    //wp_register_style('estilos',get_template_directory_uri().'/css/estilosMau.css',array(),'1.0');
    wp_register_style('estilos',plugins_url( '/mauricioPlugin2/estilosMau.css' ));
    wp_enqueue_style('estilos');
}
add_action('wp_enqueue_scripts','cargar_Estilo');

// esto no funciona por ahora aunque si pude cargar un widget este no funciona
?>