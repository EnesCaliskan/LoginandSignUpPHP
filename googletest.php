<?php

require_once 'vendor/autoload.php';

 $google_client = new Google_Client();

 $google_client -> setClientId('302114294420-i16n1ou76o4dfol61567n1up2heam9um.apps.googleusercontent.com')
 $google_client -> setClientSecret('UwqQcB5Gd7RF9QsYQWuywz5W');
 $google_client - > setRedirectUri("http://localhost/stable2/");

 $google_client-> addScope('email');
 $google_client-> addScope('profile');











 ?>
