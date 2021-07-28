<?php
	// FOR ACCURATE SERVER TIME
	date_default_timezone_set('Asia/Manila');
	$servername = 'localhost';
	$username = 'root';
	$password = '#Sy$temGr0^p|114167';
	// INITIATE CONNECTION
	try{
		$conn = new PDO("mysql:host=$servername;dbname=andon_web;charset=utf8",$username,$password);
	}catch(PDOException $e){
		echo $sql.'No Connection'.$e->getMessage();
	}

?>