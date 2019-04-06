<?php

add_action('init', 'exam_k_post_type');
function exam_k_post_type()
{
    register_post_type('slider_home', array(
        'public' => true,
        'supports' => array(
            'title',
            'thumbnail',
            'editor',
        ),
        'labels' => array(
            'name' => __('Img slider'),
            'exam_k',
            'add_new' => 'Add',
            'all_items' => 'All Img'
        )

    ));
    register_post_type('portfolio', array(
        'public' => true,
        'supports' => array(
            'title',
            'thumbnail',
            'editor',
        ),
        'labels' => array(
            'name' => __('Talent'),
            'exam_k',
            'add_new' => 'Add',
            'all_items' => 'All Talent'
        )

    ));
}
