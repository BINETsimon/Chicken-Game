<?php
try{
	$servername = "localhost";
  	$username = "root";
  	$password = "";
  	$dbname = "game";
  	
	$bdd = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "I'M CONNECTED ON THE DATABASE !";
}

catch (PDOException $e) {
	die('Erreur : ' . $e->getMessage()); 
}
?>
