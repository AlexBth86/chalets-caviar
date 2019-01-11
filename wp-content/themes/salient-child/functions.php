<?php 

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles');
function salient_child_enqueue_styles() {
	
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('font-awesome'));
    wp_enqueue_style( 'style-enfant', get_stylesheet_directory_uri() . '/style.css' // style.css du theme enfant
 , array('font-awesome') // permet d'indiquer la dépendance afin que ce fichier soit chargé après le style du thème parent
    );
    wp_enqueue_style( 'nectar-slider-enfant', get_stylesheet_directory_uri() . '/style.css' // style.css du theme enfant
 , array('nectarslider') // permet d'indiquer la dépendance afin que ce fichier soit chargé après le style du thème parent
    );
    wp_enqueue_style( 'responsive-enfant', get_stylesheet_directory_uri() . '/style.css' // style.css du theme enfant
 , array('responsive') // permet d'indiquer la dépendance afin que ce fichier soit chargé après le style du thème parent
    );

    if ( is_rtl() ) 
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
}

?>