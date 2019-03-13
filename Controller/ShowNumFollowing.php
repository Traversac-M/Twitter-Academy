<?php

class ShowNumFollowing{

	public function Following(){
		include "../Model/classNombreFollowing.php";

		$show = new Numb_Following();
		$show->NumFollowing();

		$count = $show->req->fetchColumn();
		echo $count;
	}
}

$test = new ShowNumFollowing();
$test->Following();