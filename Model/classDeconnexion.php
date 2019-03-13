<?php 
class Deconnexion{
	public function logout(){
		session_start();
		setcookie($_SESSION['id']);
		session_destroy();
		header('Location: ../View/login_register.php');
		exit;
	}
}

$test = new Deconnexion();
$test->logout();