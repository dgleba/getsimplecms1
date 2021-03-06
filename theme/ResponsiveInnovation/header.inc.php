<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8">

  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	
	<meta name="robots" content="index, follow">

	<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/layout.css">
	<link href="<?php get_theme_url(); ?>/assets/css/reset.css" rel="stylesheet">
		
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

	<?php get_header(); ?>
	
</head> 
<body id="<?php get_page_slug(); ?>" >
	
	<!-- site header -->
	<header>
		<div class="header">
			<div class="container">
				<div class="one-third column">
					<!-- logo/sitename -->
					<a href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a>
				</div>
				<div class="two-thirds column">
					<!-- main navigation -->
					<nav id="main-nav">
						<ul>
							<?php get_navigation(get_page_slug(FALSE)); ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
		<!-- breadcrumbs: only show when NOT on homepage -->
		<div class="breadcrumbs" >
			<p class="container">
				<a href="<?php get_site_url(); ?>">Home</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; <?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
			</p>
		</div>
		
  </header>