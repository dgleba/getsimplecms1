<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php get_header(); ?>
<title><?php get_page_clean_title(); ?> | <?php get_site_name(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/print.css" media="print" />
</head>
<body>
<table class="layout" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="title"><?php get_site_name(); ?></td>
  </tr>
  <tr>
    <td  class="menu"><ul>
             <?php get_navigation(return_page_slug()); ?>
    </ul></td>
  </tr>
  <tr>
    <td class="image"><img src="<?php get_theme_url(); ?>/img/image.jpg" alt="" width="425" height="64" /></td>
  </tr>
    <tr>
       <td class="content"><?php get_page_content(); ?></td>
  </tr>
  <tr>
    <td class="bottom">&copy; <?php echo date("Y");?> <?php get_site_name(); ?></td>
  </tr>
</table>
<?php get_footer(); ?>
</body>
</html>
