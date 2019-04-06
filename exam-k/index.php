<?php /* Template Name: Home page*/

get_header();
?>
    <section class="top_home">
        <div class="style_home_top">
            <img src="<?php the_post_thumbnail_url() ?>">
        </div>
        <div class="content_center">
            <div class="top_home_flex">
                <div class="top_home_block_column">
                    <a href="<?php print_r(get_theme_mod('text_one_copyration')) ?>"><img
                                src="<?php print_r(get_theme_mod('text_one_ico_copyration')) ?>"> </a>
                    <a href="<?php print_r(get_theme_mod('text_two_copyration')) ?>"><img
                                src="<?php print_r(get_theme_mod('text_two_ico_copyration')) ?>"></a>
                    <a href="<?php print_r(get_theme_mod('text_thre_copyration')) ?>"><img
                                src="<?php print_r(get_theme_mod('text_thre_ico_copyration')) ?>"></a>
                    <a href="<?php print_r(get_theme_mod('text_fa_copyration')) ?>"><img
                                src="<?php print_r(get_theme_mod('text_fa_ico_copyration')) ?>"></a>
                </div>
                <div class="top_home_block">
                    <?php $about_us = new WP_Query(array('post_type' => 'slider_home')); ?>
                    <?php if ($about_us->have_posts()) : ?>
                        <div class="top_home_block_slide">
                            <?php while ($about_us->have_posts()) :
                                $about_us->the_post(); ?>
                                <div>
                                    <img src="<?php the_post_thumbnail_url() ?>">
                                    <div class="top_home_text">
                                        <h3><?php the_title() ?></h3>
                                        <?php the_content() ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else :
                    endif; ?>
                </div>

            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="content_center">
            <div class="portfolio-content_block">
                <div class="portfolio-content_block_bt_bt button-group filters-button-group">
                    <a class="button is-checked" data-filter="*">All</a>
                    <a class="button" data-filter=".actor">Actor</a>
                    <a class="button" data-filter=".musician">Musician</a>
                    <a class="button" data-filter=".comedian">Comedian</a>
                    <a class="button" data-filter=".model">Model</a>
                </div>
                <!--         ------------------------------------- -->
                <div class="portfolio-content_block_img">
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        <?php $about_us = new WP_Query(array('post_type' => 'portfolio')); ?>
                        <?php if ($about_us->have_posts()) : ?>
                            <?php while ($about_us->have_posts()) :
                                $about_us->the_post(); ?>
                                <div class="grid-item element-item <?php echo get_post_meta($post->ID, 'portfolio', true); ?>"
                                     data-category="  <?php echo get_post_meta($post->ID, 'portfolio', true); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>"/>
                                </div>
                            <?php endwhile; ?>
                        <?php else :
                        endif; ?>
                    </div>
                </div>
            </div>
    </section>
    <section class="latest">
        <div class="content_center">
            <h3>Latest News</h3>
            <div class="latest_flex">
                <div class="latest_flex_block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle_3@2x.png">
                    <div>
                        <h4>5 Reasons To Keep Your Beauty Salon
                            Reservation</h4>
                        <p>8 March, 2020</p>
                    </div>
                </div>
                <div class="latest_flex_block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle_3@2x.png">
                    <div>
                        <h4>5 Reasons To Keep Your Beauty Salon
                            Reservation</h4>
                        <p>8 March, 2020</p>
                    </div>
                </div>
                <div class="latest_flex_block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle_3@2x.png">
                  <div>
                      <h4>5 Reasons To Keep Your Beauty Salon
                          Reservation</h4>
                      <p>8 March, 2020</p>
                  </div>
                </div>

            </div>
        </div>
    </section>
<?php
get_sidebar();
get_footer();
