<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./CSS/form.css">
</head>
<body>
    <?php
    if (isset($_POST['Pseudo']) && isset($_POST['Userpassword']) && isset($_POST['Confpassword'])){
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
        $sql = "SELECT * FROM user WHERE Pseudo='" . $_POST['Pseudo'] . "'";
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
        if ($count == 0) {
            if ($_POST['Userpassword'] == $_POST['Confpassword']){
                $register = "INSERT INTO user (Pseudo, UserPassword, NbWin) VALUES ('" . $_POST['Pseudo'] . "', '" . $_POST['Userpassword'] . "', '0')";
                if ($conn->query($register) === TRUE) {
                    echo "<form action='FormInscription.php' method='Post'>
                        Pseudo : <br/>
                        <input type='text' name='Pseudo'><br/>
                        Password : <br/>
                        <input type='password' name='Userpassword'><br/>
                        <input type='password' name='Confpassword'><br/>
                        <input type='submit' value='S'inscrire'><br/>
                    </form>";
                    echo "<div class='succes'> Compte correctement créé </div><br/>";
                } else {
                    echo "Error: " . $register . "<br>" . $conn->error;
                }
            }else{
                echo "<form action='FormInscription.php' method='Post'>
                    Pseudo : <br/>
                    <input type='text' name='Pseudo'><br/>
                    Password : <br/>
                    <input type='password' name='Userpassword'><br/>
                    <input type='password' name='Confpassword'><br/>
                    <input type='submit' value='S'inscrire'><br/>
                </form>";
                echo "<div class='error'> mots de passes différents </div><br/>";
            }
            
        } else {
            echo "<form action='FormInscription.php' method='Post'>
                Pseudo : <br/>
                <input type='text' name='Pseudo'><br/>
                Password : <br/>
                <input type='password' name='Userpassword'><br/>
                <input type='password' name='Confpassword'><br/>
                <input type='submit' value='S'inscrire'><br/>
            </form>";
            echo "<div class='error'> Pseudo déjà utilisé </div><br/>";
        }
        $conn->close();  
    }else{
        echo "<form action='FormInscription.php' method='Post'>
            Pseudo : <br/>
            <input type='text' name='Pseudo'><br/>
            Password : <br/>
            <input type='password' name='Userpassword'><br/>
            <input type='password' name='Confpassword'><br/>
            <input type='submit' value='S'inscrire'><br/>
        </form>";
    }
    ?>
    <a href="./index.php">retour</a>
</body>
</html>