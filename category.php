<?php get_header(); ?>
<?php while(have_posts()) : the_post();?>
    <ul>
        <li>
            <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <ul>
                <li><?php the_post_thumbnail('image_event');
                    the_content(); ?>
                    <?php $eventLocation = get_field("upcoming_event_location");
                    echo $eventLocation; ?>
                </li>
            </ul>
        </li>
    </ul>
<?php endwhile; ?>
<?php get_footer(); ?>