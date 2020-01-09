<?php

require ("vendor/autoload.php");

$g_client = new Google_Client();
$g_client->setClientId("302114294420-i16n1ou76o4dfol61567n1up2heam9um.apps.googleusercontent.com");
$g_client->setClientSecret("UwqQcB5Gd7RF9QsYQWuywz5W");
$g_client->setRedirectUri("http://localhost/stable2/google.php");
$g_client->setScopes("email");

$g_client -> addScope("email");
$g_client -> addScope("profile");

$auth_url = $g_client->createAuthUrl();

echo '<div class="card-body">';
echo "<a href='$auth_url'>Google ile giris yap </a>";
echo "</div>";

$code = isset($_GET['code']) ? $_GET['code'] : NULL;

if(isset($code)) {
    try {
        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);
    }catch (Exception $e){
        echo $e->getMessage();
    }
    try {
        $pay_load = $g_client->verifyIdToken();
    }catch (Exception $e) {
        echo $e->getMessage();
    }
} else{
    $pay_load = null;
}

//echo $pay_load["email"];
//echo $pay_load["name"];


if(isset($pay_load)){

//include 'aftergoogle.php';


echo ' <!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/227e4b609c.js" crossorigin="anonymous"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src="images/logo.png" alt="LibrarySystem32"/></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">Anasayfa <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="duyuru.html">Duyuru</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Admin
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="kitapekle.html">Kitap Ekle-Sil</a>
        <a class="dropdown-item" href="kullaniciekle.html">Kullanıcı Ekle-Sil</a>
      </div>
    </li>
            <li class="nav-item">
      <a class="nav-link" href="sozluk.html">Sözlükler</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Kitaplar
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="kitap.html">Kitap</a>
        <a class="dropdown-item" href="sepet.html">Ödünç</a>
        <a class="dropdown-item" href="bagis.html">Bağış</a>
        <a class="dropdown-item" href="yenigelen.html">Yeni Gelen Yayımlar</a>
        <a class="dropdown-item" href="ekitap.html">E-Kitap</a>
      </div>
    </li>
          <li class="nav-item">
      <a class="nav-link" href="iletisim.html">İletişim ve İstek Formu</a>
    </li>
                <li class="nav-item">
      <a class="nav-link" href="profil.html">Profil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="kayit.html">KAYIT OL</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Ara" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
  </form>
</div>
      </nav>

    <div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
           <!-- Background image for card set in CSS! -->
        </div>


        <header>

            <nav>
                <a href="#">

                </a>

                <ul>

                </ul>

                  <div>



                  <h4> Hosgeldiniz '.$pay_load["email"].'
                  <h5> Google ile basariyla giris yaptiniz! </h4>


                  ';





}




 ?>
