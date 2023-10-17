<?php

namespace Buildbench\Compatibility;

class Mig_Unyson_To_Codestar {

	const ARRAY_2D_STYLE = '2d_array';
	const ARRAY_1D_STYLE = '1d_array';
	const P_TYPE_CONDITIONAL = 'conditional';

	public function init() {

		$options           = get_option('theme_mods_buildbench', []);
		$fw_options_parent = empty($options['fw_options']) ? [] : $options['fw_options'];
		$child_options     = get_option('theme_mods_buildbench-child', []);
		$fw_options_child  = empty($child_options['fw_options']) ? [] : $child_options['fw_options'];
		$fw_options        = [];

		if(is_child_theme()) {
			// Child-theme is active, child-theme-options will be forwarded as the final options array
			$fw_options = $fw_options_child;
		} else {
			$array_keys = array_keys(array_merge($fw_options_parent, $fw_options_child));
			foreach($array_keys as $single_key) {
				if(array_key_exists($single_key, $fw_options_parent)) {
					$fw_options[$single_key] = $fw_options_parent[$single_key];
				} else {
					$fw_options[$single_key] = $fw_options_child[$single_key];
				}
			}
		}
		
		$modified = [];
		$original = [];
		$conf_array = $this->get_config_array();


		foreach($conf_array as $codestar_op_key => $unyson_array) {

			foreach($unyson_array as $ky => $conf) {

				$o_ky 	= $ky;
				$from 	= $conf['from'];
				$to 	= $conf['to'];
				$ky 	= empty($conf['k_map']) ? $ky : trim($conf['k_map']);

				if(empty($conf['p_type'])) {

					if(isset($fw_options[$o_ky])) {
						$modified[$ky] = $this->fw_convert_mapper($from, $to, $fw_options[$o_ky], $conf);
						$original[$o_ky] = $fw_options[$o_ky];

					} elseif(isset($conf['def_val'])) {

						$modified[$ky] = $conf['def_val'];
						$original[$o_ky] = $conf['def_val'];
					}

				} elseif($conf['p_type'] === self::P_TYPE_CONDITIONAL) {

					$loc_arr = explode('|', $conf['o_location']);

					$tmp = $fw_options;

					foreach($loc_arr as $item) {

						$tmp = isset($tmp[$item]) ? $tmp[$item] : [];
					}

					if(!empty($tmp)) {
						$modified[$ky] = $this->fw_convert_mapper($from, $to, $tmp[$o_ky]);
						$original[$o_ky] = $tmp[$o_ky];

					} elseif(isset($conf['def_val'])) {

						$modified[$ky] = $conf['def_val'];
						$original[$o_ky] = $conf['def_val'];
					}

				} elseif($conf['p_type'] === self::ARRAY_1D_STYLE || $conf['p_type'] === self::ARRAY_2D_STYLE) {

					if(isset($fw_options[$o_ky])) {
						$modified[$ky] = $this->fw_convert_mapper($from, $to, $fw_options[$o_ky], $conf);
						$original[$o_ky] = $fw_options[$o_ky];

					} elseif(isset($conf['def_val'])) {

						$modified[$ky] = $conf['def_val'];
						$original[$o_ky] = $conf['def_val'];
					} else {
						$modified[$ky] = [];
						$original[$o_ky] = [];
					}

				} elseif($conf['p_type'] === 'popup_2d_array') {

					$modified[$ky] = [];

					if(!empty($conf['fields_map'])) {

						$tmp_mod = [];

						foreach($conf['fields_map'] as $fld_key => $fld_conf) {

							$old_ky = $fld_key;
							$t_from = $fld_conf['from'];
							$t_to = $fld_conf['to'];
							$fld_key = empty($fld_conf['k_map']) ? $fld_key : trim($fld_conf['k_map']);

							if(empty($fw_options[$o_ky])) {

								$tmp_mod[$fld_key] = isset($fld_conf['def_val']) ? $fld_conf['def_val'] : '';

							} else {

								$tmp_mod[$fld_key] = $this->fw_convert_mapper($t_from, $t_to, $fw_options[$o_ky][$old_ky], $fld_conf);
							}
						}

						$modified[$ky] = $tmp_mod;
						$original[$o_ky] = isset($fw_options[$o_ky]) ? $fw_options[$o_ky] : [];
					}
				}
			}

			//$this->debug($original, $modified);
			$this->persist_codestar_settings($codestar_op_key, $modified);

			$modified = [];
			$original = [];
		}


		$this->migrate_cpt();

	}

