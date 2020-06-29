<?php
/**
 * Register widget area
 */
function widgets_init()
{
    register_sidebar(
        array(
        'name'          => esc_html__('Sidebar', 'starter-theme'),
        'id'            => 'sidebar',
        'description'   => esc_html__('Add widgets here.', 'rstarter-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<p class="widget-title h5">',
        'after_title'   => '</p>',
        ) 
    );
}
add_action('widgets_init', 'widgets_init');