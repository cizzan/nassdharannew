<?php
/* Template Name: Academics */
get_header();
$thisParentID = wp_get_post_parent_id($thisPageID); // ID of parent parent page
$thisPageID = get_the_ID(); //Id of this page
?>
<!-- page-title-area-start -->

<?php if (!empty(get_the_post_thumbnail())) {
    $backgroundImage = get_the_post_thumbnail_url($thisPageID); // to show featured image in background
} else {
    $backgroundImage = get_template_directory_uri() . "/assets/img/campus/academic.jpg";
}
?>

<div class="page-title-area ptb-110 bg-opacity-6" style="background-image: url(
    <?php echo $backgroundImage; ?>
    );">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2><?php echo get_the_title($thisParentID); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title-area-end -->
<!-- course-list-area-start -->
<div class="course-details-area pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="course-details-wrapper mb-30">
                    <div class="course-details-content">
                        <h3><?php the_title(); ?></h3>
                    </div>

                    <div class="course-description-content">
                        <h4>Course Description :</h4>
                        <p>
                            <?php echo the_field('subject_description_top'); ?>
                        </p>
                    </div>

                    <div class="Courses-Features">
                        <ul class="Courses-Features-menu">
                            <li class="menu-link">
                                <h4 class="Courses-Features-title">Program Information</h4>
                            </li>
                            <?php while (have_rows('subject_combinations')) : the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                            ?>
                                <li>
                                    <h5><?php echo $title; ?></h5>
                                    <span><?php echo $description; ?></span>
                                </li>
                            <?php endwhile; ?>

                        </ul>
                        <div class="Courses-Features-img">
                            <img src="<?php echo get_field('image', $thisPageID)['sizes']['image_subject']; ?>" alt="" />
                        </div>
                    </div>
                    <?php
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile; // End of the loop.
                    ?>
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodconsequat.iirureprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui deserunt
                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                    </p>
                    <table class="table table-responsive courses-table">
                        <thead>
                            <tr class="menu-link">
                                <th>GRADE XI</th>
                                <th>GRADE XII</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Compulsory English</td>
                                <td>Compulsory English</td>
                            </tr>
                            <tr>
                                <td>Compulsory Nepali</td>
                                <td>Business Maths/Marketing</td>
                            </tr>
                            <tr>
                                <td>Accountancy</td>
                                <td>Accountancy</td>
                            </tr>
                            <tr>
                                <td>Economics</td>
                                <td>Economics</td>
                            </tr>
                            <tr>
                                <td>Business Studies</td>
                                <td>Business Studies</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="requirement-content">
                        <h4>Requirement :</h4>
                        <ul>
                            <li>
                                <span class="ti-arrow-right"></span> Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit,
                            </li>
                            <li>
                                <span class="ti-arrow-right"></span> Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit,
                            </li>
                            <li>
                                <span class="ti-arrow-right"></span> Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit,
                            </li>
                        </ul>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodconsequat.iirureprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui deserunt
                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                    </p> -->
                    <?php get_template_part('template', 'sharing-box'); ?>

                    <div class="section-title mb-45 mt-70">
                        <h4>Other Programs</h4>
                        <p>
                            National Academy offers different programs in Secondary Level and Bachelors Level.
                            Some of our courses are as follows:
                        </p>
                    </div>
                    <div class="row">
                        <?php
                        $children = get_pages(
                            array(
                                'sort_column' => 'menu_order',
                                'sort_order' => 'ASC',
                                'parent' => $thisParentID,
                                'post_type' => 'page',
                            )
                        );
                        if (is_array($children) || is_object($children)) {
                            foreach ($children as $post) {
                                setup_postdata($post); ?>
                                <?php if ($thisPageID == $post->ID) {
                                    // excluding the content of current page.
                                    continue;
                                } else { ?>
                                    <div class="section-container">
                                        <div class="col-md-6 col-sm-6 course-xs">
                                            <div class="courses-wrapper">
                                                <div class="courses-img">
                                                    <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                                        <?php if (!empty(get_the_post_thumbnail())) {
                                                            the_post_thumbnail('image_course');
                                                        } else {
                                                        ?>
                                                            <img style="height: 200px; width:270px;" src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/news3.png" alt="">
                                                        <?php } ?>
                                                        <span><?php echo get_the_title($thisParentID); ?></span>
                                                    </a>
                                                </div>
                                                <div class="courses-content">
                                                    <h4><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h4>
                                                    <?php $subjectDescription = get_field('subject_description_top'); ?>
                                                    <p>
                                                        <?php echo trimWord($subjectDescription, 35); ?>
                                                    </p>
                                                    
                                                    <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
                                                                ?>">read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                        <?php }
                        } ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php $catquery = new WP_Query(array(
                    'category_name' => 'news',
                    'posts_per_page' => '3'

                )); ?>
                <?php if ($catquery->have_posts()) : ?>
                    <div class="widget mb-30">
                        <h5 class="widget-course-title">School News</h5>
                        <ul class="latest-courses">

                            <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                                <li>
                                    <div class="latest-courses-image">
                                        <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page.
                                                    ?>">
                                            <?php if (!empty(get_the_post_thumbnail())) {
                                                the_post_thumbnail('thumbnail');
                                            } else {
                                            ?>
                                                <img style="height: 120px; width:120px;" src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/news3.png" alt="">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="latest-courses-body">
                                        <h4>
                                            <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page.
                                                        ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <span><i class="ti-user"></i> <?php $authorName = get_the_author_meta('first_name');
                                                                        echo $authorName; ?></span>
                                    </div>
                                </li>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- <div class="widget mb-30">
                    <h5 class="widget-course-title">Banner</h5>
                    <div class="banner-img">
                        <a href="courses-details.html"><img src="<?php bloginfo('template_directory'); ?>/assets/img/courses/66.jpg" alt="" /></a>
                    </div>
                </div> -->
                <?php $today =  date_i18n('Ymd'); ?>
                <?php $catquery = new WP_Query(array(
                    'category_name' => 'events',
                    'meta_key' => 'upcoming_event_date',
                    'meta_query' => array(
                        array(
                            'key' => 'upcoming_event_date'
                        ),
                        array(

                            'key' => 'upcoming_event_date',
                            'value' => $today,
                            'compare' => '>='
                        )
                    ),
                    'orderby' => 'meta_value',
                    'order' => 'ASC',
                    'posts_per_page' => '3'

                )); ?>
                <?php if ($catquery->have_posts()) : ?>
                    <div class="widget mb-30">
                        <h5 class="widget-course-title">Upcoming Events</h5>
                        <ul class="Latest-Blog">

                            <?php
                            while ($catquery->have_posts()) : $catquery->the_post(); ?>
                                <?php $upcomingEventDate = get_field("upcoming_event_date");
                                $eventType = get_field("upcoming_event_type");
                                $eventLocation = get_field("upcoming_event_location"); ?>

                                <li>
                                    <div class="widget-latest-blog">
                                        <div class="widget-latest-blog-img">
                                            <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page.
                                                        ?>">
                                                <?php if (!empty(get_the_post_thumbnail())) {
                                                    the_post_thumbnail('image_events_in_academics');
                                                } else {
                                                ?>
                                                    <img style="height: 180px; width:270px;" src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/event.jpg" alt="">
                                                <?php } ?>
                                            </a>
                                            <div class="widget-latest-blog-content">
                                                <h5>
                                                    <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page.
                                                                ?>"><?php the_title(); ?></a>
                                                </h5>
                                                <span><?php $date =  DateTime::createFromFormat("d/m/Y", get_field("upcoming_event_date"));
                                                        echo date_format($date, 'F d, Y'); ?>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile;
                            wp_reset_postdata();  ?>
                        </ul>
                    </div>
                <?php else : ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!-- course-list-area-end -->
<?php get_footer(); ?>