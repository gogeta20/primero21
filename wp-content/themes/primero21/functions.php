<?php

function agregarTema() {

	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'agregarTema' ); // esto se le llama hook esto sirve para que wp lo pueda usar



/*
 * esto desactiva un estilo en linea que automaticamente crea wp 
 * los wp_head() para este punto se encuentran en wp-includes/admin-bar.php
 * tambien el codigo que se genera automaticamente en el head esta en wp-includes/theme-compat/header.php
 * una cosa mas que descubri que de la carpeta theme-compat es donde wp coje el codigo html
 * 
 * la function wp_head() esta en el documento /wp-includes/general-template.php
 * la function _admin_bar_bump_cb esta en el documento /wp-includes/admin-bar.php
 * remove_action() necesita el hook y en nombre de la function 
 * add_action() tambien necesita un hook y un a function
 * 
 * bueno algo mas que debemos saber es que las prioridades son de 1 a 10 siendo 1 el mas prioritario
 * los hook son ganchos que activan funciones 
 * 
 * para poder ver los objetos podemos usar print_r()
 * 
 * 
 * 
 * */
function quitarFunction() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'quitarFunction');


if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'superior' => 'menu superior tema mau'  /* este es el nombre del menu para presentar en wp*/
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
/*
function registroSidebar(){
    register_sidebar(
        array(
            'id'            =>'sidebarMau',
            'name'          =>'sitio de widgets',
            'description'   =>'lugar para los widgets',
            'before_widget' =>'<div id="%1$s" class="widget %2$s">',
            'after_widget'  =>'</div>',
            'before_title'  =>'<h3 class="widget-title">',
            'after_title'   =>'</h3>',
            )
        );
    }
add_action('widgets_init','registroSidebar');
*/

