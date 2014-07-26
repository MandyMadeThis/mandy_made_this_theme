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
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <!-- favicons -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-ipad-retina.png">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <!--   Load jQuery UI Style Sheet -->
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css">
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

</head>
<body <?php body_class(); ?>>
    <!-- _____________________________________________________________________________________________________________________
    CONTACT SECTION
    ______________________________________________________________________________________________________________________ -->
    <div id="contact" class="contact">
      <a href="#" class="close"><i class="fa fa-times-circle fa-2x"></i></a>
      <h2 class="rheader white">Contact<span class="title navy">.</span></h2>
      <ul>
        <li><a href="tel:+14166487924" class="contacticon" alt="Phone Number"><i class="fa fa-phone fa-3x"></i></a><span class="bubble">Click to call me at 416.648.7924</span></li>
        <li><a href="mailto:hi@mandymadethis.com" class="contacticon" alt="Email"><i class="fa fa-envelope fa-3x"></i></a><span class="bubble">Click to email me at hi@mandymadethis.com</span></li>
        <li><a href="skype:mandymadethis?call" class="contacticon" alt="Skype Account"><i class="fa fa-skype fa-3x"></i></a><span class="bubble">Click to skype me @mandymadethis</span></li>
        <li><a href="http://twitter.com/mandymadethis" target="_blank" class="contacticon" alt="Twitter Profile"><i class="fa fa-twitter fa-3x"></i></a><span class="bubble">Click to tweet @ me</span></li>
        <li><a href="http://codepen.io/MandyMadeThis" target="_blank" class="contacticon">
          <svg viewbox=" 0 0 60 60" alt="CodePen Profile">
          <g>
          <polygon points="13,22.9 13,27.1 16.1,25  "/>
          <polygon points="23.8,19.9 23.8,14.1 14,20.6 18.4,23.5  "/>
          <polygon points="36,20.6 26.2,14.1 26.2,19.9 31.6,23.5  "/>
          <polygon points="14,29.4 23.8,35.9 23.8,30.1 18.4,26.5  "/>
          <polygon points="26.2,30.1 26.2,35.9 36,29.4 31.6,26.5  "/>
          <polygon points="25,22.1 20.6,25 25,27.9 29.4,25  "/>
          <path d="M25,1.6C12.1,1.6,1.6,12.1,1.6,25c0,12.9,10.5,23.4,23.4,23.4S48.4,37.9,48.4,25C48.4,12.1,37.9,1.6,25,1.6z M39.4,29.4
          c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1
          c0,0,0,0.1-0.1,0.1c0,0,0,0,0,0.1c0,0,0,0-0.1,0.1c0,0,0,0,0,0c0,0,0,0-0.1,0.1c0,0,0,0-0.1,0c0,0,0,0,0,0l-13.2,8.8
          c-0.2,0.1-0.4,0.2-0.7,0.2s-0.5-0.1-0.7-0.2l-13.2-8.8c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0-0.1-0.1
          c0,0,0,0,0-0.1c0,0,0,0-0.1-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1
          c0,0,0,0,0-0.1c0-0.1,0-0.1,0-0.2v-8.8c0-0.1,0-0.1,0-0.2c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1
          c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0.1-0.1c0,0,0,0,0-0.1c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0.1-0.1
          c0,0,0,0,0.1,0c0,0,0,0,0,0l13.2-8.8c0.4-0.3,1-0.3,1.4,0l13.2,8.8c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0.1,0.1c0,0,0,0,0,0
          c0,0,0,0,0.1,0.1c0,0,0,0,0,0.1c0,0,0,0,0.1,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1
          c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.2V29.4z"/>
          <polygon points="37,27.1 37,22.9 33.9,25  "/>
          </g>
          </svg>
        </a><span class="bubble">Check out what I'm playing with on Codepen</span></li>
        <li><a href="http://github.com/MandyMadeThis" target="_blank" class="contacticon" alt="Github Profile"><i class="fa fa-github fa-3x"></i></a><span class="bubble">Git your fork on!</span></li>
        <li><a href="http://ca.linkedin.com/in/mandymadethis/" class="contacticon" target="_blank" alt="LinkedIn Profile"><i class="fa fa-linkedin fa-3x"></i></a><span class="bubble">LinkIn to my professional network.</span></li>
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