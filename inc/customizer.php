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
				'element' => '.title-hl',
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


// Services Section
new \Kirki\Section(
	'stacky_services',
	[
		'title'       => esc_html__( 'Services Section', 'stacky' ),
		'description' => esc_html__( 'Stacky Services Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 180,
	]
);

// Service Section Heading
new \Kirki\Field\Text(
	[
		'settings' => 'service_heading_setting',
		'label'    => esc_html__( 'Service Main Heading', 'stacky' ),
		'section'  => 'stacky_services',
		'default'  => esc_html__( 'OUR SERVICES', 'stacky' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars' => array(
			array(
				'element' => '.section-title',
				'function' => 'html'
			)
		)
	]
);

// Service Section Content for Heading
new \Kirki\Field\Textarea(
	[
		'settings'    => 'service_content_setting',
		'label'       => esc_html__( 'Services Content', 'stacky' ),
		'section'     => 'stacky_services',
		'default'     => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2023.', 'stacky' ),
		'transport' => 'postMessage',
		'js_vars' => array(
			array(
				'element' => '.section-header p',
				'function' => 'html'
			)
		)
	]
);


// Services Section Repeater Fields
new \Kirki\Field\Repeater(
	[
		'settings'     => 'service_section_repeater',
		'label'        => esc_html__( 'Company Services', 'stacky' ),
		'section'      => 'stacky_services',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Services Items', 'stacky' ),
			'field' => 's_item_text',
		],
		'button_label' => esc_html__( 'Add new item', 'stacky' ),
		'default'      => [
			[
				's_item_text'   => esc_html__( 'CONTENT WRITING', 'stacky' ),
				's_item_content'    => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
				's_item_icon' => 'lni-pencil'
			],
			[
				's_item_text'   => esc_html__( 'DIGITAL MARKETING', 'stacky' ),
				's_item_content'    => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
				's_item_icon' => 'lni-briefcase'
			],
			[
				's_item_text'   => esc_html__( 'WEB DEVELOPMENT', 'stacky' ),
				's_item_content'    => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
				's_item_icon' => 'lni-cog'
			],
			[
				's_item_text'   => esc_html__( 'IOS & ANDROID', 'stacky' ),
				's_item_content'    => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
				's_item_icon' => 'lni-mobile'
			],
			[
				's_item_text'   => esc_html__( 'UI/UX DESIGN', 'stacky' ),
				's_item_content'    => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
				's_item_icon' => 'lni-layers'
			],
			[
				's_item_text'   => esc_html__( 'BRANDING & IDENTITY', 'stacky' ),
				's_item_content'    => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
				's_item_icon' => 'lni-rocket'
			],
		],
		'fields'       => [
			's_item_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Item Name', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			's_item_content'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Item Description', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			's_item_icon'    => [
				'type'        => 'select',
				'label'       => esc_html__( 'Item Icon', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
				'choices'     => [
					'lni-pencil' => esc_html__( 'Pencil', 'stacky' ),
					'lni-briefcase' => esc_html__( 'Briefcase', 'stacky' ),
					'lni-cog' => esc_html__( 'Cog', 'stacky' ),
					'lni-mobile' => esc_html__( 'Mobile', 'stacky' ),
					'lni-layers' => esc_html__( 'Layers', 'stacky' ),
					'lni-rocket' => esc_html__( 'Rocket', 'stacky' ),
				]
			],
		],
	]
);



// Video Section
new \Kirki\Section(
	'stacky_videos',
	[
		'title'       => esc_html__( 'Video Section', 'stacky' ),
		'description' => esc_html__( 'Stacky Video Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 190,
	]
);

// Video Heading
new \Kirki\Field\Text(
	[
		'settings' => 'video_heading_setting',
		'label'    => esc_html__( 'Video Title', 'stacky' ),
		'section'  => 'stacky_videos',
		'default'  => esc_html__( 'WATCH VIDEO', 'stacky' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars' => array(
			array(
				'element' => '.video-promo .video-promo-content h2',
				'function' => 'html'
			)
		)
	]
);


// Video Link
new \Kirki\Field\URL(
	[
		'settings' => 'video_url_setting',
		'label'    => esc_html__( 'Video Link', 'stacky' ),
		'section'  => 'stacky_videos',
		'default'  => 'https://www.youtube.com/watch?v=yP6kdOZHids',
		'priority' => 10,
	]
);

// Video Section Background
new \Kirki\Field\Background(
	[
		'settings'    => 'video_background_setting',
		'label'       => esc_html__( 'Background Image', 'stacky' ),
		'description' => esc_html__( 'Set background image for video setcion', 'stacky' ),
		'section'     => 'stacky_videos',
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'no-scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.video-promo',
			],
		],
	]
);



