<?php
/* Template Name: Admission */
get_header();
?>
<!-- page-title-area-start -->
<div class="page-title-area ptb-170 bg-opacity-1" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/15.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2>Admission Information</h2>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title-area-end -->
<!-- event-grid-style-01-start -->
<div class="event-grid-style-01 pt-130" id="admission">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
        <?php endwhile; ?>
        <div class="section-title mb-45">
            <h4>Admission Procedure</h4>
            <?php the_content(); ?>
        </div>
        <div class="row">

        </div>
    </div>
</div>
<!-- event-grid-style-01-end -->
<!-- frequently-asked-area-start -->
<div class="frequently-asked-area pt-130 mb-100">
    <div class="container frequently">
        <?php if (have_rows('faq')) : ?>
            <div class="row" id="faq">
                <div class="col-md-6 p-0">
                    <div class="frequently-asked-wrapper gray-bg-1">
                        <h3 class="frequently-title">Frequently asked questions</h3>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php
                            $i = 0;
                            while (have_rows('faq')) : the_row();
                                $faqQuestion = get_sub_field('faq_question');
                                $faqAnswer = get_sub_field('faq_answer');
                            ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i; ?>" class="<?php if ($i > 0) {
                                                                                                                                                    echo 'collapsed';
                                                                                                                                                } ?>">
                                                <?php echo $faqQuestion; ?></a>
                                        </h4>
                                    </div>
                                    <div id="<?php echo $i; ?>" class="panel-collapse collapse <?php if ($i == 0) {
                                                                                                    echo 'in';
                                                                                                } ?>">
                                        <div class="panel-body">
                                            <p>
                                                <?php echo $faqAnswer; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++;
                            endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 frequently-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/faq.jpg);"></div>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- frequently-asked-area-end -->
<?php get_footer(); ?>