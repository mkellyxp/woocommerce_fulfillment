<?php

    // Add to functions.php.  This will add a new user role called "Fulfillment".  This role will have access to manage orders only but prices will be hidden.

	function wc_price_hide( $p_sPrice ) {
		if ( 'fulfillment' == get_user_role() ) {
			return '';
		}
		return $p_sPrice;
	}
	add_filter( 'wc_price', 'wc_price_hide' );
	
	if ( ! get_role( 'fulfillment' ) ) {
		add_role( 'fulfillment', 'Fulfillment' , array(
			'level_9'                => true,
			'level_8'                => true,
			'level_7'                => true,
			'level_6'                => true,
			'level_5'                => true,
			'level_4'                => true,
			'level_3'                => true,
			'level_2'                => true,
			'level_1'                => true,
			'level_0'                => true,
			'read'                   => true,
			'read_private_pages'     => false,
			'read_private_posts'     => true,
			'edit_users'             => false,
			'edit_posts'             => true,
			'edit_pages'             => false,
			'edit_published_posts'   => false,
			'edit_published_pages'   => false,
			'edit_private_pages'     => false,
			'edit_private_posts'     => false,
			'edit_others_posts'      => false,
			'edit_others_pages'      => false,
			'publish_posts'          => false,
			'publish_pages'          => false,
			'delete_posts'           => false,
			'delete_pages'           => false,
			'delete_private_pages'   => false,
			'delete_private_posts'   => false,
			'delete_published_pages' => false,
			'delete_published_posts' => false,
			'delete_others_posts'    => false,
			'delete_others_pages'    => false,
			'manage_categories'      => false,
			'manage_links'           => false,
			'moderate_comments'      => false,
			'upload_files'           => false,
			'export'                 => false,
			'import'                 => false,
			'list_users'             => false,
			'manage_woocommerce'	=> false,
			'view_woocommerce_reports' => false,
			'edit_shop_order' => true,
			'read_shop_order' => true,
			'edit_shop_orders' => true,
			'edit_others_shop_orders' => true,
			'publish_shop_orders' => true,
			'read_private_shop_orders' => true,
			'edit_private_shop_orders' => true,
			'edit_published_shop_orders' => true,
			'manage_woocommerce_orders' => true,
			'read_private_shop_orders' => true,
		) );		
	}

    ?>