<?php
/*

Template Name: Main Page

*/

get_header();

?>

<section class="home-hero-section">
	<h1 class="lead">ForestR</h1>
	<div class="grid grid-2">
		<div class="left-block">
			<p>Our aim is to create an international alliance that seeks solutions to curb ecological processes that threaten our home, Earth. </p>
			<p>We are committed to protecting endangered and threatened species, we reject illegal logging and support organized tree planting. </p>
		</div>
		<div class="right-block">
			<p>We believe that trees and forests are the ultimate key to fighting climate change.</p>
		</div>
	</div>
</section>

<section class="home-news-section">
	<h1>News</h1>
	<div class="news-list">

		<?php
			//POSTS LOOP
			$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
			
			while ( $loop->have_posts() ) : $loop->the_post(); 
			
				include get_theme_file_path( '/includes/news-list.php' );
			
			endwhile; wp_reset_query();
		?>

	</div>
</section>

<section class="home-projects-section">
	<h1>Projects</h1>
	<div class="news-list">

		<?php
			//POSTS LOOP
			$loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 1 ) );
			
			while ( $loop->have_posts() ) : $loop->the_post(); 
			
				include get_theme_file_path( '/includes/news-list.php' );
			
			endwhile; wp_reset_query();
		?>

	</div>
</section>

<section class="home-donate">
	<img src="<?php bloginfo('template_url') ?>/assets/img/mockup.png" alt="ForestR Donate">
	<a href="<?php echo esc_url( get_page_link( 15 ) ); ?>" class="btn">Donate</a>
</section>

<?php get_footer(); ?>
