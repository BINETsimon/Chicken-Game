<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php
    if (isset($_POST['Pseudo']) && isset($_POST['password'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "game";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT UserPassword FROM user WHERE Pseudo='$_POST['Pseudo']'";
        $result = $conn->query($sql);

        

        $conn->close();
    }else{
        echo "<form action='FormConnexion.php' method='Post'>
            Pseudo : <br/>
            <input type='text' name='Pseudo'><br/>
            Password : <br/>
            <input type='password' name='password'><br/>
            <input type='submit' value='Connect'>
        </form>";
    }
    ?>
</body>
</html>