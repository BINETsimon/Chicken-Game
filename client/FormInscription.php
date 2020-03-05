<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <?php
    echo "<form action='FormConnexion.php' method='Post'>
            Pseudo : <br/>
            <input type='text' name='Pseudo'><br/>
            Password : <br/>
            <input type='password' name='password'><br/>
            Confirm password : <br/>
            <input type='password' name='Confpassword'><br/>
            <input type='submit' value='Connect'>
        </form>";
    ?>
</body>
</html>