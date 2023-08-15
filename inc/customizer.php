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

		'choices' => [
			'limit' => 3
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

// Team Heading
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

// Counter Section Background
new \Kirki\Field\Background(
	[
		'settings'    => 'counter_background_setting',
		'label'       => esc_html__( 'Background Image', 'stacky' ),
		'description' => esc_html__( '', 'stacky' ),
		'section'     => 'stacky_counter',
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
				'element' => '#counter',
			],
		],
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


// Skill Section
new \Kirki\Section(
	'stacky_skill',
	[
		'title'       => esc_html__( 'Skill Section', 'stacky' ),
		'description' => esc_html__( 'Stacky Skill Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 220,
	]
);


// Skill Heading
new \Kirki\Field\Text(
	[
		'settings' => 'skill_heading_setting',
		'label'    => esc_html__( 'Skill Section Heading', 'stacky' ),
		'section'  => 'stacky_skill',
		'default'  => esc_html__( 'OUR SKILL', 'stacky' ),
		'priority' => 10,
	]
);

// Skill Section Content
new \Kirki\Field\Textarea(
	[
		'settings'    => 'skill_content_setting',
		'label'       => esc_html__( 'Skill Section Content', 'stacky' ),
		'section'     => 'stacky_skill',
		'default'     => esc_html__( '', 'stacky' ),
	]
);

// Skill Section Image
new \Kirki\Field\Image(
	[
		'settings'    => 'skill_image_setting',
		'label'       => esc_html__( 'Skill Left Image', 'stacky' ),
		'description' => esc_html__( '', 'stacky' ),
		'section'     => 'stacky_skill',
		'default'     => '',
		'choices'     => [
			'save_as' => 'array',
		],
	]
);

// Skill Counter
new \Kirki\Field\Repeater(
	[
		'settings'     => 'skill_repeater_setting',
		'label'        => esc_html__( 'Skill Lists', 'stacky' ),
		'section'      => 'stacky_skill',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Skill', 'stacky' ),
			'field' => 'skill_name',
		],
		'button_label' => esc_html__( 'Add new skill ', 'stacky' ),
		'default'      => [
			[
				'skill_name'   => esc_html__( 'STRATEGY & ANALYSIS', 'stacky' ),
			],
			[
				'skill_name'   => esc_html__( 'EECONOMIC GROWTH', 'stacky' ),
			],
			[
				'skill_name'   => esc_html__( 'ACHIEVES GOALS', 'stacky' ),
			],
		],
		'fields'       => [
			'skill_name'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Skill Name', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			'skill_percentage'    => [
				'type'        => 'number',
				'label'       => esc_html__( 'Skill Percentage', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
				'choices'  => [
					'min'  => 10,
					'max'  => 100,
					'step' => 1,
				],
			],
		],
	]
);


// Work Section
new \Kirki\Section(
	'stacky_work',
	[
		'title'       => esc_html__( 'Work Section', 'stacky' ),
		'description' => esc_html__( 'Stacky Work Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 230,
	]
);


// Work Heading
new \Kirki\Field\Text(
	[
		'settings' => 'work_heading_setting',
		'label'    => esc_html__( 'Work Section Heading', 'stacky' ),
		'section'  => 'stacky_work',
		'default'  => esc_html__( 'OUR WORKS', 'stacky' ),
		'priority' => 10,
	]
);

// Work Section Content
new \Kirki\Field\Textarea(
	[
		'settings'    => 'work_content_setting',
		'label'       => esc_html__( 'Work Section Content', 'stacky' ),
		'section'     => 'stacky_work',
		'default'     => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2023.', 'stacky' ),
	]
);

// Work Section portfolio
new \Kirki\Field\Repeater(
	[
		'settings'     => 'work_repeater_setting',
		'label'        => esc_html__( 'Portfolios', 'stacky' ),
		'section'      => 'stacky_work',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Portfolio', 'stacky' ),
			'field' => 'port_name',
		],
		'button_label' => esc_html__( 'Add new portfolio ', 'stacky' ),
		'fields'       => [
			'port_name'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Portfolio Name', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			'port_url'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Portfolio Image', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
				'choices'     => [
					'save_as' => 'array',
				],
			],
		],
	]
);


