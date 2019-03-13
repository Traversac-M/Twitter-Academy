<?php

require_once "../Model/classDatabase.php";

class ShowTweet extends Database{

	public $Tweet;
	

	public function EnvoyerT(){
		include "../Model/classSendTweet.php";
		
		$this->Tweet = new Tweet();
		if(isset($_POST['new_message'])){
			$this->Tweet->sendTweet($_POST['new_message']);
		}
	}

	public function AffichT(){
		if($this->Tweet->nb){
			if($this->Tweet->nb > 0){
				while($poste = $this->Tweet->req->fetch()){
					echo "<div class='teweet'>";
					echo $poste['username'] . " a tweeté le " . $poste['date_tweet'] . " : <br>";
					echo $poste['content_tweet'] . "<br>";?>

					<form method="POST">
						<button type="submit" value='<?= $poste['id_tweet']?>' name="retweet" class="btn btn-info">Retweet</button><br><br>
						<textarea name="com" class="form-control w-25"></textarea><br>
						<button type="submit" value='<?= $poste['id_tweet']?>' name="comment" class="btn btn-info">Commenter</button><br>
					</form><br><br>


					<?= "</div>";
				}
			}
		}
	}

	public function EnvoyerRet(){
		if(!empty($_POST['retweet'])){
			include "../Model/classRetweet.php";

			$retweet = new Retweet($_POST['retweet']);
			$retweet->re_tweet();
		}
	}

	public function Commenter(){
		if(!empty($_POST['com']) && !empty($_POST['comment'])){
			include "../Model/classComment.php";
			$commenter = new Comment($_POST['comment']);
			$commenter->commenter();
		}
	}
}

$test = new ShowTweet();
$test->EnvoyerT();
$test->AffichT();
$test->EnvoyerRet();
$test->Commenter();