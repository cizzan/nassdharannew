<?php
/* Template Name: About */
get_header();
?>
<!-- page-title-area-start -->
<div class="page-title-area ptb-110 bg-opacity-6" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/aboutus.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2>about us</h2>
                    <p>
                        National Academy is the leading institution in Eastern Nepal for Secondary Level Education. It also runs graduate
                        Level program B.Ed.IT.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title-area-end -->

<!-- Mission/vision Tab Start -->
<div class="featured-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-0 col-sm-6">
                <div class="featured-wrapper bg-1" id="mission">
                    <div class="featured-content text-center">
                        <div class="featured-icon">
                            <i class="fas fa-map-pin"></i>
                        </div>
                        <h4>Mission</h4>
                        <p>
                            <?php echo get_the_content(null, false, 432); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 col-sm-6" id="vision">
                <div class="featured-wrapper bg-3">
                    <div class="featured-content text-center">
                        <div class="featured-icon">
                            <i class="far fa-eye"></i>
                        </div>
                        <h4>Vision</h4>
                        <p>
                            <?php echo get_the_content(null, false, 433); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mission/Vision Tab End -->

<!-- about-tutoring-area-start -->
<div id="introduction" class="about-tutoring-area ptb-130" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/7.jpg);">
    <div class="container abouts-tutoring">
        <div class="row">
            <div class="col-md-6 p-0 abouts-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/about.jpg?>);"></div>
            <div class="col-md-6 p-0 f-right">
                <div class="about-tutoring-wrapper">
                    <div class="about-tutoring-content">
                        <h4>introduction</h4>
                        <p>
                            <?php echo get_the_content(null, false, 430); ?>
                        </p>
                        <!-- <a href="#">read more</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-tutoring-area-end -->
<!--Message from PRincipal-->

<?php
$args = array(
    'post_parent' => 23,
    'post_type'   => 'page',
);

$childs = get_children($args);
foreach ($childs as $child) {
    $id = $child->ID;
    $title = $child->post_title;
}
?>
<div class="choose-area" id="message-from-principal">
    <div class="col-md-7 p-0 col-7 col-md">
        <div class="choose-wrapper blue-bg">
            <div class="section-title mb-40 white-text">
                <h4><?php echo get_the_title(450); ?></h4>
                <p>
                    <?php echo get_the_content(null, false, 450); ?>
                </p>
            </div>

        </div>
    </div>
    <?php $principalImage = get_the_post_thumbnail_url(450, 'image_choose_area'); ?>
    <div class="col-md-5 col-5 p-0 col-md choose-img ptb-100" style="background-image: url(
        <?php echo $principalImage; ?>
        );">
    </div>

</div>
<!-- Message from -Principal-end -->

<!-- our-instructor-area-start -->
<div class="our-instructor-area pt-100 pb-50" id="management-team">
    <div class="container">
        <div class="section-title mb-45">
            <h4><?php echo get_the_title(451); ?></h4>
            <p>
                <?php echo get_the_content(null, false, 451); ?>
            </p>
        </div>
        <div class="row">
            <?php while (have_rows('management_team', 451)) : the_row();
                $managementTeamName = get_sub_field('management_team_name');
                $managementTeamImage = get_sub_field('management_team_image');
                $managementTeamFaculty = get_sub_field('management_team_faculty');
            ?>
                <div class="col-md-3 col-sm-6 col-xs">
                    <div class="instructor-wrapper mb-30">
                        <div class="instructor-img">
                            <img src="<?php echo $managementTeamImage['sizes']['image_management_team']; ?>" alt="" />
                        </div>
                        <div class="instructor-content text-center">

                            <h4><?php echo $managementTeamName; ?></h4>
                            <span><?php echo $managementTeamFaculty; ?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- our-instructor-area-end -->
<!-- our-instructor-area-start -->
<div class="our-instructor-area pt-50 pb-100 bg-light" id="academic-team">
    <div class="container">
        <div class="section-title mb-45">
            <h4><?php echo get_the_title(452); ?></h4>
            <p>
                <?php echo get_the_content(null, false, 452); ?>
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="instructor-wrapper mb-30">
                    <div class="instructor-img">
                        <?php $academicTeamImage = get_the_post_thumbnail_url(452, 'image_academic_team'); ?>
                        <img src="<?php echo $academicTeamImage;?>" alt="" />

                    </div>
                </div>
            </div>
            <?php while (have_rows('academic_team', 452)) : the_row();
                $academicTeamName = get_sub_field('academic_team_name');
                $academicTeamQualification = get_sub_field('academic_team_qualification');
            ?>
                <div class="col-md-3 col-sm-6 col-xs pull-left mb-20">
                    <div class="instructor-name">
                        <h4><?php echo $academicTeamName; ?></h4>
                        <span><?php echo $academicTeamQualification; ?></span>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- our-instructor-area-end -->

<?php
get_footer();
?>