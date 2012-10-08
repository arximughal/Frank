<?php
/**
 * @package Frank
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<?php frank_meta_keywords(); ?>
	
	<title>
		<?php wp_title('&mdash;',true,'right'); ?>
 		<?php bloginfo('name'); ?>
	</title>

	<?php 
	if(!frank_devmode()) { frank_enqueue_styles(); }
	else { frank_enqueue_styles_dev(); }
	?>
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php get_feed_link( 'rss2' ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--[if lte IE 8]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<!--[if lt IE 7]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
	<![endif]-->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>	
</head>
<body id="page" <?php body_class($class); ?>>
<div class="container">
	<!--[if lt IE 7]>
		<p class="chromeframe">Your browser is out of date. Please <a href="http://browsehappy.com/">upgrade your browser </a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a>.</p>
	<![endif]-->
	<header id="page-header" class="row">
		<hgroup id="site-title-description">
			<h1 id="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2 id="site-description"><?php bloginfo('description'); ?></h2>
		</hgroup>
		<nav id="site-nav">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Navigation") ) : ?>
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false ) ); ?>	
			<?php endif; ?> 
		</nav>
		<?php if ( is_active_sidebar("widget-subheader") ) : ?>
		<div id='sub_header' class='row'>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sub Header") ) : ?>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</header>