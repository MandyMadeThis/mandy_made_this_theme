<?php get_header(); ?>

	<div class="indexWrapper clearfix">
		
		
			<?php if ( !have_posts() ) : ?>
			<div class="bloghead" style="background: url('<?php echo get_bloginfo('template_directory');?>/images/prettyflowers.jpg') center center no-repeat; background-size: cover; background-attachment: fixed;">>
			<h2 class="entry-title">Not at all what you were looking for, is it<span class="green">?</span></h2>	
			</div>

			
				<div class="miss">
				
					<h3><?php _e( "... But at least it's pretty", "twentyten" ); ?></h3>
					<p><?php _e( "Please try searching again with some different keywords.", "twentyten" ); ?></p>
					<?php get_search_form(); ?>
				</div>

				<?php else : ?>

				<div class="blogWrapper">	
				<h3><?php printf( __( 'Search Results for: %s', 'twentyten' ), '' . get_search_query() . '' ); ?></h3>
			<?php get_template_part( 'loop', 'search' ); ?>
		
	</div> <!-- THIS IS FROM SEARCH INDEXWRAP -->
		


	
		
		<?php endif; ?>

		</div> 
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
