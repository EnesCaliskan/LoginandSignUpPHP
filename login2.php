<?php
//require_once 'Facebook/autoload.php';
require_once 'Facebook/Facebook.php';
if(!session_id()) {
    session_start();
}
$fb = new Facebook\Facebook([
	'app_id' => getenv("2659133240842943"),
	'app_secret' => getenv("c075d71e22db9b56b8937abb1c445a7d"),
	'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email', 'user_location']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/stable2/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>
