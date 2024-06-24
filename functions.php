<?php
function exam_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu')
    ));
}

add_action('after_setup_theme', 'exam_theme_setup');

function exam_theme_scripts() {
    
    wp_enqueue_script('exam-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
    
    
    wp_enqueue_style('exam-style', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'exam_theme_scripts');

function theme_prefix_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
    ) );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function register_project_post_type() {
    $labels = array(
        'name'               => 'Проекты',
        'singular_name'      => 'Проект',
        'menu_name'          => 'Проекты',
        'add_new'            => 'Добавить новый',
        'add_new_item'       => 'Добавить новый проект',
        'edit_item'          => 'Редактировать проект',
        'new_item'           => 'Новый проект',
        'view_item'          => 'Просмотреть проект',
        'search_items'       => 'Искать проекты',
        'not_found'          => 'Проекты не найдены',
        'not_found_in_trash' => 'Проекты не найдены в корзине',
        'parent_item_colon'  => '',
        'all_items'          => 'Все проекты',
        'archives'           => 'Архивы проектов',
        'insert_into_item'   => 'Вставить в проект',
        'uploaded_to_this_item' => 'Загружено для этого проекта',
        'filter_items_list'  => 'Фильтровать список проектов',
        'items_list_navigation' => 'Навигация по списку проектов',
        'items_list'         => 'Список проектов',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'register_project_post_type' );



?>