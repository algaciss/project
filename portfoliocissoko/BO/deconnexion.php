<?php

include "_session.php";
include "_connexion.php";
$stylesheet="../css/portfolio.css";
?>
<!DOCTYPE html>
<html lang="fr">
<?php
include "head.php";
?>
<body>
<?php  
unset($_SESSION['login']);
// unset($_SESSION['pwd']);
// unset($_SESSION['backoff']);


?>
<h2>Vous avez bien été déconnecté du Back Office.</h2>
<a href="../index1.html.php">Retour à la page d'accueil</a>
</body>
</html>