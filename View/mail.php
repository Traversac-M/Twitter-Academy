<?php session_start();

  if (isset($_SESSION['id']) AND !empty($_SESSION['id']))
  {
    include '../Model/classDatabase.php';
  }

  else
  {
    header('Location: ../View/login_register.php');
  }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="css/bootstrap.css" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/style/styles.css">
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <title>Twitter Académie - Messages privés</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="messages.php">Messages Privés<span class="sr-only">(current)</span></a>
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

    </nav>
  </header>


  <?php include "../Model/classBoiteMail.php"?>
  
</body>
</html>