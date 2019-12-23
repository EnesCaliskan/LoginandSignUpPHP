<?php
require "header.php";
?>

<main>

    <h1>Signup</h1>

    <?php

    if (isset($_GET['error'])) { // eger kullanici kayit olurken bos yer birakirsa hata mesaji
      if ($_GET['error'] == "emptyfields") {
        echo '<p class="signuperror>"Fill in all fields!</p>'
      }
      else if ($_GET['error'] == "invaliduidmail") {
        echo '<p class="signuperror>"Invalid username or email!</p>'
      }
      else if ($_GET['signup'] == "succes") {
        echo '<p class="signuperror>"SignUp Successful!</p>'
      }
      

    }

     ?>

    <form class="form-signup" action="includes/signup.inc.php" method="post">

        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">

        <button type="submit" name="signup-submit">Signup</button>



    </form>

</main>

<?php
require "footer.php";
?>
