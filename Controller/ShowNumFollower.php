<?php

class ShowNumFollower{

	public function Follower(){
		include "../Model/classNombreFollower.php";

		$show = new Numb_Follower();
		$show->NumFollower();

		$count = $show->req->fetchColumn();
		echo $count;
	}
}

$test = new ShowNumFollower();
$test->Follower();