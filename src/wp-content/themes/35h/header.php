<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>35h</title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=<?php print(time()); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php //wp_head(); ?>

	<script type="text/javascript" src="/wp-content/themes/35h/javascript/jquery.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/35h/javascript/TweenMax.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/35h/javascript/jquery.scrollmagic.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/35h/javascript/jquery.scrollmagic.debug.js"></script>

	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

	<?php //wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<?php global $post; ?>
<body <?php body_class(); ?>>

	<?php include TEMPLATEPATH . '/common/common_header.php'; ?>
