<?php 
/*
	Template Name: Home
*/
	
get_header(); ?>

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

		<nav class="carousel">
			<ol class="">
			    <a href="<?php get_site_url()?>/tct/#top" class="active" data-slide-to="0"><li data-slide-to="0" class="active"></li></a>
			    <a href="<?php get_site_url()?>/tct/#service" data-slide-to="1"><li data-slide-to="1"></li></a>
			    <a href="<?php get_site_url()?>/tct/#partners" data-slide-to="2"><li data-slide-to="2"></li></a>
			    <a href="<?php get_site_url()?>/tct/#contacts" data-slide-to="3"><li data-slide-to="3"></li></a>
			</ol>
		</nav>


		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
