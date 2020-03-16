<?php
require 'DBconnect.php';


        $sql = "SELECT * FROM user WHERE Pseudo='" . $_GET['Pseudo'] . "'";
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);    
        if ($count == 0) {
            if ($_POST['Userpassword'] == $_POST['Confpassword']){
                $register = "INSERT INTO user (Pseudo, UserPassword, NbWin) VALUES ('" . $_POST['Pseudo'] . "', '" . $_POST['Userpassword'] . "', '0')";
                if ($conn->query($register) === TRUE) {
                    echo "<div class='succes'> Compte correctement créé </div><br/>";
                } else {
                    echo "Error: " . $register . "<br>" . $conn->error;
                }
            }else{
                echo "<div class='error'> mots de passes différents </div><br/>";
            }
            
        } else {
            echo "<div class='error'> Pseudo déjà utilisé </div><br/>";
        }
        $conn->close();  
?>