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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style/style_following.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="button.js"></script>
	<title>Following</title>
</head>
<body>
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Following</h5>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="image/pp2.jpg" alt="card image"></p>
                                    	<h4 class="card-title">
                                    	<a href="">
                                    	
                                    	</a>
                                    </h4>
                                    <span class="card-title">
                                        <span><a href="">
                                            @QueenC
                                        </span></a>
                                    <br></span>
                                    <a href="#" class="button btn-sucess btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <p class="card-text"> 
                                    Je suis QueenC.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="image/pp4.jpg" alt="card image"></p>
                                    	<h4 class="card-title">
                                    	<a href="">
                                    	
                                    	</a>
                                    </h4>
                                    <span class="card-title">
                                        <span><a href="">
                                            @Alibeh
                                        </a></span>
                                    <br></span>
                                    <a href="#" class="button btn-sucess btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <p class="card-text">
                                    	C'est moi Alibeh
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="image/pp5.png alt="card image"></p>
                                        <h4 class="card-title">
                                        <a href="">
                                        
                                        </a>
                                    </h4>
                                    <span class="card-title">
                                        <span><a href="">
                                            @Michou
                                        </span></a>
                                    <br></span>
                                    <a href="#" class="button btn-sucess btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <p class="card-text">
                                    Salut c'est moi, Michou !
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="image/pp1.jpg" alt="card image"></p>
                                    	<h4 class="card-title">
                                    	<a href="">
                                    	<!-- nom personne echo $_SESSION[nom] -->fezfz
                                    	</a>
                                    </h4>
                                    <span class="card-title">
                                        <span><a href="">
                                            @<!-- username de la personne echo $_SESSION[username]; -->lnlj
                                        </span></a>
                                    <br></span>
                                    <a href="#" class="button btn-sucess btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <p class="card-text">
                                    	<!-- Bio de la personne echo $_SESSION[bio]; -->fzefezfzf
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="image/pp5.png" alt="card image"></p>
                                    	<h4 class="card-title">
                                    	<a href="">
                                    	<!-- nom personne echo $_SESSION[nom] -->lkjbl
                                    	</a>
                                    </h4>
                                    <span class="card-title">
                                        <span><a href="">
                                            @<!-- username de la personne echo $_SESSION[username]; -->lnlj
                                        </span></a>
                                    <br></span>
                                    <a href="#" class="button btn-sucess btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <p class="card-text">
                                    	<!-- Bio de la personne echo $_SESSION[bio]; -->fzefzf
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>