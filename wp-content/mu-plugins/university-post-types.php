<?php
function university_posts_types() {
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'События',
            'add_new_item' => 'Добавить новое событие',
            'edit_item' => 'Изменить Событие',
            'all_items' => 'Все События',
            'singular_name' => 'Событие'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));
}

add_action('init', 'university_posts_types');
?>