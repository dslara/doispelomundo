<div class="wrap">
    <h1><?php printf( __( '%s - Settings', 'uialfred-assistant' ), One_And_One_Assistant_Config::get( 'name', 'branding', null, 'Assistant' ) ); ?></h1>

    <form method="post" action="options.php" novalidate="novalidate">

		<?php
		settings_fields( 'uialfred_settings_plugin_options' );
		do_settings_sections('uialfred_settings_plugin');
		submit_button();
		?>
    </form>

</div>