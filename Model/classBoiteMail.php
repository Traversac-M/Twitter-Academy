<?php 

require_once "classDatabase.php";

class Mailbox extends Database {

	public function checkUser()
	{
		if (isset($_SESSION['id']) AND !empty($_SESSION['id']))
		{
			$showMessage = Database::$database->prepare('SELECT * FROM message WHERE id_sender = ?');
			$showMessage->execute(array($_SESSION['id']));
			$allMsg = $showMessage->rowCount();

			if($allMsg == 0)
			{
				echo "Vous n'avez aucun message !";
			}
	
			while($msg = $showMessage->fetch())
			{ 
				$p_exp = Database::$database->prepare('SELECT username FROM user WHERE id_user = ?');
				$p_exp->execute(array($msg['id_sender']));
				$p_exp = $p_exp->fetch();
				$p_exp = $p_exp['username'];
				echo "<div class='try'>" . "<br/> Le " . $msg['date_message'] ."<br/><strong>". $p_exp . "</strong> vous a envoyé : <br/>";
				echo "<br/>" . $msg['content_message'];
				echo "</div>";
			}
		}
	}
}

$test = new Mailbox();
$test->checkUser();