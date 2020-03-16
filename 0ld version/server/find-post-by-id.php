<?php
// Connexion to the database
require 'connexion.php';

$Post_id = $_GET['id'];
// Select all the content from the table "post"
$q="SELECT * FROM post WHERE id='$Post_id' LIMIT 1";
$reponse = $bdd->query($q);

// DISPLAY RESULT
while ($row = $reponse->fetch()) {
	// HTML EXPORT
	$output .= '
		<small>Post id :'.$row["id"].' | Date : '.$row["date"].' </small>
		<p>
			<input name="title" id="title" value="'.$row["title"].'" type="text" class="form-control ">
			<input name="descr" id="descr" value="'.$row["description"].'" type="text" class="form-control">
		</p>
		<button onclick="updatePost();" class="btn btn-primary">
			Update Post
		</button>
		<button onclick="deletePost();" type="button" class="btn btn-link">
			Delete Post
		</a>
		<br>';
}

// RETURN RESULTS
echo $output;
?>