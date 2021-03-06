<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_56759c1fadcdcddffc',
	'title' => 'Contact Us Fields',
	'fields' => array (
		array(
            'key' => 'field_5b82fff6cdef3ff944a',
            'label' => 'Location On Map',
            'name' => 'map',
            'type' => 'google_map',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'center_lat' => '',
            'center_lng' => '',
            'zoom' => '',
            'height' => '',
        ),
        array (
            'return_format' => 'url',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'key' => 'field_584e7kjmmhjhj155a3f1a',
            'label' => 'Contact Page image',
            'name' => 'contact_img',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
        ),
        array (
            'return_format' => 'url',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'key' => 'field_584e7kjmmjhjh55a3f1a',
            'label' => 'Contact Information Image',
            'name' => 'contact_info_img',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
        ),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'views/template-contact.blade.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
