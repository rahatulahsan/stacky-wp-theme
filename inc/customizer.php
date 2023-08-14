<?php 


new \Kirki\Panel(
	'stacky_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Stacky Options', 'stacky' ),
		'description' => esc_html__( 'Stacky Theme Options', 'stacky' ),
	]
);


// Hero Section
new \Kirki\Section(
	'stacky_hero',
	[
		'title'       => esc_html__( 'Hero Section', 'stacky' ),
		'description' => esc_html__( 'Stacky Hero Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 160,
	]
);

// Hero Section Heading
new \Kirki\Field\Text(
	[
		'settings' => 'hero_text_setting',
		'label'    => esc_html__( 'Hero Heading', 'stacky' ),
		'section'  => 'stacky_hero',
		'default'  => esc_html__( 'WE DISCOVER, DESIGN & BUILD DIGITAL
        PRESENCE OF BUSINESSES', 'stacky' ),
		'priority' => 10,
	]
);

// Switch to enable to Disable Button
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'hero_button_switch_setting',
		'label'       => esc_html__( 'Enable/Disable Button', 'stacky' ),
		'description' => esc_html__( 'You can switch on/off the button', 'stacky' ),
		'section'     => 'stacky_hero',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'stacky' ),
			'off' => esc_html__( 'Disable', 'stacky' ),
		],
	]
);

// Hero Section Button Name
new \Kirki\Field\Text(
	[
		'settings' => 'hero_button_name_setting',
		'label'    => esc_html__( 'Hero Button Name', 'stacky' ),
		'section'  => 'stacky_hero',
		'default'  => esc_html__( 'EXPLORE', 'stacky' ),
		'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'hero_button_switch_setting',
                'operator' => '==',
                'value'    => true,
            ]
        ],
	]
);

// Hero Section Button URL
new \Kirki\Field\URL(
	[
		'settings' => 'hero_button_url_setting',
		'label'    => esc_html__( 'Button Link', 'stacky' ),
		'section'  => 'stacky_hero',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'hero_button_switch_setting',
                'operator' => '==',
                'value'    => true,
            ]
        ],
	]
);

// Hero Section Image
new \Kirki\Field\Image(
	[
		'settings'    => 'hero_image_setting_id',
		'label'       => esc_html__( 'Hero Image', 'stacky' ),
		'description' => esc_html__( 'Upload your illustration image', 'stacky' ),
		'section'     => 'stacky_hero',
		'default'     => '',
		'choices'     => [
			'save_as' => 'id',
		],
	]
);