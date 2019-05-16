<?php

// ---------------------------------------------------------
// All Buttons File
// ---------------------------------------------------------

require_once WPSS_PLUGIN_PARTIAL_TEMPLATE_PATH . "buttons_show_hide.php";
require_once WPSS_PLUGIN_PARTIAL_TEMPLATE_PATH . "buttons_position.php";
require_once WPSS_PLUGIN_PARTIAL_TEMPLATE_PATH . "buttons_style.php";
require_once WPSS_PLUGIN_PARTIAL_TEMPLATE_PATH . "buttons_list.php";
require_once WPSS_PLUGIN_PARTIAL_TEMPLATE_PATH . "buttons_icon_text.php";

// ---------------------------------------------------------
// Validate User Submitted Settings Input (using trim() see @http://php.net/trim)
// ---------------------------------------------------------
require_once WPSS_PLUGIN_INCLUDES_PATH . "/validate.php";



// ---------------------------------------------------------
// Show Buttons to Front Page
// ---------------------------------------------------------
require_once WPSS_PLUGIN_INCLUDES_PATH . "/render_front_icons.php";



?>