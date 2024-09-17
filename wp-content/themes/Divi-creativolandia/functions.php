<?php

/**
 * Por defecto Wordpress añade un montón de código que es muy posible que no necesitemos
 * Así que vamos a limpiarlo un pelín.
 *
 */
function creativolandia_removeHeadLinks() {
	/** remove some header information  **/
	remove_action( 'wp_head', 'feed_links_extra', 3 );  // feeds por categoría 
	remove_action( 'wp_head', 'feed_links', 2 );        //post and comments feed, see ro_enqueue_default_feed_link()
	remove_action( 'wp_head', 'rsd_link' );              //only required if you are looking to blog using an external tool
	remove_action( 'wp_head', 'wlwmanifest_link' );      
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 ); //next previous post links
	remove_action( 'wp_head', 'wp_generator' );          
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );  //short links como ?p=124
}

add_action( 'init', 'creativolandia_removeHeadLinks' );

/**
 * Arriba hemos retirado todos los feed links así que vamos a volver a poner unicamente los referentes a los post.
 * ya que wordpress pone tanto feed para post y para comentarios
 * de esta forma solo permitimos los referentes a los posts, eliminando los comentarios del feed
 *
 * @see ro_remove_head_links()
 */
function creativolandia_feed_links_filtrados() {
	echo "<link rel='alternate' type='application/rss+xml' title='" . get_bloginfo( 'name' ) . " &raquo; Feed' href='" . get_feed_link() . "' />";
}
add_action( 'wp_head', 'creativolandia_feed_links_filtrados' );

function creativolandia_enqueue_tema_hijo_css() {
	wp_enqueue_style( 'creativolandia-temaPadre-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'creativolandia_enqueue_tema_hijo_css' );
function add_dashboard_widget() {
     wp_add_dashboard_widget('Creativolandia_dashboard_widget', 'Lo último desde Creativolandia.com', 'dashboard_widget_function');
}
 
add_action('wp_dashboard_setup', 'add_dashboard_widget');
?>