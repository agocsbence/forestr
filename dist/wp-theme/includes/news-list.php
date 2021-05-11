<div class="news-post">
    <div class="grid grid-2">
        <div class="news-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>
        <div class="news-text">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
    <div class="more">
        <a href="<?php echo get_permalink(); ?>">more</a>
        <span></span>
    </div>
</div>