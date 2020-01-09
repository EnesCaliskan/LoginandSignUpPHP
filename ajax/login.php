<?php

require_once '../PHPGangsta/GoogleAuthenticator.php';

$secret = 'M66XPGTHAZPXSCBP';



if(isset($_POST['google_code'])) {

 $code = $_POST['google_code'];
 $ga = new PHPGangsta_GoogleAuthenticator();
 $result = $ga -> verifyCode($secret, $code, 3);

}

echo $result;


 ?>
