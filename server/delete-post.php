<?php
require 'connexion.php';

$Post_id = $_GET['id'];
// Select all the content from the table "post"
$q="DELETE FROM post WHERE id='$Post_id'";
$reponse = $bdd->query($q);
?>