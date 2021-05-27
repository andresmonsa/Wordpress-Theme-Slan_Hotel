<?php
/*
* Registrando zonas de menu
*
*
*
*
* @package Slan
* @subpackage Slan Hotel
* @since 1.0
*/

function slan_menus(){

	register_nav_menus(array(

		'main-menu' => __('Menu principal en encabezado', 'slan')

	));

}
add_action('init', 'slan_menus');