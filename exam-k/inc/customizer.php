<?php
/**
 * gh-kolomiiets Theme Customizer
 *
 * @package gh-kolomiiets
 */
if (!function_exists('exam_k_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function exam_k_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on gh-kolomiiets, use a find and replace
         * to change 'exam-k' to the name of your theme in all the template files.
         */
        load_theme_textdomain('exam-k', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'exam-k'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));


        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'exam_k_setup');


add_action('customize_register', 'exam_k_customizer');

function exam_k_customizer($wp_customize)
{

    //--------------------copyration
    $wp_customize->add_section('my_copyration_seting', array(
        'title' => __('Copyration text', 'home'),
        'priority' => 32,
    ));
    //----- text copyration
    $wp_customize->add_setting('text_copyration', array(
        'default' => 'Test text ',
        'transport' => 'refresh',
    ));
    //----- text copyration
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text_copyration', array(
        'label' => __('Text copyration', 'home'),
        'section' => 'my_copyration_seting',
        'settings' => 'text_copyration',
    )));

    //--------------------social footer
    $wp_customize->add_section('my_social_seting', array(
        'title' => __('Footer Social', 'home'),
        'priority' => 33,
    ));
    //----- text social 1
    $wp_customize->add_setting('text_one_copyration', array(
        'default' => 'https://',
        'transport' => 'refresh',
    ));//
    //----- text social 1
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text_one_copyration', array(
        'label' => __('Social 1', 'home'),
        'section' => 'my_social_seting',
        'settings' => 'text_one_copyration',
    )));
    //----- text social 1
    $wp_customize->add_setting('text_one_ico_copyration', array(
        'default' => '',
        'transport' => 'refresh',
    ));////ico

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'text_one_ico)   copyration', array(
        'label' => __('Icon', 'home'),
        'section' => 'my_social_seting',
        'settings' => 'text_one_ico_copyration',
    )));


    //----- text social 2
    $wp_customize->add_setting('text_two_copyration', array(
        'default' => 'https://',
        'transport' => 'refresh',
    ));
    //----- text social 2
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text_two_copyration', array(
        'label' => __('Social 2', 'home'),
        'section' => 'my_social_seting',
        'settings' => 'text_two_copyration',
    )));
    //----- ico
    $wp_customize->add_setting('text_two_ico_copyration', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'text_two_ico_copyration', array(
        'label' => __('Icon', 'home'),
        'section' => 'my_social_seting',
        'settings' => 'text_two_ico_copyration',
    )));


    //----- text social 3
    $wp_customize->add_setting('text_thre_copyration', array(
        'default' => 'https://',
        'transport' => 'refresh',
    ));
    //----- text social 3
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text_thre_copyration', array(
        'label' => __('Social 3', 'home'),
        'section' => 'my_social_seting',
        'settings' => 'text_thre_copyration',
    )));
    //----- ico
    $wp_customize->add_setting('text_thre_ico_copyration', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'text_thre_ico_copyration', array(
        'label' => __('Icon', 'home'),
        'section' => 'my_social_seting',
        'settings' => 'text_thre_ico_copyration',
    )));


    //----- text social 3
    $wp_customize->add_setting('text_fo_copyration', array(
        'default' => 'https://',
        'transport' => 'refresh',
    ));


    //----- text social 4
    $wp_customize->add_setting('text_fa_copyration', array(
        'default' => 'https://',
        'transport' => 'refresh',
    ));
    //----- text social 4
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text_fa_copyration', array(
        'label' => __('Social 4', 'home'),
        'section' => 'my_social_seting',
        'settings' => 'text_fa_copyration',
    )));
    //----- text social 4
    $wp_customize->add_setting('text_fa_ico_copyration', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'text_fa_ico_copyration', array(
        'label' => __('Icon', 'home'),
        'section' => 'my_social_seting',
        'settings' => 'text_fa_ico_copyration',
    )));

    ///----------------------------
    //----- contact

    $wp_customize->add_section('my_conact_seting', array(
        'title' => __('Contact Page', 'home'),
        'priority' => 7,
    ));
    //content
    $wp_customize->add_setting('content_page_contact', array(
        'default' => 'Content',
        'transport' => 'refresh',
    ));
    //----- title
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'content_page_contact', array(
        'label' => __('Content', 'home'),
        'section' => 'my_conact_seting',
        'settings' => 'content_page_contact',
    )));

    //adressa
    $wp_customize->add_setting('addres_page_contact', array(
        'default' => 'Adressa',
        'transport' => 'refresh',
    ));
    //----- title
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'addres_page_contact', array(
        'label' => __('Adressa', 'home'),
        'section' => 'my_conact_seting',
        'settings' => 'addres_page_contact',
    )));

    //adressa
    $wp_customize->add_setting('phone_page_contact', array(
        'default' => '+3800000000000000',
        'transport' => 'refresh',
    ));
    //----- title
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'phone_page_contact', array(
        'label' => __('Phone', 'home'),
        'section' => 'my_conact_seting',
        'settings' => 'phone_page_contact',
    )));
    //post
    $wp_customize->add_setting('post_page_contact', array(
        'default' => 'zrazok@mail.com',
        'transport' => 'refresh',
    ));
    //----- title
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'post_page_contact', array(
        'label' => __('EMail', 'home'),
        'section' => 'my_conact_seting',
        'settings' => 'post_page_contact',
    )));


}

?>
