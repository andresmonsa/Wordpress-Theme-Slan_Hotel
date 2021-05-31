<?php

/*
*
* Registro de sidebar
*
* @package Slan
* @subpackage Slan Hotel
* @since 1.0
*/

function slan_sidebar(){

        register_sidebar(array(
            'name'          => __( 'Barra lateral', 'slan' ),
	        'id'            => 'main-sidebar',  //  ID debe ser LOWERCASE
	        'description'   => __( 'Widgets en la barra lateral', 'slan' ),
            'class'         => '',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h3 class="widge-ttitle">',
	        'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => __( 'Pie de página zona izquierda', 'slan' ),
	        'id'            => 'sidebar-footer-izq',  //  ID debe ser LOWERCASE
	        'description'   => __( 'Widgets en el pie de página, zona izquierda', 'slan' ),
            'class'         => '',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h3 class="widge-ttitle">',
	        'after_title'   => '</h3>'
        ));


        register_sidebar(array(
            'name'          => __( 'Pie de página zona central', 'slan' ),
	        'id'            => 'sidebar-footer-cent',  //  ID debe ser LOWERCASE
	        'description'   => __( 'widgets en Pie de página barra central', 'slan' ),
            'class'         => '',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h3 class="widge-ttitle">',
	        'after_title'   => '</h3>'
        ));


        register_sidebar(array(
            'name'          => __( 'Pie de página zona derecha', 'slan' ),
	        'id'            => 'sidebar-footer-der',  //  ID debe ser LOWERCASE
	        'description'   => __( 'widgets en pie de página barra derecha', 'slan' ),
            'class'         => '',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h3 class="widge-ttitle">',
	        'after_title'   => '</h3>'
        ));


}

add_action('widgets_init', 'slan_sidebar');



?>


