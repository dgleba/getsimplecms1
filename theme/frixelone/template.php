<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Action:		Frixel One theme for GetSimple by Frixel Solutions LLC.
*
*****************************************************/
require_once('header.php'); 
?>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  	<div class="row">
	  <div class="col-md-12">
	  	<h1><?php get_page_title(); ?></h1>
		<?php get_page_content(); ?>
	  </div>
	</div>
</div><!-- panel content ends here -->
      
<?php require_once('footer.php'); ?>


  