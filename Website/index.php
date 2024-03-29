<?php
session_start();
$isLoggedIn = false;
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {
  $isLoggedIn = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>LessRessources</title>
  <link href="lib/css/index.css" rel="stylesheet">
  <link href="lib/css/general.css" rel="stylesheet">
  <link rel="shortcut icon" href="lib/pictures/Logo_Icon.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script defer src="lib/js/index.js"></script>
</head>

<body>
  <nav class="navbar">
    <div class="logo"><img onclick="window.open('index.php','_self')" class="logo" src="lib/pictures/Logo.png" alt="LOGO"></div>
    <div class="push-left">
      <button id="menu-toggler" data-class="menu-active" class="hamburger">
        <span class="hamburger-line hamburger-line-top"></span>
        <span class="hamburger-line hamburger-line-middle"></span>
        <span class="hamburger-line hamburger-line-bottom"></span>
      </button>
      <ul id="primary-menu" class="menu nav-menu">
        <li class="menu-item current-menu-item"><a class="nav__link" href="index.php">Home</a></li>
        <li class="menu-item dropdown"><a class="nav__link" href="strom.php">Strom</a></li>
        <?php
        if ($isLoggedIn) {
          echo '<li class="menu-item dropdown"><a class="nav__link" href="admin.php">Admin</a></li>';
        } else {
          echo '<li class="menu-item dropdown"><a class="nav__link" href="login.php">Login</a></li>';
        }
        ?>
      </ul>
    </div>
  </nav>



  <div class="content">
    <div class="random">
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
      <span class="nbr ltr">0</span>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



  <div class="firstDiv">
    <div class="textboxWho">
      <h1>Wer sind wir?</h1>
      <br>
      <p class="text1">
        Das vierköpfige Team von „LessRessources“ aus der 4AX hat sich im Rahmen eines ITP-Projektes zusammengefunden, um den Ressourcenverbrauch an der Schule zu erheben und gegebenenfalls auch zu reduzieren. Aufgrund von Zeitmangel für das erste, größere ITP-Projekt, befassen sie sich vorerst lediglich mit der Erfassung und Darstellung des Stromverbrauches auf ihrer eigens für das Projekt angelegten Website. Somit soll für die Zukunft bewerkstelligt werden, inwieweit sich der Ressourcenverbrauch in den vergangenen Monaten verbessert oder auch verschlechtert hat.
      </p>
    </div>
    <img class="img1" src="lib/pictures/Green_House-removebg-preview.png" alt="">
  </div>


  <div class="bilder">
    <figure class="snip1566">
      <img src="lib/pictures/Julian.jpg" alt="Zangl" />
      <figcaption>
        <p>Zangl</p>
      </figcaption>
    </figure>
    <figure class="snip1566"><img src="lib/pictures/Kiki1.jpg" alt="Jaros" />
      <figcaption>
        <p>Jaros</p>
      </figcaption>
    </figure>
    <figure class="snip1566"><img src="lib/pictures/hannah.jpg" alt="Brunner" />
      <figcaption>
        <p>Brunner</p>
      </figcaption>
    </figure>
    <figure class="snip1566"><img src="lib/pictures/Katharina.jpg" alt="Klenner" />
      <figcaption>
        <p>Klenner</p>
      </figcaption>
    </figure>
  </div>

</body>

</html>