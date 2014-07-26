<?php get_header(); ?>
<div class="indexWrapper clearfix">
	<div class="blogWrapper">
		<h2 class="blogCat"><?php printf( __( 'Tagged: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' ); ?></h2>
		<?php get_template_part( 'loop', 'tag' ); ?>
		</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>