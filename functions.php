<?php
date_default_timezone_set('Kathmandu');
//Load stylesheets
function load_stylesheets()
{
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

//Load scripts
function load_scripts()
{
    //wp_deregister_script('jquery');

    wp_register_script('jquery11', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.0.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery11');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('headline', get_template_directory_uri() . '/assets/js/headline.js', array(), 1, 1, 1);
    wp_enqueue_script('headline');

    wp_register_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), 1, 1, 1);
    wp_enqueue_script('magnific');

    wp_register_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), 1, 1, 1);
    wp_enqueue_script('scrollUp');

    wp_register_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), 1, 1, 1);
    wp_enqueue_script('counterup');

    wp_register_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), 1, 1, 1);
    wp_enqueue_script('waypoints');

    wp_register_script('parallax', get_template_directory_uri() . '/assets/js/jquery.parallax-1.1.3.js', array(), 1, 1, 1);
    wp_enqueue_script('parallax');

    wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue_script('carousel');

    wp_register_script('meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array(), 1, 1, 1);
    wp_enqueue_script('meanmenu');

    wp_register_script('ajax', get_template_directory_uri() . '/assets/js/ajax-mail.js', array(), 1, 1, 1);
    wp_enqueue_script('ajax');

    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1, 1, 1);
    wp_enqueue_script('wow');

    wp_register_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), 1, 1, 1);
    wp_enqueue_script('plugins');

    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), 1, 1, 1);
    wp_enqueue_script('modernizr');

    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
    wp_enqueue_script('main');

    wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_scripts');


// Add menu support
add_theme_support('menus');

// Register menus
register_nav_menus(
    array(
        'main-menu' => __('Main Menu', 'theme'),

    )
);

// Add Logo
add_theme_support('custom-logo');

//Custom image size
add_image_size('image_home', 1520, 865, true);
add_image_size('image_academics_programs_featured', 1520, 275, true);
add_image_size('image_featured', 570, 477, true);
add_image_size('image_academics', 370, 235, true);
add_image_size('image_choose_area', 715, 815, true);
add_image_size('image_choose_basis_image', 28, 28, true);
add_image_size('image_management_team', 270, 298, true);
add_image_size('image_academic_team', 1170, 410, true);
add_image_size('image_course', 420, 265, true);
add_image_size('image_course_top', 828, 359, true);
add_image_size('image_subject', 465, 432, true);
add_image_size('image_news', 570, 292, true);
add_image_size('image_events', 338, 205, true);
add_image_size('image_events_in_academics', 270, 180, true);
add_image_size('image_single', 770, 434, true);
add_image_size('image_notice', 410, 252, true);

// Add featured image
add_theme_support('post-thumbnails');

//Variable length excerpt
function excerpt($num)
{
    $limit = $num + 1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . " ...";
    echo $excerpt;
}

// trimmming word in a full text
function trimWord($text, $num_word)
{
    return wp_trim_words($text, $num_word, null);
}

// function for custom pagination
function custom_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged)) $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo "<div class='pagination'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link(1) . "'>&laquo;</a>";
        if ($paged > 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo;</a>";

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<span class='current'>" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged + 1) . "'>&rsaquo;</a>";
        if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages) echo "<a href='" . get_pagenum_link($pages) . "'>&raquo;</a>";
        echo "</div>\n";
    }
}
