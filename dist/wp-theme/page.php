<?php get_header(); the_post(); ?>

<section class="about-section first-section">
    <h1 class="lead"><?php the_title(); ?></h1>
    <div class="grid">
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer();
