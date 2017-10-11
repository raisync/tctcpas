<?php 
/*
	Template Name: Home
*/
	
get_header(); ?>



		<!-- <nav class="circles">
			<ol class="carousel-indicators">
			    <a href="<?php get_site_url()?>/tct/#"><li data-target="#" data-slide-to="0" class="active"></li></a>
			    <a href="<?php get_site_url()?>/tct/#service"><li data-target="#service" data-slide-to="1"></li></a>
			    <a href="<?php get_site_url()?>/tct/#partners"><li data-target="#partners" data-slide-to="2"></li></a>
			    <a href="<?php get_site_url()?>/tct/#contacts"><li data-target="#contacts" data-slide-to="3"></li></a>
			</ol>
		</nav> -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			the_content();

		// End the loop.
		endwhile;
		?>

		<!-- <?php //wp_link_pages(); ?> -->


		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
