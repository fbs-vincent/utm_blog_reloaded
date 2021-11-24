<?php 

require get_template_directory() . '/includes/function-enqueue.php'; 
require get_template_directory() . '/includes/function-support.php'; 
require get_template_directory() . '/includes/function-widget.php'; 

function wpse_modify_category_query( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ( $query->is_category() ) {
            $query->set( 'posts_per_page', 4 );
            $query->set( 'paged',  ( get_query_var('paged') ? get_query_var('paged') : 1));
            // $query->set( 'offset', 1 );
        } 
    } 
}
add_action( 'pre_get_posts', 'wpse_modify_category_query' );