	protected function get_config_array() {

		//codestar_slug_id_prefix => which fields goes here...

		$config_array = [

			// Customizer settings
			'buildbench_customizer_options' => array_merge(
				$this->general_settings_config(),
				$this->style_settings_config(),
				$this->header_settings_config(),
				$this->banner_settings_config(),
				$this->blog_settings_config(),
				$this->footer_settings_config()
			),
		];

		return $config_array;
	}

	protected function general_settings_config() {

		return [
			'general_main_logo' => [
				'from' => 'upload',
				'to'   => 'media',
			],

			'general_dark_logo' => [
				'from' => 'upload',
				'to'   => 'media',
			],

			'general_body_box_layout' => [
				'from'       => 'multi-picker',
				'to'         => 'switcher',
				'picker_key' => 'style',
				'v_map'      => [
					''    => '',
					'no'  => '',
					'yes' => 1,
				],
				'def_val'    => false
			],

			'general_body_box_bg_image' => [
				'from'       => 'upload',
				'to'         => 'media',
				'p_type'     => self::P_TYPE_CONDITIONAL,
				'o_location' => 'general_body_box_layout|yes',
			],


			'general_sticky_sidebar' => [
				'from'       => 'switch',
				'to'         => 'switcher',
				'picker_key' => 'style',
				'v_map'      => [
					''    => '',
					'no'  => '',
					'yes' => 1,
				],
			],

			'general_social_links' => [
				'from'   => 'addable-popup',
				'to'     => 'group',
				'p_type' => self::ARRAY_2D_STYLE,
				'o_map'  => [
					'title'      => 'title',
					'icon_class' => 'icon_class',
					'url'        => 'url',
				],
			],

		];
	}

	protected function style_settings_config() {

		return [
			'style_body_bg' => [
				'from' => 'color-picker',
				'to'   => 'color',
			],

			'style_primary' => [
				'from' => 'color-picker',
				'to'   => 'color',
			],

			'secondary_color' => [
				'from' => 'color-picker',
				'to'   => 'color',
			],

			'title_color' => [
				'from' => 'color-picker',
				'to'   => 'color',
			],

			'body_font' => [
				'from'    => 'typography-v2',
				'to'      => 'typography',
				'p_type'  => self::ARRAY_1D_STYLE,
				'o_map'   => $this->get_typography_v2_map(),
				'f_map'   => [
					'unit' => 'px',
					'type' => 'google',
				],
				'def_val' => array(
					'family' => 'Montserrat',
					'font-weight' => '700',
					'size'   => '',
					'unit'        => 'px',
					'type'        => 'google',
				),
			],

			'heading_font_one' => [
				'from'    => 'typography-v2',
				'to'      => 'typography',
				'p_type'  => self::ARRAY_1D_STYLE,
				'o_map'   => $this->get_typography_v2_map(),
				'f_map'   => [
					'unit' => 'px',
					'type' => 'google',
				],
				'def_val' => array(
					'family' => 'Montserrat',
					'font-weight' => '700',
					'unit'        => 'px',
					'type'        => 'google',
				),
			],

			'heading_font_two' => [
				'from'    => 'typography-v2',
				'to'      => 'typography',
				'p_type'  => self::ARRAY_1D_STYLE,
				'o_map'   => $this->get_typography_v2_map(),
				'f_map'   => [
					'unit' => 'px',
					'type' => 'google',
				],
				'def_val' => array(
					'family' => 'Montserrat',
					'font-weight' => '700',
					'size'   => '',
					'unit'        => 'px',
					'type'        => 'google',
				),
			],

			'heading_font_three' => [
				'from'    => 'typography-v2',
				'to'      => 'typography',
				'p_type'  => self::ARRAY_1D_STYLE,
				'o_map'   => $this->get_typography_v2_map(),
				'f_map'   => [
					'unit' => 'px',
					'type' => 'google',
				],
				'def_val' => array(
					'family' => 'Montserrat',
					'font-weight' => '700',
					'size'   => '',
					'unit'        => 'px',
					'type'        => 'google',
				),
			],
		];
	}

