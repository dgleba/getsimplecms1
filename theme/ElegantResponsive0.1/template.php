<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Elegant Responsive theme for GetSimple CMS
*
*****************************************************/
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	<?php get_header(); ?>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css">

	<script src="<?php get_theme_url(); ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<div id="header-container">
		<header class="wrapper clearfix">
			<h1 id="title"><a href="<?php get_site_url(); ?>"><img src="<?php get_theme_url(); ?>/images/logo.png" alt="<?php get_site_name(); ?>"></a></h1>
			<nav>
				<ul>
					<?php get_navigation(return_page_slug()); ?>
				</ul>
			</nav>
		</header>
	</div>
	<div id="main-container">
		<div id="main" class="wrapper clearfix">
			
			<article>
				<header>
					<h1><?php get_page_title(); ?></h1>			
				</header>
				<section>
					<?php get_page_content(); ?>
				</section>
			</article>
			
			<aside>
				<?php get_component('sidebar');	?>
			</aside>
			
		</div> <!-- #main -->
	</div> <!-- #main-container -->

	<div id="footer-container">
		<footer class="wrapper">
			<p>Elegant Responsive by <a href="http://lucamusolesi.altervista.org/">Luca Musolesi</a> - <?php get_site_credits(); ?></p>
		</footer>
	</div>

<?php get_footer(); ?>
</body>
</html>
