<?php
/* Template Name: Career */
get_header();
?>
<!-- page-title-area-start -->
<div class="page-title-area ptb-170 bg-opacity-1" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/career.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2>Career Opportunities</h2>
                    <p>
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title-area-end -->
<div class="row">
    <div class="col-md-8 col-md-offset-2 mb-30 mt-100">
        <article class="blog-post mb-40">

            <div class="blog-content">

                <h3 class="post-title download">Current Openings</h3>
                <?php while (have_posts()) : the_post();
                    the_content();
                ?>
                <?php endwhile; ?>
               

            </div>
        </article>
    </div>
</div>


<?php get_footer(); ?>