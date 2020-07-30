<?php get_header(); ?>

<!-- page-title-area-start -->
<div class="page-title-area ptb-170 bg-opacity-1" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/events.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2>Upcoming Events</h2>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title-area-end -->

<!-- event-grid-style-02-start -->
<div class="event-grid-style-02 mt-100">
    <?php if (have_posts()) : ?>
        <div class="container">
            <div class="section-title mb-45">
                <h4>Upcoming Events</h4>
                <p>

                </p>
            </div>
            <div class="row">
                <div class="row">
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
                        'posts_per_page' => '9'

                    )); ?>
                    <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                        <?php $upcomingEventDate = get_field("upcoming_event_date");
                        $eventType = get_field("upcoming_event_type");
                        $eventLocation = get_field("upcoming_event_location");
                        $eventType = get_field_object("upcoming_event_type");
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="event-style-02-wrapper mb-30">
                                <div class="event-style-02-img">
                                    <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                        <?php $eventImage = get_the_post_thumbnail_url(get_the_ID(), 'image_events'); ?>

                                        <?php if (!empty(get_the_post_thumbnail())) { ?>
                                            <img src="<?php echo $eventImage; ?>" alt="" />

                                        <?php } else {
                                        ?>

                                            <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/event.jpg" alt="">
                                        <?php } ?>
                                    </a>

                                    <span><i class="fas fa-tag"></i><?php echo $eventType['value']; ?></span>
                                    <div class="category"><i class="ti-calendar"></i>
                                        <?php $date =  DateTime::createFromFormat("d/m/Y", $upcomingEventDate);
                                        echo date_format($date, 'F d, Y'); ?>
                                    </div>
                                </div>
                                <div class="event-style-02-content">
                                    <h4>
                                        <a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="event-style-02-meta">
                                        <span> <i class="ti-timer"></i>
                                            <?php the_field('upcoming_event_start_time', false, true); ?> -
                                            <?php the_field('upcoming_event_end_time', false, true); ?>
                                        </span>
                                        <span> <i class="ti-location-pin"></i><?php echo $eventLocation; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();  ?>

                </div>
            </div>

            <div class="paginations text-center mt-40 mb-100">
                <ul>
                    <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">28</a></li>
                    <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                </ul>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
        <div class="container">
            <div class="section-title mb-45">
                <h4>Upcoming Events</h4>
                <p>
                    No Content Available
                </p>
            </div>
        </div>
    <?php endif; ?>


    <!-- event-grid-style-02-end -->

    <?php get_footer(); ?>