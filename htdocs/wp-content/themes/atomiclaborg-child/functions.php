<?php

function my_theme_enqueue_styles ()
{
    wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('carousel-style', get_stylesheet_directory_uri() . '/css/carousel.css', array('bootstrap-style'));
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('bootstrap-style'));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function register_nav_menus_function ()
{
    register_nav_menus(array(
        'top'    => 'Top Menu',
        'social' => 'Social Links Menu'
    ));
}

add_action('init', 'register_nav_menus_function');


/**
 * Class Custom_Menu_Walker
 */
class Custom_Menu_Walker extends Walker_Nav_Menu {
    var $current_item = 1;

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0 )
    {
        $my_menu = wp_get_nav_menu_object('top');

        $indent = ($depth) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names .'>';


        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

        $attributes = '';

        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $a_classees = ($this->current_item === $my_menu->count) ? 'btn btn-lg btn-primary' : '';


        $item_output = $args->before;
        $item_output .= '<a'. $attributes .' class="' . $a_classees . '">';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        $this->current_item++;
    }
}