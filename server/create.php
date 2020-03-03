<?php
require 'connexion.php';

// Grab the variables form the JSON
$poseZ= $_GET['poseZ'];
$poseX= $_GET['poseX'];

// SQL request to the Database
$request = "INSERT INTO pose SET poseZ='$poseZ', poseX='$poseX'";
$result = $bdd->query($request);
?>