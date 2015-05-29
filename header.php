<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php wp_title(); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <style type="text/css">

        .strata-content {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/horizontal-stripe.png ) !important;
            background-position: center top !important;
            background-repeat: repeat-x !important;
        }
        .strata-home-content {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/horizontal-stripe-thick.png)!important;
            background-position: center top !important;
            background-repeat: repeat-x !important;
        }
    </style>
    <![endif]-->
    <?php wp_head(); ?>

    <!-- Fav and touch icons -->
    <!--[if IE]><link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"><![endif]-->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">

    <!--
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
<!-- OFF CANVAS MENU WRAPPERS... -->
<div id="outer-wrap">
    <div id="inner-wrap">
        <!-- END OFF CANVAS MENU WRAPPERS -->


        <!-- MOBILE NAV (note that the HTML this exposes is in the footer) -->
        <div class="strata mobile-navbar visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2"><a href="#mmenu"><i id="open_close"></i></a></div>
                    <div class="col-xs-10 text-right"><h1 class="logo"><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="strata mobile-spacer visible-xs visibel-sm">
            <!-- put here to push the rest of the content below the navbar. -->2
        </div>

        <div class="strata strata-header visible-lg visible-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="logo"><a href="<?php echo site_url(); ?>"><?php echo bloginfo('site_title'); ?></a></h1>
                    </div>
                    <div class="col-md-8 pull-right">
                        <ul class="social-media pull-right">
                            <li class="facebook"><a href="<?php echo FACEBOOK_LINK; ?>" target="_blank">Facebook</a></li>
                            <li class="twitter"><a href="<?php echo TWITTER_LINK; ?>" target="_blank">Twitter</a></li>
                            <!--<li class="linkedin"><a href="<?php /*echo LINKEDIN_LINK; */?>" target="_blank">LinkedIn</a></li>-->
                            <!--<li class="instagram"><a href="<?php /*echo INSTAGRAM_LINK; */?>" target="_blank">Instagram</a></li>-->
                            <li class="pinterest"><a href="<?php echo PINTEREST_LINK; ?>" target="_blank">Pinterest</a></li>
                            <!--<li class="googleplus"><a href="<?php /*echo GOOGLEPLUS_LINK; */?>" target="_blank">Google+</a></li>-->
                            <li class="feed"><a href="<?php echo FEED_LINK; ?>" target="_blank">RSS</a></li>
                        </ul>
                    </div>
                    <div class="col-md-8 pull-right">
                        <div class="pull-right">
                            <div class="search-form">
                                <?php // echo get_search_form(); ?>
                                <script type="text/javascript" src="http://idx.myrealpage.com/js/weblets/omnibox_wp.js"></script>
                                <div class="unibox-search unibox-search-regular">

                                    <div class="unibox-text-field">
                                        <button onclick="return uniboxSubmitted(this)" name="unibox-run" class="unibox-submit">Search</button>
                                        <input type="text" onkeydown="uniboxKeyDown(event,this)" onkeyup="uniboxKeyUp(event,this)" placeholder="Search" class="unibox-field">

                                    </div>

                                    <input type="hidden" value="recip" class="unibox-search-context" name="searchContext">
                                    <input type="hidden" value="12" class="unibox-search-region" name="searchRegion">
                                    <input type="hidden" value="32773" class="unibox-search-account" name="searchAccount">
                                    <input type="hidden" value="/search-listings" class="unibox-search-result-page" name="searchResultPage">
                                    <input type="hidden" value="AUTO" class="unibox-search-listing-type" name="searchListingType">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'depth' => 2,
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>



