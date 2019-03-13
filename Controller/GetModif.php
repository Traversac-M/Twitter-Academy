<?php

class Get{

	public $change;

	public function __construct(){
		include "../Model/classChangeData.php";
		$this->change = new ChangeData();
	}

	public function Verif(){
		if(isset($_POST['change']) && !empty($_POST['lastname'])){
			$this->change->changeNom();
		}

		if(isset($_POST['change']) && !empty($_POST['firstname'])){
			$this->change->changePrenom();
		}

		if(isset($_POST['change']) && !empty($_POST['email'])){
			$this->change->changeMail();
		}

		if(isset($_POST['change']) && !empty($_POST['password'])){
			$this->change->changeMDP();
		}

		if(isset($_POST['change']) && !empty($_POST['username'])){
			$this->change->changeUsername();
		}

		if(isset($_POST['change']) && !empty($_POST['avatar'])){
			$this->change->changeAvatar();
		}
	}
}

$test = new Get();
$test->Verif();