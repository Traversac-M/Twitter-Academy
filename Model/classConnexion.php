<?php

require_once "classDatabase.php";

class Connexion extends Database{

	private $salt = 'si tu aimes la wac tape dans tes mains';

	public function login(){
		if(!empty($_POST)){
			$req = parent::$database->prepare("SELECT *
										FROM user
										WHERE username = :use_name OR email=:use_name");

			$req->execute([':use_name'=>$_POST['username']]);
			$login = $req->fetch(PDO::FETCH_ASSOC);
			
				if($login['password'] === hash('ripemd160',$_POST['password'] . $this->salt) && $login['username'] === $_POST['username'] || $login['email'] === $_POST['username'] && $login['password'] === hash('ripemd160',$_POST['password'] . $this->salt)){
					session_start();
					$_SESSION['id'] = $login['id_user'];
					$_SESSION['nom'] = $login['lastname'];
					$_SESSION['prenom'] = $login['firstname'];
					$_SESSION['username'] = $login['username'];
					$_SESSION['password'] = $login['password'];
					$_SESSION['email'] = $login['email'];
					header('Location: ../View/home.php');
				}
				else{
					echo "Identifiant/Mot de passe incorrect/vide";
					
				}
			}
		}	
	}



$test = new Connexion();
$test->login();