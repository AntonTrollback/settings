if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_blogg',
		'title' => 'Blogg',
		'fields' => array (
			array (
				'key' => 'field_55e99a6eb2f71',
				'label' => '',
				'name' => 'show_blog',
				'type' => 'true_false',
				'message' => 'Visa inlägg från kategorin "Nyheter / Blogg"',
				'default_value' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_intro',
		'title' => 'Intro',
		'fields' => array (
			array (
				'key' => 'field_559afc6d1703e',
				'label' => 'Introtext',
				'name' => 'intro_text',
				'type' => 'textarea',
				'instructions' => 'Borde nog bara användas på startsidan.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 2,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_55b8b566e9b5c',
				'label' => 'Visa de tre stegen',
				'name' => 'show_intro_icons',
				'type' => 'true_false',
				'message' => 'Jepp!',
				'default_value' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_kalendern',
		'title' => 'Kalendern',
		'fields' => array (
			array (
				'key' => 'field_559d286f61c3a',
				'label' => '',
				'name' => 'show_calendar',
				'type' => 'true_false',
				'message' => 'Visa kalendern',
				'default_value' => 0,
			),
			array (
				'key' => 'field_55e85fe2d3102',
				'label' => 'Event ett',
				'name' => '',
				'type' => 'tab',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_559d286f61c3a',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
			),
			array (
				'key' => 'field_55e85ff4d3103',
				'label' => 'Datum',
				'name' => 'event_1_date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_55e865fdd310b',
				'label' => 'Rubrik',
				'name' => 'event_1_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e86637d310e',
				'label' => 'Beskrivning',
				'name' => 'event_1_desc',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'En kort beskrivande text',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e866b5d3112',
				'label' => 'Länk',
				'name' => 'event_1_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'http://exempel.com/',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e86559d3104',
				'label' => 'Event två',
				'name' => '',
				'type' => 'tab',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_559d286f61c3a',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
			),
			array (
				'key' => 'field_55e8656fd3109',
				'label' => 'Datum',
				'name' => 'event_2_date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_55e86600d310c',
				'label' => 'Rubrik',
				'name' => 'event_2_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e8664dd3111',
				'label' => 'Beskrivning',
				'name' => 'event_2_desc',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'En kort beskrivande text',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e866f6d3115',
				'label' => 'Länk',
				'name' => 'event_2_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'http://exempel.com/',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e86565d3106',
				'label' => 'Event tre',
				'name' => '',
				'type' => 'tab',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_559d286f61c3a',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
			),
			array (
				'key' => 'field_55e8656dd3108',
				'label' => 'Datum',
				'name' => 'event_3_date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_55e86601d310d',
				'label' => 'Rubrik',
				'name' => 'event_3_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e8664cd3110',
				'label' => 'Beskrivning',
				'name' => 'event_3_desc',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'En kort beskrivande text',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e866f5d3114',
				'label' => 'Länk',
				'name' => 'event_3_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'http://exempel.com/',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e86567d3107',
				'label' => 'Event fyra',
				'name' => '',
				'type' => 'tab',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_559d286f61c3a',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
			),
			array (
				'key' => 'field_55e8655ed3105',
				'label' => 'Datum',
				'name' => 'event_4_date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_55e865c9d310a',
				'label' => 'Rubrik',
				'name' => 'event_4_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e8664bd310f',
				'label' => 'Beskrivning',
				'name' => 'event_4_desc',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'En kort beskrivande text',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e866f4d3113',
				'label' => 'Länk',
				'name' => 'event_4_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'http://exempel.com/',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_kontaktinformation-i-sidfoten',
		'title' => 'Kontaktinformation i sidfoten',
		'fields' => array (
			array (
				'key' => 'field_55d257e1ed70e',
				'label' => '',
				'name' => 'show_contact',
				'type' => 'true_false',
				'message' => 'Visa kontaktinformation',
				'default_value' => 0,
			),
			array (
				'key' => 'field_55d257f5387ec',
				'label' => 'Rubrik',
				'name' => 'contact_heading',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55d257e1ed70e',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55d2580e387ed',
				'label' => 'Kort text med kontaktuppgifter',
				'name' => 'contact_body',
				'type' => 'wysiwyg',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55d257e1ed70e',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_kort-utdrag',
		'title' => 'Kort utdrag',
		'fields' => array (
			array (
				'key' => 'field_55a3812d13782',
				'label' => '',
				'name' => 'excerpt',
				'type' => 'text',
				'instructions' => 'En kort mening som visas in listor.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_lista-med-sma-inlagg',
		'title' => 'Lista med små inlägg',
		'fields' => array (
			array (
				'key' => 'field_55b8b59f1bde9',
				'label' => '',
				'name' => 'show_post_list',
				'type' => 'true_false',
				'message' => 'Visa listan',
				'default_value' => 0,
			),
			array (
				'key' => 'field_55b8b5af1bdea',
				'label' => 'Välj katergori(er)',
				'name' => 'post_list_category',
				'type' => 'taxonomy',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55b8b59f1bde9',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'taxonomy' => 'category',
				'field_type' => 'checkbox',
				'allow_null' => 0,
				'load_save_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_lista-med-stora-inlagg',
		'title' => 'Lista med stora inlägg',
		'fields' => array (
			array (
				'key' => 'field_55b8b5ec51370',
				'label' => '',
				'name' => 'show_large_post_list',
				'type' => 'true_false',
				'message' => 'Visa listan',
				'default_value' => 0,
			),
			array (
				'key' => 'field_55b8b5f551371',
				'label' => 'Välj katergori',
				'name' => 'large_post_list_category',
				'type' => 'taxonomy',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55b8b5ec51370',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'taxonomy' => 'category',
				'field_type' => 'select',
				'allow_null' => 0,
				'load_save_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_lista-med-tidigare-uppdragkunder',
		'title' => 'Lista med tidigare uppdrag/kunder',
		'fields' => array (
			array (
				'key' => 'field_55ddab482a5cf',
				'label' => '',
				'name' => 'show_clients',
				'type' => 'true_false',
				'message' => 'Visa listan',
				'default_value' => 0,
			),
			array (
				'key' => 'field_55ddab552a5d0',
				'label' => 'Rubrik',
				'name' => 'clients_title',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55ddab482a5cf',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55ddab762a5d1',
				'label' => 'Beskrivande text',
				'name' => 'clients_body',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55ddab482a5cf',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55ddab962a5d2',
				'label' => 'Listan',
				'name' => 'clients_list',
				'type' => 'textarea',
				'instructions' => 'Skriv dom "kommaseparerade" :)',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55ddab482a5cf',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Något, Något Annat, Något, Något helt annat',
				'maxlength' => '',
				'rows' => 2,
				'formatting' => 'none',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_lyft-upp-inlagg',
		'title' => 'Lyft upp inlägg',
		'fields' => array (
			array (
				'key' => 'field_55930628867e2',
				'label' => 'Välj inlägg',
				'name' => 'highlight',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'post',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5599648e560bb',
				'label' => 'Text till inlägget',
				'name' => 'highlight_title',
				'type' => 'text',
				'instructions' => 'Om inläggets rubrik inte skulle fungera',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_nyhetsbrev',
		'title' => 'Nyhetsbrev',
		'fields' => array (
			array (
				'key' => 'field_559d854ce9789',
				'label' => '',
				'name' => 'show_newsletter_form',
				'type' => 'true_false',
				'message' => 'Visa nyhetsbrev',
				'default_value' => 0,
			),
			array (
				'key' => 'field_55a3aeddb1071',
				'label' => 'Rubrik',
				'name' => 'newsletter_form_header',
				'type' => 'text',
				'default_value' => 'Nyhetsbrev',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_stor-lank',
		'title' => 'Stor länk',
		'fields' => array (
			array (
				'key' => 'field_559ff92769659',
				'label' => '',
				'name' => 'link_internal_or_external',
				'type' => 'true_false',
				'message' => 'Länka till intern sida (setting.se/...)',
				'default_value' => 0,
			),
			array (
				'key' => 'field_559b0313bafee',
				'label' => 'Välj intern sida',
				'name' => 'link_url',
				'type' => 'page_link',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_559ff92769659',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_559ff8bd69658',
				'label' => 'URL till extern sida',
				'name' => 'link_url',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_559ff92769659',
							'operator' => '!=',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'http://ordfrontforlag.se/...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_559b0338bafef',
				'label' => 'Text på knappen',
				'name' => 'link_text',
				'type' => 'text',
				'instructions' => 'Bara ett ord, "Delta!"',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_559ffd0b08c30',
				'label' => 'Knappens färg',
				'name' => 'link_color',
				'type' => 'radio',
				'choices' => array (
					'blue' => 'Blå',
					'pink' => 'Rosa',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'blue',
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
