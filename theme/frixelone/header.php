<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.php
* @Action:		Frixel One theme for GetSimple by Frixel Solutions LLC.
*
*****************************************************/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="favicon.ico">
    <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
    <link href="<?php get_theme_url(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/stylesheet.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script language="JavaScript" src="<?php get_theme_url(); ?>/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php get_header(); ?>
  </head>
  <body id="<?php get_page_slug(); ?>" >
<!-- David Gleba kdg54 2014-07-10_Thu_13.43-PM
       <div class="hdr">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a href="<?php get_site_url(); ?>">
-->
                <!--To have a logo instead of text, upload something to images/logo.png, uncomment this line, and instead comment the line below this one... <img src="<?php get_theme_url(); ?>/images/logo.png" width="300" alt="<?php get_site_name(); ?>" /> -->
<!--  David Gleba kdg54 2014-07-10_Thu_13.43-PM
             <h1 class="hdrlogo"><?php get_site_name(); ?></h1>
              </a>
            </div>
            <div class="col-md-6">
              <div class="hdrtagline"><h1><?php get_component('tagline'); ?></h1></div>
            </div>
          </div>
        </div>
      </div>
-->
      <div class="navbar navbar-inverse navbar-hdr" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            	<?php get_navigation(get_page_slug(FALSE)); ?>
            <!--<li <?php //if ($pageTitle=="Main Template") echo 'class="active"'; ?> ><a href="index.php">Main Template</a></li>
            <li <?php //if ($pageTitle=="With Sidebar") echo 'class="active"'; ?> ><a href="blog.php">With Sidebar</a></li>-->
          </ul>
        </div>
      </div>
    </div>