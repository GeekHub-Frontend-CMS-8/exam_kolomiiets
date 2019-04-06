<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gh-kolomiiets
 */

get_header();
?>
    <section class="single_one">
        <div class="content_center">
            <h2><?php the_title()?></h2>
            <div class="single_one_block">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </div>
        </div>
    </section>
<?php
get_footer();