// Team Section
new \Kirki\Section(
	'stacky_teams',
	[
		'title'       => esc_html__( 'Team Section', 'stacky' ),
		'description' => esc_html__( 'Stacky Team Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 200,
	]
);

// Video Heading
new \Kirki\Field\Text(
	[
		'settings' => 'team_heading_setting',
		'label'    => esc_html__( 'Team Section Heading', 'stacky' ),
		'section'  => 'stacky_teams',
		'default'  => esc_html__( 'MEET OUR TEAM', 'stacky' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars' => array(
			array(
				'element' => '.section-title',
				'function' => 'html'
			)
		)
	]
);

// Team Section Heading Content
new \Kirki\Field\Textarea(
	[
		'settings'    => 'team_content_setting',
		'label'       => esc_html__( 'Team Heading Content', 'stacky' ),
		'section'     => 'stacky_teams',
		'default'     => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2023.', 'stacky' ),
		'transport' => 'postMessage',
		'js_vars' => array(
			array(
				'element' => '.section-header p',
				'function' => 'html'
			)
		)
	]
);


// Team Mebers List
new \Kirki\Field\Repeater(
	[
		'settings'     => 'team_repeater_setting',
		'label'        => esc_html__( 'Team Members', 'stacky' ),
		'section'      => 'stacky_teams',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Member', 'stacky' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new member ', 'stacky' ),
		'fields'       => [
			'mem_name'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Member Name', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => 'DAVID SMITH',
			],
			'mem_desig'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Designation', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => 'Chief Operating Officer',
			],
			'mem_img'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Memeber Photo', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
				'choices'     => [
					'save_as' => 'array',
				],
			],
			'fb_url'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Facebook Link', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => 'https://www.facebook.com',
			],
			'twitter_url'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Facebook Link', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => 'https://www.twitter.com',
			],
			'insta_url'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Facebook Link', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => 'https://www.instagram.com',
			],

		],
	]
);


// Counter Section
new \Kirki\Section(
	'stacky_counter',
	[
		'title'       => esc_html__( 'Counter Section', 'stacky' ),
		'description' => esc_html__( 'Stacky Counter Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 210,
	]
);

// Counter Items
new \Kirki\Field\Repeater(
	[
		'settings'     => 'counter_repeater_setting',
		'label'        => esc_html__( 'Counter Items', 'stacky' ),
		'section'      => 'stacky_counter',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Counter Item', 'stacky' ),
			'field' => 'coun_text',
		],
		'button_label' => esc_html__( '"Add new item ', 'stacky' ),
		'default'      => [
			[
				'coun__text'   => esc_html__( 'Users', 'stacky' ),
			],
			[
				'coun__text'   => esc_html__( 'Positive Reviews', 'stacky' ),
			],
			[
				'coun__text'   => esc_html__( 'Downloads', 'stacky' ),
			],
			[
				'coun__text'   => esc_html__( 'Followers', 'stacky' ),
			],
		],
		'fields'       => [
			'coun__text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Item Name', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			'coun__number'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Item Counter No', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			'coun__icon'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'Item icon', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
				'choices'     => [
					'lni-users' => esc_html__( 'User', 'kirki' ),
					'lni-emoji-smile' => esc_html__( 'Smile', 'kirki' ),
					'lni-download' => esc_html__( 'Download', 'kirki' ),
					'lni-thumbs-up' => esc_html__( 'Thumb', 'kirki' ),
				],
			],
		],
	]
);