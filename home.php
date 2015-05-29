<?php get_header(); ?>
<div class="strata strata-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 content">
                <div class="crumb">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        //'depth' => 2,
                        'walker' => new BreadcrumbWalker()
                    ));
                    ?>
                </div>


                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('content','excerpt'); ?>
                <?php endwhile; ?>

                <?php
                // Pagination:
                global $wp_query;
                $big = 999999999; // need an unlikely integer
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages
                ) );
                ?>
            </div>
            <div class="col-md-4 sidebar">
                <?php get_template_part('sidebar', $post->post_type); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
