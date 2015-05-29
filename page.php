
<?php get_header(); ?>
<div class="strata strata-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="crumb">
                    <?php
                    if( page_in_menu( 'Primary Navigation', $post->ID ) ) {
                        // breadcrumb!
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            //'depth' => 2,
                            'walker' => new BreadcrumbWalker()
                        ));
                    } else {
                        // title!
                        ?>
                        <ul><li><?php the_title(); ?></li></ul>
                        <?php
                    }
                    ?>
                </div>
                <?php while(have_posts()): the_post(); ?>
                    <?php get_template_part('content', $post->post_type); ?>
                <?php endwhile; ?>
            </div>
            <div class="col-md-4">
                <?php get_template_part('sidebar'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
