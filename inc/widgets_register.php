<?php

// Sidebar Register Function
function wl_widget_register(){
    register_sidebar( array(
        'name' => __('Main Widget Area', 'shourovhasan'),
        'id' => 'sidebar-1',
        'description' => __('Appears in the sidebar in blog page and also in others page', 'shourovhasan'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_after' => '<h2 class="child_tittle">',
        'after_after' => '</h2>',
    ));

    register_sidebar( array(
        'name' => __('Footer 1', 'shourovhasan'),
        'id' => 'footer-1',
        'description' => __('Appears in the sidebar in blog page and also in others page', 'shourovhasan'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_after' => '<h2 class="child_tittle">',
        'after_after' => '</h2>',
    ));

    register_sidebar( array(
        'name' => __('Footer 2', 'shourovhasan'),
        'id' => 'footer-2',
        'description' => __('Appears in the sidebar in blog page and also in others page', 'shourovhasan'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_after' => '<h2 class="child_tittle">',
        'after_after' => '</h2>',
    ));

    register_sidebar( array(
        'name' => __('Footer 3', 'shourovhasan'),
        'id' => 'footer-3',
        'description' => __('Appears in the sidebar in blog page and also in others page', 'shourovhasan'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_after' => '<h2 class="child_tittle">',
        'after_after' => '</h2>',
    ));
    register_sidebar( array(
        'name' => __('Homepage Widget', 'shourovhasan'),
        'id' => 'home-1',
        'description' => __('Appears in the sidebar in blog page and also in others page', 'shourovhasan'),
        'before_widget' => '<div class="child_home">',
        'after_widget' => '</div>',
        'before_after' => '<h2 class="child_tittle">',
        'after_after' => '</h2>',
    ));
}
add_action('widgets_init', 'wl_widget_register');