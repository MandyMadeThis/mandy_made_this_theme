<?php /* If there are no posts to display, such as an empty archive page */ ?>

<?php if ( ! have_posts() ) : ?>

	<div class="bloghead" style="background: url('<?php echo get_bloginfo('template_directory');?>/images/prettyflowers.jpg') center center no-repeat; background-size: cover; background-attachment: fixed;">>
		<h2 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h2>
	</div>

		<div class="blogWrapper">
			<div class="miss">
				<h3><?php _e( "But at least it's pretty!", 'twentyten' ); ?></h3>
				<p><?php _e( 'Sorry, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
			</div>
		</div> <!-- THIS IS THE END OF INDEX BLOGWRAP -->

<?php endif; // end if there are no posts ?>


<?php /* if there are posts, Start the Loop. */ ?>

<?php while ( have_posts() ) : the_post(); ?>

	<section class="clearfix" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="featuredImage">
			<?php if ( has_post_thumbnail()) : ?>
			   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			   <?php the_post_thumbnail('worksize'); ?>
			   </a>
			 <?php endif; ?>
		 </div>
		<article>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>

			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
		</article><!-- . -->
				
	</section><!-- #post-## -->

	<?php comments_template( '', true ); ?>

<?php endwhile; // End the loop. Whew. ?>


<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <?php /* If we have the wp-pagenavi plugin installed */  ?>
  <?php if(function_exists('wp_pagenavi')) : ?>
     <div class="pnavi"><?php wp_pagenavi(); ?></div>
  <?php /* Otherwise just give me regular next/prev links ?> */ ?>
  
  <?php else : ?>
          <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries')); ?></div>
          <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;')); ?></div>
  <?php endif; ?>

<?php endif; ?>
