
<?php $global_blocks = get_field('global_blocks'); ?>
<?php if ($global_blocks): ?>
    <?php foreach ($global_blocks as $item): ?>
        <?php the_global_block($item['global_block']); ?>
    <?php endforeach ?>
<?php endif; ?>


<div class="strata strata-footer">
    <div class="container">
        <div class="row">
            <footer>

                <div class="col-md-9">
                    <?php
                    $footer_text = get_field('footer_text','options');
                    if ($footer_text) echo apply_filters('the_content',$footer_text);
                    ?>
                </div>
                <div class="col-md-3">
                    <div class="logo"> </div>
                </div>

            </footer>
        </div>
    </div>
</div>

<!-- OFF CANVAS MENU WRAPPERS... -->
</div>
<!--/#inner-wrap-->
</div>
<!--/#outer-wrap-->
<!-- END OFF CANVAS MENU WRAPPERS -->


<div style="display: none;">
    <!-- MMENU -->
    <nav id="mmenu" >
        <?php
        wp_nav_menu( array(
                'theme_location'    => 'mobile-menu',
                'depth'             => 2,
            )
        );
        ?>
    </nav>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-62257529-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

</body></html>