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
			<p>Sokan vagyunk. Sosem elegen. És sosem elég okosak. Törekszünk fáradhatatlanul.</p>
			<p>A Bolygónk által kínált végtelen fantasztikus lehetőség közül mi a fákat szemeltük ki magunknak. Őket védjük. És rajtuk keresztül Bolygónk egészségét. Hogy hosszú, mi több végtelen karriert futhassunk be ezen a Földön, mi humánok.</p>
		</div>
		<div class="right-block">
			<p>Nem tudjuk, pontosan mennyire is késő már bármit is tenni. Ezért azt valljuk, hogy sosem késő. Most is tökéletes! Elkezdeni, cselekedni.</p>
			<p>Terveinkkel, tetteinkkel számos megoldást kínálunk, hogy kényelmes életünk fenntartható mederbe kerüljön.</p>
		</div>
	</div>
</section>

<section class="home-news-section">
	<h1>News</h1>
	<div class="news-list">

		<?php
			//POSTS LOOP
			$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 2 ) );
			
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
			<div class="more">
				<a href="">more</a>
				<span></span>
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
			<div class="more">
				<a href="">more</a>
				<span></span>
			</div>
		</div>

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
			<div class="more">
				<a href="">more</a>
				<span></span>
			</div>
		</div>

	</div>
</section>

<section class="home-donate">
	<img src="<?php bloginfo('template_url') ?>/assets/img/mockup.png" alt="ForestR Donate">
	<a href="" class="btn">
		Donate
	</a>
</section>

<?php get_footer(); ?>
