<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="strata strata-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content">

                    <div class="crumb">
                        <ul>
                            <li><a href="<?php if( get_option( 'show_on_front' ) == 'page' ) echo get_permalink( get_option('page_for_posts' ) );
                                else echo bloginfo('url');?>">Blog</a></li>
                            <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>

                        </ul>
                    </div>

                    <?php get_template_part('content','post'); ?>

                    <div class="paginate">
                        <div class="pull-left"><?php echo previous_post_link('%link','<span class="glyphicon glyphicon-chevron-left"></span> Previous'); ?></div>
                        <div class="pull-right"><?php echo next_post_link('%link', 'Next <span class="glyphicon glyphicon-chevron-right"></span>'); ?></div>
                    </div>


                </div>
                <div class="col-md-4">
                    <?php get_template_part('sidebar'); ?>
                </div>

            </div>
        </div>
    </div>

<?php endwhile; ?>
<?php get_footer(); ?>
