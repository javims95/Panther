<?php

class PNT_Nav_Walker extends Walker_Nav_Menu {
    
    private $curItem;
    
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        
        $indent = str_repeat( $t, $depth );
        
        $classes = array( 'dropdown-content' );
        
        $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
 
        $output .= "{$n}{$indent}<ul id='dropdown-{$this->curItem->ID}'$class_names>{$n}";
        
    }
    
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );
        $output .= "$indent</ul>{$n}";
        
    }
    
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        
        $this->curItem = $item;
        
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
 
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $classes[] = 'nav-item';
        
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
        
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        
        $output .= $indent;
        
        $attrs = array();
        $attrs['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $attrs['target'] = ! empty( $item->target )     ? $item->target     : '';
        $attrs['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $attrs['href']   = ! empty( $item->url )        ? $item->url        : '';
        
        $attrs = apply_filters( 'nav_menu_link_attributes', $attrs, $item, $args, $depth );
 
        $attributes = '';
        foreach ( $attrs as $attr => $value ) {
            
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
            
        }
        
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );        
        
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        
        $item_output = "<li>";
        $item_output .= $args->before;
        $item_output .= '<a'. $attributes . " $class_names" .'>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        
        /*echo "<pre>";
        var_dump( $item );
        echo "</pre>";*/
        
    }
    
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "</li>{$n}";
        
    }
    
}