<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gh-kolomiiets
 */

get_header();
?>
        <div class="error404_page">
                <div class="content_center">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'exam-k' ); ?></p>
                    <a href="<?php echo get_home_url() ?>">Go to home page!</a>
                </div>
        </div>

<?php
get_footer();
