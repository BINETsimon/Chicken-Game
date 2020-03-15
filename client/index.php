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
    if (isset($lol)){
        echo "<div id='USER'>
            <a href='LOG/Disconnect.php'>disconnect</a>
            <h2>"+ $_SESSION['USER'] +"</h2>
        </div>";
    }else{
        echo "<div id='FormLinks'>
            <a href='LOG/FormInscription.php'>inscription</a>
            <a href='LOG/FormConnexion.php'>Connexion</a>
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