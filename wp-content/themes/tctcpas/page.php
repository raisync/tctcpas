<?php get_header(); ?>

	<div id="content">
 	
	 	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			the_content();

		// End the loop.
		endwhile;
		?>
 	
	</div>

<?php get_footer(); ?>