<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/monokai_sublime.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- favicons -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-ipad-retina.png">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
</head>
<body <?php body_class(); ?>>
  <div id="contact" class="contact">
    <a href="#" class="close"><i class="fa fa-times-circle fa-2x"></i></a>
    <h2 class="rheader white">Contact<span class="title navy">.</span></h2>
    <ul>
      <li>
        <a href="tel:+14166487924" class="contacticon" alt="Phone Number"><i class="fa fa-phone fa-3x"></i>
        </a><span class="bubble">Click to call me at 416.648.7924</span>
      </li>
      <li>
        <a href="mailto:hi@mandymadethis.com" class="contacticon" alt="Email"><i class="fa fa-envelope fa-3x"></i>
        </a><span class="bubble">Click to email me at hi@mandymadethis.com</span>
      </li>
      <li>
        <a href="skype:mandymadethis?call" class="contacticon" alt="Skype Account"><i class="fa fa-skype fa-3x"></i>
        </a><span class="bubble">Click to skype me @mandymadethis</span>
      </li>
      <li>
        <a href="http://twitter.com/mandymadethis" target="_blank" class="contacticon" alt="Twitter Profile"><i class="fa fa-twitter fa-3x"></i></a>
        <span class="bubble">Click to tweet @ me</span>
      </li>
      <li>
        <a href="http://codepen.io/MandyMadeThis" target="_blank" class="contacticon" alt="Codepen Profile"><i class="fa fa-codepen fa-3x"></i></a>
        <span class="bubble">Check out what I'm playing with on Codepen</span></li>
        <li>
          <a href="http://github.com/MandyMadeThis" target="_blank" class="contacticon" alt="Github Profile"><i class="fa fa-github fa-3x"></i></a>
          <span class="bubble">Git your fork on!</span>
        </li>
        <li>
          <a href="http://ca.linkedin.com/in/mandymadethis/" class="contacticon" target="_blank" alt="LinkedIn Profile"><i class="fa fa-linkedin fa-3x"></i></a>
          <span class="bubble">LinkIn to my professional network.</span>
        </li>
      </ul>
      </div> <!-- / #contact -->
      <?php if(is_front_page() ) :  ?>
      <header>
        <div class="logoWrapper">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg" alt="Mandy Made This Logo">
        </div>
        <nav>
          <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header' ) ); ?>
        </nav>
      </header>
      <?php else :  ?>
      <header class="sticky">
        <nav>
          <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header' ) ); ?>
        </nav>
      </header>
      <?php endif; ?>