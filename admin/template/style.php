<?php

/**
 * Admin Stylesheet
 *
 * @package GetSimple
 * @subpackage init
 */

header('Content-type: text/css');

$load['plugin'] = true;
include('../inc/common.php');

$offset = 30000;
#header ('Cache-Control: max-age=' . $offset . ', must-revalidate');
#header ('Expires: ' . gmdate ("D, d M Y H:i:s", time() + $offset) . ' GMT');
$nocache = true;
# check to see if cache is available for this
$cachefile = GSCACHEPATH.'stylesheet.txt';
if (file_exists($cachefile) && time() - 600 < filemtime($cachefile) && !$nocache) {
	echo "/* Cached copy, generated ".date('H:i', filemtime($cachefile))." '".$cachefile."' */\n";
	echo file_get_contents($cachefile);
	exit;
}

ob_start();

function compress($buffer) {
  $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer); /* remove comments */
  $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer); /* remove tabs, spaces, newlines, etc. */
  return $buffer;
}

$useadminxml = true;

if (file_exists(GSTHEMESPATH.'admin.xml') && $useadminxml) {
	#load admin theme xml file
	$theme = getXML(GSTHEMESPATH.'admin.xml');

	$header_base  = trim((string) $theme->header->base);

	$primary_0    = trim((string) $theme->primary->darkest);
	$primary_1    = trim((string) $theme->primary->darker);
	$primary_2    = trim((string) $theme->primary->dark);
	$primary_3    = trim((string) $theme->primary->middle);
	$primary_4    = trim((string) $theme->primary->light);
	$primary_5    = trim((string) $theme->primary->lighter);
	$primary_6    = trim((string) $theme->primary->lightest);

	$secondary_0  = trim((string) $theme->secondary->darkest);
	$secondary_1  = trim((string) $theme->secondary->lightest);

	$label_0      = trim((string) $theme->label->label_0);
	$label_1      = trim((string) $theme->label->label_1);
	$label_2      = trim((string) $theme->label->label_2);
	$label_3      = trim((string) $theme->label->label_3);
	$label_4      = trim((string) $theme->label->label_4);
	$label_5      = trim((string) $theme->label->label_5);
	$label_6      = trim((string) $theme->label->label_6);
}

# set default colors
$defaultcolors = array(
	'primary_0'  	=> '#0E1316', # darkest
	'primary_1'  	=> '#182227', # darker
	'primary_2'  	=> '#283840', # dark
	'primary_3'  	=> '#415A66', # middle
	'primary_4'  	=> '#618899', # light
	'primary_5'  	=> '#E8EDF0', # lighter
	'primary_6'  	=> '#AFC5CF', # lightest
	'secondary_0'	=> '#9F2C04', # darkest
	'secondary_1'	=> '#CF3805', # lightest
	'label_0'    	=> '#F2F2F2', # label_default
	'label_1'    	=> '#0B5584', # label_info
	'label_2'    	=> '#008C00', # label_ok
	'label_3'    	=> '#FF8500', # label_warn
	'label_4'    	=> '#CC0000', # label_error
	'label_5'    	=> '#FFFFFF', # label_light
	'label_6'    	=> '#999999'  # label_medium
);

foreach($defaultcolors as $var => $color){
	if(empty($$var)) $$var = $color;
}

// set default header_base to primary_3
if(empty($header_base)) $header_base = $primary_3;

// include main css file css.php
include(GSCSSMAINFILE);

// if GSTYLEWIDE ( default )
if( isset($_GET['s']) and in_array('wide',explode(',',$_GET['s'])) ){
	$width      = getDef('GSWIDTH');                  // get page width
	$width_wide = getDef('GSWIDTHWIDE');              // get wide page width
	$widepages  = explode(',',getDef('GSWIDEPAGES')); // get ids of pages that are wide
	$widepagecss = '';

	if($width =='0' or $width == '') $width = 'none'; // allow for no max-width

	// set max width for wide pages using custom wide width
	foreach($widepages as $pageid){
		$widepagecss.= "#$pageid .wrapper {max-width: $width_wide;}\n";
	}

	include('css-wide.php');
}

// include custom theme/admin.css if exists
if(file_exists(GSTHEMESPATH.GSCSSCUSTOMFILE)) include(GSTHEMESPATH.GSCSSCUSTOMFILE);

exec_action('style-save'); // called after css files are included

// save cache
file_put_contents($cachefile, compress(ob_get_contents()));
chmod($cachefile, 0644);

ob_end_flush();
