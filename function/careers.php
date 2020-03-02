<?php 
add_action( 'init', 'register_careers' );
function register_careers(){
	register_post_type('careers', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Careers', // основное название для типа записи
			'singular_name'      => 'Careers', // название для одной записи этого типа
			'add_new'            => 'Add new', // для добавления новой записи
			'add_new_item'       => 'Add item', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit', // для редактирования типа записи
			'new_item'           => 'New item', // текст новой записи
			'view_item'          => 'View', // для просмотра записи этого типа.
			'search_items'       => 'SEARCH', // для поиска по этим типам записи
			'not_found'          => 'NOT FOUND', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'NOT FOUND', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Careers', // название меню
			'featured_image'           => 'Icon', // Миниатюра записи
            'set_featured_image'       => 'Set Icon', // Установить миниатюру записи
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
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-media-text', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','author','thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('hotels_category'),
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	) );

}
	add_action( 'init', 'wptp_register_term' );
function wptp_register_term() {
  register_taxonomy( 'location', 'careers',
    array(
      'labels' => array(
        'name'              => 'Location',
        'singular_name'     => 'Location',
        'search_items'      => 'Search Location Categories',
        'all_items'         => 'All Location Categories',
        'edit_item'         => 'Edit Location Categories',
        'update_item'       => 'Update Location Category',
        'add_new_item'      => 'Add New Location Category',
        'new_item_name'     => 'New Location Category Name',
        'menu_name'         => 'Location',
        ),
      'hierarchical' => true,
      'sort' => true,
      'args' => array( 'orderby' => 'term_order' ),
      'show_admin_column' => true
      )
	);

}