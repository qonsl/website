<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_front-page-slider-and-header',
		'title' => 'Front page slider and header',
		'fields' => array (
			array (
				'key' => 'field_5729d1abfb679',
				'label' => 'Slides',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5548717a1b3e4',
				'label' => 'Slider content',
				'name' => 'slider_content',
				'type' => 'radio',
				'instructions' => 'Choose \'Slider with captions\' to add title and text over the slides or choose \'Slider with links\' to apply links to slides.',
				'required' => 1,
				'choices' => array (
					'caption' => 'Slider with captions',
					'link' => 'Slider with links',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'caption',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_554871d21b3e5',
				'label' => 'Slides',
				'name' => 'slides',
				'type' => 'repeater',
				'instructions' => 'You can add multiple slides to this page.',
				'sub_fields' => array (
					array (
						'key' => 'field_574d354e00b22',
						'label' => 'Image or Video',
						'name' => 'image_or_video',
						'type' => 'radio',
						'required' => 1,
						'column_width' => '',
						'choices' => array (
							'image' => 'Image',
							'video' => 'Video',
						),
						'other_choice' => 0,
						'save_other_choice' => 0,
						'default_value' => 'image',
						'layout' => 'horizontal',
					),
					array (
						'key' => 'field_554871fa1b3e6',
						'label' => 'Slide image',
						'name' => 'slide_image',
						'type' => 'image',
						'required' => 1,
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_574d354e00b22',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'save_format' => 'id',
						'preview_size' => 'adrenaline-jumbotron-slider-m',
						'library' => 'all',
					),
					array (
						'key' => 'field_58047b684fd9e',
						'label' => 'Slide video thumbnail',
						'name' => 'slide_video_thumbnail',
						'type' => 'image',
						'instructions' => 'Select/upload the video thumbnail image, which will automatically get a play button overlay.',
						'required' => 1,
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_574d354e00b22',
									'operator' => '==',
									'value' => 'video',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'save_format' => 'id',
						'preview_size' => 'adrenaline-jumbotron-slider-m',
						'library' => 'all',
					),
					array (
						'key' => 'field_574d2b4d6605c',
						'label' => 'Video URL',
						'name' => 'video_url',
						'type' => 'text',
						'instructions' => 'Add YouTube or Vimeo video URL.',
						'required' => 1,
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_574d354e00b22',
									'operator' => '==',
									'value' => 'video',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_554872321b3e7',
						'label' => 'Slide title',
						'name' => 'slide_title',
						'type' => 'text',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_5548717a1b3e4',
									'operator' => '==',
									'value' => 'caption',
								),
								array (
									'field' => 'field_574d354e00b22',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5548743d56847',
						'label' => 'Slide text',
						'name' => 'slide_text',
						'type' => 'wysiwyg',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_5548717a1b3e4',
									'operator' => '==',
									'value' => 'caption',
								),
								array (
									'field' => 'field_574d354e00b22',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'basic',
						'media_upload' => 'no',
					),
					array (
						'key' => 'field_57fb4fad5118e',
						'label' => 'Slide label',
						'name' => 'slide_label',
						'type' => 'text',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_5548717a1b3e4',
									'operator' => '==',
									'value' => 'caption',
								),
								array (
									'field' => 'field_574d354e00b22',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5548728d88d0a',
						'label' => 'Slide link',
						'name' => 'slide_link',
						'type' => 'text',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_5548717a1b3e4',
									'operator' => '==',
									'value' => 'link',
								),
								array (
									'field' => 'field_574d354e00b22',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_554872b588d0b',
						'label' => 'Slide open link in new window/tab',
						'name' => 'slide_open_link_in_new_window',
						'type' => 'true_false',
						'instructions' => 'Open link in new window/tab',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_5548717a1b3e4',
									'operator' => '==',
									'value' => 'link',
								),
								array (
									'field' => 'field_574d354e00b22',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'message' => '',
						'default_value' => 1,
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Another Slide',
			),
			array (
				'key' => 'field_5729d184fb678',
				'label' => 'Slider settings',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5729dba1e3f47',
				'label' => 'Slide effects',
				'name' => 'slide_effects',
				'type' => 'radio',
				'choices' => array (
					'slide' => 'Slide',
					'fade' => 'Fade',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'slide',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_55487307bdff8',
				'label' => 'Auto cycle',
				'name' => 'auto_cycle',
				'type' => 'true_false',
				'message' => 'Automatically cycle the slides',
				'default_value' => 1,
			),
			array (
				'key' => 'field_55487335bdff9',
				'label' => 'Cycle interval',
				'name' => 'cycle_interval',
				'type' => 'number',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55487307bdff8',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 5000,
				'placeholder' => '',
				'prepend' => '',
				'append' => 'ms',
				'min' => 0,
				'max' => '',
				'step' => 1000,
			),
			array (
				'key' => 'field_5729df9d024d8',
				'label' => 'Transition speed',
				'name' => 'transition_speed',
				'type' => 'number',
				'default_value' => 600,
				'placeholder' => '',
				'prepend' => '',
				'append' => 'ms',
				'min' => 0,
				'max' => '',
				'step' => 10,
			),
			array (
				'key' => 'field_5729de0638113',
				'label' => 'Navigation arrows',
				'name' => 'navigation_arrows',
				'type' => 'true_false',
				'message' => 'Show navigation arrows',
				'default_value' => 1,
			),
			array (
				'key' => 'field_5729d98501bf1',
				'label' => 'Navigation dots',
				'name' => 'navigation_dots',
				'type' => 'true_false',
				'message' => 'Show slider navigation dots',
				'default_value' => 1,
			),
			array (
				'key' => 'field_575e5604487a0',
				'label' => 'Adaptive Height',
				'name' => 'adaptive_height',
				'type' => 'true_false',
				'message' => 'Adapt slider height to the current slide',
				'default_value' => 0,
			),
			array (
				'key' => 'field_57fb5072de081',
				'label' => 'Header settings',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_57fb5096de082',
				'label' => 'Header logo',
				'name' => 'header_logo',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_57fb50d4de083',
				'label' => 'Header retina logo',
				'name' => 'header_retina_logo',
				'type' => 'image',
				'instructions' => '2x normal logo size, for screens with high DPI.',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_57fcd866c2617',
				'label' => 'Header info text',
				'name' => 'header_info_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_57fcd969f453b',
				'label' => 'Header info link',
				'name' => 'header_info_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'URL',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57fcdb50f453d',
				'label' => '',
				'name' => 'header_info_link_text',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'Text',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57fcdb3ef453c',
				'label' => '',
				'name' => 'header_info_link_icon',
				'type' => 'text',
				'instructions' => '<a href="http://fontawesome.io/icons/" target="blank">Input a FontAwesome icon class</a>, for example: fa-map-marker',
				'default_value' => '',
				'placeholder' => 'fa-map-marker',
				'prepend' => 'Icon',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57fce03b945b5',
				'label' => 'Header info social icons',
				'name' => 'header_info_social_icons',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_57fce064945b6',
						'label' => 'Icon',
						'name' => 'icon',
						'type' => 'text',
						'instructions' => '<a href="http://fontawesome.io/icons/" target="blank">Input a FontAwesome icon class</a>, for example: fa-facebook',
						'column_width' => 30,
						'default_value' => '',
						'placeholder' => 'fa-facebook',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57fce0a9945b7',
						'label' => 'URL',
						'name' => 'url',
						'type' => 'text',
						'column_width' => 70,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Social Icon',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-front-page-slider.php',
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
		'id' => 'acf_page-header-area',
		'title' => 'Page header area',
		'fields' => array (
			array (
				'key' => 'field_570b5d27d3bfb',
				'label' => 'Show title area',
				'name' => 'show_title_area',
				'type' => 'radio',
				'instructions' => 'Hiding title area will also hide breadcrumbs.',
				'choices' => array (
					'yes' => 'Yes',
					'no' => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'yes',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_570b5d7dd3bfc',
				'label' => 'Show breadcrumbs',
				'name' => 'show_breadcrumbs',
				'type' => 'radio',
				'choices' => array (
					'yes' => 'Yes',
					'no' => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'yes',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5538c999ec7c2',
				'label' => 'Background image',
				'name' => 'background_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5538c9daec7c3',
				'label' => 'Background image horizontal position',
				'name' => 'background_image_horizontal_position',
				'type' => 'radio',
				'choices' => array (
					'left' => 'Left',
					'center' => 'Center',
					'right' => 'Right',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'center',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5538ca0cec7c4',
				'label' => 'Background image vertical position',
				'name' => 'background_image_vertical_position',
				'type' => 'radio',
				'choices' => array (
					'top' => 'Top',
					'center' => 'Center',
					'bottom' => 'Bottom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'center',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5538ca44ec7c5',
				'label' => 'Background image repeat',
				'name' => 'background_image_repeat',
				'type' => 'radio',
				'choices' => array (
					'no-repeat' => 'No Repeat',
					'repeat' => 'Tile',
					'repeat-x' => 'Tile Horizontally',
					'repeat-y' => 'Tile Vertically',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'repeat',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5538ca6cec7c6',
				'label' => 'Background image attachment',
				'name' => 'background_image_attachment',
				'type' => 'radio',
				'choices' => array (
					'scroll' => 'Scroll',
					'fixed' => 'Fixed',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'scroll',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5538caa9ec7c7',
				'label' => 'Background color',
				'name' => 'background_color',
				'type' => 'color_picker',
				'default_value' => '',
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
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-front-page-slider.php',
					'order_no' => 1,
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
		'id' => 'acf_page-slider',
		'title' => 'Page Slider',
		'fields' => array (
			array (
				'key' => 'field_555b2e9360dfb',
				'label' => 'Slider Type',
				'name' => 'slider_type',
				'type' => 'radio',
				'required' => 1,
				'choices' => array (
					'layer' => 'LayerSlider',
					'revolution' => 'Revolution Slider',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_555b2edc60dfc',
				'label' => 'LayerSlider ID',
				'name' => 'layerslider_id',
				'type' => 'number',
				'instructions' => 'LayerSlider can be used as alternative slider and doesn\'t come with the theme for free. You can buy it <a href="http://codecanyon.net/item/layerslider-responsive-wordpress-slider-plugin-/1362246?ref=ProteusThemes" target="_blank">here</a>. Paste the ID of the slider you created in the plugin to this box (only ID, not the whole shortcode).',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_555b2e9360dfb',
							'operator' => '==',
							'value' => 'layer',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 1,
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_555b2f2660dfd',
				'label' => 'Revolution Slider Alias',
				'name' => 'revolution_slider_alias',
				'type' => 'text',
				'instructions' => 'Slider Revolution can be used as alternative slider and doesn\'t come with the theme for free. You can buy it <a href="http://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380?ref=ProteusThemes" target="_blank">here</a>. Paste the alias of the slider you created in the plugin to this box (only <a href="https://www.diigo.com/item/image/3rli1/s9bj?size=o" target="_blank">alias</a>, not the whole shortcode).',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_555b2e9360dfb',
							'operator' => '==',
							'value' => 'revolution',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'main-slider',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-front-page-slider-alt.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_portfolio-details',
		'title' => 'Portfolio details',
		'fields' => array (
			array (
				'key' => 'field_544a786faaa9b',
				'label' => 'Price',
				'name' => 'price',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_570241fac7fb0',
				'label' => '',
				'name' => 'show_price',
				'type' => 'true_false',
				'message' => 'Show price',
				'default_value' => 1,
			),
			array (
				'key' => 'field_58060dc0e9db8',
				'label' => 'Label',
				'name' => 'label',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58086837d2b6a',
				'label' => 'Specification icon',
				'name' => 'specification_icon',
				'type' => 'text',
				'instructions' => '<a href="http://fontawesome.io/icons/" target="blank">Input a FontAwesome icon class</a>, for example: fa-map-marker',
				'default_value' => '',
				'placeholder' => 'fa-map-marker',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58086862d2b6b',
				'label' => 'Specification text',
				'name' => 'specification_text',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_575fdaabc913d',
				'label' => 'Short description',
				'name' => 'short_description',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_575fdd3571431',
				'label' => 'CTA button text',
				'name' => 'cta_button_text',
				'type' => 'text',
				'default_value' => 'Book Now',
				'placeholder' => 'Book Now',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_575fe0a44eb3d',
				'label' => 'CTA button type',
				'name' => 'cta_button_type',
				'type' => 'radio',
				'choices' => array (
					'custom-url' => 'custom URL',
					'wc-product' => 'link with WooCommerce product',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'custom-url',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_575fdf3b71432',
				'label' => 'CTA button custom url',
				'name' => 'cta_button_custom_url',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_575fe0a44eb3d',
							'operator' => '==',
							'value' => 'custom-url',
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
				'key' => 'field_575fdf7a71433',
				'label' => 'CTA button product link',
				'name' => 'cta_button_product_link',
				'type' => 'post_object',
				'instructions' => 'Link a WooCommerce product to this CTA button. (Woocommerce plugin has to be active).',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_575fe0a44eb3d',
							'operator' => '==',
							'value' => 'wc-product',
						),
					),
					'allorany' => 'all',
				),
				'post_type' => array (
					0 => 'product',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_575fe51999f7f',
				'label' => '',
				'name' => 'open_in_new_tab',
				'type' => 'true_false',
				'message' => 'Open button in new tab?',
				'default_value' => 0,
			),
			array (
				'key' => 'field_58060f1e07f6b',
				'label' => 'Header',
				'name' => 'header',
				'type' => 'radio',
				'instructions' => 'Select if you want to display a featured image or use a slider in the project header.<br>
	Note: If you choose the slider, you should still set the featured image, so that it can be used in the portfolio grid widget.',
				'choices' => array (
					'featured-image' => 'Featured Image',
					'slider' => 'Slider',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'featured-image',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_544a7adeaaaa0',
				'label' => 'Slider',
				'name' => 'slider',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_58060f1e07f6b',
							'operator' => '==',
							'value' => 'slider',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_544a7b0daaaa1',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'id',
						'preview_size' => 'adrenaline-jumbotron-slider-m',
						'library' => 'all',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Image',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
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
		'id' => 'acf_position-of-the-sidebar',
		'title' => 'Position of the Sidebar',
		'fields' => array (
			array (
				'key' => 'field_5534bcc459d58',
				'label' => '',
				'name' => 'sidebar',
				'type' => 'radio',
				'instructions' => 'Position the sidebar for this particular page: left, right or do not display it at all.',
				'choices' => array (
					'right' => 'Right',
					'left' => 'Left',
					'none' => 'No Sidebar',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'right',
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
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-front-page-slider.php',
					'order_no' => 1,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-front-page-slider-alt.php',
					'order_no' => 2,
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
		'id' => 'acf_subtitle',
		'title' => 'Subtitle',
		'fields' => array (
			array (
				'key' => 'field_5534998130ef7',
				'label' => '',
				'name' => 'subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'Subtitle',
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
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-front-page-slider.php',
					'order_no' => 1,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-front-page-slider-alt.php',
					'order_no' => 2,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}