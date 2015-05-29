<?php
/*
Template Name: Home Page
*/
$excerpts = get_posts(array(
    'post_type'=>'post',
    'posts_per_page' => 3
));
?>
<?php get_header(); ?>

<div class="strata strata-content strata-home-content">
    <div class="container">
        <div class="row">
            <?php $buttons = get_field('home_page_buttons'); if ($buttons): ?>
                <?php foreach($buttons as $button): ?>
                    <div class="col-md-4">
                        <a href="<?php echo $button['page']; ?>" class="home-banner home-banner-left" style="background-image: url(<?php echo $button['background_image']?>)">
                            <h2><?php echo $button['text']; ?></h2>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Recent Blog Entries</h3>
                <?php $saved_post = $post; foreach ($excerpts as $post): setup_postdata($post); ?>
                    <div class="excerpt">
                        <p class="title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></p>
                        <?php the_excerpt(); ?>
                    </div>
                <?php endforeach; $post = $saved_post; setup_postdata($post); ?>
            </div>
            <div class="col-md-4">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

            <div class="col-md-4">
                <h3>Contact Us</h3>
                <?php echo do_shortcode('[contact-form-7 id="89" title="Contact form"]'); ?>
                <!--

Form looks like this:
<div class="row">
    <div class="col-xs-12">
        <p>Your Name *
            [text* name]</p>
    </div>
    <div class="col-xs-12">
        <p>Your Email *
            [email* email]</p>
    </div>
    <div class="col-xs-12">
        <p>Your Phone
            [tel telephone]</p>
    </div>
    <div class="col-xs-6">
        <p>Property Type
            [text property-type]</p>
    </div>

    <div class="col-xs-6">
        <p>Community
            [text community]</p>
    </div>
    <div class="col-xs-6 col-xs-offset-6">
        <p>
            [submit]</p>
    </div>
</div>

Output template looks like this:

Name:
[name]

Email:
[email]

Phone:
[telephone]

Property Type:
[property-type]

Community:
[text community]
-->
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
