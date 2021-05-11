<?php
/*

Template Name: About

*/

get_header();

?>

<section class="about-section first-section">
    <h1 class="lead"><?php the_title(); ?></h1>
    <div class="grid grid-2">
        <div class="left-block">
            <img src="<?php bloginfo('template_url') ?>/assets/img/about.jpg" alt="">
        </div>
        <div class="right-block">
            <?php the_content(); ?>
            <p>Friends, collaborators and colleagues of ForestR Foundation are like-minded people who have basic things in common: we all love nature and believe that mankind has no exclusive right to utilize all natural resources. Our mission is to rethink, recreate and reorganize our life on Earth, and we believe that tree planting can make a huge impact on rebalancing our fine-tuned ecosystem.</p>
            <p>We need to create a worldwide network of already existing and future organizations committed to tree planting and reforestation. Our support is based on sharing our network of knowledge, skill set and practical know-how regarding related issues and initiatives. <br>
            The ForestR application is a creation of Golem Holding and is part of the ForestR Foundation.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>