	protected function get_typography_v2_map() {

		return [
			'family'         => 'font-family',
			'font-weight'    => 'font-weight',
			'variation'      => 'font-style',
			'line-height'    => 'line-height',
			'letter-spacing' => 'letter-spacing',
			'size'           => 'font-size',
			'color'          => 'color',
		];
	}

	protected function header_settings_config() {

		return [
			'header_layout_style' => [
				'from'    => 'image-picker',
				'to'      => 'image_select',
				'v_map'   => [
					'transparent' => 'transparent',
					'standard'    => 'standard',
					'classic'     => 'classic',
					'box'         => 'box',
					'solid'       => 'solid',
				],
				'def_val' => 'solid',
			],

			'header_nav_sticky' => [
				'from'    => 'switch',
				'to'      => 'switcher',
				'v_map'   => [
					''    => '',
					'no'  => '',
					'yes' => 1,
				],
				'def_val' => false,
			],

			'header_contact_info_show' => [
				'from'    => 'switch',
				'to'      => 'switcher',
				'v_map'   => [
					''    => '',
					'no'  => '',
					'yes' => 1,
				],
				'def_val' => true,
			],

			'header_contact_phone_title' => [
				'from'    => 'text',
				'to'      => 'text',
				'def_val' => 'GIVE US A CALL'
			],

			'header_contact_phone' => [
				'from'    => 'text',
				'to'      => 'text',
				'def_val' => '+001 458 654 528'
			],

			'header_contact_link' => [
				'from' => 'text',
				'to'   => 'text',
			],

			'header_contact_mail_title' => [
				'from'    => 'text',
				'to'      => 'text',
				'def_val' => 'SEND MAIL TO US'
			],

			'header_contact_mail' => [
				'from'    => 'text',
				'to'      => 'text',
				'def_val' => 'contact@domain.com'
			],

			'header_mail_link' => [
				'from' => 'text',
				'to'   => 'text',
			],

			'header_contact_address_title' => [
				'from'    => 'text',
				'to'      => 'text',
				'def_val' => 'VISIT OUR OFFICE AT'
			],

			'header_contact_address' => [
				'from'    => 'textarea',
				'to'      => 'textarea',
				'def_val' => '105 Roosevelt Street CA'
			],

			'header_address_link' => [
				'from' => 'text',
				'to'   => 'text',
			],

			'header_nav_search_section' => [
				'from'    => 'switch',
				'to'      => 'switcher',
				'v_map'   => [
					''    => '',
					'no'  => '',
					'yes' => 1,
				],
				'def_val' => false
			],

			'header_quota_button' => [
				'from'       => 'multi-picker',
				'to'         => 'switcher',
				'picker_key' => 'style',
				'v_map'      => [
					''    => '',
					'no'  => '',
					'yes' => 1,
				],
				'def_val'    => true
			],

			'header_quota_text' => [
				'from'       => 'text',
				'to'         => 'text',
				'p_type'     => self::P_TYPE_CONDITIONAL,
				'o_location' => 'header_quota_button|yes',
				'def_val'    => 'Get a quote'
			],

			'header_quota_url' => [
				'from'       => 'text',
				'to'         => 'text',
				'p_type'     => self::P_TYPE_CONDITIONAL,
				'o_location' => 'header_quota_button|yes',
				'def_val'    => '#'
			],

			'header_nav_shopping_cart_section' => [
				'from'    => 'switch',
				'to'      => 'switcher',
				'v_map'   => [
					''    => '',
					'no'  => '',
					'yes' => 1,
				],
				'def_val' => true
			],
		];
	}

