<?php
get_header();
?>
<!-- page-title-area-start -->
<div class="page-title-area ptb-170 bg-opacity-1" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/notice.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2>Notices</h2>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title-area-end -->
<!-- notice-list-style-1-start -->
<div class="event-list-style-1 pb-90 mt-100">
    <?php if (have_posts()) : ?>
        <div class="container">
            <div class="section-title mb-45">
                <h4>Notices</h4>
                <p>

                </p>
            </div>
            <div class="row">
                <?php $catquery = new WP_Query(array(
                    'category_name' => 'notice',
                    'posts_per_page' => '3',

                )); ?>
                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <div class="col-md-4 p-0">
                        <div class="event-list-1-img">
                            <a href="
                            <?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page.
                            ?>">

                                <?php $noticeImage = get_the_post_thumbnail_url(get_the_ID(), 'image_notice '); ?>

                                <?php if (!empty(get_the_post_thumbnail())) { ?>
                                    <img src="<?php echo $noticeImage; ?>" alt="" />

                                <?php } else {
                                ?>

                                    <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/notify.jpg" alt="">
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 p-0">
                        <div class="event-list-1-wrapper mb-50">
                            <div class="event-list-1-content">
                                <div class="event-list-1-meta">
                                    <span class="list-event">
                                        <i class="ti-user"></i>
                                        <?php $authorName = get_the_author_meta('first_name') . " " . get_the_author_meta('last_name');
                                        echo $authorName; ?>
                                    </span>
                                    <span class="list-event">
                                        <i class="ti-calendar"></i>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                </div>
                                <h4>
                                    <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <p>
                                    <?php excerpt(30); ?>
                                </p>
                                <a href="<?php echo get_permalink(get_the_ID()); ?>">Read More..</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    <?php else : ?>
        <div class="container">
            <div class="section-title mb-45">
                <h4>Notices</h4>
                <p>
                    No content Available
                </p>
            </div>
        </div>
    <?php endif; ?>

</div>
<!-- notice-list-style-1-end -->
<?php get_footer(); ?>