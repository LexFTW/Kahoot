<?php 
	include "../model/database.php";
	login();
	function login(){
		$connection = Database::getInstance("localhost","root","P@ssw0rd");
	}
	
 ?>