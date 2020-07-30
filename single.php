<?php get_header(); ?>
<!-- page-title-area-start -->
<?php
$categoryID = the_category_ID(false);
switch ($categoryID) {
    case 4:
        $catName = "events";
        break;
    case 5:
        $catName = "news";
        break;
    case 6:
        $catName = "notice";
        break;
}
?>
<div class="page-title-area ptb-170 bg-opacity-1" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/<?php echo $catName; ?>.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">

                    <h2><?php the_title(); ?></h2>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- page-title-area-end -->
<div class="blog-details-area pt-130 pb-100">
    <div class="container">
        <div class="row">
            <?php
            while (have_posts()) : the_post();
            endwhile;
            ?>
            <div class="col-md-8 col-md-offset-2 mb-30">
                <article class="blog-post">
                    <div class="blog-thumb">
                        <?php $noticeImage = get_the_post_thumbnail_url(get_the_ID(), 'image_single'); ?>

                        <?php if (!empty(get_the_post_thumbnail())) { ?>
                            <img src="<?php echo $noticeImage; ?>" alt="" />

                        <?php } else {
                        ?>
                            <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/event/no-image.png" alt="">
                        <?php } ?>

                    </div>
                    <div class="blog-content">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                        <div class="blog-meta">
                            <span><i class="ti-calendar mr-10"></i><?php echo get_the_date(); ?></span>
                            <span>
                                <i class="ti-user mr-10"></i>
                                <?php $authorName = get_the_author_meta('first_name') . " " . get_the_author_meta('last_name');
                                echo $authorName;
                                ?>
                            </span>
                        </div>
                        <p>
                            <?php
                            the_content();
                            ?>
                        </p>

                        <?php get_template_part('template', 'sharing-box'); ?>
                    </div>

                </article>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>