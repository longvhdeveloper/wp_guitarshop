<?php
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

class GSTheme
{
    public static $instance;

    protected function __construct(){}
    protected function __clone(){}

    public static function get_instance()
    {
        if (self::$instance === null) {
            self::$instance = new GSTheme();
        }

        return self::$instance;
    }

    public static function run()
    {
        //register script and css
        add_action('wp_enqueue_scripts', function(){
            self::register_css();
            self::register_js();
        });

        //register menu
        add_action('init', function(){
            register_nav_menu('primary', __('Primary Menu', 'gstheme'));
        });


        return self::$instance;
    }

    public static function register_css()
    {
        //register css
        wp_register_style('boostrap', GS_THEME_URL . '/scripts/css/bootstrap.min.css');
        wp_register_style('font_awesome', GS_THEME_URL . '/scripts/css/font-awesome.min.css');
        wp_register_style('pretty_photo', GS_THEME_URL . '/scripts/css/prettyPhoto.css');
        wp_register_style('price_range', GS_THEME_URL . '/scripts/css/price-range.css');
        wp_register_style('animate', GS_THEME_URL . '/scripts/css/animate.css');
        wp_register_style('responsive', GS_THEME_URL . '/scripts/css/responsive.css');
        wp_register_style('main', GS_THEME_URL . '/scripts/css/main.css');

        //enqueue style
        wp_enqueue_style('boostrap');
        wp_enqueue_style('font_awesome');
        wp_enqueue_style('pretty_photo');
        wp_enqueue_style('price_range');
        wp_enqueue_style('animate');
        wp_enqueue_style('responsive');
        wp_enqueue_style('main');
    }

    public static function register_js()
    {
        wp_enqueue_script('jquery', GS_THEME_URL . '/scripts/js/jquery.js');
        wp_enqueue_script('boostrap_js', GS_THEME_URL . '/scripts/js/bootstrap.min.js', array('jquery'));
        wp_enqueue_script('scroll_up', GS_THEME_URL . '/scripts/js/jquery.scrollUp.min.js', array('jquery'));
        wp_enqueue_script('price_range', GS_THEME_URL . '/scripts/js/price-range.js');
        wp_enqueue_script('pretty_photo', GS_THEME_URL . '/scripts/js/jquery.prettyPhoto.js', array('jquery'));
        wp_enqueue_script('main', GS_THEME_URL . '/scripts/js/main.js');

        //enqueue script
        wp_enqueue_script('boostrap_js');
        wp_enqueue_script('scroll_up');
        wp_enqueue_script('price_range');
        wp_enqueue_script('pretty_photo');
        wp_enqueue_script('main');
    }

    public static function get_primary_menu()
    {
        return wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => false,
                'container_class'   => 'collapse navbar-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker(),
                'echo' => false,
            )
        );
    }
}