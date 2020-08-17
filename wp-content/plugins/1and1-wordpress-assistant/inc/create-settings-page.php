<?php
// Do not allow direct access!
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

class One_And_One_Create_Settings_Page {


	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_settings_page' ) );
		add_action( 'admin_init', array( $this, 'register_settings' ) );
	}

	public function add_settings_page() {
		$brand_name = One_And_One_Assistant_Config::get( 'name', 'branding', null, 'Assistant' );

		add_options_page(
			$brand_name . ' Settings Page',
			$brand_name,
			'manage_options',
			'uialfred-settings-page',
			array( $this, 'page_content' )
		);
	}

	public function page_content() {
		One_And_One_Assistant_View::load_template(
			'settings-page'
		);
	}

	public function register_settings() {
		$option_group_id = 'uialfred_settings_plugin_options';

		register_setting(
			$option_group_id,
			'uialfred_login_redesign',
			array(
				'default' => One_And_One_Assistant_Config::get( 'login_redesign', 'features' )
			)
		);
		add_settings_section(
			'uiallfred_design_settings',
			'',
			'',
			'uialfred_settings_plugin'
		);
		add_settings_field(
			'uialfred_login_redesign', __( 'Login design', 'uialfred-assistant' ),
			array(
				$this,
				'uialfred_login_redesign'
			),
			'uialfred_settings_plugin',
			'uiallfred_design_settings'
		);
		// Allow other plugins to register some more IONOs options with the branding
		do_action(
			'assistant_register_ionos_settings',
			$option_group_id,
			One_And_One_Assistant_Config::get( 'branding' )
		);
	}

	public function uialfred_login_redesign() {
		$option = get_option( 'uialfred_login_redesign' );
		echo "<label id='uialfred_login_redesign_option' for='uialfred_login_redesign'>";
		echo "<input id='uialfred_login_redesign' name='uialfred_login_redesign' type='checkbox' value='1' " . checked( '1', $option, false ) . " />";
		echo "<span>" . sprintf( __( 'Use %s design for login', 'uialfred-assistant' ), One_And_One_Assistant_Config::get( 'name', 'branding', null, 'Assistant' ) ) . "</span>";
		echo "<p class='description'>" . sprintf( __( 'When activated this setting will theme the login page at %s with %s design', 'uialfred-assistant' ), get_admin_url(), One_And_One_Assistant_Config::get( 'name', 'branding', null, 'Assistant' ) ) . "</p></label>";
	}
}

new One_And_One_Create_Settings_Page();