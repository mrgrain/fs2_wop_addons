<?php
###################
## Feed Settings ##
###################
$feed_url = 'feeds/news-portal.php';
$settings = array (
    'to_html' => array(),
    'to_text' => array('u', 's', 'font', 'color', 'size', 'code', 'nofscode', 'fscode', 'html', 'nohtml'),
    'to_bbcode' => array('cimg', 'home', 'video'),
    //don't convert: 'b', 'i', 'img', 'quote', 'center', 'url', 'list', 'numlist', 'quote'
	'truncate' => false, // Set to length if you want to cut!
    'use_html' => null,
    'tpl_functions' => 'softremove',
    'cat_filter' => array(),
    'cat_prepend' => ': '
);
##################
## Settings End ##
##################


/* FS2 PHP Init */
set_include_path('.');
define('FS2_ROOT_PATH', './../', true);
require_once(FS2_ROOT_PATH . 'includes/phpinit.php');
phpinit(false, 'Content-type: application/xml');
/* End of FS2 PHP Init */


// Inlcude DB Connection File or exit()
require( FS2_ROOT_PATH . 'login.inc.php');

//Include Functions-Files & Feed-Lib
require_once(FS2_ROOT_PATH . 'libs/class_Feed.php');

// create feed
$rss091 = new RSS091($FD->cfg('virtualhost').$feed_url, $settings);
echo $rss091;

// Shutdown System
unset($FD);
?>
