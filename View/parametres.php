<?php session_start();

  if (isset($_SESSION['id']) AND !empty($_SESSION['id']))
  {
    include '../Model/classDatabase.php';
  }

  else
  {
    header('Location: ../View/login_register.php');
  }
include "../Controller/GetModif.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="css/bootstrap.css" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/style/style_param.css">
  <link rel="stylesheet" type="text/css" href="css/style/styles.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
	<title>Twitter Académie - Paramètres</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="messages.php">Message privé<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active dropdown">
                        <a class="nav-link" href="parametres.php">Paramètres<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link" href='../Model/classDeconnexion.php'>Déconnexion</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" name="recherche">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

        </nav>
</header>
<div id="sc-edprofile">
  <h1>Choisissez ce que vous voulez changer :</h1>
  <div class="sc-container">
    <form method="POST">
      <input type="text" name="lastname" placeholder="Change ur lastname">
      <input type="text" name="firstname" placeholder="Change ur firstname">
      <input type="email" name="email" placeholder="Change ur email">
      <input type="text" name="password" placeholder="Change ur password">
      <input type="text" name="username" placeholder="Change ur username">
      <input type="file" name="avatar"><br>
      <input type="submit" value="Envoyer" name="change"><br>
    </form>
  </div>
</div>

<footer>
<div id="social-area" class="page-footer">
    <div class="container">
        <div class="row">
            <div class="span6 cpyright montsfont">
                &copy; Created by Serpen(re)tard promo 2k21
            </div>
        </div>
    </div>
</div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
</body>
</html>