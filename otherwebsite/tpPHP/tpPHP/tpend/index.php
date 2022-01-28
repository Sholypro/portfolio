<?php
// On regarde si le formulaire a été saisi
if (isset($_POST['submit'])) {  // Traitement du formulaire
    // Création de la variable message
    $msg = NULL;
    // On vérifie la présence du login 
    if (empty($_POST['nomuser'])) {
        $user = FALSE;
        $msg .= "<p>Vous avez oublié d'indiquer votre nom d'utilisateur.</p>";
    } else {
        $user = $_POST['nomuser'];
    }
    // On vérifie la présence du password
    if (empty($_POST['passwd'])) {
        $pswd = FALSE;
        $msg .= "<p>Vous avez oublié d'indiquer votre password.</p>";
    } else {
        $pswd = $_POST['passwd'];
    }

    if ($user && $pswd) {
        if (($user == "dutmmi") && ($pswd == "bobigny")) {
            session_start();
            $_SESSION['user'] = $user;
            header("Location:membre.php");
            exit();
        } else {
            $msg .= "<p>Le mot de login et/ou le mot de passe sont faux !!!!!</p>";
        }
    } else {
        $msg .= "<p>Merci de recommencer votre identification.</p>";
    }
} 
	?>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Les sessions en PHP</title>
    <link href="style.css" rel="stylesheet">
	</head>	

	<body>
<?php 
 include("./entete.php"); 
?>

<div id="formm">
<h1>Les sessions en  PHP</h1>
<?php // On affiche le message d'erreur s'il existe
if (isset($msg))
echo "<font color='red'>$msg</font>";
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
<legend>Veuillez renseigner le formulaire ci-après : </legend>
<p>Utilisateur : 
<input type="text" name="nomuser" size="10" maxlength="20" 
value="<?php if (isset($_POST['nomuser'])) echo $_POST['nomuser']; ?>" />
</p>
<p>Mot de passe : 
<input type="password" name="passwd" size="20" maxlength="20" />
</p>
<div align="center">
<input type="submit" name="submit" value="Login"/>
</div>
</fieldset></form>
</div>

<?php 
 include("./footer.php"); 
?>

</body></html>