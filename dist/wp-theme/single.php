<?php get_header(); ?>

<section class="single-section first-section">
    <!-- <div class="grid grid-2">
        <div class="left-block">
            <h1 class="lead"><?php // the_title(); ?></h1>
        </div>
        <div class="right-block">
            <?php // the_excerpt(); ?>
        </div>
    </div> -->
    <h1 class="lead"><?php the_title(); ?></h1>
    <?php the_content(); ?>
</section>

<?php get_footer(); ?>