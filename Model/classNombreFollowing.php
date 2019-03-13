<?php

require_once "classDatabase.php";

class Numb_Following extends Database{

	public $req;

	public function NumFollowing(){
		$req = parent::$database->prepare("SELECT count(id_followed)
			FROM follow");

		$req->execute();
		$this->req = $req;
	}
}