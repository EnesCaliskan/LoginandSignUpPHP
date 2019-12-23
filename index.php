<?php
require "header.php";
?>

<main>

<?php

if (isset($_SESSION['userId'])) { // eger kullanici giris yaparsa , tum olaylar bu if in altinda olmasi gerek
  echo '<p class="login-status">You are logged in!</p>';
}
else { // eger kullanici giris yapamazsa , tum offline isler bunun altinda olmali
  echo '<p class="login-status">You are logged out!</p>';
}

 ?>


 <?php // Facebook ile giris tarafi


 require_once 'Facebook/autoload.php';
 require_once 'Facebook/Facebook.php';

 $fb = new Facebook\Facebook([
   'app_id' => '2659133240842943',
   'app_secret' => 'c075d71e22db9b56b8937abb1c445a7d',
 ]);

 $helper = $fb -> getRedirectLoginHelper();
 $loginUrl = $helper -> getLoginUrl('C:\xampp\htdocs\test\fb-callback.php'); //callback php gostermen lazim

echo '<a href="'.$loginUrl.'">Facebook ile Giris Yap</a>';


  ?>


</main>

<?php
require "footer.php";
?>