// Review Section
new \Kirki\Section(
	'stacky_review',
	[
		'title'       => esc_html__( 'Review Section', 'stacky' ),
		'description' => esc_html__( 'Stacky review Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 240,
	]
);

// Review Section Backgroud Image
new \Kirki\Field\Background(
	[
		'settings'    => 'review_background_setting',
		'label'       => esc_html__( 'Background Image', 'stacky' ),
		'description' => esc_html__( '', 'stacky' ),
		'section'     => 'stacky_review',
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
				'element' => '.testimonial',
			],
		],
	]
);


// Review Items
new \Kirki\Field\Repeater(
	[
		'settings'     => 'review_repeater_setting',
		'label'        => esc_html__( 'Repeater Control', 'stacky' ),
		'section'      => 'stacky_review',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Review', 'stacky' ),
			'field' => 'rev_name',
		],
		'button_label' => esc_html__( 'Add new review', 'stacky' ),
		'fields'       => [
			'rev_name'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Reviewer Name', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			'rev_desi'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Reviewer Designation', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			'rev_content'   => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Review Content', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
			'rev_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Reviewer Image', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
				'choices'     => [
					'save_as' => 'array',
				],
			],
		],
	]
);



// Client Section
new \Kirki\Section(
	'stacky_clients',
	[
		'title'       => esc_html__( 'Clients Section', 'stacky' ),
		'description' => esc_html__( 'Stacky clients Section', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 250,
	]
);

// Client Heading
new \Kirki\Field\Text(
	[
		'settings' => 'client_heading_setting',
		'label'    => esc_html__( 'Client Section Heading', 'stacky' ),
		'section'  => 'stacky_clients',
		'default'  => esc_html__( 'NOTABLE CLIENTS', 'stacky' ),
		'priority' => 10,
	]
);

// Client Section Content
new \Kirki\Field\Textarea(
	[
		'settings'    => 'client_content_setting',
		'label'       => esc_html__( 'Client Section Content', 'stacky' ),
		'section'     => 'stacky_clients',
		'default'     => esc_html__( 'Over the last 20 years, we have helped and guided organisations to achieve outstanding results', 'stacky' ),
	]
);

// CLient Section Image
new \Kirki\Field\Repeater(
	[
		'settings'     => 'client_repeater_setting',
		'label'        => esc_html__( 'Clients', 'stacky' ),
		'section'      => 'stacky_clients',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Client', 'stacky' ),
			'field' => '',
		],
		'button_label' => esc_html__( 'Add new client', 'stacky' ),
		'fields'       => [
			'client_image'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Add Client Image', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
				'choices'     => [
					'save_as' => 'array',
				],
			],
		],
	]
);



