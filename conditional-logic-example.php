<?phpadd_filter( 'rwmb_meta_boxes', function( $meta_boxes )
{
	$meta_boxes[] = array(
		'id' => 'brand_product',
		'title' => 'Brands and Products',
		'post_types' => array( 'post', 'page' ),
		'context'	=> 'normal',
		'priority'	=> 'high',
		// Conditional Logic can be applied to Meta Box
		// In this example: Show this Meta Box by default. Hide it when post format is aside
		'hidden' => array( 'post_format', 'aside' ),
		'fields' => array(
			array(
				'id'	=> 'brand',
				'name'	=> 'Brand',
				'desc'	=> 'Pick Your Favourite Brand',
				'type'	=> 'select',
				'options' => array(
					'Apple' 		=> 'Apple',
					'Google' 		=> 'Google',
					'Microsoft' 	=> 'Microsoft'
				)
			),
			array(
				'id' 	=> 'apple_products',
				'name'	=> 'Which Apple product that you love?',
				'type'	=> 'radio',
				'options' => array(
					'iPhone' 	=> 'iPhone',
					'iPad'		=> 'iPad',
					'Macbook'	=> 'Macbook',
					'iWatch'	=> 'iWatch'
				),
				// Conditional Logic can applied to fields
				// In this example: Show this field by default, 
				// hide it when user selected different value than 'Apple' on brand select field
				'hidden' => array( 'brand', '!=', 'Apple' )
			)
		)
	);

	return $meta_boxes;
} );