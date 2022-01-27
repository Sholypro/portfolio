<?php
// Lancement de la session
session_start();
// On regarde si la session est valide
if (!isset($_SESSION['user'])) {  // si elle ne l'est pas, on retourne sur la page de login
    header("Location:login.php");
    exit();
}
?>

<html>

<head>
    <script src="./labi/Labyrinthe.js"></script>
    <script src="./labi/bob20land.js"></script>
    <script src="./labi/Evilperso.js"></script>
    <script src="./labi/Perso.js"></script>
    <script src="./labi/Tuile.js"></script>
    <meta charset="utf-8">
    <title>Partie membre</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php

    include("./entete.php");
    include("./labi/labyrinthe.inc.php");
    include("./footer.php");

    ?>

</body>

</html>