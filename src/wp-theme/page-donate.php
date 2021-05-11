<?php
/*

Template Name: Donate

*/

get_header();

?>

<section class="donate-section first-section">
    <h1 class="lead"><?php the_title(); ?></h1>
    <div class="grid grid-2">
        <div class="left-block">
            <form action="">
                <input type="text" placeholder="First name">
                <input type="submit" value="Donate">
            </form>
        </div>
        <div class="right-block">
            <h2 class="lead">Act & support</h2>
            <p>Join us, be a founding member of ForestR Foundation and become part of our internationally forming eco-conscious community.</p>
            <h2 class="lead">Help us so we can help others!</h2>
            <p>We handle your donations in a visible and transparent way. One of our goals is to keep developing the ForestR app to introduce more and more functions. We aim to create a proper community app where you can meet with fellow ForestRz and enjoy the benefits of this eco- conscious platform. Therefore, 10% of all donations goes directly toward the development of the ForestR application, and the other 90% to support the actually running projects.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>