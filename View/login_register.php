<?php session_start();
  if (isset($_SESSION['id']) AND !empty($_SESSION['id']))
    {
        header('Location: ../View/home.php');
      }
    include "../Controller/NewUser.php"
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign up now</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="form-1/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="form-1/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="form-1/assets/css/form-elements.css">
        <link rel="stylesheet" href="form-1/assets/css/style.css">
        <link rel="stylesheet" href="form-1/assets/css/StyleWelcome.css">
    </head>
<body>
     <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text">
                        <img src="image/bird2.png" alt="bird2">
                        <h1>Rejoignez la twittosphere</h1>
                        <div class="description">
                            <p>
                            Découvrez ce qui se passe dans le monde en temps réel. 
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 form-box">
                        <div class="form-top">
                            <div class="form-top">
                                <h3>Sign up now</h3>
                                <hr>
                                <div class="panel panel-login">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <a href="#" class="active" id="login-form-link">Login</a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" id="register-form-link">Register</a>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="login-form" method="post" style="display: block;">
                                                    <div class="form-group">
                                                        <input type="text" name="username" id="username_login" tabindex="1" class="form-control" placeholder="Username or Email" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password_login" tabindex="2" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                        <label for="remember"> Remember Me</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="text-center">
                                                                    <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <form id="register-form" method="post" style="display: none;">
                                                    <div class="form-group">
                                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="lastname" id="nom" tabindex="1" class="form-control" placeholder="Nom" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="firstname" id="prenom" tabindex="1" class="form-control" placeholder="prenom" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                    </div>
<!--                                                <div class="form-group">
                                                        <input type="password" name="password2" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                                    </div> -->  
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="form-1/assets/js/jquery-1.11.1.min.js"></script>
    <script src="form-1/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="form-1/assets/js/jquery.backstretch.min.js"></script>
    <script src="form-1/assets/js/retina-1.1.0.min.js"></script>
    <script src="form-1/assets/js/scripts.js"></script>
    <script src="form-1/assets/js/register.js"></script>

</body>
</html>