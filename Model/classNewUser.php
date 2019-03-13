<?php
include '../Model/classDatabase.php';

class Inscription extends Database {

	private $salt = 'si tu aimes la wac tape dans tes mains';

	public function insert()
	{
		if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password']))
		{
			$req = parent::$database->prepare("INSERT INTO user (username, email, firstname, lastname, password) VALUES (?, ?, ?, ?, ?)");
			$req->execute([$_POST['username'], $_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['password'] = hash('ripemd160',$_POST['password'] . $this->salt)]);
		}

		else
		{
			echo "Veuillez remplir tout les champs ! </br>";
		}
	}

	public function user_name()
	{
		$usernameLength = strlen($_POST['username']);
		if($usernameLength <= 35)
		{
			if(!empty($_POST['username']))
			{
				$addUsername = parent::$database->prepare("SELECT * FROM user WHERE username = ?");
				$addUsername->execute([$_POST['username']]);
				$usernameExist = $addUsername->rowCount();
				if($usernameExist == 0)
				{
					return 1;
				}

				else
				{
					echo "Ce pseudo existe déjà !</br>";
				}
			}
		}

		else
		{
			echo "Votre pseudo ne doit pas dépasser 35 caractères.</br>";
		}
	}

	public function verif_mail()
	{
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$addEmail = parent::$database->prepare("SELECT * FROM user WHERE email = ?");
			$addEmail->execute([$_POST['email']]);
			$emailExist = $addEmail->rowCount();
			if($emailExist == 0)
			{
				return 1;
			}

			else
			{
				echo "Cet email existe déjà !</br>";
			}
		}
	}

	public function addValues()
	{
		if(Inscription::verif_mail() == 1 && Inscription::user_name() == 1)
		{
			return Inscription::insert();
		}
	}
}

$test = new Inscription();
$test->user_name();
$test->addValues();