<?php
/**
 *  Common Meta Boxes for all CPT
 */
if( !function_exists('cspt_set_metabox') ){
function cspt_set_metabox(){
	//  Check if ACF is enabled
	if( function_exists('acf_add_local_field_group') ){
		if (class_exists('RevSlider')) {
			$rev_slider_list_array = array();
			$slider			= new RevSlider();
			$allArrSliders	= $slider->get_sliders();
			if( is_array($allArrSliders) && count($allArrSliders)>0 ){
				foreach ($allArrSliders as $revSlider) {
					// Getting thumb of slider
					$params = $revSlider->get_overview_data();
					$first_slide_image_thumb = ( !empty($params['bg']['src']) ) ? $params['bg']['src'] : get_template_directory_uri() . '/includes/images/sr-no-thumb.png' ;
					$rev_slider_list_array[ $revSlider->getAlias() ] = '<div data-balloon="' . esc_attr( $revSlider->getTitle() ) . ' (' . esc_attr( $revSlider->getAlias() ) . ')" data-balloon-pos="down"><img class="cspt-revslider-thumb" src="'.esc_url($first_slide_image_thumb).'" /></div>';
				}
				$rev_slider_option_array = array(
					'key'				=> 'cspt-revolution-slider',
					'label'				=> esc_attr__('Select Revolution Slider', 'emphires'),
					'name'				=> 'cspt-revolution-slider',
					'type'				=> 'radio',
					'instructions'		=> esc_attr__('Select that appear in header area', 'emphires'),
					'required'			=> 0,
					'conditional_logic' => array(
						array(
							array(
								'field'		=> 'cspt-slider-type',
								'operator'	=> '==',
								'value'		=> 'revolution-slider',
							),
						),
					),
					'wrapper'			=> array(
						'width'				=> '60',
						'class'				=> 'cspt-radio-image-selector',
						'id'				=> '',
					),
					'choices'			=> $rev_slider_list_array,
					'allow_null'		=> 0,
					'other_choice'		=> 0,
					'default_value'		=> '',
					'layout'			=> 'horizontal',
					'return_format'		=> 'value',
					'save_other_choice' => 0,
				);
			} else {
				$rev_slider_option_array = array(
					'key'				=> 'cspt-message-no-slider-in-revslider',
					'label'				=> esc_attr__('No Slider Found', 'emphires'),
					'name'				=> 'cspt-message-no-slider-in-revslider',
					'type'				=> 'message',
					'instructions'		=> '',
					'required'			=> 0,
					'conditional_logic' => array(
						array(
							array(
								'field'		=> 'cspt-slider-type',
								'operator'	=> '==',
								'value'		=> 'revolution-slider',
							),
						),
					),
					'wrapper'			=> array(
						'width'				=> '60',
						'class'				=> '',
						'id'				=> '',
					),
					'message'			=> esc_attr__('No slider found in Revolution Slider. Please create some slider from Admin > Slider Revolution section.', 'emphires'),
					'new_lines'			=> '',
					'esc_html'			=> 0,
				);
			}
		} else {
			$rev_slider_option_array = array(
				'key'				=> 'cspt-message-no-revslider-plugin',
				'label'				=> esc_attr__('Revolution Slider plugin not installed', 'emphires'),
				'name'				=> 'cspt-message-no-revslider-plugin',
				'type'				=> 'message',
				'instructions'		=> '',
				'required'			=> 0,
				'conditional_logic' => array(
					array(
						array(
							'field'		=> 'cspt-slider-type',
							'operator'	=> '==',
							'value'		=> 'revolution-slider',
						),
					),
				),
				'wrapper'			=> array(
					'width'				=> '60',
					'class'				=> '',
					'id'				=> '',
				),
				'message'			=> esc_attr__('Revolution Slider plugin not installed. Please install it from Admin > Appearance > Install Plugins section.', 'emphires'),
				'new_lines'			=> '',
				'esc_html'			=> 0,
			);
		}
		acf_add_local_field_group(array(
			'key'		=> 'cspt-general-settings',
			'title'		=> esc_attr__('Emphires - General Settings', 'emphires'),
			'fields'	=> array_merge(
				array(
					array(  // Tab - Slider Options
						'key'				=> 'cspt-tab-slider-options',
						'label'				=> esc_attr__('Header Slider Options', 'emphires'),
						'name'				=> 'cspt-tab-slider-options',
						'type'				=> 'tab',
						'instructions'		=> '',
						'required'			=> 0,
						'conditional_logic' => 0,
						'wrapper'			=> array(
							'width'				=> '',
							'class'				=> '',
							'id'				=> '',
						),
						'placement'			=> 'top',
						'endpoint'			=> 0,
					),
					array(
						'key'				=> 'cspt-slider-type',
						'label'				=> esc_attr__('Slider', 'emphires'),
						'name'				=> 'cspt-slider-type',
						'type'				=> 'radio',
						'instructions'		=> esc_attr__('Select Slider which appear in header area', 'emphires'),
						'required'			=> 0,
						'conditional_logic' => 0,
						'wrapper'			=> array(
							'width'				=> '20',
							'class'				=> '',
							'id'				=> '',
						),
						'choices'			=> array(
							''					=> esc_attr__('No Slider', 'emphires'),
							'revolution-slider' => esc_attr__('Revolution Slider', 'emphires'),
							'custom-code'		=> esc_attr__('Custom Code for Slider', 'emphires'),
						),
						'allow_null'		=> 0,
						'other_choice'		=> 0,
						'default_value'		=> '',
						'layout'			=> 'vertical',
						'return_format'		=> 'value',
						'save_other_choice' => 0,
					),
				),
				array($rev_slider_option_array),
				array(
					array(
						'key'				=> 'cspt-custom-slider-code',
						'label'				=> esc_attr__('Custom Slider Code', 'emphires'),
						'name'				=> 'cspt-custom-slider-code',
						'type'				=> 'textarea',
						'instructions'		=> '',
						'required'			=> 0,
						'conditional_logic'	=> array(
							array(
								array(
									'field'		=> 'cspt-slider-type',
									'operator'	=> '==',
									'value'		=> 'custom-code',
								),
							),
						),
						'wrapper'			=> array(
							'width'				=> '60',
							'class'				=> '',
							'id'				=> '',
						),
						'default_value'		=> '',
						'placeholder'		=> '',
						'maxlength'			=> '',
						'rows'				=> '',
						'new_lines'			=> '',
					),
				),
				array(
					array(
						'key'				=> 'cspt-slider-curved-style',
						'label'				=> esc_attr__('Add Curved style at slider bottom', 'emphires'),
						'name'				=> 'cspt-slider-curved-style',
						'type'				=> 'true_false',
						'instructions'		=> esc_attr__('Select YES to to show curved effect at slider bottom.', 'emphires'),
						'required'			=> 0,
						'conditional_logic'	=> array(
							array(
								array(
									'field'		=> 'cspt-slider-type',
									'operator'	=> '!=',
									'value'		=> '',
								),
							),
						),
						'wrapper'			=> array(
							'width'				=> '20',
							'class'				=> '',
							'id'				=> '',
						),
						'default_value'		=> 0,
						'ui'				=> 1,
						'ui_on_text'		=> '',
						'ui_off_text'		=> '',
					),
				),

				// TAB - Titlebar Options
				array(
					array(
						'key'				=> 'cspt-tab-titlebar-options',
						'label'				=> esc_attr__('Titlebar Options', 'emphires'),
						'name'				=> 'cspt-tab-titlebar-options',
						'type'				=> 'tab',
						'instructions'		=> '',
						'required'			=> 0,
						'conditional_logic'	=> 0,
						'wrapper'			=> array(
							'width'				=> '',
							'class'				=> '',
							'id'				=> '',
						),
						'placement'			=> 'top',
						'endpoint'			=> 0,
					),
					array(
						'key'				=> 'cspt-titlebar-hide',
						'label'				=> esc_attr__('Hide Titlebar?', 'emphires'),
						'name'				=> 'cspt-titlebar-hide',
						'type'				=> 'true_false',
						'instructions'		=> esc_attr__('Select YES to hide Titlebar.', 'emphires'),
						'required'			=> 0,
						'conditional_logic'	=> 0,
						'wrapper'			=> array(
							'width'				=> '20',
							'class'				=> '',
							'id'				=> '',
						),
						'default_value'		=> 0,
						'ui'				=> 1,
						'ui_on_text'		=> '',
						'ui_off_text'		=> '',
					),
					array(
						'key'				=> 'cspt-titlebar-title',
						'label'				=> esc_attr__('Custom title to show in Titlebar', 'emphires'),
						'name'				=> 'cspt-titlebar-title',
						'type'				=> 'text',
						'instructions'		=> esc_attr__('(Optional) This text will be available as Title in Titlebar. Leave blank for default title', 'emphires'),
						'required'			=> 0,
						'conditional_logic'	=> array(
							array(
								array(
									'field'		=> 'cspt-titlebar-hide',
									'operator'	=> '!=',
									'value'		=> '1',
								),
							),
						),
						'wrapper'			=> array(
							'width'				=> '40',
							'class'				=> '',
							'id'				=> '',
						),
						'default_value'		=> '',
						'maxlength'			=> '',
					),
					array(
						'key'				=> 'cspt-titlebar-subtitle',
						'label'				=> esc_attr__('Custom Sub-title to show in Titlebar', 'emphires'),
						'name'				=> 'cspt-titlebar-subtitle',
						'type'				=> 'text',
						'instructions'		=> esc_attr__('(Optional) This text will be available as Sub-title in Titlebar. Leave blank for default title', 'emphires'),
						'required'			=> 0,
						'conditional_logic'	=> array(
							array(
								array(
									'field'		=> 'cspt-titlebar-hide',
									'operator'	=> '!=',
									'value'		=> '1',
								),
							),
						),
						'wrapper'			=> array(
							'width'				=> '40',
							'class'				=> '',
							'id'				=> '',
						),
						'default_value'		=> '',
						'maxlength'			=> '',
					),
					array(
						'key'				=> 'cspt-titlebar-bg-img',
						'label'				=> esc_attr__('Titlebar BG image', 'emphires'),
						'name'				=> 'cspt-titlebar-bg-img',
						'type'				=> 'image',
						'instructions'		=> esc_attr__('(Optional) Set titlebar background image for this page/post only.', 'emphires'),
						'required'			=> 0,
						'conditional_logic'	=> array(
							array(
								array(
									'field'		=> 'cspt-titlebar-hide',
									'operator'	=> '!=',
									'value'		=> '1',
								),
							),
						),
						'wrapper'			=> array(
							'width'				=> '33',
							'class'				=> '',
							'id'				=> '',
						),
						'return_format'		=> 'url',
						'preview_size'		=> 'thumbnail',
						'library'			=> 'all',
						'min_width'			=> '',
						'min_height'		=> '',
						'min_size'			=> '',
						'max_width'			=> '',
						'max_height'		=> '',
						'max_size'			=> '',
						'mime_types'		=> '',
					),
					array(
						'key'				=> 'cspt-titlebar-bg-color',
						'label'				=> esc_attr__('Titlebar BG Color', 'emphires'),
						'name'				=> 'cspt-titlebar-bg-color',
						'type'				=> 'color_picker',
						'instructions'		=> esc_attr__('(Optional) Set background color for Titlebar.', 'emphires'),
						'required'			=> 0,
						'conditional_logic'	=> 0,
						'conditional_logic'	=> array(
							array(
								array(
									'field'		=> 'cspt-titlebar-hide',
									'operator'	=> '!=',
									'value'		=> '1',
								),
							),
						),
						'wrapper'			=> array(
							'width'				=> '33',
							'class'				=> '',
							'id'				=> '',
						),
						'default_value'		=> '',
					),
					array(
						'key'				=> 'cspt-titlebar-bg-color-opacity',
						'label'				=> esc_attr__('Titlebar BG Color Opacity', 'emphires'),
						'name'				=> 'cspt-titlebar-bg-color-opacity',
						'type'				=> 'range',
						'instructions'		=> esc_attr__('(Optional) Set opacity for background color set for Titlebar.', 'emphires'),
						'required'			=> 0,
						'conditional_logic'	=> 0,
						'conditional_logic'	=> array(
							array(
								array(
									'field'		=> 'cspt-titlebar-hide',
									'operator'	=> '!=',
									'value'		=> '1',
								),
							),
						),
						'wrapper'			=> array(
							'width'				=> '33',
							'class'				=> '',
							'id'				=> '',
						),
						'default_value'		=> '0.5',
						'min'				=> 0,
						'max'				=> 1,
						'step'				=> '0.01',
						'prepend'			=> '',
						'append'			=> '',
					),
				)
			),
			'location' => array(
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'post',
					),
				),
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'page',
					),
				),
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-team-member',
					),
				),
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-portfolio',
					),
				),
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-service',
					),
				),
			),
			'menu_order'		=> 0,
			'position'			=> 'normal',
			'style'				=> 'default',
			'label_placement'	=> 'top',
			'instruction_placement'	=> 'label',
		));
		// Common Metabox - Sidebar
		acf_add_local_field_group(array(
			'key'		=> 'cspt-sidebar-settings',
			'title'		=> 'Emphires - Sidebar Settings',
			'fields'	=> array(
				array(
					'key'				=> 'cspt-sidebar',
					'label'				=> esc_attr__('Select Sidebar', 'emphires'),
					'name'				=> 'cspt-sidebar',
					'type'				=> 'radio',
					'instructions'		=> esc_attr__('Select sidebar for this page/post only', 'emphires'),
					'required'			=> 0,
					'conditional_logic'	=> 0,
					'wrapper'           => array(
						'width'				=> '',
						'class'				=> 'cspt-radio-image-selector',
						'id'				=> '',
					),
					'choices'          => array(
						'global'			=> cspt_esc_kses('<img src="' . get_template_directory_uri() . '/includes/images/sidebar-global.png" />'),
						'left'				=> cspt_esc_kses('<img src="' . get_template_directory_uri() . '/includes/images/sidebar-left.png" />'),
						'right'				=> cspt_esc_kses('<img src="' . get_template_directory_uri() . '/includes/images/sidebar-right.png" />'),
						'no'				=> cspt_esc_kses('<img src="' . get_template_directory_uri() . '/includes/images/sidebar-no.png" />'),
					),
					'allow_null'		=> 0,
					'other_choice'		=> 0,
					'default_value'		=> '',
					'layout'			=> 'horizontal',
					'return_format'		=> 'value',
					'save_other_choice' => 0,
				),
			),
			'location' => array(
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'post',
					),
				),
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'page',
					),
				),
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-team-member',
					),
				),
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-portfolio',
					),
				),
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-service',
					),
				),
			),
			'menu_order'		=> 0,
			'position'			=> 'side',
			'style'				=> 'default',
			'label_placement'	=> 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'	=> '',
			'active'			=> 1,
			'description'		=> '',
		));
	};
}
}
add_action( 'init', 'cspt_set_metabox', 21 );
/**
 *  Team Member Meta Box
 */
