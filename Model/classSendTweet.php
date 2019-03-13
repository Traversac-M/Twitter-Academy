<?php
// session_start();
require_once "classDatabase.php";

class Tweet extends Database{

	public $req;
	public $nb;

	public function __construct(){
		$req = parent::$database->prepare("SELECT content_tweet, date_tweet, id_tweet, user.username
									FROM tweet
									LEFT JOIN user ON user.id_user = tweet.id_user
									ORDER BY date_tweet DESC");
		$req->execute();
		$this->req = $req;
		$this->nb = count($req);
	}

	public function sendTweet($message){
		if($message){
			$req = parent::$database->prepare("INSERT INTO tweet(content_tweet, id_user)
										VALUES (?, ?)");

			$req->execute([$message, $_SESSION['id']]);
		}
	}
}