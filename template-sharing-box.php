<div class="share-by-content">
    <div class="share-by-info">
        <h5>Share Via:</h5>
        <?php $postUrl = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>
        <div class="courses-details-icon">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>&text=<?php the_title(); ?>&via=<?php the_author_meta('facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php the_title(); ?>&via=<?php the_author_meta('twitter'); ?>"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</div>