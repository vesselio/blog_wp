<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <?php // Google Chrome Frame for IE ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php bloginfo('name'); ?><?php wp_title(" | ",true); ?></title>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

    </head>

    <body <?php body_class(); ?>>
        <div class='wrapper'>
            <header>
                <nav class="navbar navbar-default hero" role="navigation">
                    <div class='container'>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="https://www.vessel.io/">
                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/vessel-logo-2x.png" width='34' height='30' />
                            </a>
                        </div>

                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li class='active' style='margin-left:25px;'>
                                    <a href="<?php echo home_url(); ?>">Blog</a>
                                </li>
                                <p class="navbar-text">
                                    <em>
                                        The mobile growth blog.
                                    </em>
                                </p>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>