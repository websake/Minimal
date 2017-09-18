<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title('|',true,right); ?></title>
	

	<meta name="description" content="Your description here" />
		<meta name="keywords" content="Your keywords here" />
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="http://yoursite.com/img/favicon.ico">
	
<!-- Apple special icons
	<link rel="apple-touch-icon" href="http://yoursite.com/img/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="http://yoursite.com/img/apple-touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="http://yoursite.com/img/apple-touch-icon-iphone4.png" />
	<link rel="apple-touch-startup-image" href="http://yoursite.com/img/apple-touch-startup.png">
-->
	<link href='http://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet' type='text/css'>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-yoursite-2', 'yoursite.com');
  ga('send', 'pageview');

</script>
	<?php wp_head(); ?>

</head>
<body>
	<div class="container">
		<div class="top">
			<h1><a id="tagline" href="/"><?php bloginfo('name'); ?></a> <a id="tagline" href="/"><?php bloginfo('description'); ?>	</a></h1>
		</div> <!-- /end .top -->