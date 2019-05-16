<?php
// ---------------------------------------------------------
// Validate User Input
// ---------------------------------------------------------
function wpss_main_settings_validate($arr_input) {

	$options = get_option('wpss_register_settings_fields');
	$options['wpss_show_hide_field'] = trim( $arr_input['wpss_show_hide_field'] );
	$options['wpss_buttons_style_field'] = trim( $arr_input['wpss_buttons_style_field'] );
	$options['wpss_buttons_position_field'] = trim( $arr_input['wpss_buttons_position_field'] );
	$options['wpss_buttons_list_field'] = trim( $arr_input['wpss_buttons_list_field'] );
	$options['wpss_buttons_icontext_field'] = trim( $arr_input['wpss_buttons_icontext_field'] );
	return $options;

}

?>