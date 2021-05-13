<?php
/*

Template Name: Projects

*/

get_header();

?>

<section class="news-section first-section">
    <h1><?php the_title(); ?></h1>
    <div class="news-list">

        <?php
			//POSTS LOOP
			$loop = new WP_Query( array( 'post_type' => 'project' ) );
			
			while ( $loop->have_posts() ) : $loop->the_post(); 
			
				include get_theme_file_path( '/includes/news-list.php' );
			
			endwhile; wp_reset_query();
		?>

    </div>
</section>

<?php get_footer(); ?>