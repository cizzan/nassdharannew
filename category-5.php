<?php
get_header();
?>
<!-- page-title-area-start -->
<div class="page-title-area ptb-170 bg-opacity-1" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/news.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2>School News</h2>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title-area-end -->
<!-- News-list-style-2-start -->
<?php $paged = (get_query_var('page')) ? get_query_var('page') : 1;

?>
<div class="event-list-style-2 pb-100 mt-100">
    <?php if (have_posts()) : ?>
        <div class="container">
            <div class="section-title mb-45">
                <h4>School News</h4>
                <p>

                </p>
            </div>
            <div class="row">
                <?php global $wp_query;
                ?>
                <?php $catquery = new WP_Query(array(
                    'post_type' => 'post',
                    'category_name' => 'news',
                    'posts_per_page' => '4',                    

                )); ?>

                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <div class="col-md-6 col-sm-6">
                        <div class="top-event-wrapper mb-30">
                            <div class="top-event-img">
                                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                    <?php $noticeImage = get_the_post_thumbnail_url(get_the_ID(), 'image_news'); ?>

                                    <?php if (!empty(get_the_post_thumbnail())) { ?>
                                        <img src="<?php echo $noticeImage; ?>" alt="" />

                                    <?php } else {
                                    ?>
                                        <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/news.jpg" alt="">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="top-event-content">
                                <div class="top-event-meta">
                                    <span class="top-event">
                                        <i class="ti-user"></i>
                                        <?php $authorName = get_the_author_meta('first_name') . " " . get_the_author_meta('last_name');
                                        echo $authorName; ?>
                                    </span>
                                    <span class="top-event">
                                        <i class="ti-calendar"></i>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                </div>
                                <h4>
                                    <a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>
                                </h4>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                                <a href="<?php echo get_permalink(get_the_ID()); ?>">Read More..</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();  ?>
            </div>

        </div>
      
        <div class="paginations text-center mt-40">
            <ul>
                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                <li class="page-numbers active"><a href="1/">1</a></li>
                <li><a class="page-numbers" href="2/">2</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">28</a></li>
                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    <?php else : ?>
        <div class="container">
            <div class="section-title mb-45">
                <h4>School News</h4>
                <p>
                    No content Available
                </p>
            </div>
        </div>
    <?php endif; ?>


</div>

<!-- News-list-style-2-end -->
<?php get_footer(); ?>