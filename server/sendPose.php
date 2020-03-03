<?php
require 'connexion.php';

// Grab the variables form the JSON
$poseZ= $_GET['poseZ'];
$poseX= $_GET['poseX'];

// SQL request to the Database
$request = "UPDATE pose SET poseZ='$poseZ', poseX='$poseX', WHERE id=1";
$result = $bdd->query($request);
?>