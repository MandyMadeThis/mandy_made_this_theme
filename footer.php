<footer>
  <?php wp_footer(); ?>
  <div class="siteAbout">
    <h4>About This Site:</h4>
    <p>This site was built completely from scratch, with a lot of L<i class="fa fa-heart"></i>VE by Me:  <a href="https://twitter.com/mandymadethis" target="_blank">Mandy Thomson</a>. I built a custom Wordpress theme from the ground up, using zero frameworks or templates. This site is fully responsive and utilizes <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">FontAwesome</a> for all icons and the Google font: <a href="https://www.google.com/fonts/specimen/Lato" target="_blank">Lato</a>. Any background patterns are pure CSS. My signature at the end of my blog posts is a CSS animation of an svg path and uses jQuery to fire the animation. I use <a href="http://gruntjs.com/" target="_blank">Grunt</a> to compile my <a href="http://sass-lang.com/" target="_blank">Sass</a> and do a bunch of other dirty work for me. Any more question? Got a suggestion? Want to grab a coffee or a glass of wine? Then <a class="intouch" href="#contact">get in touch!</a></p>
  </div>
  <p class="copyright">&copy; Mandy Made This <?php echo date('Y'); ?></p>
</footer>
</div> <!-- /.wrapper -->
  <!-- Load jQuery, jQuery UI and our own scripts file -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/scripts/scripts.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
<script>
  /* Google Analytics! */
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-48076466-1', 'mandymadethis.com');
  ga('send', 'pageview');
</script>
</body>
</html>