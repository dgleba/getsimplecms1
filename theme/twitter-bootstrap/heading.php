<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      heading.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
?>
<!doctype html>
<?php include('header.inc.php'); ?>
<body id="<?php get_page_slug(); ?>">
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <?php get_navigation(return_page_slug()); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <div class="hero-unit">
        <?php get_page_content(); ?> 
      </div>

      <div class="row">
        <div class="span4">
        <?php get_component('head1'); ?>
        </div>
        
        <div class="span4">
        <?php get_component('head2'); ?>
        </div>

        <div class="span4">
        <?php get_component('head3'); ?>
        </div>

      </div>

<?php include('footer.inc.php'); ?>
