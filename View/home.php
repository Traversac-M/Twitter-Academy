<?php session_start();
  if (isset($_SESSION['id']) AND !empty($_SESSION['id']))
  {
    include '../Model/classDatabase.php';
  }

  else
  {
    header('Location: ../View/login_register.php');
  }
include "../Model/classAvatar.php"
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="stylesheet" href="css/bootstrap.css" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/style/style_timeline.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
  <script src="js/home.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/changecolor.js"></script>
	<title>Twitter Académie - Home</title>
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

  <div class="container space">
    <div class="row">
      <div class="col-lg-3">
       <div class="twPc-div">
          <a class="bg twPc-block"></a>
          <a href="http://localhost/HTML/Carrol_Malefoy/image/pp1.jpg"><img alt="pp" src="image/pp1.jpg" class="twPc-avatarImg"></a>
          <div class="twPc-divUser">
            <div class="twPc-divName">
              <a href=""><?= $_SESSION['prenom'] ?></a>
            </div>
            <span>
              <a href="">@<span><?= $_SESSION['username'] ?></span></a>
            </span>
          </div>
          <div class="twPc-divStats">
            <ul class="twPc-Arrange">
              <li class="twPc-ArrangeSizeFit">
                <a href="" title="Tweets">
                  <span class="twPc-StatLabel twPc-block">Tweets</span>
                  <span class="twPc-StatValue"><?php include "../Controller/ShowNumT.php"?></span>
                </a>
              </li>
              <li class="twPc-ArrangeSizeFit">
                <a href="following.php" title="Following">
                  <span class="twPc-StatLabel twPc-block">Following</span>
                  <span class="twPc-StatValue"><?php include "../Controller/ShowNumFollowing.php"?></span>
                </a>
              </li>
              <li class="twPc-ArrangeSizeFit">
                <a href="followers.php" title="Followers">
                  <span class="twPc-StatLabel twPc-block">Followers</span>
                  <span class="twPc-StatValue"><?php include "../Controller/ShowNumFollower.php"?></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
       <div class="well mid_block">
        <div class="form-group">
        	<form method="POST" id="form">
          		<textarea class="form-control" id="tweetBody" name="new_message"
          		placeholder="Quoi de neuf ?" rows="4" maxlength="140"></textarea>
          		<h6 class="pull-right">140 characters</h6>
          		<button class="btn btn-info" type="submit" id="sendTweet" name="poster">Tweet</button>
          </form>
          <select id="backgroundColor" onchange="changeBG()">
    <option></option>
    <option value="red">Rouge</option>
    <option value="yellow">Jaune</option>
    <option value="blue">Bleu</option>
</select>
        </div>
        <div class="col-sm-offset-4 mid_block">

          <?php include "../Controller/ShowTweet.php";
              include "../Controller/ShowRetweet.php";
              include "../Controller/ShowComment.php"?>
        </div>
        </div>
      </div>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="refresh2.js"></script>
</body>
</html>