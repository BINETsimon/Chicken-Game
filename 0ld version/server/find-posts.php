<?php
	// Headers declarations
	//header('Content-Type: application/json'); // create issues
	header('Access-Control-Allow-Origin:*');
	// header('Access-Control-Allow-Credentials:true');

	// Connexion to the database
	require 'connexion.php';

	// // Select all the content from the table "post"
	$q="SELECT * FROM post";
	$reponse = $bdd->query($q);

	// Initialise JSON
	$data = '[';

	// Go through the results
	while ($row = $reponse->fetch()) {
		
		// Generate JSON for each results
		$data .= '{"id":"'.$row['id'].'","title":"'.$row['title'].'","description":"'.$row['description'].'","date":"'.$row['date'].'"},';
	}

	// Remove the last coma "," from the JSON last entry
	$data = substr($data, 0, -1);

	// Close JSON
	$data .= ']';

	// Return the result
	echo $data;

?>