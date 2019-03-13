<?php

class ShowNumT{

	public function T(){
		include "../Model/classNombreTweet.php";

		$show = new Numb_Tweet();
		$show->NumTweet();

		$count = $show->req->fetchColumn();
		echo $count;
	}
}

$test = new ShowNumT();
$test->T();