	protected function banner_settings_config() {

		return [
			// Todo: Need to check if it's added correctly or not
			'sub_page_banner_style' => [
				'from'    => 'switch',
				'to'      => 'button_set',
				'v_map'   => [
					'box'  => 'box',
					'full' => 'full',
				],
				'def_val' => 'full',
			],

			'page_banner_setting' => [
				'from'       => 'popup',
				'to'         => 'accordion',
				'p_type'     => 'popup_2d_array',
				'fields_map' => [
					'page_show_banner'     => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'page_show_breadcrumb' => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'banner_page_title'    => [
						'from' => 'text',
						'to'   => 'text',
					],
					'banner_page_image'    => [
						'from' => 'upload',
						'to'   => 'media',
					],
				],
			],

			'blog_banner_setting' => [
				'from'       => 'popup',
				'to'         => 'accordion',
				'p_type'     => 'popup_2d_array',
				'fields_map' => [
					'blog_show_banner'     => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'blog_show_breadcrumb' => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'banner_blog_title'    => [
						'from' => 'text',
						'to'   => 'text',
					],
					'banner_blog_image'    => [
						'from' => 'upload',
						'to'   => 'media',
					],
				],
			],

			'service_banner_settings' => [
				'from'       => 'popup',
				'to'         => 'accordion',
				'p_type'     => 'popup_2d_array',
				'fields_map' => [
					'show'            => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'show_breadcrumb' => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'single_title'    => [
						'from' => 'text',
						'to'   => 'text',
					],
					'image'           => [
						'from' => 'upload',
						'to'   => 'media',
					],
				],
			],

			'project_banner_settings' => [
				'from'       => 'popup',
				'to'         => 'accordion',
				'p_type'     => 'popup_2d_array',
				'fields_map' => [
					'show'            => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'show_breadcrumb' => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'single_title'    => [
						'from' => 'text',
						'to'   => 'text',
					],
					'image'           => [
						'from' => 'upload',
						'to'   => 'media',
					],
				],
			],

			'shop_banner_settings' => [
				'from'       => 'popup',
				'to'         => 'accordion',
				'p_type'     => 'popup_2d_array',
				'fields_map' => [
					'show'            => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'show_breadcrumb' => [
						'from'    => 'switch',
						'to'      => 'switcher',
						'v_map'   => [
							''    => '',
							'no'  => '',
							'yes' => 1,
						],
						'def_val' => true,
					],
					'title'           => [
						'from' => 'text',
						'to'   => 'text',
					],
					'single_title'    => [
						'from' => 'text',
						'to'   => 'text',
					],
					'image'           => [
						'from' => 'upload',
						'to'   => 'media',
					],
				],
			],
		];
	}

	protected function blog_settings_config() {

		return [
			'blog_sidebar' => [
				'from'    => 'select',
				'to'      => 'select',
				'def_val' => '3'
			],
			'blog_author'  => [
				'from'    => 'switch',
				'to'      => 'switcher',
				'v_map'   => [
					''    => '',
					'no'  => '',
					'yes' => 1,
				],
				'def_val' => false
			],
		];
	}

	protected function footer_settings_config() {

		return [
			'footer_style' => [
				'from'       => 'multi-picker',
				'to'         => 'image_select',
				'picker_key' => 'style',
				'v_map'      => [
					'style-1' => 'style-1',
					'style-2' => 'style-2',
				],
				'def_val'    => 'solid'
			],

			'footer_mailchimp' => [
				'from'       => 'text',
				'to'         => 'text',
				'p_type'     => self::P_TYPE_CONDITIONAL,
				'o_location' => 'footer_style|style-1',
			],

			'footer_bg_img' => [
				'from' => 'upload',
				'to'   => 'media',
			],

			'footer_bg_color' => [
				'from'    => 'color-picker',
				'to'      => 'color',
				'def_val' => '#101010'
			],

			'footer_copyright_color' => [
				'from' => 'color-picker',
				'to'   => 'color',
			],

			'footer_social_links' => [
				'from'   => 'addable-popup',
				'to'     => 'group',
				'p_type' => self::ARRAY_2D_STYLE,
				'o_map'  => [
					'title'      => 'title',
					'icon_class' => 'icon_class',
					'url'        => 'url',
				],
			],

			'footer_copyright' => [
				'from'    => 'textarea',
				'to'      => 'textarea',
				'def_val' => '&copy; %1$s, Buildbench. All rights reserved'
			],

			'footer_padding_top' => [
				'from'    => 'text',
				'to'      => 'text',
				'def_val' => '250px',
			],

			'back_to_top' => [
				'from'    => 'switch',
				'to'      => 'switcher',
				'v_map'   => [
					''    => '',
					'no'  => '',
					'yes' => 1,
				],
				'def_val' => true
			],

		];
	}

