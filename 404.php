<?php
get_header();
?>

<!-- page-title-area-start -->
<div class="page-title-area ptb-170 bg-opacity-1 mb-100" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/404.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2>404 Error!</h2>
                    <p>
                        Page not found.
                        <a href="<?php echo get_home_url(); ?>" style="color:#8DC739;">Return to home page.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title-area-end -->

<?php get_footer(); ?>