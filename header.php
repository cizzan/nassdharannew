<!DOCTYPE html>
<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="zxx" style="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>National Academy | <?php the_title(); ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->

    <!-- <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/responsive.css" /> -->
    <?php wp_head(); ?>

</head>

<body>
    <?php $topMenu = get_field('top_menu', 5); ?>

    <header>
        <!-- header-top-area-start -->
        <div class="header-top-area gray-bg-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="header-left-wrapper">
                            <ul class="header-top-text">
                                <li>
                                    <a href="https://www.google.com/maps/place/National+Academy/@26.816439,87.2853253,17z/data=!3m1!4b1!4m5!3m4!1s0x39ef419dc25ab3fd:0xf51d1d4a699d0d24!8m2!3d26.816439!4d87.287514" target="_blank">
                                        <i class="ti-location-pin"></i>
                                        <?php
                                        $arr = explode(' ', $topMenu['address']);
                                        echo $arr[0]; ?>

                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "tel:" . $topMenu['phone']; ?>">
                                        <i class="ti-mobile"></i>
                                        <?php echo $topMenu['phone'];  ?>

                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "mailto:" . $topMenu['email']; ?>">
                                        <i class="ti-email"></i>
                                        <?php echo $topMenu['email'];  ?>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-right-wrapper">
                            <ul class="header-right-text floatright">
                                <?php if (have_rows('social_sites', 5)) : ?>

                                    <?php while (have_rows('social_sites', 5)) : the_row();
                                        $socialSiteLink = get_sub_field('social_site_link');
                                    ?>
                                        <?php if ($socialSiteLink) : ?>

                                            <li>
                                                <a href="<?php echo $socialSiteLink; ?>" target="_blank"><i class="
                                        <?php
                                            $str = $socialSiteLink;
                                            preg_match('/https:\/\/www.(.*?).com/', $str, $match);
                                            echo "fab fa-" . $match[1]; ?>">
                                                    </i></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <!-- <li>
                                    <a href="login.html"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="fab fa-instagram"></i></a>
                                </li> -->
                                <li><a href="career/">Career</a></li>
                                <li><a href="download/">Downloads</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top-area-end -->
        <!-- main-menu-area-start -->
        <div class="main-menu-area" id="navbar">
            <div class="container-fluid">

                <div class="col-lg-3 col-md-2 col-sm-6 col-xs-7 col-sm logo-area">
                    <div class="logo">
                        <?php if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        } ?>
                        <!-- <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo 1.png" alt="" /></a> -->
                    </div>
                </div>

                <div class="col-md-7 col-sm-4 col-xs-3">

                    <div class="main-menu text-center">

                        <nav style="display: block;">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => 'ul',
                                'menu_class' => 'sub-menu text-left',

                            ));

                            ?>


                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-2 col-xs-2 clearfix">
                    <div class="header-search">
                        <!-- <div class="search-wrapper">
                            <a href="javascript:void(0);" class="search-open">
                                <span class="ti-search"></span>
                            </a>
                            <div class="search-inside animated bounceInUp">
                                <i class="icon-close search-close fa fa-times"></i>
                                <div class="search-overlay"></div>
                                <div class="position-center-center">
                                    <div class="search">
                                        <form>
                                            <input type="search" placeholder="Search Here" />
                                            <button type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="header-button floatright hidden-sm hidden-xs">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSffN4DLn9K36EIiWFEqBjaPsCEz7H7RlrFidKY49nVhlF9OHA/viewform?vc=0&c=0&w=1&fbclid=IwAR0yy20cKzshgC5EJ7Epje2LIcJEY_ekVzzbOi294VI-5mCSwdKqg0ab8TA" target="_blank">
                                <blink>Apply Now</blink>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
        <div class="header-button floating-button hidden-lg hidden-md">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSffN4DLn9K36EIiWFEqBjaPsCEz7H7RlrFidKY49nVhlF9OHA/viewform?vc=0&c=0&w=1&fbclid=IwAR0yy20cKzshgC5EJ7Epje2LIcJEY_ekVzzbOi294VI-5mCSwdKqg0ab8TA" target="_blank">
                <blink>Admission Open! Click to Apply</blink>
            </a>
        </div>
        <!-- main-menu-area-end -->
    </header>