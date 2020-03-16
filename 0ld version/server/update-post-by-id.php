<?php
require 'connexion.php';

// Grab the variables form the JSON
$Post_id= $_GET['id'];
$Post_title= $_GET['title'];
$Post_description= $_GET['description'];

// SQL request to the Database
$request = "UPDATE post SET title='$Post_title', description='$Post_description' WHERE id='$Post_id'";
$result = $bdd->query($request);
?>