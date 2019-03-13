<?php

require_once "../Model/classDatabase.php";

class ShowComment extends Database{

	public function AffichCom(){
		$req = parent::$database->prepare("SELECT tweet.content_tweet, user.username, date_comment, content_comment
								FROM comment
								LEFT JOIN tweet ON tweet.id_tweet = comment.id_tweet
								LEFT JOIN user ON user.id_user = comment.id_user
								ORDER BY date_comment DESC");

		$req->execute();

		while($comment = $req->fetch()){
			echo $_SESSION['username'] . " a commenté le : " . $comment['date_comment'] . " :<br>";
			echo $comment['username'] . " : ";
			echo $comment['content_tweet'] . " -> <br>";
			echo $comment['content_comment'] . "<br><br>";
		}
	}
}

$test = new ShowComment();
$test->AffichCom();