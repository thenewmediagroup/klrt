<div class="blog-post">
    <h3><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a></h3>
    <div class="clearfix">
    <?php
    if (is_single()) {
        echo do_shortcode('[mashshare]');
    } else {
        echo do_shortcode('[mashshare shares="true" buttons="false"]');
    }
    ?>
    </div>
    <p><small>
            <?php the_time('F j, Y'); ?>
        </small></p>
    excerpt
    <?php the_excerpt(); ?>
</div>