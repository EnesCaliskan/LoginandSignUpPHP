<?php
require "header.php";
?>

<main>

     <div class="card">
  <div class="card-body">

  <h3> Bilgilerinizi giriniz </h3>



  <form action="includes/login.inc.php" method="post">

      <div class="form-label-group">
      <input type="text" name="mailuid" class="form-control" placeholder="Kullanici Adi/EMail....">
      </div>

      <div class="form-label-group">
        <input type="password" name="pwd" class="form-control" placeholder="Sifre...">
        </div>

        <div class="card-body">
        <button class="btn btn-lg btn-primary btn-block btn-success " type="submit" name="login-submit">Giris Yap</button>
        </div>

    </form>

  </div>
</div>

</main>

<?php
require "footer.php";
?>