// Contact Section
new \Kirki\Section(
	'stacky_contacts',
	[
		'title'       => esc_html__( 'Contact Section', 'stacky' ),
		'description' => esc_html__( 'Please configure the form from Contact Form 7', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 260,
	]
);

// Contact Heading
new \Kirki\Field\Text(
	[
		'settings' => 'contact_heading_setting',
		'label'    => esc_html__( 'Client Contact Heading', 'stacky' ),
		'section'  => 'stacky_contacts',
		'default'  => esc_html__( 'We are a friendly bunch..', 'stacky' ),
		'priority' => 10,
	]
);

// Contact Section Content
new \Kirki\Field\Textarea(
	[
		'settings'    => 'contact_content_setting',
		'label'       => esc_html__( 'Contact Section Content', 'stacky' ),
		'section'     => 'stacky_contacts',
		'default'     => esc_html__( 'We create projects for companies and startups with a passion for quality', 'stacky' ),
	]
);

// Contact Address
new \Kirki\Field\Text(
	[
		'settings' => 'contact_address_setting',
		'label'    => esc_html__( 'Address', 'stacky' ),
		'section'  => 'stacky_contacts',
		'default'  => esc_html__( '', 'stacky' ),
		'priority' => 10,
	]
);

// Contact Email
new \Kirki\Field\Text(
	[
		'settings' => 'contact_email_setting',
		'label'    => esc_html__( 'Email', 'stacky' ),
		'section'  => 'stacky_contacts',
		'default'  => esc_html__( '', 'stacky' ),
		'priority' => 10,
	]
);

// Contact Phone
new \Kirki\Field\Text(
	[
		'settings' => 'contact_phone_setting',
		'label'    => esc_html__( 'Phone', 'stacky' ),
		'section'  => 'stacky_contacts',
		'default'  => esc_html__( '', 'stacky' ),
		'priority' => 10,
	]
);

// Footer Section
new \Kirki\Section(
	'stacky_footer',
	[
		'title'       => esc_html__( 'Footer Section', 'stacky' ),
		'description' => esc_html__( '', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 270,
	]
);

// Footer Logo
new \Kirki\Field\Image(
	[
		'settings'    => 'footer_logo_setting',
		'label'       => esc_html__( 'Footer Logo', 'stacky' ),
		'description' => esc_html__( '', 'stacky' ),
		'section'     => 'stacky_footer',
		'default'     => '',
		'choices'     => [
			'save_as' => 'array',
		],
	]
);

// Footer Social
new \Kirki\Field\Repeater(
	[
		'settings'     => 'footer_social_repeater_setting',
		'label'        => esc_html__( 'Social Connections', 'stacky' ),
		'section'      => 'stacky_footer',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Social', 'stacky' ),
			'field' => '',
		],
		'button_label' => esc_html__( 'Add new connection', 'stacky' ),
		'fields'       => [
			'f_social'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'Select Social Connection', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
				'choices'     => [
					'lni-facebook-filled' => esc_html__( 'Facebook', 'stacky' ),
					'lni-twitter-filled' => esc_html__( 'Twitter', 'stacky' ),
					'lni-instagram-filled' => esc_html__( 'Instagram', 'stacky' ),
					'lni-linkedin-filled' => esc_html__( 'Linkedin', 'stacky' ),
				],
			],
			's_url'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social URL', 'stacky' ),
				'description' => esc_html__( '', 'stacky' ),
				'default'     => '',
			],
		],
	]
);

// Footer Copyright
new \Kirki\Field\Editor(
	[
		'settings'    => 'f_copyright_setting',
		'label'       => esc_html__( 'Copyright', 'stacky' ),
		'description' => esc_html__( '', 'stacky' ),
		'section'     => 'stacky_footer',
		'default'     => '',
	]
);



// Pricing Table Section
new \Kirki\Section(
	'stacky_pricing',
	[
		'title'       => esc_html__( 'Pricing Section', 'stacky' ),
		'description' => esc_html__( 'Please setup pricing table from the dashboard', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 210,
	]
);

// Pricing Heading
new \Kirki\Field\Text(
	[
		'settings' => 'pricing_heading_setting',
		'label'    => esc_html__( 'Pricing Section Heading', 'stacky' ),
		'section'  => 'stacky_pricing',
		'default'  => esc_html__( 'BEST PRICING', 'stacky' ),
		'priority' => 10,
	]
);

// Pricing Section Content
new \Kirki\Field\Textarea(
	[
		'settings'    => 'pricing_content_setting',
		'label'       => esc_html__( 'Pricing Section Content', 'stacky' ),
		'section'     => 'stacky_pricing',
		'default'     => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2028.', 'stacky' ),
	]
);



// Blog Section
new \Kirki\Section(
	'stacky_blogs',
	[
		'title'       => esc_html__( 'Blog Section', 'stacky' ),
		'description' => esc_html__( 'Please create blog posts from dashboard', 'stacky' ),
		'panel'       => 'stacky_panel',
		'priority'    => 250,
	]
);

// Blog Section Heading
new \Kirki\Field\Text(
	[
		'settings' => 'blog_heading_setting',
		'label'    => esc_html__( 'Blog Section Heading', 'stacky' ),
		'section'  => 'stacky_blogs',
		'default'  => esc_html__( 'LATEST BLOG', 'stacky' ),
		'priority' => 10,
	]
);

// Blog Section Content
new \Kirki\Field\Textarea(
	[
		'settings'    => 'blog_content_setting',
		'label'       => esc_html__( 'Blog Section Content', 'stacky' ),
		'section'     => 'stacky_blogs',
		'default'     => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'stacky' ),
	]
);

