<?php 
	include "../model/database.php";
	login();
	function login(){
		$connection = Database::getInstance("localhost","rogeraws","1234");
	}
	
 ?>