<?php

require_once '../Model/classDatabase.php';

class PrivateMsg extends Database {

	public function sendMsg(){
		if(isset($_POST['postMsg']))
		{
			if(isset($_POST['receiver'], $_POST['content_message']) AND !empty($_POST['receiver']) AND !empty($_POST['content_message']))
			{
				$receiver = htmlspecialchars($_POST['receiver']);
				$message = htmlspecialchars($_POST['content_message']);
				$req_id = Database::$database->prepare('SELECT id_user FROM user WHERE username = ?');
				$req_id->execute(array($receiver));
				$dest_exist = $req_id->rowCount();

				if($dest_exist == 1)
				{
					$req_id = $req_id->fetch();
					$req_id = $req_id['id_user'];
					$addMsg = Database::$database->prepare('INSERT INTO message(id_sender, id_receiver, content_message) VALUES (?,?,?)');
					$addMsg->execute(array($_SESSION['id'], $req_id, $message));
 					echo "Message envoyé !";
				}
				else{
					echo "Cet utilisateur n'éxiste pas !";
				}
			}
			else{
				echo "Veuillez remplir tout les champs !";
			}
		}
	}
}
$test = new PrivateMsg();
$test->sendMsg();