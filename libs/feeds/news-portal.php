<?php
###################
## Feed Settings ##
###################
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


// create feed
$rss091 = new RSS091(url('feed', array('xml' => 'news-portal'), true), $settings);
echo $rss091;
?>
