<?php

// Register navigation menus
register_nav_menus(
    array(
        'Primary-menu' => 'Top Menu', 
    )
);

function add_class_li($classes, $item, $args) {
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->active_class) && in_array('current-menu-item', $classes)) {
        $classes[] = $args->active_class;
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_li', 10, 3);


// Add classes to navigation menu anchor tags
function add_anchor_class($attr, $item, $args) {
    if (isset($args->a_class)) {
        $attr['class'] = $args->a_class;
    }
    return $attr;
}
add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);


add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );

?>
