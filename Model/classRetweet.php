<?php 

require_once "classDatabase.php";

class Retweet extends Database{
	private $id_tweet;

	public function __construct($id_tweet){
		$this->id_tweet = $id_tweet;
	}

	public function re_tweet(){
		$req = parent::$database->prepare("INSERT INTO retweet(id_tweet, id_user)
									SELECT id_tweet, id_user FROM tweet
									WHERE id_tweet=?");
		$req->execute([$this->id_tweet]);
	}
}