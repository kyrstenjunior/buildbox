<?php

function load_scripts(){
  // Este método é encarregado de enfileirar as folhas de estilo do tema
  wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', [], '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Tipo de post "videos" CPT UI
function cptui_register_my_cpts_video() {

	/**
	 * Post Type: Vídeos.
	 */

	$labels = [
		"name" => esc_html__( "Vídeos", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Vídeo", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Vídeos", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "video", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "video", $args );
}

add_action( 'init', 'cptui_register_my_cpts_video' );

// Taxonomia "Tipo do Vídeo" criada com o CPT UI
function cptui_register_my_taxes_video_type() {

	/**
	 * Taxonomy: Tipo do Vídeo.
	 */

	$labels = [
		"name" => esc_html__( "Tipo do Vídeo", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Tipo do Vídeo", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "Tipo do Vídeo", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'video_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "video_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "video_type", [ "video" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_video_type' );

// Registrando o menu do tema
register_nav_menus([
  'main_menu' => 'Main Menu'
]);

?>