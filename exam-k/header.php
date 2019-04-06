<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-kolomiiets
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<header>
    <div class="content_center">
        <div class="header_main">
            <div class="overlay">
                <nav class="overlayMenu">
                    <?php
                    $args = array(
                        'theme_location' => 'primary',
                        'items_wrap' => ' <ul><li><a href="#" role="menuitem"> %3$s </a></li> </ul>',
                    );
                    wp_nav_menu($args);
                    ?>

                </nav>
            </div>
            <div class="navBurger" role="navigation" id="navToggle"></div>
            <div class="logo_top">
                <?php the_custom_logo(); ?>
            </div>
            <div class="search" id="main">
                <?php get_sidebar(); ?>
            </div>

        </div>

    </div>
</header>
