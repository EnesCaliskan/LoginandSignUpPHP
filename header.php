<?php
session_start();
 ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="description" content="This is example">
    <meta name=viewport content="width-device-width, initial-scale=1">
    <title></title>

    <!--link rel="stylesheet" href="style.css">-->

    <!--buraya stylesheet gelicek guzel gorunmesi icin-->




</head>

<body>

<header>

    <nav>
        <a href="#">

        </a>

        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>

          <div>


            <?php

            if (isset($_SESSION['userId'])) { // eger kullanici giris yaparsa , tum olaylar bu if in altinda olmasi gerek
              echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
              </form>';
            }
            else { // eger kullanici giris yapamazsa , tum offline isler bunun altinda olmali
              echo '<form action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="Username/E-Mail....">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                  </form>';
            }

             ?>


        <a  href="signup.php">Sing Up</a>

    


        </div>





    </nav>

    </header>
