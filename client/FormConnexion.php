<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./CSS/form.css">
</head>
<body>
    <?php
    if (isset($_POST['Pseudo']) && isset($_POST['Userpassword'])){
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
        $sql = "SELECT ID FROM user WHERE Pseudo='" .$_POST['Pseudo']. "' and  Userpassword='" .$_POST['Userpassword']. "'";
        $result = $conn->query($sql);

        $count = mysqli_num_rows($result);
        if ($count == 1) {
            echo "good";
        } else {
            echo "<form action='FormConnexion.php' method='Post'>
                Pseudo : <br/>
                <input type='text' name='Pseudo'><br/>
                Password : <br/>
                <input type='password' name='Userpassword'><br/>
                <input type='submit' value='Se Connecter'><br/>
            </form>";
            echo "<div class='error'> Pseudo ou Mot de passe erroné </div><br/>";
        }
        $conn->close();  
    }else{
        echo "<form action='FormConnexion.php' method='Post'>
            Pseudo : <br/>
            <input type='text' name='Pseudo'><br/>
            Password : <br/>
            <input type='password' name='Userpassword'><br/>
            <input type='submit' value='Se Connecter'><br/>
        </form>";
    }
    ?>
    <a href="./index.php">retour</a>
</body>
</html>