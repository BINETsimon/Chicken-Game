<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game preparation</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>
<script src="js/index/main.js"></script>
<body>
    <?php

    if (isset($_SESSION['USER'])){
        echo "<div id='USER'>
            <h2>"+ $_SESSION['USER'] +"</h2>
            <a href='Disconnect.php'>disconnect</a>
        </div>";
    }else{
        echo "<div id='FormLinks'>
            <a href='FormInscription.php'>inscription</a>
            <a href='FormConnexion.php'>Connexion</a>
        </div>";
    }
        
    ?>
    <h1>CHICKEN GAME !</h1>
    <div id="box">
        <h2>PLAYERS :</h2>
        <span id="playersName">
        </span>
        <div id="boxButton">
            <button onclick="ready()">Prêt !</button>
        </div>
    </div>
    <div id="inscription">
        
    </div>
    <div id="connection">

    </div>

</body>
</html>