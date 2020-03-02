<?php 
add_action( 'init', 'register_data' );
function register_data(){
	register_post_type('data-centers', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Data Centers', // основное название для типа записи
			'singular_name'      => 'Data Centers', // название для одной записи этого типа
			'add_new'            => 'Add new', // для добавления новой записи
			'add_new_item'       => 'Add item', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit', // для редактирования типа записи
			'new_item'           => 'New item', // текст новой записи
			'view_item'          => 'View', // для просмотра записи этого типа.
			'search_items'       => 'SEARCH', // для поиска по этим типам записи
			'not_found'          => 'NOT FOUND', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'NOT FOUND', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Data Centers', // название меню
			'featured_image'           => 'Image', // Миниатюра записи
            'set_featured_image'       => 'Set Image', // Установить миниатюру записи
		),
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		 'show_ui'             => true, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-admin-site-alt3', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','author','thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		//''taxonomies'          => array(''),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

}