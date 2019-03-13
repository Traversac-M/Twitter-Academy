<?php


class EnvoieData{

	public function VerifRegister(){
		if(!empty($_POST['register-submit'])){
			include "../Model/classNewUser.php";
		}
	}

	public function VerifCo(){
		if(!empty($_POST['login-submit'])){
			include "../Model/classConnexion.php";
		}
	}
}

$test = new EnvoieData();
$test->VerifRegister();
$test->VerifCo();