<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      header.inc.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
?>
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
<!-- ************************************************************************
		Change bootstrap.css to the style you prefer:

			bootstrap_amelia.css
			bootstrap_cerulean.css
			bootstrap_cyborg.css
			bootstrap_cosmo.css
			bootstrap_journal.css
			bootstrap_readable.css
			bootstrap_simplex.css
			bootstrap_slate.css
			bootstrap_spacelab.css
			bootstrap_spruce.css
			bootstrap_superhero.css
			bootstrap_united.css

		Styles from http://bootswatch.com/
 -->
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/bootstrap.css">
<!-- ************************************************************************* -->
	<style>
	body {
	  padding-top: 60px;
	  padding-bottom: 40px;
	}
	</style>
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/bootstrap-responsive.css">

	<script src="<?php get_theme_url(); ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>