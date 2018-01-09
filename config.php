<?php
 

require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://www.bucksshop.in/index.php');
//define( 'DB_HOST', 'localhost' );
//define( 'DB_USERNAME', 'loanwalc_bucks');
//define( 'DB_PASSWORD', 'Shop@2017');
//define( 'DB_NAME', 'loanwalc_bucks');

define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', '');
define( 'DB_NAME', 'loanwalc_bucks');

//Facebook App Details
define('FB_APP_ID', '1269448173077357');
define('FB_APP_SECRET', '58e0a1ce6bfbeb38eeedd9ba8ea83322');
define('FB_REDIRECT_URI', 'http://www.bucksshop.in/login.php');




//Google App Details
define('GOOGLE_APP_NAME', 'CultivatingHappyness Google+ login');
define('GOOGLE_OAUTH_CLIENT_ID', '418570631334-22igjsfmd535fjhkpq8lv9m782uhhb96.apps.googleusercontent.com');
define('GOOGLE_OAUTH_CLIENT_SECRET', 'trlb1fLYhWYwTrIjD7oIyg1U');
define('GOOGLE_OAUTH_REDIRECT_URI', 'http://www.bucksshop.in/login.php');
define("GOOGLE_SITE_NAME", 'BUCKSHOP'); 


//Twitter login
define('TWITTER_CONSUMER_KEY', 'wYTh64Qu5iAi79fxRc7qj7ebx');
define('TWITTER_CONSUMER_SECRET', 'oMU0yutBUQtEkvGULnRyyGi0ipltq1XBQA5Y9f3mfbOY8LMPGB');
define('TWITTER_OAUTH_CALLBACK', 'http://www.bucksshop.in/login.php');



function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
