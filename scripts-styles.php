<?php
/*
* Archivo de registro y carga de scripts y estilos
*
*
*
*
* @package Slan
* @subpackage Slan Hotel
* @since 1.0
*/

/*
* Registrando y cargando estilos
*/

function slan_theme_styles(){


	// Registrar los estilos
	wp_register_style('fontawesome', THEMEROOT . '/css/fontawesome.css', '', '5.1.1', 'all');
	wp_register_style('slan-styles', get_stylesheet_uri(), array('fontawesome'), '1.0', 'all');

	// Cargar estilos
	wp_enqueue_style('slan-styles');


}
add_action('wp_enqueue_scripts', 'slan_theme_styles');


/*
* Registrando y cargando scripts
*/

function slan_theme_scripts() {
    // Registrar scripts
    
    wp_register_script('parallax', THEMEROOT . '/js/parallax.min.js', array('jquery'), '1.5.0', true);
	wp_register_script('slan-scripts', THEMEROOT . '/js/main.js', array('jquery', 'parallax'), '1.0', true);


    // Cargar scripts
    wp_enqueue_script('slan-scripts');
}

add_action('wp_enqueue_scripts','slan_theme_scripts');

