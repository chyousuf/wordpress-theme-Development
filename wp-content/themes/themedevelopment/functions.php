<?php

function regisert_custom_post(){
	$labels = array('name' =>_x('Books', 'post type gerenal name','themedevelopemnt'),
	 'singular_name' =>_x('Book', 'post type Singular name','themedevelopemnt'),
	 'menu_name' =>_x('Books', 'menu name','themedevelopemnt'),
	 'name_menu_bar' =>_x('Book', 'admin menu bar ','themedevelopemnt'),
	 'add_new' =>_x('Add New Book', 'Add new book ','themedevelopemnt'),
	 'add_new_item' =>__('Add New Book', 'Add new item ','themedevelopemnt'),
	 'new item' =>__(' New Book', 'New book ','themedevelopemnt'),
	 'edit_item' =>__('Search Book', 'Search Book ','themedevelopemnt'),
	 'update_item' =>__('Update Book', 'Update Book','themedevelopemnt'),
	 'not_found' =>__('Book not found', 'Update Book','themedevelopemnt'),

	);

	$args = array( 'labels'=> $labels,
     'supports' => array('title','editor','excerpt','auther','thumbnail','comments','revisions','custom-fields'),
      'taxonomies'  => array( 'genres' ),
      'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',

	 );
	register_post_type( 'Books', $args );
}




//Add hook
add_action( 'init','regisert_custom_post');