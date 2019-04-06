<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-kolomiiets
 */

?>


<section class="logo_footer">
    <div class="content_center">
        <div class="foot_mail">
            <div class="logo_top">
                    <?php the_custom_logo(); ?>
            </div>
            <div class="fut_mail_block">
                <p>Sign up our newsletter</p>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="content_center">
        <div class="flex_foot">
            <div class="footer_copyr">
                <?php print_r(get_theme_mod('text_copyration')) ?>
            </div>
            <div class="footer_social">
                <a href="<?php print_r(get_theme_mod('text_one_copyration')) ?>"><img
                            src="<?php print_r(get_theme_mod('text_one_ico_copyration')) ?>"> </a>
                <a href="<?php print_r(get_theme_mod('text_two_copyration')) ?>"><img
                            src="<?php print_r(get_theme_mod('text_two_ico_copyration')) ?>"></a>
                <a href="<?php print_r(get_theme_mod('text_thre_copyration')) ?>"><img
                            src="<?php print_r(get_theme_mod('text_thre_ico_copyration')) ?>"></a>
                <a href="<?php print_r(get_theme_mod('text_fa_copyration')) ?>"><img
                            src="<?php print_r(get_theme_mod('text_fa_ico_copyration')) ?>"></a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
