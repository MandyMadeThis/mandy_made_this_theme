<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>

  <div class="bloghead" style="background: url('<?php echo $background[0]; ?>') center center no-repeat; background-size: cover; background-attachment: fixed;">
     <h2 class="entry-title"><?php the_title(); ?><span class="green">.</span></h2>
  </div> <!-- /.bloghead -->

  <?php endif; ?>

  <div class="blogWrapper">
    <div class="entry-meta">
      <?php twentyten_posted_on(); ?>
    </div><!-- .entry-meta -->

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>

        <p>Till next time,</p>
        <div class="svgWrap">
          <svg class="sig" viewBox="10.3 34.4 125.8 75">
              <path class="signature" d="M11.1,94.6c1.3-1.7,0.6-5.3,0.7-7.4c0.2-2.6,0.7-5.1,1.1-7.7c0.9-4.6,1.4-9.2,2.4-13.7
                c0.6-2.8,2.2-11.2,7.3-9.2c4.3,1.7,6.1,13.4,6.7,17.2c1,5.9,2.3,11.8,3.6,17.6c-1.1-6.5-2.4-12.9-3.4-19.4
                c-0.6-3.8-2.7-12.2,0.2-15.4c6.2-6.9,10.9,14.5,11.9,13.5c1,0-3.3-9.4-2.8-15.7c0.3-3.9,4.8-3.9,6.8-1.3c5.7,7.3,7.8,27.4,8.4,26.7
                c0.2,0.7,0.6-17.1,8.9-13.5c0.6,0-5.7-1.4-7.1,4.5c-1.4,5.8,1.4,8.7,5.1,8.4c5.4-0.4,2.3-13.1,2.3-13.1s3.4,13.5,7.3,11.2
                c2.7-1.6,0.4-1.9-0.1-12.4c0,5.2,0.8,11.3,1.5,10.7c0.6,0.2-5.6-14.4,3.3-15.7c5.4-0.8,6.3,13.6,6.9,12.9c0.3,0.3-2.4-18.7,8.3-15.4
                c-10-1-7.3,18.1,0.7,11.5c3.3-2.7-0.7-11.7-1.5-15.7c-0.8-4.1-2.9-18.4-4.5-17.7c-2,0.8,2.4,12.2,3.9,16c1.2,3,6,17.5,8.4,15.2
                c0.7,0,1.5-14.5,0.4-13.3c-1.3,1.3-0.7,4-0.3,5.1c0.9,2.2,3.1,8.1,6.9,7c5.4-1.6,1.9-12.8,0.7-15c8.8,11.6,14.3,29.5,15.7,44.2
                c0.2,2.1,1.3,13.5-3.2,13.9c-3.6,0.3-4.3-6.5-4.5-8.7c-0.8-10.8,4.8-21.8,9.9-31c1.7-3.1,7.7-12.4,12.5-9.8"/>
          </svg>
        </div>

      </div><!-- .entry-content -->

      <div class="social">
        <h6>Please Share:</h6>

        <!-- // tweet on Twitter -->
        <a rel="nofollow" href="http://twitter.com/home?status=<?php echo urlencode("Nice read from mandymadethis.com: "); ?><?php the_permalink(); ?>" title="Tweet This"target="_blank"><i class="fa fa-twitter fa-2x"></i></a>

        <!-- // share on Facebook -->
        <a rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share on Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>

        <!-- // share on google+ -->

        <a rel="nofollow" href="https://plus.google.com/share?url=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share on Google+" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>

      </div>

    </div><!-- #post-## -->

    <div id="nav-below" class="navigation">
      <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
      <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
    </div><!-- #nav-below -->

    <div class="comments">
    <?php comments_template( '', true ); ?>
    </div>

    <?php endwhile; // end of the loop. ?>
 
</div> <!-- /.blogWrapper from single.php -->
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>