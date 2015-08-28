<?php
define('GS_THEME_WP_MINIMUM_VERSION', '4.3');
define('GS_THEME_VERSION', '1.0');
define('GS_THEME_DIR', plugin_dir_path(__FILE__));
define('GS_THEME_URL', get_template_directory_uri());
define('GS_THEME_LANGUAGES', get_template_directory() .'/languages');

require_once(GS_THEME_DIR . 'includes/wp_bootstrap_navwalker.php');
require_once(GS_THEME_DIR . 'includes/class.gstheme.php');

GSTheme::run();

