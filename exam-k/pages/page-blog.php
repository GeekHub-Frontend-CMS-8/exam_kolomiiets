<?php /* Template Name: page blog*/
get_header() ?>

<section class="single_one">
    <div class="content_center">
        <div>
            <?php the_title() ?>
        </div>

<div class="flex_blog_p">
    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'paged' => $paged
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="blog_post">
                <h2><?php the_title() ?></h2>
                <?php the_excerpt() ?>
                <a href="<?php the_permalink() ?>"> NEXT PAGE</a>
            </div>
        <?php endwhile; ?>
    <?php else :endif; ?>
</div>


    </div>
</section>


<?php get_footer() ?>
