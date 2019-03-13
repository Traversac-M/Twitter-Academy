<?php

require_once "../Model/classDatabase.php";

class ShowRetweet extends Database{
	public function AffichRet(){
		$req = parent::$database->prepare("SELECT tweet.content_tweet, user.username, date_retweet
									FROM retweet
									LEFT JOIN tweet ON tweet.id_tweet = retweet.id_tweet
									LEFT JOIN user ON retweet.id_user = user.id_user
									ORDER BY date_retweet DESC");

		$req->execute();
		while($retweet1 = $req->fetch()){
			echo $_SESSION['username'] . " a retweeté le : " . $retweet1['date_retweet'] . "<br>";
			echo $retweet1['username'] . " :" . "<br>";
			echo $retweet1['content_tweet'] . "<br><br>";
		}
	}
}

$test = new ShowRetweet();
$test->AffichRet();