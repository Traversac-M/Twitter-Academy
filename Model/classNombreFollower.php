<?php

require_once "classDatabase.php";

class Numb_Follower extends Database{

	public $req;

	public function NumFollower(){
		$req = parent::$database->prepare("SELECT count(id_follower)
			FROM follow");

		$req->execute();
		$this->req = $req;
	}
}