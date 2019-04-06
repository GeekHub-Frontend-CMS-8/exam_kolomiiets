<?php
/**
 * META BOX for added link (for page 'Mass media')
 * Adds a meta box to the post editing screen
 */

/* -----------------------------------------  META-BOX 'portfolio'  --------------------------------------------- */
/* ---------------------------------------------------------------------------------- */
/**/


// подключаем функцию активации мета блока (my_portfolio_meta_fields)
add_action('add_meta_boxes', 'my_portfolio_meta_fields');

function my_portfolio_meta_fields()
{
    add_meta_box('portfolio_meta_fields', 'Activity', 'portfolio_meta_fields_box_func', 'portfolio');
}

// код блока
function portfolio_meta_fields_box_func($post)
{
    ?>


    <p><?php $mark_v = get_post_meta($post->ID, 'portfolio', 1); ?>
    <?php $proces = '<p class="project-proces-yellow">Actor</p>' ?>
    <label><input type="radio" name="portfolio_meta[portfolio]" value="" <?php checked($mark_v, ''); ?> />none</label>
    </br> <label><input type="radio" name="portfolio_meta[portfolio]"
                        value="actor" <?php checked($mark_v, 'actor'); ?> /> Actor</label>
    </br> <label><input type="radio" name="portfolio_meta[portfolio]"
                        value="musician" <?php checked($mark_v, 'musician'); ?> /> Musician</label>
    </br> <label><input type="radio" name="portfolio_meta[portfolio]"
                        value="comedian" <?php checked($mark_v, 'comedian'); ?> /> Comedian</label>
    </br> <label><input type="radio" name="portfolio_meta[portfolio]"
                        value="model" <?php checked($mark_v, 'model'); ?> /> Model</label>
    </p><?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'my_portfolio_meta_fields_update');

## Сохраняем данные, при сохранении поста
function my_portfolio_meta_fields_update($post_id)
{
    // базовая проверка
    if (
        empty($_POST['portfolio_meta'])
        || wp_is_post_autosave($post_id)
        || wp_is_post_revision($post_id)
    )
        return false;

    // Все ОК! Теперь, нужно сохранить/удалить данные
    $_POST['portfolio_meta'] = array_map('sanitize_text_field', $_POST['portfolio_meta']); // чистим все данные от пробелов по краям
    foreach ($_POST['portfolio_meta'] as $key => $value) {
        if (empty($value)) {
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }

    return $post_id;
}

//--------------
