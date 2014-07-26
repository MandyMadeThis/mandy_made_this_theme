<?php get_header(); ?>
<div class="bloghead" style="background: url('<?php echo get_bloginfo('template_directory');?>/images/oldbeach_1280.jpg') center center no-repeat; background-size: cover; background-attachment: fixed;">>
	<h2 class="entry-title">What the heck is going on here<span class="green">?!</span></h2>	
</div>
	<div class="blogWrapper">
		<div class="miss">
	      <h3><?php _e( "Sorry, but you've come to a strange place.", 'twentyten' ); ?></h3>
	      <p><?php _e( 'It looks like the page you requested does not exist. Perhaps searching will help.', 'twentyten' ); ?></p>
	      <?php get_search_form(); ?>
   		</div>
	</div>

<?php get_footer(); ?>

