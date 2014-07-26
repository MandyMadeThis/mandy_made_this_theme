<?php get_header(); ?>
	<div class="indexWrapper clearfix">
		<div class="blogWrapper">
			<?php get_template_part( 'loop', 'index' );	?>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>