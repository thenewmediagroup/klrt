<?php

class BreadCrumbWalker extends Walker_Nav_Menu
{

    function start_lvl( &$output, $depth = 0, $args = array() )
    {
    }

    function end_lvl( &$output, $depth = 0, $args = array() )
    {
    }

    function start_el( &$output, $item, $depth, $args )
    {

        //Check if menu item is an ancestor of the current page
        $classes           = empty( $item->classes ) ? array() : (array)$item->classes;

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        if( in_array('current-menu-item', $classes) OR in_array( 'current-menu-parent', $classes ) ){
            //Link tag attributes
            $attributes = !empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
            $attributes .= !empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
            $attributes .= !empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
            $attributes .= !empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

            //Add to the HTML output

            if( in_array('current-menu-item', $classes) ){
                $output .= '<li>'.$title.'</li>';
            }else{
                $output .= '<li><a' . $attributes . '>' . $title . '</a></li>';
            }

        }//if current

    }//start_el

}