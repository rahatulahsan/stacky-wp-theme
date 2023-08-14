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
		'transport' => 'postMessage',
		'js_vars' => array(
			array(
				'element' => '.head-title',
				'function' => 'html'
			)
		)
	]
);


// Hero Section Heading Typography
new \Kirki\Field\Typography(
	[
		'settings'    => 'hero_heading_typography_setting',
		'label'       => esc_html__( 'Typography Control', 'kirki' ),
		'description' => esc_html__( 'The full set of options.', 'kirki' ),
		'section'     => 'stacky_hero',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Titillium Web',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#585b60',
			'font-size'       => '30px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'uppercase',
			'text-decoration' => 'none',
			'text-align'      => 'center',
		],
		'output'      => [
			[
				'element' => '#hero-area .contents .head-title',
			],
		],
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
		'transport' => 'postMessage',
		'js_vars' => [
			[
				'element' => '.header-button .btn',
				'function' => 'html'
			]
		]
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
		'transport' => 'postMessage',
		'js_vars' => [
			[
				'element' => '.header-button .btn',
				'function' => 'html'
			]
		]
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
			'save_as' => 'array',
		],
	]
);

// Hero Section Background Image
new \Kirki\Field\Background(
	[
		'settings'    => 'hero_background_setting',
		'label'       => esc_html__( 'Background Image', 'stacky' ),
		'description' => esc_html__( 'Upload your background image', 'stacky' ),
		'section'     => 'stacky_hero',
		'default'     => [
			'background-color'      => '#fff',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#hero-area',
			],
		],
	]
);



// About Section
new \Kirki\Section(
	'stacky_about',
	[
		'title'       => esc_html__( 'About Section', 'stacky' ),
		'description' => esc_html__( 'Stacky About Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 170,
	]
);

// About Section Heading
new \Kirki\Field\Text(
	[
		'settings' => 'about_text_setting',
		'label'    => esc_html__( 'About Heading', 'stacky' ),
		'section'  => 'stacky_about',
		'default'  => esc_html__( 'We are helping to grow your business.', 'stacky' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars' => array(
			array(
				'element' => '.title-h1',
				'function' => 'html'
			)
		)
	]
);

// About Section Content
new \Kirki\Field\Textarea(
	[
		'settings'    => 'about_textarea_setting',
		'label'       => esc_html__( 'About Contents', 'stacky' ),
		'section'     => 'stacky_about',
		'default'     => esc_html__( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'stacky' ),
	]
);

// About Section Button Name
new \Kirki\Field\Text(
	[
		'settings' => 'about_button_name_setting',
		'label'    => esc_html__( 'About Button Name', 'stacky' ),
		'section'  => 'stacky_about',
		'default'  => esc_html__( 'MORE ABOUT US', 'stacky' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars' => [
			[
				'element' => '.btn-common',
				'function' => 'html'
			]
		]
	]
);

// About Section Button URL
new \Kirki\Field\URL(
	[
		'settings' => 'about_button_url_setting',
		'label'    => esc_html__( 'Button Link', 'stacky' ),
		'section'  => 'stacky_about',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
		'transport' => 'postMessage',
	]
);


// About Section Repeater Fields
new \Kirki\Field\Repeater(
	[
		'settings'     => 'about_section_repeater',
		'label'        => esc_html__( 'About Company Items', 'stacky' ),
		'section'      => 'stacky_about',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Items', 'stacky' ),
			'field' => 'item_text',
		],
		'button_label' => esc_html__( 'Add new item', 'stacky' ),
		'default'      => [
			[
				'item_text'   => esc_html__( 'WHAT WE DO', 'stacky' ),
				'item_content'    => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
				'item_icon' => 'lni-microphone'
			],
			[
				'item_text'   => esc_html__( 'MEET OUR TEAM', 'stacky' ),
				'item_content'    => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
				'item_icon' => 'lni-users'
			],
			[
				'item_text'   => esc_html__( 'OUR CREATION', 'stacky' ),
				'item_content'    => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
				'item_icon' => 'lni-medall-alt'
			],
		],
		'fields'       => [
			'item_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Item Name', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			'item_content'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Item Description', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			'item_icon'    => [
				'type'        => 'select',
				'label'       => esc_html__( 'Item Icon', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
				'choices'     => [
					'lni-microphone' => esc_html__( 'Microphone', 'stacky' ),
					'lni-users' => esc_html__( 'User', 'stacky' ),
					'lni-medall-alt' => esc_html__( 'Medal', 'stacky' ),
				]
			],
		],
	]
);