<?php
require "header.php";
?>

<main>



          <div class="card-body">
          <p class="login-status">Basariyla giris yaptiniz!</p>
          <p>2 Asamali Dogrulama kodunuzu giriniz</p>
          </div>

          <?php
          require '2fa.php';
          ?>


</main>

<?php
require "footer.php";
?>