	public function fw_convert_mapper($from, $to, $orig_val, $extra = []) {

		if($from === 'upload' && $to === 'media') {

			return $this->fw_convert_upload_to_media($orig_val);
		}

		if($from === 'image-picker' && $to === 'image_select') {

			return $this->fw_convert_img_picker_to_img_select($orig_val);
		}

		if($from === 'switch' && $to === 'switcher') {

			return $this->fw_convert_switch_to_switcher($orig_val, $extra);
		}
		if($from === 'switch' && $to === 'button_set') {

			return $this->fw_convert_switch_to_switcher($orig_val, $extra);
		}

		if($from === 'text' && $to === 'text') {

			return $this->fw_convert_no_change_to_no_change($orig_val, $extra);
		}

		if($from === 'textarea' && $to === 'textarea') {

			return $this->fw_convert_no_change_to_no_change($orig_val, $extra);
		}

		if($from === 'select' && $to === 'select') {

			return $this->fw_convert_no_change_to_no_change($orig_val, $extra);
		}

		if($from === 'color-picker' && $to === 'color') {

			return $this->fw_convert_no_change_to_no_change($orig_val, $extra);
		}

		if($from === 'multi-picker' && $to === 'switcher') {

			return $this->fw_convert_mlt_picker_to_switcher($orig_val, $extra);
		}

		if($from === 'multi-picker' && $to === 'image_select') {

			return $this->fw_convert_mlt_picker_to_img_select($orig_val, $extra);
		}

		if($from === 'addable-popup' && $to === 'group') {

			return $this->fw_convert_addable_popup_to_group($orig_val, $extra);
		}

		if($from === 'typography-v2' && $to === 'typography') {

			return $this->fw_convert_typ_v2_to_typography($orig_val, $extra);
		}

		return $orig_val;
	}

	public function fw_convert_upload_to_media($input) {

		if(empty( $input['attachment_id'] )){
			return;
		}

		$atc = wp_get_attachment_metadata($input['attachment_id']);

		return [
			'id'          => $input['attachment_id'],
			'url'         => $input['url'],
			'width'       => $atc['width'],
			'height'      => $atc['height'],
			'thumbnail'   => $input['url'],
			'alt'         => '',
			'title'       => '',
			'description' => '',
		];
	}

	public function fw_convert_img_picker_to_img_select($input) {

		// No need to do anything :D

		return $input;
	}

	public function fw_convert_switch_to_switcher($input, $conf) {
		/**
		 * Here we are processing 0d array
		 */

		if(empty($conf['v_map'])) {

			return $input;
		}

		$incoming = is_null($input) ? '' : $input;

		//todo need to test it with more values, specially with empty value

		return isset($conf['v_map'][$incoming]) ? $conf['v_map'][$incoming] : $input;
	}

	public function fw_convert_no_change_to_no_change($input, $extra) {

		// We do not need to do anything :D

		return $input;
	}

	public function fw_convert_mlt_picker_to_switcher($input, $conf = []) {

		$fk = $this->get_multi_picker_key($conf, $input);

		return $this->convert_multi_picker_array($fk, $input, $conf);
	}

	private function get_multi_picker_key($conf, $input) {

		/**
		 * According to ataur bhai the key os the first one's value
		 */

		if(empty($conf['picker_key'])) {

			return key($input);
		}

		return $conf['picker_key'];
	}

	private function convert_multi_picker_array($fk, $input, $conf = []) {


		$vl = $input[$fk];

		if(!empty($conf['v_map'])) {

			$incoming = is_null($vl) ? '' : $vl;

			return isset($conf['v_map'][$incoming]) ? $conf['v_map'][$incoming] : $vl;
		}

		if($vl === 'yes') {

			return 1;
		}

		return '';
	}

	// General settings

	public function fw_convert_mlt_picker_to_img_select($input, $conf = []) {

		return $this->fw_convert_mlt_picker_to_switcher($input, $conf);
	}

	// Style settings

	public function fw_convert_addable_popup_to_group($input, $conf = []) {

		if(empty($input)) {

			return [];
		}

		$converted = [];

		foreach($input as $item) {

			if(empty($item)) {
				$converted[] = [];
			}

			if(empty($conf['o_map'])) {

				$converted[] = $item;

			} else {

				$tmp = [];

				foreach($conf['o_map'] as $oky => $nky) {

					$tmp[$nky] = isset($item[$oky]) ? $item[$oky] : '';
				}

				$converted[] = $tmp;
			}

		}

		return $converted;
	}

	// Header settings

