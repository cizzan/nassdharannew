<?php
/* Template Name: Contact */
get_header(); ?>

<!-- page-title-area-start -->
<div class="page-title-area ptb-170 bg-opacity-1" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/contact.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2>Contact Us</h2>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title-area-end -->
<!-- map-2-area-start -->
<div class="map-2-area ptb-130">
    <div class="container">
        <div class="map-wrapper pos-relative">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=National%20Academy%2C%20dharan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 100%;
                        width: 100%;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 100%;
                        width: 100%;
                    }
                </style>
            </div>
            <?php $topMenu = get_field('top_menu', 5); ?>
            <div class="map-content">
                <ul>
                    <li><i class="ti-location-pin"></i><?php echo $topMenu['address'];  ?></li>
                    <li><i class="ti-mobile"></i><?php echo $topMenu['phone'];  ?></li>
                    <li><i class="ti-email"></i>Email: <?php echo $topMenu['email'];  ?></li>
                </ul>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>