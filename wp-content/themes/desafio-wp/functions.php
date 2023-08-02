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
		"name" => esc_html__( "Vídeos", "bx-desafio" ),
		"singular_name" => esc_html__( "Vídeo", "bx-desafio" ),
	];

	$args = [
		"label" => esc_html__( "Vídeos", "bx-desafio" ),
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
		"name" => esc_html__( "Tipo do Vídeo", "bx-desafio" ),
		"singular_name" => esc_html__( "Tipo do Vídeo", "bx-desafio" ),
	];

	
	$args = [
		"label" => esc_html__( "Tipo do Vídeo", "bx-desafio" ),
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

// Campos Personalizados - ACF
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_64c9a767bd6a1',
	'title' => 'Campos Personalizados Vídeos',
	'fields' => array(
		array(
			'key' => 'field_64c9a768b31ae',
			'label' => 'Imagem de Capa',
			'name' => 'imagem_de_capa',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_64c9a8ddb31b0',
			'label' => 'Tempo de Duração',
			'name' => 'bx_play_video_duration',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => 0,
			'prepend' => '',
			'append' => 'minutos',
		),
		array(
			'key' => 'field_64c9a949b31b1',
			'label' => 'URL do Vídeo',
			'name' => 'bx_play_video_ID',
			'aria-label' => '',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array(
			'key' => 'field_64c9a99eb31b2',
			'label' => 'Descrição',
			'name' => 'descricao',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_64c9a9c1b31b3',
			'label' => 'Sinopse',
			'name' => 'sinopse',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'video',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

function play_config(){
	// Registrando o menu do tema
	register_nav_menus([
		'main_menu' => 'Main Menu'
	]);

	// Suportes do Tema
	add_theme_support('custom-logo', ['height' => 33, 'width' => 103]);
}
add_action('after_setup_theme', 'play_config', 0);
?>