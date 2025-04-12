<?php
class WP_Bootstrap_Navwalker extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
    	$submenu_class = ($depth >= 1) ? 'dropdown-menu-sub' : 'dropdown-menu';
    	$output .= "\n$indent<ul class=\"$submenu_class\">\n";
	}

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $has_children = in_array('menu-item-has-children', $classes);

    $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ));
    if ($has_children) {
        $class_names .= ' dropdown has-submenu';
    }

    $output .= "<li class=\"" . esc_attr( $class_names ) . "\">";

    $atts = array();
    $atts['href'] = ! empty( $item->url ) ? $item->url : '#';
    $atts['class'] = $has_children ? 'nav-link sub-menu' : 'nav-link';
    if ($has_children) {
        $atts['data-bs-toggle'] = 'dropdown';
        $atts['role'] = 'button';
        $atts['aria-expanded'] = 'false';
    }

    $attributes = '';
    foreach ( $atts as $attr => $value ) {
        $attributes .= " $attr=\"" . esc_attr( $value ) . "\"";
    }

    $title = apply_filters( 'the_title', $item->title, $item->ID );

    $item_output  = $args->before;
    $item_output .= "<a$attributes>";
    $item_output .= $args->link_before . $title . $args->link_after;
    $item_output .= "</a>";
    $item_output .= $args->after;

    $output .= $item_output;
}


    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}
?>
