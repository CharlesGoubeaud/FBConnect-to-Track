<?php

/**
 * @file
 * A single location to store configuration.
 */

// add your facebook credentials here
define('FACEBOOK_APPID', 'xxxxxxxxxxxxxxxxxxx');
define('FACEBOOK_SECRET', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
define('FACEBOOK_FANPAGE_NAME', 'Mutual Co.');
define('FACEBOOK_FANPAGE_ID', '204795656199305'); // click "edit this page" and see the id in the URL
define('FACEBOOK_FANPAGE_URL', 'http://www.facebook.com/pages/Mutual-Co/204795656199305'); 

// the messages shown to the visitor
// no double-quotes please, escape single quotes with \'
define('WELCOME_MESSAGE', 'Just click the "Connect to Facebook" link. Anyone who likes the page will get a download link.');
define('ISAFAN_MESSAGE', 'Woah you rock! Pass this along to your friends, and click below for your download:');
define('NOTAFAN_MESSAGE', 'Naughty, Naughty. Facebook reports that you haven\'t liked the page. You should click the like button and try again.');

// facebook share settings - this is what shows up when a user clicks to share
// no double-quotes please, escape single quotes with \'
define('FACEBOOK_SHARE_TITLE', Mutual Co. Goodies');
define('FACEBOOK_SHARE_IMAGE', 'http://a5.sphotos.ak.fbcdn.net/hphotos-ak-snc6/250364_224717674207103_204795656199305_977774_2442188_n.jpg'); // absolute path 100x100
define('FACEBOOK_SHARE_DESCRIPTION', 'Mutual Co. is offering free content that enables visiters to enjoy unique experiences through media. You can download our goodies here.');

// set secure download to true (for S3 security) or false for straight http download
define('SECURE_DOWNLOAD', true);
// set amazon credentials if you are using a secure download
define('AMAZONS3_KEY', 'xxxxxxxxxxxxxxxxxxx');
define('AMAZONS3_SECRET', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
define('AMAZONS3_BUCKET', 'xxxxxxxxx');

// set your download title
// escape single quotes with \'
define('DOWNLOAD_TITLE', 'Mutual Co. Goodies: El Cantador Edition');
// URL or amazon URI (if amazon, do not include bucket)
define('DOWNLOAD_URI', 'http://your.file/goes.here.zip');
?>