function registroSidebar() {
    register_sidebar( array(
        'name'          => __( 'sitio de widgets' ),
        'id'            => 'primary',
        'description'   => __( 'lugar para los widgets'),
        'before_widget' => '<p id="%1$s">',
        'after_widget'  => '</p>',
        'before_title'  => '<h2 class="asideWP">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'registroSidebar' );

// es registroSidebar tuve un fallo con el id no respondia a otro id q no sea primary


// Register Custom Post Type
function products_post_type() {

	$labels = array(
		'name'                  => _x( 'animes', 'Post Type General Name', 'primero21' ),
		'singular_name'         => _x( 'anime', 'Post Type Singular Name', 'primero21' ),
		'menu_name'             => __( 'Series Anime', 'primero21' ),
		'name_admin_bar'        => __( 'admin anime', 'primero21' ),
		'archives'              => __( 'anime Archives', 'primero21' ),
		'attributes'            => __( 'anime Attributes', 'primero21' ),
		'parent_item_colon'     => __( 'Anime padre:', 'primero21' ),
		'all_items'             => __( 'todos los animes', 'primero21' ),
		'add_new_item'          => __( 'añadir nuevo anime', 'primero21' ),
		'add_new'               => __( 'nuevo anime', 'primero21' ),
		'new_item'              => __( 'nuevo Item de anime', 'primero21' ),
		'edit_item'             => __( 'editar anime', 'primero21' ),
		'update_item'           => __( 'actualizar anime', 'primero21' ),
		'view_item'             => __( 'ver anime', 'primero21' ),
		'view_items'            => __( 'ver animes', 'primero21' ),
		'search_items'          => __( 'buscar animes', 'primero21' ),
		'not_found'             => __( 'anime no encontrado', 'primero21' ),
		'not_found_in_trash'    => __( 'no se encontro en la papelera', 'primero21' ),
		'featured_image'        => __( 'imagen principal', 'primero21' ),
		'set_featured_image'    => __( 'establecer imagen principal', 'primero21' ),
		'remove_featured_image' => __( 'eliminar imagen destacada anime', 'primero21' ),
		'use_featured_image'    => __( 'usar como imagen destacada anime', 'primero21' ),
		'insert_into_item'      => __( 'agregar nuevo item anime', 'primero21' ),
		'uploaded_to_this_item' => __( 'actualizar a este item anime', 'primero21' ),
		'items_list'            => __( 'lista de items', 'primero21' ),
		'items_list_navigation' => __( 'lista de navegacion', 'primero21' ),
		'filter_items_list'     => __( 'filtrar lista', 'primero21' ),
	);
	$args = array(
		'labels'                => $labels,
		'description'           => __( 'custom post animes', 'primero21' ),
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'				=> true,
		'rewrite'				=> array('slug'=>'animes'),
		'capability_type'       => 'post',
		'has_archive'           => true,
		'hierarchical'          => false,
		'menu_position'         => 5,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'label'                 => __( 'animes', 'primero21' ),
		/*'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'exclude_from_search'   => false,*/
	);
	register_post_type( 'animes', $args );

}
add_action( 'init', 'products_post_type', 1 );



function mangas_post() {

	$labels = array(
		'name'                  => _x( 'mangas', 'Post Type General Name', 'primero21' ),
		'singular_name'         => _x( 'manga', 'Post Type Singular Name', 'primero21' ),
		'menu_name'             => __( 'Series manga', 'primero21' ),
		'name_admin_bar'        => __( 'admin manga', 'primero21' ),
		'add_new'               => __( 'nuevo manga', 'primero21' ),
		'add_new_item'          => __( 'añadir nuevo manga', 'primero21' ),
		'new_item'              => __( 'nuevo Item de manga', 'primero21' ),
		'edit_item'             => __( 'editar manga', 'primero21' ),
		'view_item'             => __( 'ver manga', 'primero21' ),
		'all_items'             => __( 'todos los mangas', 'primero21' ),
		'search_items'          => __( 'buscar mangas', 'primero21' ),
		'parent_item_colon'     => __( 'manga padre:', 'primero21' ),
		'not_found'             => __( 'manga no encontrado', 'primero21' ),
		'not_found_in_trash'    => __( 'no se encontro en la papelera', 'primero21' ),
		/*'archives'              => __( 'manga Archives', 'primero21' ),
		'attributes'            => __( 'manga Attributes', 'primero21' ),
		'update_item'           => __( 'actualizar manga', 'primero21' ),
		'view_items'            => __( 'ver mangas', 'primero21' ),
		'featured_image'        => __( 'imagen principal', 'primero21' ),
		'set_featured_image'    => __( 'establecer imagen principal', 'primero21' ),
		'remove_featured_image' => __( 'eliminar imagen destacada manga', 'primero21' ),
		'use_featured_image'    => __( 'usar como imagen destacada manga', 'primero21' ),
		'insert_into_item'      => __( 'agregar nuevo item manga', 'primero21' ),
		'uploaded_to_this_item' => __( 'actualizar a este item manga', 'primero21' ),
		'items_list'            => __( 'lista de items', 'primero21' ),
		'items_list_navigation' => __( 'lista de navegacion', 'primero21' ),
		'filter_items_list'     => __( 'filtrar lista', 'primero21' ),*/
	);
	$args = array(
		'labels'                => $labels,
		'description'           => __( 'custom post mangas', 'primero21' ),
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'				=> true,
		'rewrite'				=> array('slug'=>'mangas'),
		'capability_type'       => 'post',
		'has_archive'           => true,
		'hierarchical'          => false,
		'menu_position'         => 6,
		'supports'              => array( 'title', 'editor', 'thumbnail','trackbacks','excerpt', 'comments', 'custom-fields','post-formats','page-attributes'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'label'                 => __( 'mangas', 'primero21' ),
		/*'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'exclude_from_search'   => false,*/
	);
	register_post_type( 'mangas', $args );

}
add_action( 'init', 'mangas_post', 1 );

/*
    ‘title’
    ‘editor’ (content)
    ‘author’
    ‘thumbnail’ (featured image) (current theme must also support Post Thumbnails)
    ‘excerpt’
    ‘trackbacks’
    ‘custom-fields’ (see Custom_Fields, aka meta-data)
    ‘comments’ (also will see comment count balloon on edit screen)
    ‘revisions’ (will store revisions)
    ‘page-attributes’ (template and menu order) (hierarchical must be true)
    ‘post-formats’ (see Post_Formats)
 */

function imagenes_mau(){
	add_image_size('mau',100,100,false);
}
add_action('after_setup_theme','imagenes_mau');
?>