<?php get_header(); ?>


<!-- slider-area-start -->
<div class="slider-area">
    <?php if (have_rows('slide_show')) : ?>

        <div class="slider-active owl-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <?php
                    while (have_rows('slide_show')) : the_row();
                        // Getting the content from the repeater field slide_show
                        $slideShowImage = get_sub_field('slide_show_image');
                        $slideShowTitle = get_sub_field('slide_show_title');
                        $slideShowContent = get_sub_field('slide_show_content');
                        $slideShowButton = get_sub_field('slide_show_button');
                    ?>
                        <div class="owl-item">
                            <div class="slider-wrapper pt-215 pb-430 bg-opacity" style="background-image: url(
                                <?php echo $slideShowImage['sizes']['image_home']; ?>
                            );">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="slider-text slider-text-animation">
                                                <h1><?php echo $slideShowTitle; ?>
                                                </h1>
                                                <div class="slider-info">
                                                    <p>
                                                        <?php echo $slideShowContent; ?>
                                                    </p>
                                                </div>
                                                <?php if ($slideShowButton) : ?>
                                                    <a href="<?php echo $slideShowButton; ?>" class="button">More Info</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<!-- slider-area-end -->

<!-- campus-area-start -->
<div class="campus-area" id="about-content">
    <div class="container">
        <div class="inner-campus">
            <div class="campus">

                <div class="row">
                    <div class="col-md-6 p-0 abouts-img1">
                        <?php the_post_thumbnail('image_featured'); ?>
                    </div>
                    <?php
                    // Getting the child page in the parent page from page content
                    $about = get_pages(
                        array(
                            'sort_column' => 'menu_order',
                            'sort_order' => 'ASC',
                            'parent' => 23, //id of parent
                            'post_type' => 'page',
                        )
                    );
                    ?>
                    <div class="section-container">
                        <!-- Nav tabs -->
                        <div class="col-md-6 p-0">
                            <div class="tab-wrapper">
                                <div>
                                    <?php $i = 0; ?>
                                    <ul class="campus-tab" role="tablist">
                                        <?php if (is_array($about) || is_object($about)) {
                                            foreach ($about as $post) {
                                                setup_postdata($post);
                                                if ($post->ID < 435) { ?>
                                                    <li role="presentation" class="
                                                <?php
                                                    if ($i == 0) {
                                                        echo "active"; // make first title active
                                                        $i = 1;
                                                    }
                                                ?>">
                                                        <a href="#<?php echo $post->ID; ?>" aria-controls="home" role="tab" data-toggle="tab">
                                                            <div class="campus-info">
                                                                <h4>
                                                                    <?php the_title(); ?>

                                                                </h4>
                                                            </div>
                                                        </a>
                                                    </li>
                                        <?php }
                                            }
                                        } ?>
                                    </ul>
                                </div>
                                <!-- Tab Pane -->
                                <div class="tab-content">
                                    <?php if (is_array($about) || is_object($about)) {
                                        foreach ($about as $post) {
                                            setup_postdata($post); ?>
                                            <div role="tabpanel" class="tab-pane 
                                            <?php if ($i == 1) {
                                                echo "active";
                                                $i = 0;
                                            } ?>" id="<?php echo get_the_ID(); ?>">
                                                <div class="campus-wrapper">
                                                    <div class="campus-content">
                                                        <p>
                                                            <?php
                                                            //trim the content to limited words
                                                            echo wp_trim_words(get_the_content(), 80, null);
                                                            ?>
                                                        </p>
                                                        <a href="about/">read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- campus-area-end -->
<!-- courses-area-start -->
<div class="courses-area pt-130 pb-100" id="academic-content">
    <div class="container">
        <div class="section-title mb-45">
            <h4>Academic Programs</h4>

            <p>
                <?php echo get_the_content(null, false, 24); ?>

            </p>
        </div>

        <div class="row">
            <?php
            $i = 0;
            //getting child content in parent page
            $children1 = get_pages(
                array(
                    'sort_column' => 'menu_order',
                    'sort_order' => 'ASC',
                    'parent' => 24,
                    'post_type' => 'page',
                )
            );
            if (is_array($children1) || is_object($children1)) {
                foreach ($children1 as $post) {
                    setup_postdata($post); ?>
                    <?php $faculty = get_the_title();
                    ?>
                    <?php
                    //getting child content of child content in parent page
                    $children2 = get_pages(
                        array(
                            'sort_column' => 'menu_order',
                            'sort_order' => 'ASC',
                            'parent' => $post->ID,
                            'post_type' => 'page',
                        )
                    );
                    if (is_array($children2) || is_object($children2)) {
                        foreach ($children2 as $post) {
                            setup_postdata($post);
                            if ($i == 3) {
                                break;
                            }
                    ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="courses-wrapper mb-30">
                                    <div class="courses-img">
                                        <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
                                                    ?>">
                                            <?php if (!empty(get_the_post_thumbnail())) {
                                                the_post_thumbnail('image_academics');
                                            } else {
                                            ?>
                                                <img style="height: 235px; width:370px;" src="<?php echo bloginfo('template_directory'); ?>/assets/img/campus/academic.jpg" alt="">
                                            <?php } ?>
                                            <span><?php echo $faculty; ?></span>
                                        </a>
                                    </div>
                                    <div class="courses-content">
                                        <h4>
                                            <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
                                                        ?>">
                                                <?php the_title(); ?></a>
                                        </h4>
                                        <?php $subjectDescription = get_field('subject_description_top'); ?>
                                        <p>
                                            <?php echo trimWord($subjectDescription, 35); ?>
                                        </p>
                                        <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
                                                    ?>">read more</a>
                                    </div>
                                </div>
                            </div>
                    <?php $i++;
                        }
                    } ?>

            <?php }
            } ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- courses-area-end -->
<!-- choose-area-start -->
<?php $chooseArea = get_field('why_choose_us'); ?>
<div class="choose-area">
    <div class="col-md-7 p-0 col-7 col-md">
        <div class="choose-wrapper blue-bg">
            <div class="section-title mb-40 white-text">
                <h4>facilities </h4>
                <p>
                    <?php echo $chooseArea['content']; ?>
                </p>
            </div>
            <?php if (have_rows('choose_basis')) : ?>
                <div class="row custom-row">
                    <?php while (have_rows('choose_basis')) : the_row();
                        $chooseBasisImage = get_sub_field('choose_basis_image');
                        $chooseBasisTitle = get_sub_field('choose_basis_title');
                        $chooseBasisContent = get_sub_field('choose_basis_content');
                    ?>
                        <div class="col-md-6 col-sm-6 choose-space">
                            <div class="choose-content-wrapper mb-50 text-center">
                                <div class="choose-categories-img">
                                    <img src="<?php echo $chooseBasisImage['sizes']['image_choose_basis_image']; ?>" alt="" />
                                </div>
                                <div class="choose-categories-content">
                                    <h5><?php echo $chooseBasisTitle; ?></h5>
                                    <p>
                                        <?php echo $chooseBasisContent; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <div class="col-md-5 col-5 p-0 col-md choose-img ptb-100" style="background-image: url(<?php echo $chooseArea['image']['sizes']['image_choose_area']; ?>);"></div>
</div>
<!-- choose-area-end -->
<!-- upcoming-event-area-start -->
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
    <div class="upcoming-event-area pt-100 pb-100">
        <div class="container">
            <div class="section-title mb-45">
                <h4>upcoming events</h4>
                <p>

                </p>
            </div>
            <div class="row">
                <?php
                while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <?php $upcomingEventDate = get_field("upcoming_event_date");
                    $eventType = get_field("upcoming_event_type");
                    $eventLocation = get_field("upcoming_event_location"); ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="upcoming-event-wrapper mb-30">
                            <div class="upcoming-event-img">
                                <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
                                            ?>">
                                    <?php if (!empty(get_the_post_thumbnail())) {
                                        the_post_thumbnail('image_academics');
                                    } else {
                                    ?>
                                        <img style="height: 235px; width:370px;" src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/event.jpg" alt="">
                                    <?php } ?>
                                </a> </div>
                            <div class="upcoming-content">
                                <div class="upcoming-info">

                                    <h6 class="upcoming-left"><span>
                                            <?php
                                            //$date = get_field("upcoming_event_date");
                                            $date =  DateTime::createFromFormat("d/m/Y", get_field("upcoming_event_date"));
                                            echo $date->format('d');
                                            ?></span>th</h6>
                                    <h6 class="upcoming-right"><?php echo $date->format('M ,Y'); ?></h6>
                                    <?php $type = $eventType;  ?>
                                    <span class="pull-right" style="color: 
                                    <?php
                                    switch ($type) {
                                        case 'Academic':
                                            echo '#054A8A';
                                            break;
                                        case 'Celebration':
                                            echo '#8DC739';
                                            break;
                                        case 'Holiday':
                                            echo '#F80000';
                                            break;
                                    }
                                    ?>;"><i class="fa fa-calendar-alt"></i>
                                        <?php echo $type;  ?></span>
                                </div>
                                <h4>
                                    <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
                                                ?>"><?php the_title(); ?></a>

                                </h4>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                                <div class="upcoming-event-meta">
                                    <span> <i class="ti-timer"></i>
                                        <?php the_field('upcoming_event_start_time', false, true); ?> -
                                        <?php the_field('upcoming_event_end_time', false, true); ?>
                                    </span>
                                    <span> <i class="ti-location-pin"></i>
                                        <?php
                                        echo $eventLocation; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();  ?>
            </div>
            <div class="header-button text-center clear-fix">
                <a href="events/"><i class="far fa-calendar-alt"></i>View All Events</a>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="news-blog-area pb-100 pt-100 bg-light">
        <div class="container">
            <div class="section-title mb-45">
                <h4>Upcoming events</h4>
                <p>
                    No Content Available
                </p>
            </div>
        </div>
    </div>
<?php endif;
?>
<!-- upcoming-event-area-end -->
<!-- testimonial-area-start -->
<?php if (have_rows('testimonial')) : ?>
    <div class="testimonial-area bg-opacity-5 ptb-50" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/5.jpg);">
        <div class="container">
            <div class="row">

                <div class="col-md-offse">
                    <div class="testimonial-active owl-carousel">
                        <?php while (have_rows('testimonial')) : the_row();
                            $studentName = get_sub_field('student_name');
                            $studentContent = get_sub_field('student_content');
                            $studentImage = get_sub_field('student_image');
                            $studentFaculty = get_sub_field('student_faculty');
                        ?>
                            <div class="testimonial-wrapper">
                                <div class="testimonial-content text-center">
                                    <h4><?php echo $studentName; ?></h4>
                                    <p>
                                        <?php echo $studentContent; ?>
                                    </p>
                                    <div class="testimonial-img">
                                        <img src="<?php echo $studentImage['sizes']['thumbnail']; ?>" alt="" class="img-circle" />
                                    </div>
                                    <span> <?php echo $studentFaculty; ?>
                                    </span>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- testimonial-area-end -->
<!-- news-blog-area-start -->
<?php $catquery = new WP_Query(array(
    'category_name' => 'news',
    'posts_per_page' => '3'

)); ?>
<?php if ($catquery->have_posts()) : ?>
    <div class="news-blog-area pb-100 pt-100 bg-light">
        <div class="container">
            <div class="section-title mb-45">
                <h4>school news</h4>
                <p>

                </p>
            </div>
            <div class="row d-felx">
                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="news-blog-wrapper mb-30 bg-white">
                            <div class="news-blog-img">
                                <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
                                            ?>">
                                    <?php if (!empty(get_the_post_thumbnail())) {
                                        the_post_thumbnail('image_academics');
                                    } else {
                                    ?>
                                        <img style="height: 235px; width:370px;" src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/news.jpg" alt="">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="news-blog-content">
                                <h4>
                                    <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
                                                ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="news-blog-meta">
                                    <?php $authorName = get_the_author_meta('first_name') . " " . get_the_author_meta('last_name'); ?>
                                    <span><i class="ti-user"></i> <?php echo $authorName; ?></span>
                                    <span><i class="ti-calendar"></i><?php echo get_the_date(); ?></span>
                                </div>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                                <a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
                                            ?>">read more</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
            <div class="header-button text-center">
                <a href="news/"><i class="far fa-newspaper"></i>View All News</a>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="news-blog-area pb-100 pt-100 bg-light">
        <div class="container">
            <div class="section-title mb-45">
                <h4>school news</h4>
                <p>
                    No Content Available
                </p>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- news-blog-area-end -->
<?php $catquery = new WP_Query(array(
    'category_name' => 'notice',
    'posts_per_page' => '1'

)); ?>
<?php while ($catquery->have_posts()) : $catquery->the_post();
    $noticeExpiryDate = get_field('notice_expiry_date');
    $postedDate = get_the_date();
    $today = date_i18n('Y-m-d');;
    if ($noticeExpiryDate == null) {
        $noticeExpiryDate = date('Y-m-d', strtotime($postedDate . ' + 7 days'));
        $today;
    } else {
        $myDateTime = DateTime::createFromFormat('d/m/Y', $noticeExpiryDate);
        $newDateString = $myDateTime->format('Y-m-d');
    }
    if ($noticeExpiryDate < $today) {
        break;
    }
?>
    <!-- Image pop up -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modals-dialog" role="document">
            <div class="modal-content">
                <div class="register-header">
                    <button type="button" class="close-icon" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="registers-title" id="myModalLabel"><?php the_title(); ?></h4>
                </div>
                <div class="modals-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">



                                <article class="blog-post">
                                    <div class="blog-thumb">

                                        <?php $popupImage = get_the_post_thumbnail_url(get_the_ID(), 'image_single'); ?>

                                        <?php if (!empty(get_the_post_thumbnail())) { ?>
                                            <img src="<?php echo $popupImage; ?>" alt="" />

                                        <?php } else {
                                        ?>
                                            <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/notify.jpg" alt="">
                                        <?php } ?>

                                    </div>
                                    <div class="blog-content">
                                        <h2 class="post-title"><?php the_title(); ?></h2>
                                        <div class="blog-meta">
                                            <span><i class="ti-calendar mr-10"></i><?php echo get_the_date(); ?></span>

                                        </div>
                                        <p>
                                            <?php
                                            the_content();
                                            ?>
                                        </p>


                                    </div>

                                </article>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;
wp_reset_postdata(); ?>

<?php get_footer(); ?>