	public function fw_convert_typ_v2_to_typography($input, $conf) {

		/**
		 * Here we are processing 1d array value
		 */

		
		$converted = [];

		if(!empty($conf['f_map'])) {
			foreach($conf['f_map'] as $fk => $fv) {

				$converted[$fk] = $fv;
			}
		}

		if(empty($input)) {

			return $converted;
		}


		if(!empty($conf['o_map'])) {
			foreach($conf['o_map'] as $ok => $nk) {
				$converted[$nk] = isset($input[$ok]) ? $input[$ok] : '';
			}
		}

		return $converted;
	}

	// Banner settings

	private function persist_codestar_settings($key, $val) {

		return update_option($key, $val);
	}

	// Blog Settings

	protected function migrate_cpt() {

		$cpt = [
			'ts-projects' => [
				'map' => [
					'project_zone'         => [
						'from' => 'text',
						'to'   => 'text',
					],
					'project_header_image' => [
						'from' => 'upload',
						'to'   => 'media',
					],
				],
			],

			'ts-service' => [
				'map' => [
					'service_icon'         => [
						'from' => 'upload',
						'to'   => 'media',
					],
					'service_header_image' => [
						'from' => 'upload',
						'to'   => 'media',
					],
				],
			],

			'ts-team' => [
				'map' => [
					'member_designation' => [
						'from' => 'text',
						'to'   => 'text',
					],
					'member_social'      => [
						'from'   => 'addable-popup',
						'to'     => 'group',
						'p_type' => self::ARRAY_2D_STYLE,
						'o_map'  => [
							'social_title' => 'social_title',
							'social_url'   => 'social_url',
							'social_icon'  => 'social_icon',
						],
					],
				],
			],

			'page' => [
				'map' => [
					'header_title' => [
						'from' => 'text',
						'to'   => 'text',
					],
					'header_image' => [
						'from' => 'upload',
						'to'   => 'media',
					],
				],
			],

			'post' => [
				'map' => [
					'featured_video' => [
						'from' => 'text',
						'to'   => 'text',
					],
				],
			],
		];

		$log = [];


		foreach($cpt as $cpt_name => $cpt_conf) {

			//$resume_key = 'mig_resume_'.$cpt_name;

			$posts = get_posts(
				[
					'fields'      => 'ids',
					'post_type'   => $cpt_name,
					'post_status' => 'publish',
					'numberposts' => -1,
				]
			);

			foreach($posts as $pid) {

				$log[$pid] = $this->convert_meta_key_value($pid, $cpt_conf);
			}
		}

		//$this->debug($log, []);

	}

	// Footer Settings

	protected function convert_meta_key_value($pid, $cpt_conf) {

		$fw_meta = get_post_meta($pid, 'fw_options', true);
		$res = [];

		foreach($cpt_conf['map'] as $mk => $conf) {

			if(!isset($fw_meta[$mk])) {
				continue;
			}


			$o_ky = $mk;
			$from = $conf['from'];
			$to = $conf['to'];
			$ky = empty($conf['k_map']) ? $mk : trim($conf['k_map']);


			if(empty($fw_meta[$mk])) {

				$vl = is_array($fw_meta[$mk]) ? [] : '';

				update_post_meta($pid, $ky, $vl);

				$res['mod'][$ky] = '';
				$res['orig'][$ky] = '';

				continue;
			}

			if(empty($conf['p_type'])) {

				$res['mod'][$ky] = $this->fw_convert_mapper($from, $to, $fw_meta[$o_ky], $conf);
				$res['orig'][$o_ky] = $fw_meta[$o_ky];

				update_post_meta($pid, $mk, $res['mod'][$ky]);

			} elseif($conf['p_type'] === self::ARRAY_1D_STYLE || $conf['p_type'] === self::ARRAY_2D_STYLE) {

				$res['mod'][$ky] = $this->fw_convert_mapper($from, $to, $fw_meta[$o_ky], $conf);
				$res['orig'][$o_ky] = $fw_meta[$o_ky];

				update_post_meta($pid, $ky, $res['mod'][$ky]);
			}
		}

		return $res;
	}

	private function debug($orig, $mod) {

		echo '<br/>===========================================================================<br/>';
		echo '<pre>';
		print_r($orig);
		echo '<br/>---------------------------------------------------------------<br/>';
		print_r($mod);
		echo '</pre>';
	}
}
