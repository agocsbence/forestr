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

        <div class="news-post">
            <div class="grid grid-2">
                <div class="news-image" style="background-image: url('./assets/img/projects-1.jpg');"></div>
                <div class="news-text">
                    <h3>The vision</h3>
                    <p>Our major role in the fight against climate change is to interconnect motivated & proactive individuals and organizations to plant trees, find fallow areas and act against deforestation.</p>
                    <p>We need to rethink our role in Earth’s ecosystem.<br>
                        We wish to reform our thinking about trees and nature, we wish to introduce cutting edge technologies that can substitute the tree industry in general. <br>
                        We wish to open the eyes of company leaders and stakeholders about the actual unsustainable methods using the tree industry…</p>
                </div>
            </div>
        </div>
        
        <div class="news-post">
            <div class="grid grid-2">
                <div class="news-image" style="background-image: url('./assets/img/projects-2.jpg');"></div>
                <div class="news-text">
                    <h3>Forestr Tree Planting Guide</h3>
                    <p>Ever wondered about how to plant a tree? Here is a quickie guide where to start.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>