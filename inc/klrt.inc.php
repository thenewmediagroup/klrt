<?php
/**
 * Created by PhpStorm.
 * User: mikelathrop
 * Date: 15-05-14
 * Time: 11:10 AM
 */

// ==================================================================================== Constants for the theme...

define('FACEBOOK_LINK',  "https://www.facebook.com/pages/KLRT-Commercial/402379763280005");
define('TWITTER_LINK', "https://twitter.com/klrtcommercial");
define('PINTEREST_LINK', "https://www.pinterest.com/klrtcommercial/");
define('FEED_LINK', site_url('feed'));

// ==================================================================================== Helper - if page is in menu

function page_in_menu( $menu = null, $object_id = null ) {
    $menu_object = wp_get_nav_menu_items( esc_attr( $menu ) );
    if( ! $menu_object )
        return false;
    $menu_items = wp_list_pluck( $menu_object, 'object_id' );
    if( !$object_id ) {
        global $post;
        $object_id = get_queried_object_id();
    }
    return in_array( (int) $object_id, $menu_items );
}

// ==================================================================================== Prettify the excerpts

function custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



function new_excerpt_more( $more ) {
    return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( '&#133; READ MORE', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// ==================================================================================== Sitemap Shortcode

function klrt_sitemap_func(){
    ob_start();
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'depth' => 2,
    ));
    $pages = ob_get_clean();
    $blog_posts = get_posts(array(
        'post_type'=>'post',
        'posts_per_page'=>-1
    ));
    $string = "";
    $string .= "<h3>Pages</h3>";
    $string .= $pages;
    if (count($blog_posts)>1){
        $string .= "<h3>Blog Posts</h3>";
        $string .= "<ul>";
        foreach($blog_posts as $p){
            $string .= "<li>";
            $string .= "<a href='".get_permalink($p->ID)."'>";
            $string .= $p->post_title;
            $string .= "</a>";
            $string .= "</li>";
        }
    }



    return $string;
}
add_shortcode('klrt_sitemap', 'klrt_sitemap_func');



