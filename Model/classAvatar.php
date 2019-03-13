<?php 

require_once "classDatabase.php";

class Show extends Database{

	public function showAvatar(){
		$req = parent::$database->prepare("SELECT avatar FROM user
									WHERE id_user=?");

		$req->execute([$_SESSION['id']]);
		$test = $req->fetch(PDO::FETCH_ASSOC);
		$_SESSION['avatar'] = $test['avatar'];
	}
}

$test1 = new Show();
$test1->showAvatar();