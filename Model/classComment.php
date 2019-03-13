<?php 

require_once "classDatabase.php";

class Comment extends Database{

	public $id_tweet;

	public function __construct($id_tweet){
		$this->id_tweet = $id_tweet;
	}

	public function commenter(){
		$req = parent::$database->prepare("INSERT INTO comment(content_comment, id_tweet, id_user)
									VALUES(?,?,?)");
		$req->execute([$_POST['com'], $this->id_tweet, $_SESSION['id']]);
	}
}