<?php get_header(); ?>

<section class="single-section first-section">
    <h1 class="lead"><?php the_title(); ?></h1>
    <div class="swiper-container" id="mySwiper">
        <div class="swiper-wrapper">
            <?php if( have_rows('slider') ): ?>
                <?php while( have_rows('slider') ): the_row(); ?>
                    <div class="swiper-slide"><img src="<?php the_sub_field('kep'); ?>" alt=""></div> 
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>

    <div class="divider"></div>

    <?php the_content(); ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper("#mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

</section>

<?php get_footer(); ?>