if( !function_exists('cspt_set_team_metabox') ){
function cspt_set_team_metabox(){
	// Social share options list
	$social_options_array = array();
	$social_list = cspt_social_links_list();
	foreach( $social_list as $social ){
		$social_options_array[] = array(
			'key'			=> esc_attr( $social['id'] ),
			'label'			=> esc_attr( $social['label'] ),
			'name'			=> esc_attr( $social['id'] ),
			'type'			=> 'text',
			'instructions'	=> '',
			'required'		=> 0,
			'conditional_logic'	=> 0,
			'wrapper'		=> array(
				'width'			=> '',
				'class'			=> '',
				'id'			=> '',
			),
			'default_value'	=> '',
			'placeholder'	=> '',
			'prepend'		=> '',
			'append'		=> '',
			'maxlength'		=> '',
		);
	}
	if( function_exists('acf_add_local_field_group') ){
		acf_add_local_field_group(array(
			'key'				=> 'cspt-tab-team-details',
			'title'				=> esc_attr__('Emphires - Member\'s Details', 'emphires'),
			'fields'			=> array(
				array(
					'key'				=> 'cspt-tab-team-details',
					'label'				=> esc_attr__('General Details', 'emphires'),
					'name'				=> 'cspt-tab-team-details',
					'type'				=> 'tab',
					'instructions'		=> '',
					'required'			=> 0,
					'conditional_logic' => 0,
					'wrapper'			=> array(
						'width'				=> '',
						'class'				=> '',
						'id'				=> '',
					),
					'placement'			=> 'top',
					'endpoint'			=> 0,
				),
				array(
					'key'				=> 'cspt-team-details',
					'label'				=> esc_attr__('Team Member\'s details', 'emphires'),
					'name'				=> 'cspt-team-details',
					'type'				=> 'group',
					'instructions'		=> esc_attr__('Team Member details', 'emphires'),
					'required'			=> 0,
					'conditional_logic' => 0,
					'wrapper'			=> array(
						'width'				=> '',
						'class'				=> '',
						'id'				=> '',
					),
					'layout'			=> 'row',
					'sub_fields' => array(
						array(
							'key'				=> 'designation',
							'label'				=> esc_attr__('Designation', 'emphires'),
							'name'				=> 'designation',
							'type'				=> 'text',
							'instructions'		=> '',
							'required'			=> 0,
							'conditional_logic' => 0,
							'wrapper'			=> array(
								'width'				=> '33',
								'class'				=> '',
								'id'				=> '',
							),
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key'				=> 'phone',
							'label'				=> esc_attr__('Phone', 'emphires'),
							'name'				=> 'phone',
							'type'				=> 'text',
							'instructions'		=> '',
							'required'			=> 0,
							'conditional_logic' => 0,
							'wrapper'			=> array(
								'width'				=> '33',
								'class'				=> '',
								'id'				=> '',
							),
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key'				=> 'email',
							'label'				=> esc_attr__('Email', 'emphires'),
							'name'				=> 'email',
							'type'				=> 'text',
							'instructions'		=> '',
							'required'			=> 0,
							'conditional_logic' => 0,
							'wrapper'			=> array(
								'width'				=> '33',
								'class'				=> '',
								'id'				=> '',
							),
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend'			=> '',
							'append'			=> '',
							'maxlength'			=> '',
						),
						array(
							'key'				=> 'sitetitle',
							'label'				=> esc_attr__('Website Title', 'emphires'),
							'name'				=> 'sitetitle',
							'type'				=> 'text',
							'instructions'		=> '',
							'required'			=> 0,
							'conditional_logic' => 0,
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend'			=> '',
							'append'			=> '',
							'maxlength'			=> '',
						),
						array(
							'key'				=> 'siteurl',
							'label'				=> esc_attr__('Website URL', 'emphires'),
							'name'				=> 'siteurl',
							'type'				=> 'text',
							'instructions'		=> '',
							'required'			=> 0,
							'conditional_logic' => 0,
							'wrapper'			=> array(
								'width'				=> '33',
								'class'				=> '',
								'id'				=> '',
							),
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend'			=> '',
							'append'			=> '',
							'maxlength'			=> '',
						),
						array(
							'key'				=> 'fax',
							'label'				=> esc_attr__('Fax', 'emphires'),
							'name'				=> 'fax',
							'type'				=> 'text',
							'instructions'		=> '',
							'required'			=> 0,
							'conditional_logic' => 0,
							'wrapper'			=> array(
								'width'				=> '33',
								'class'				=> '',
								'id'				=> '',
							),
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend'			=> '',
							'append'			=> '',
							'maxlength'			=> '',
						),
						array(
							'key'		=> 'short-info',
							'label'		=> esc_attr__('One Line Info', 'emphires'),
							'name'		=> 'short-info',
							'type'		=> 'text',
							'instructions' => esc_attr__('This will appear on "Creative\'s Planet Team Box" Style-3 only. This will not appear on single view.', 'emphires'),
						),
						array(
							'key'		=> 'short-description',
							'label'		=> esc_attr__('Short Description', 'emphires'),
							'name'		=> 'short-description',
							'type'		=> 'wysiwyg',
							'instructions' => esc_attr__('This will appear on single view only.', 'emphires'),
						),
						array(
							'key'				=> 'progress_1_label',
							'label'				=> esc_attr__('Progress Bar 1 - Label', 'emphires'),
							'name'				=> 'progress_1_label',
							'type'				=> 'text',
							'instructions'		=> '',
							'required'			=> 0,
							'conditional_logic' => 0,
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend'			=> '',
							'append'			=> '',
							'maxlength'			=> '',
						),
						array(
							'key'				=> 'progress_1_number',
							'label'				=> esc_attr__('Progress Bar 1 - Number', 'emphires'),
							'name'				=> 'progress_1_number',
							'type'				=> 'text',
							'instructions'		=> esc_attr__('Add number between 1 to 100', 'emphires'),
							'required'			=> 0,
							'conditional_logic' => 0,
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend'			=> '',
							'append'			=> '',
							'maxlength'			=> '',
						),
						array(
							'key'				=> 'progress_2_label',
							'label'				=> esc_attr__('Progress Bar 2 - Label', 'emphires'),
							'name'				=> 'progress_2_label',
							'type'				=> 'text',
							'instructions'		=> '',
							'required'			=> 0,
							'conditional_logic' => 0,
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend'			=> '',
							'append'			=> '',
							'maxlength'			=> '',
						),
						array(
							'key'				=> 'progress_2_number',
							'label'				=> esc_attr__('Progress Bar 2 - Number', 'emphires'),
							'name'				=> 'progress_2_number',
							'type'				=> 'text',
							'instructions'		=> esc_attr__('Add number between 1 to 100', 'emphires'),
							'required'			=> 0,
							'conditional_logic' => 0,
							'default_value'		=> '',
							'placeholder'		=> '',
							'prepend'			=> '',
							'append'			=> '',
							'maxlength'			=> '',
						),
					),
				),
				array(
					'key'				=> 'cspt-tab-social-links',
					'label'				=> esc_attr__('Social Links', 'emphires'),
					'name'				=> 'cspt-tab-social-links',
					'type'				=> 'tab',
					'instructions'		=> '',
					'required'			=> 0,
					'conditional_logic' => 0,
					'wrapper'			=> array(
						'width'				=> '',
						'class'				=> '',
						'id'				=> '',
					),
					'placement'			=> 'top',
					'endpoint'			=> 0,
				),
				array(
					'key'			=> 'cspt-social-links',
					'label'			=> esc_attr__('Social Links', 'emphires'),
					'name'			=> 'cspt-social-links',
					'type'			=> 'group',
					'instructions'	=> esc_attr__('Select Social links for this Team Member', 'emphires'),
					'required'		=> 0,
					'conditional_logic'	=> 0,
					'wrapper'		=> array(
						'width'			=> '',
						'class'			=> '',
						'id'			=> '',
					),
					'layout'		=> 'row',
					'sub_fields'	=> $social_options_array,
				),
			),
			'location' => array(
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-team-member',
					),
				),
			),
			'menu_order'		=> 0,
			'position'			=> 'normal',
			'style'				=> 'default',
			'label_placement'	=> 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'	=> '',
			'active'			=> 1,
			'description'		=> '',
		));
	};
}
}
add_action( 'init', 'cspt_set_team_metabox', 22 );
if( !function_exists('cspt_set_client_metabox') ){
function cspt_set_client_metabox(){
	if( function_exists('acf_add_local_field_group') ){
	acf_add_local_field_group(array(
		'key'		=> 'cspt-client-logo',
		'title'		=> esc_attr__('Client Logo Hover', 'emphires'),
		'fields'	=> array(
			array(
				'key'				=> 'cspt-logo-image-for-hover',
				'label'				=> esc_attr__('Select Logo for Hover effect. This logo will appear on mouse over.', 'emphires'),
				'name'				=> 'cspt-logo-image-for-hover',
				'type'				=> 'image',
				'required'			=> 0,
				'conditional_logic'	=> 0,
				'return_format'		=> 'id',
				'preview_size'		=> 'thumbnail',
				'library'			=> 'all',
			),
		),
		'location'	=> array(
			array(
				array(
					'param'		=> 'post_type',
					'operator'	=> '==',
					'value'		=> 'cspt-client',
				),
			),
		),
		'menu_order'		=> 0,
		'position'			=> 'normal',
		'style'				=> 'default',
		'label_placement'	=> 'top',
		'instruction_placement'	=> 'label',
		'hide_on_screen'	=> '',
		'active'			=> 1,
		'description'		=> esc_attr__('Hover image of client logo', 'emphires'),
	));
	}
	if( function_exists('acf_add_local_field_group') ){
		acf_add_local_field_group(array(
			'key'		=> 'cspt-client-logo-link',
			'title'		=> esc_attr__('Client Logo Link', 'emphires'),
			'fields'	=> array(
				array(
					'key'				=> 'cspt-logo-link',
					'label'				=> esc_attr__('Set Link for the logo', 'emphires'),
					'name'				=> 'cspt-logo-link',
					'type'				=> 'link',
					'return_format'		=> 'url',
				),
			),
			'location'	=> array(
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-client',
					),
				),
			),
			'menu_order'		=> 0,
			'position'			=> 'side',
			'style'				=> 'default',
			'label_placement'	=> 'top',
			'instruction_placement'	=> 'label',
			'hide_on_screen'	=> '',
			'active'			=> 1,
			'description'		=> esc_attr__('Hover image of client logo', 'emphires'),
		));
		}
	}
}
add_action( 'init', 'cspt_set_client_metabox', 23 );
if( !function_exists('cspt_post_gallery_metabox') ){
function cspt_post_gallery_metabox(){
	if( function_exists('acf_add_local_field_group') && class_exists('acf_plugin_photo_gallery') ){
		acf_add_local_field_group(array(
			'key'		=> 'cspt-photo-gallery-group',
			'title'		=> esc_attr__('Image Gallery', 'emphires'),
			'fields'	=> array(
				array(
					'key'				=> 'cspt-photo-gallery',
					'label'				=> esc_attr__('Image Gallery', 'emphires'),
					'name'				=> 'cspt-photo-gallery',
					'type'				=> 'photo_gallery',
					'instructions'		=> esc_attr__('Select image for slider', 'emphires'),
					'required'			=> 0,
					'conditional_logic'	=> 0,
				),
			),
			'location'	=> array(
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'post',
					),
				),
			),
			'label_placement'	=> 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'	=> '',
			'description'		=> esc_attr__('Description', 'emphires'),
		));
	};
}
}
add_action( 'init', 'cspt_post_gallery_metabox', 24 );
if( !function_exists('cspt_portfolio_featured_metabox') ){
function cspt_portfolio_featured_metabox(){
	if( function_exists('acf_add_local_field_group') ):
	acf_add_local_field_group(array(
		'key'		=> 'cspt-featured-data-type',
		'title'		=> esc_attr__('Emphires - Featured Data Type', 'emphires'),
		'fields'	=> array(
			array(
				'key'			=> 'cspt-featured-type',
				'label'			=> esc_attr__('Featured Data Type', 'emphires'),
				'name'			=> 'cspt-featured-type',
				'type'			=> 'radio',
				'instructions'	=> esc_attr__('Select type of featured content', 'emphires'),
				'required'		=> 0,
				'conditional_logic'	=> 0,
				'wrapper'		=> array(
					'width'			=> '25',
					'class'			=> '',
					'id'			=> '',
				),
				'choices'		=> array(
					'featured'		=> esc_attr__('Featured Image (default)', 'emphires'),
					'slider'		=> esc_attr__('Image Slider', 'emphires'),
					'video'			=> esc_attr__('Video', 'emphires'),
					'audio'			=> esc_attr__('Audio', 'emphires'),
				),
				'allow_null'	=> 0,
				'other_choice'	=> 0,
				'default_value'	=> '',
				'layout'		=> 'vertical',
				'return_format'	=> 'value',
				'save_other_choice' => 0,
			),
			array(
				'key'				=> 'cspt-photo-gallery',
				'label'				=> esc_attr__('Slider Images', 'emphires'),
				'name'				=> 'cspt-photo-gallery',
				'type'				=> 'photo_gallery',
				'instructions'		=> esc_attr__('Select images for slider', 'emphires'),
				'required'			=> 0,
				'conditional_logic' => array(
					array(
						array(
							'field'		=> 'cspt-featured-type',
							'operator'	=> '==',
							'value'		=> 'slider',
						),
					),
				),
				'wrapper'			=> array(
					'width'				=> '75',
					'class'				=> '',
					'id'				=> '',
				),
				'fields[slider_images' => array(
					'edit_modal'			=> 'Default',
				),
				'edit_modal' => 'Default',
			),
			array(
				'key'				=> 'cspt-video-url',
				'label'				=> esc_attr__('Video URL', 'emphires'),
				'name'				=> 'cspt-video-url',
				'type'				=> 'text',
				'instructions'		=> esc_attr__('Add video URL from YouTube or Vimeo', 'emphires'),
				'required'			=> 0,
				'conditional_logic' => array(
					array(
						array(
							'field'		=> 'cspt-featured-type',
							'operator'	=> '==',
							'value'		=> 'video',
						),
					),
				),
				'wrapper'			=> array(
					'width'				=> '75',
					'class'				=> '',
					'id'				=> '',
				),
				'default_value'		=> '',
				'placeholder'		=> '',
				'prepend'			=> '',
				'append'			=> '',
				'maxlength'			=> '',
			),
			array(
				'key'				=> 'cspt-audio-url',
				'label'				=> esc_attr__('Audio URL', 'emphires'),
				'name'				=> 'cspt-audio-url',
				'type'				=> 'text',
				'instructions'		=> esc_attr__('Add audio URL from SoundCloud or MP3', 'emphires'),
				'required'			=> 0,
				'conditional_logic' => array(
					array(
						array(
							'field'		=> 'cspt-featured-type',
							'operator'	=> '==',
							'value'		=> 'audio',
						),
					),
				),
				'wrapper'			=> array(
					'width'				=> '75',
					'class'				=> '',
					'id'				=> '',
				),
				'default_value'		=> '',
				'placeholder'		=> '',
				'prepend'			=> '',
				'append'			=> '',
				'maxlength'			=> '',
			),
		),
		'location'			=> array(
			array(
				array(
					'param'		=> 'post_type',
					'operator'	=> '==',
					'value'		=> 'cspt-portfolio',
				),
			),
		),
		'menu_order'		=> 1,
		'position'			=> 'normal',
		'style'				=> 'default',
		'label_placement'	=> 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'	=> '',
		'active'			=> 1,
		'description'		=> '',
	));
	endif;
}
}
add_action( 'init', 'cspt_portfolio_featured_metabox', 25 );
if( !function_exists('cspt_portfolio_details_metabox') ){
function cspt_portfolio_details_metabox(){
	$line_list = array();
	$portfolio_details = cspt_get_base_option('portfolio-details');
	if( !empty($portfolio_details) && is_array($portfolio_details) ){
		foreach( $portfolio_details as $line ){
			if( !empty($line['line_title']) ){
				$line_id = trim($line['line_title']);
				$line_id = str_replace( ' ', '_', $line_id );
				$line_id = sanitize_html_class( strtolower( $line_id ) ) ;
				if( $line['line_type']=='text' ){
					$line_list[] = array(
						'key'			=> $line_id,
						'label'			=> sprintf( esc_attr__('%1$s ', 'emphires'), $line['line_title'] ),
						'name'			=> $line_id,
						'type'			=> 'text',
					);
				} else {
					$desc = esc_attr__('(Category with link)','emphires');
					if( $line['line_type']=='category' ){
						$desc = esc_attr__('(Category without link)','emphires');
					}
					$line_list[] = array(
						'type'		=> 'generic',
						'key'		=> $line_id,
						'label'		=> sprintf( esc_attr__('%1$s ', 'emphires'), $line['line_title'] ) . $desc,
						'default'	=> '',
						'choices'	=> array(
							'element'	=> 'input',
							'type'		=> 'text',
							'disabled'	=> 'disabled',
						),
					);
				}
			}
		}
	}
	if( function_exists('acf_add_local_field_group') ){
	acf_add_local_field_group(array(
		'key'		=> 'cspt-portfolio-details-group',
		'title'		=> esc_attr__('Emphires - Portfolio Details', 'emphires'),
		'fields'	=> array(
			array(
				'key'			=> 'cspt-portfolio-details',
				'label'			=> esc_attr__('Portfolio Details', 'emphires'),
				'name'			=> 'cspt-portfolio-details',
				'type'			=> 'group',
				'instructions'	=> esc_attr__('Fill the values for each option that applies. Leave blank to hide it.', 'emphires'),
				'required'		=> 0,
				'conditional_logic'	=> 0,
				'wrapper'		=> array(
					'width'			=> '',
					'class'			=> '',
					'id'			=> '',
				),
				'layout'		=> 'block',
				'sub_fields'	=> $line_list,
			),
		),
		'location'	=> array(
			array(
				array(
					'param'		=> 'post_type',
					'operator'	=> '==',
					'value'		=> 'cspt-portfolio',
				),
			),
		),
		'menu_order'		=> 2,
		'position'			=> 'normal',
		'style'				=> 'default',
		'label_placement'	=> 'left',
		'instruction_placement' => 'label',
		'hide_on_screen'	=> '',
		'active'			=> 1,
		'description'		=> '',
	));
	};
}
}
add_action( 'init', 'cspt_portfolio_details_metabox', 26 );
if( !function_exists('cspt_testimonial_details_metabox') ){
function cspt_testimonial_details_metabox(){
	if( function_exists('acf_add_local_field_group') ):
	acf_add_local_field_group(array(
		'key'		=> 'cspt-testimonial-details-box',
		'title'		=> esc_attr__('Emphires - Testimonial Details', 'emphires'),
		'fields'	=> array(
			array(
				'key'			=> 'cspt-testimonial-company-name',
				'label'			=> esc_attr__('Company Name', 'emphires'),
				'name'			=> 'cspt-testimonial-company-name',
				'type'			=> 'text',
				'instructions'	=> esc_attr__('(optional) Add company name', 'emphires'),
				'required'		=> 0,
				'conditional_logic'	=> 0,
				'wrapper'		=> array(
					'width'			=> '33',
					'class'			=> '',
					'id'			=> '',
				),
				'default_value'	=> '',
				'placeholder'	=> '',
				'prepend'		=> '',
				'append'		=> '',
				'maxlength'		=> '',
			),
			array(
				'key'			=> 'cspt-testimonial-company-link',
				'label'			=> esc_attr__('Link on Company Name', 'emphires'),
				'name'			=> 'cspt-testimonial-company-link',
				'type'			=> 'text',
				'instructions'	=> esc_attr__('(optional) Link on company name', 'emphires'),
				'required'		=> 0,
				'conditional_logic' => 0,
				'wrapper'		=> array(
					'width'			=> '33',
					'class'			=> '',
					'id'			=> '',
				),
				'default_value'	=> '',
				'placeholder'	=> '',
				'prepend'		=> '',
				'append'		=> '',
				'maxlength'		=> '',
			),
			array(
				'key'			=> 'cspt-star-ratings',
				'label'			=> esc_attr__('Star Ratings', 'emphires'),
				'name'			=> 'cspt-star-ratings',
				'type'			=> 'select',
				'instructions'	=> esc_attr__('Select star ratings.', 'emphires'),
				'required'		=> 0,
				'conditional_logic' => 0,
				'wrapper'		=> array(
					'width'			=> '33',
					'class'			=> '',
					'id'			=> '',
				),
				'choices'		=> array(
					'no'			=> esc_attr__('No ratings', 'emphires'),
					'1'				=> esc_attr__('1 star', 'emphires'),
					'2'				=> esc_attr__('2 stars', 'emphires'),
					'3'				=> esc_attr__('3 stars', 'emphires'),
					'4'				=> esc_attr__('4 stars', 'emphires'),
					'5'				=> esc_attr__('5 stars', 'emphires'),
				),
				'default_value'	=> 'no',
				'allow_null'	=> 0,
				'multiple'		=> 0,
				'ui'			=> 1,
				'ajax'			=> 0,
				'return_format'	=> 'value',
				'placeholder'	=> '',
			),
		),
		'location'			=> array(
			array(
				array(
					'param'		=> 'post_type',
					'operator'	=> '==',
					'value'		=> 'cspt-testimonial',
				),
			),
		),
		'menu_order'		=> 0,
		'position'			=> 'normal',
		'style'				=> 'default',
		'label_placement'	=> 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'	=> '',
		'description'		=> '',
	));
	endif;
}
}
add_action( 'init', 'cspt_testimonial_details_metabox', 27 );
if( !function_exists('cspt_service_short_desc_metabox') ){
function cspt_service_short_desc_metabox(){
	if( function_exists('acf_add_local_field_group') ):
		$icon_picker_options = array();
		// Icon library
		$library = array();
		$lib_list = cspt_icon_library_list();
		foreach( $lib_list as $lib_id=>$lib_data ){
			$library[$lib_id] = $lib_data['name'];
		}
		$icon_picker_options[] = array(
			'key'			=> 'cspt-icon-library',
			'label'			=> esc_attr__('Select Icon Library', 'emphires'),
			'name'			=> 'cspt-icon-library',
			'type'			=> 'select',
			'instructions'	=> esc_attr__('Select Icon Library.', 'emphires'),
			'required'		=> 0,
			'conditional_logic' => 0,
			'wrapper'		=> array(
				'width'			=> '33',
				'class'			=> '',
				'id'			=> '',
			),
			'choices'		=> $library,
			'default_value'	=> 'no',
			'allow_null'	=> 0,
			'multiple'		=> 0,
			'ui'			=> 1,
			'ajax'			=> 0,
			'return_format'	=> 'value',
			'placeholder'	=> '',
		);
		foreach( $lib_list as $lib_id=>$lib_data ){
			$icon_picker_options[] = array(
				'key'		=> 'cspt-service-icon-' . $lib_id ,
				'label'		=> $lib_data['name'],
				'name'		=> 'cspt-service-icon-' . $lib_id,
				'type'		=> 'cspt_fonticonpicker',
				'library'	=> $lib_id,
				'instructions' => esc_attr__('Select icon from here', 'emphires'),
				'required'	=> 0,
				'conditional_logic' => 0,
				'wrapper'	=> array(
					'width'		=> '66',
					'class'		=> '',
					'id'		=> '',
				),
			);
		}
		acf_add_local_field_group(array(
			'key'		=> 'cspt-group-service-short-desc',
			'title'		=> esc_attr__('Emphires - Short Description', 'emphires'),
			'fields'	=> array(
				array(
					'key'		=> 'cspt-short-description',
					'label'		=> esc_attr__('Short Description', 'emphires'),
					'name'		=> 'cspt-short-description',
					'type'		=> 'textarea',
					'instructions' => esc_attr__('This will appear on single view', 'emphires'),
				),
			),
			'location' => array(
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-service',
					),
				),
				array(
					array(
						'param'		=> 'post_type',
						'operator'	=> '==',
						'value'		=> 'cspt-portfolio',
					),
				),
			),
			'menu_order'		=> 2,
			'position'			=> 'normal',
			'style'				=> 'default',
			'label_placement'	=> 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'	=> '',
			'description'		=> '',
		));
	endif;
}
}
add_action( 'init', 'cspt_service_short_desc_metabox', 28 );
if( !function_exists('cspt_single_icon_metabox') ){
function cspt_single_icon_metabox(){
	if( function_exists('acf_add_local_field_group') ):
	$icon_picker_options = array();
	// Icon library
	$library = array();
	$lib_list = cspt_icon_library_list();
	foreach( $lib_list as $lib_id=>$lib_data ){
		$library[$lib_id] = $lib_data['name'];
	}
	$icon_picker_options[] = array(
		'key'			=> 'cspt-service-icon-library',
		'label'			=> esc_attr__('Select Icon Library', 'emphires'),
		'name'			=> 'cspt-service-icon-library',
		'type'			=> 'select',
		'instructions'	=> esc_attr__('Select Icon Library.', 'emphires'),
		'required'		=> 0,
		'conditional_logic' => 0,
		'wrapper'		=> array(
			'width'			=> '33',
			'class'			=> '',
			'id'			=> '',
		),
		'choices'		=> $library,
		'default_value'	=> 'no',
		'allow_null'	=> 0,
		'multiple'		=> 0,
		'ui'			=> 1,
		'ajax'			=> 0,
		'return_format'	=> 'value',
		'placeholder'	=> '',
	);
	foreach( $lib_list as $lib_id=>$lib_data ){
		$icon_picker_options[] = array(
			'key'		=> 'cspt-service-icon-' . $lib_id ,
			'label'		=> $lib_data['name'],
			'name'		=> 'cspt-service-icon-' . $lib_id,
			'type'		=> 'cspt_fonticonpicker',
			'library'	=> $lib_id,
			'instructions' => esc_attr__('Select icon from here', 'emphires'),
			'required'	=> 0,
			'conditional_logic'	=> array(
				array(
					array(
						'field'		=> 'cspt-service-icon-library',
						'operator'	=> '==',
						'value'		=> $lib_id,
					),
				),
			),
			'wrapper'	=> array(
				'width'		=> '66',
				'class'		=> '',
				'id'		=> '',
			),
		);
	}
	acf_add_local_field_group(array(
		'key'		=> 'cspt-group-single-icon',
		'title'		=> esc_attr__('Emphires - Icon for Single', 'emphires'),
		'fields'	=> $icon_picker_options,
		'location' => array(
			array(
				array(
					'param'		=> 'post_type',
					'operator'	=> '==',
					'value'		=> 'cspt-service',
				),
			),
		),
		'menu_order'		=> 2,
		'position'			=> 'normal',
		'style'				=> 'default',
		'label_placement'	=> 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'	=> '',
		'description'		=> '',
	));
	endif;
}
}
add_action( 'init', 'cspt_single_icon_metabox', 28 );
if( !function_exists('cspt_portfolio_single_view_metabox') ){
function cspt_portfolio_single_view_metabox(){
	if( function_exists('acf_add_local_field_group') ):
	// Total Single Portfolio Styles
	$portfolio_single_style_array = array(
		'0' => '<img src="'.get_template_directory_uri() . '/includes/images/portfolio-single-style-global.jpg" />',
		'1'	=> '<img src="'.get_template_directory_uri() . '/includes/images/portfolio-single-style-1.jpg" />',
		'2'	=> '<img src="'.get_template_directory_uri() . '/includes/images/portfolio-single-style-2.jpg" />',
	);
	// Single Title
	$portfolio_cpt_singular_title	= esc_attr__('Portfolio','emphires');
	if( class_exists('Kirki') ){
		// Portfolio
		$portfolio_cpt_singular_title2	= Kirki::get_option( 'portfolio-cpt-singular-title' );
		$portfolio_cpt_singular_title	= ( !empty($portfolio_cpt_singular_title2) ) ? $portfolio_cpt_singular_title2 : $portfolio_cpt_singular_title ;
	}
	acf_add_local_field_group(array(
		'key'		=> 'cspt-group-portfolio-single-view',
		'title'		=> sprintf( esc_attr__('Emphires - %1$s Single View Option', 'emphires'), $portfolio_cpt_singular_title ),
		'fields'	=> array(
			array(
				'key'		=> 'cspt-portfolio-single-view',
				'label'		=> sprintf( esc_attr__('%1$s Single View', 'emphires'), $portfolio_cpt_singular_title ),
				'name'		=> 'cspt-portfolio-single-view',
				'type'		=> 'radio',
				'instructions' => sprintf( esc_attr__('Select %1$s Single View', 'emphires'), $portfolio_cpt_singular_title ),
				'required'			=> 0,
				'choices'			=> $portfolio_single_style_array,
				'wrapper'			=> array(
					'class'				=> 'cspt-radio-image-selector',
					'id'				=> '',
				),
				'allow_null'		=> 0,
				'other_choice'		=> 0,
				'default_value'		=> '',
				'layout'			=> 'horizontal',
				'return_format'		=> 'value',
				'save_other_choice' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param'		=> 'post_type',
					'operator'	=> '==',
					'value'		=> 'cspt-portfolio',
				),
			),
		),
		'menu_order'		=> 3,
		'position'			=> 'normal',
		'style'				=> 'default',
		'label_placement'	=> 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'	=> '',
		'description'		=> '',
	));
	endif;
}
}
add_action( 'init', 'cspt_portfolio_single_view_metabox', 25 );
