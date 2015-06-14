<?php
add_filter( 'rwmb_meta_boxes', function( $meta_boxes )
{
	$meta_boxes[] = array(
		'id' => 'demo',
		'title' => 'Demo Conditional Logic',
		'post_types' => array( 'post', 'page' ),
		'context'	=> 'normal',
		'priority'	=> 'high',
		// Show this field by default. Hide this meta box when post format is aside
		'hidden' => array( 'post_format', '=', 'aside' ),
		'fields' => array(
			array(
				'id'	=> 'brand',
				'name'	=> 'Brand',
				'desc'	=> 'Pick Your Favourite Brand',
				'type'	=> 'select',
				'options' => array(
					'Apple' 	=> 'Apple',
					'Google' 	=> 'Google',
					'Microsoft' 	=> 'Microsoft'
				)
			),
			array(
				'id' 	=> 'apple_products',
				'name'	=> 'Which product that you want to throw away?',
				'type'	=> 'radio',
				'options' => array(
					'iPhone' 	=> 'iPhone',
					'iPad'		=> 'iPad',
					'Macbook'	=> 'Macbook',
					'iWatch'	=> 'iWatch'
				),
				// Hide this field by default, show it only when user select 'Apple' on brand select field
				'visible' => array( 'brand', '=', 'Apple' )
			)
		)
	);

	return $meta_boxes;
} );