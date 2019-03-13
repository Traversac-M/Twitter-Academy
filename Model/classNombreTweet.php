<?php

require_once "classDatabase.php";

class Numb_Tweet extends Database{

	public $req;

	public function NumTweet(){
		$req = parent::$database->prepare("SELECT count(content_tweet)
			FROM tweet WHERE id_user=?");

		$req->execute([$_SESSION['id']]);
		$this->req = $req;
	}
}