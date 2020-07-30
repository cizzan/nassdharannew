<?php
/* Template Name: Download */
get_header();
?>
<!-- page-title-area-start -->
<div class="page-title-area ptb-170 bg-opacity-1" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/download.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-text">
                    <h2>Downloads</h2>
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

                <h3 class="post-title download">Download Section</h3>

                <p></p>
                <?php if (have_rows('download_file')) : ?>

                    <table class="table table-responsive courses-table">
                        <thead>
                            <tr class="menu-link">
                                <th>SN.</th>
                                <th>Downloads</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            while (have_rows('download_file')) : the_row();
                                $title = get_sub_field('title');
                                $file = get_sub_field('file');
                            ?>

                                <tr>
                                    <td><?php echo $i . "."; ?></td>
                                    <td>
                                        <h5>
                                            <?php if ($file['subtype'] == 'png' || $file['subtype'] == 'jpg' || $file['subtype'] == 'jpeg') {
                                                $iconType = 'image';
                                            } elseif ($file['subtype'] == 'vnd.ms-excel' || $file['subtype'] == 'vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                                                $iconType = 'excel';
                                            } elseif ($file['subtype'] == 'doc' || $file['subtype'] == 'vnd.openxmlformats-officedocument.wordprocessingml.document') {
                                                $iconType = 'word';
                                            } else {
                                                $iconType = $file['subtype'];
                                            }
                                            ?>
                                            <a href="<?php echo $file['url']; ?>"><i class="far fa-file-<?php echo $iconType; ?>"></i>
                                                <?php echo $title; ?></a>
                                        </h5>
                                    </td>
                                </tr>

                            <?php $i++;
                            endwhile; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <h3 class="mt-50">No downloads available</h3>

                <?php endif; ?>

            </div>
        </article>
    </div>
</div>


<?php get_footer(); ?>