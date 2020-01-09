<?php
require "header.php";
?>

<main>


<?php

if (isset($_SESSION['userId'])) { // eger kullanici giris yaparsa , tum olaylar bu if in altinda olmasi gerek
  echo '<div class="card-body">
        <p class="login-status">Basariyla giris yaptiniz!</p>
        <p>2 Asamali Dogrulama kodunuzu giriniz</p>
        </div>';

  include '2fa.php'; // eğer kullanici basariyla giris yaparsa , 2fa ya yonlendirilir

}
else { // eger kullanici giris yapamazsa , tum offline isler bunun altinda olmali
  echo '<div class="card-body">
    <p class="login-status">Su an bagli degilsiniz</p>
    </div>';
}

 ?>


 <?php // Facebook ile giris tarafi



include 'login2.php';


  ?>


</main>

<?php
require "footer.php";
?>
