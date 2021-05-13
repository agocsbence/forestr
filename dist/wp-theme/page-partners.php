<?php
/*

Template Name: Partners

*/

get_header();

?>

<section class="partners-section">
    <h1 class="lead"><?php the_title(); ?></h1>
    <div class="grid grid-2">

        <div class="margin-3"></div>
        
        <a href="" class="partner">
            <img src="<?php bloginfo('template_url') ?>/assets/img/golem.png" alt="" class="logo">
            <div class="name">Golem Holding</div>
        </a>
        <a href="" class="partner">
            <img src="<?php bloginfo('template_url') ?>/assets/img/forestr.png" alt="" class="logo">
            <div class="name">Forestr app</div>
        </a>
        <a href="" class="partner">
            <img src="<?php bloginfo('template_url') ?>/assets/img/zengeto.png" alt="" class="logo">
            <div class="name">Zengető</div>
        </a>

    </div>
</section>

<?php get_footer(); ?>