<?php

  session_start();
  require_once 'Facebook/autoload.php';
  require_once 'Facebook/Facebook.php';

  $fb = new Facebook\Facebook([
    'app_id' => '2659133240842943',
    'app_secret' => 'c075d71e22db9b56b8937abb1c445a7d',
  ]);

  $helper = $fb -> getRedirectLoginHelper();
  $loginUrl = $helper -> getLoginUrl('C:\xampp\htdocs\test\fb-callback.php');





 ?>
