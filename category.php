<?php get_header(); ?>
<div class="indexWrapper clearfix">
    <div class="blogWrapper">
    	<h2 class="blogCat"><?php printf( __( 'Category: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h2>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' ); ?>
	

   
  </div> <!-- /.blogWrapper -->
</div> <!-- /.indexWrapper -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>