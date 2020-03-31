<?php
require './DBconnect.php';

$pseudo = $_GET['Pseudo'];
$passwrd = $_GET['Userpassword'];

$sql = "SELECT * FROM user WHERE Pseudo='" . $_GET['Pseudo'] . "'";
$request = "SELECT * FROM user WHERE Pseudo='$pseudo'";
$result = $bdd->query($request);
$count = mysqli_num_rows($result);    
if ($count == 0) {
    $register = "INSERT INTO user (Pseudo, UserPassword, NbWin) VALUES ('$pseudo', '$passwrd', '0')";
    if ($bdd->query($register) === TRUE) {
        $connStatus = TRUE;
    } else {
        $connStatus = FALSE;
        echo "Error: " . $register . "<br>" . $conn->error;
    }
} else {
    $connStatus = FALSE;
}
echo $connStatus;
?>