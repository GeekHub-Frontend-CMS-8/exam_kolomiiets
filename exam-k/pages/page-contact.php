<?php /* Template Name: page contact*/
get_header() ?>

<section class="contact">
    <div class="content_center">
        <div class="contact_block">
            <div class="contact_block_bg_title">
                <img src="<?php the_post_thumbnail_url(); ?>">
                <h2><?php the_title() ?></h2>
            </div>
            <div class="contact_block_main">
                <p><?php print_r(get_theme_mod('content_page_contact')) ?></p>
                <div class="contact_block_main_a">

                    <div class="contact_block_main_ad">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/home.png"><?php print_r(get_theme_mod('addres_page_contact')) ?></p>

                    </div>
                    <div class="contact_block_main_ph">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/phone-call.png"><?php print_r(get_theme_mod('phone_page_contact')) ?></p>

                    </div>
                    <div class="contact_block_main_ma">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png"><?php print_r(get_theme_mod('post_page_contact')) ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php get_footer() ?>
