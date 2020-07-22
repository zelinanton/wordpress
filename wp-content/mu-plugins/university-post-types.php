<?php
function university_posts_types() {
    // Campus Post Type
    register_post_type('campus', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'campuses'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Университеты',
            'add_new_item' => 'Добавить новый Университет',
            'edit_item' => 'Изменить Университет',
            'all_items' => 'Все Университеты',
            'singular_name' => 'Университет'
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));

    // Event Post Type
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

    //Program Post Type

    register_post_type('program', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Программы',
            'add_new_item' => 'Добавить новую программу',
            'edit_item' => 'Изменить Программу',
            'all_items' => 'Все Программы',
            'singular_name' => 'Программа'
        ),
        'menu_icon' => 'dashicons-editor-kitchensink'
    ));

    //Professor Post Type

    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Профессоры',
            'add_new_item' => 'Добавить нового профессора',
            'edit_item' => 'Изменить Профессора',
            'all_items' => 'Все Профессоры',
            'singular_name' => 'Профессор'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}

add_action('init', 'university_posts_types');
?>