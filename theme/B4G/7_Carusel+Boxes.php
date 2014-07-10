<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
include('header.inc.php'); 
?>

	<div id="carousel" style="margin-top: -20px" class="carousel slide c-fade hidden-xs" data-ride="carousel">
<!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
        <img src="<?php get_theme_url(); ?>/images/big_carousel1.jpg" alt="First slide">
			<div class="container">
				<div class="carousel-caption"><?php get_i18n_component('carousel1'); ?></div>
			</div>
        </div>
        <div class="item">
        <img src="<?php get_theme_url(); ?>/images/big_carousel2.jpg" alt="Second slide">
			<div class="container">
				<div class="carousel-caption"><?php get_i18n_component('carousel2'); ?></div>
			</div>
        </div>
        <div class="item">
		<img src="<?php get_theme_url(); ?>/images/big_carousel3.jpg" alt="Third slide">
			<div class="container">
				<div class="carousel-caption"><?php get_i18n_component('carousel3'); ?></div>
			</div>
        </div>
    </div>
    </div>
	<!-- Carousel replacement for mobile devices -->
<div class="col-xs-12 visible-xs">
<?php get_i18n_component('carousel1'); ?>
<?php get_i18n_component('carousel2'); ?>
<?php get_i18n_component('carousel3'); ?>
</br>
</div>
<!-- Space between blocks -->
<div class="col-xs-12 visible-xs">
<br>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-xs-12">
			<?php get_i18n_component('box1'); ?>
		</div>
		<div class="col-md-4 col-xs-12">
			<?php get_i18n_component('box2'); ?>
		</div>
		<div class="col-md-4 col-xs-12">
			<?php get_i18n_component('box3'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-xs-12">
		<h1><?php get_page_title(); ?></h1>                					     
		<?php get_page_content(); ?>
	</div>
</div>

	</div>
<?php include('footer.inc.php'); ?>