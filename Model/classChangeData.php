<?php 

require_once "classDatabase.php";

class ChangeData extends Database{

	public function changeAvatar(){
		$req = parent::$database->prepare("UPDATE user
									SET avatar=? WHERE id_user=?");

		$req->execute([$_POST['avatar'], $_SESSION['id']]);
	}

	public function changeNom(){
		$req = parent::$database->prepare("UPDATE user
									SET lastname=? WHERE id_user=?");

		$req->execute([$_POST['lastname'], $_SESSION['id']]);
	}

	public function changePrenom(){
		$req = parent::$database->prepare("UPDATE user
									SET firstname=? WHERE id_user=?");

		$req->execute([$_POST['firstname'], $_SESSION['id']]);
	}

	public function changeMail(){
		$req = parent::$database->prepare("UPDATE user
									SET email=? WHERE id_user=?");

		$req->execute([$_POST['email'], $_SESSION['id']]);
	}

	public function changeMDP(){
		$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$req = parent::$database->prepare("UPDATE user
									SET password=? WHERE id_user=?");

		$req->execute([$_POST['password'], $_SESSION['id']]);
	}

	public function changeUsername(){
		$req = parent::$database->prepare("UPDATE user
									SET username=? WHERE id_user=?");

		$req->execute([$_POST['username'], $_SESSION['id']]);
	}
}