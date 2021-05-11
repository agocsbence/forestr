<?php
/*

Template Name: News

*/

get_header();

?>

<section class="news-section first-section">
    <h1><?php the_title(); ?></h1>
    <div class="news-list">

        <?php
			//POSTS LOOP
			$loop = new WP_Query( array( 'post_type' => 'post' ) );
			
			while ( $loop->have_posts() ) : $loop->the_post(); 
			
				include get_theme_file_path( '/includes/news-list.php' );
			
			endwhile; wp_reset_query();
		?>

        <div class="news-post">
            <div class="grid grid-2">
                <div class="news-image" style="background-image: url('./assets/img/news-1.jpg');"></div>
                <div class="news-text">
                    <h3>ForestR app on the go</h3>
                    <p>We are pleased to inform you that our long-awaited dream has come true and our free ForestR application has been released. The aim of this non-profit community app is to strengthen international cooperation between tree planters by registering tress, supporting and promoting tree planting. For further details please visit forestr.info.</p>
                </div>
            </div>
        </div>
        <div class="news-post">
            <div class="grid grid-2">
                <div class="news-image" style="background-image: url('./assets/img/news-2.jpg');"></div>
                <div class="news-text">
                    <h3>Our forests are in danger - tell the EU to act now!</h3>
                    <p>Climate change, raging forest fires, and sprawling agriculture are wiping out our planet’s forests, savannas and other precious ecosystems.</p>
                    <p>This devastation of nature is happening fast - and it is directly connected to the meat, dairy, palm oil, coffee and chocolate we eat in Europe. From the Amazon to the Asian rainforests, the EU is responsible for more than 10% of global forest… destruction.</p>
                    <p>You can help! We've created a petition that will allow you to quickly and easily participate in a public consultation on EU</p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>