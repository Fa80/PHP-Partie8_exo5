<?php
if (isset($_POST['login'])){
setcookie("login", $_POST['login'], time()+120, null, null, false, true);
}  /* expire dans 2 minutes */
if (isset($_POST['password'])){
setcookie("password", $_POST['password'], time()+120, null, null, false, true); //indique si le cookie doit etre transmis à une connection securisée https true ou non. On l'initialise a true pour eviter les attaques de type XSS.
}
/*setcookie() définit un cookie qui sera envoyé avec le reste des en-têtes.
Comme pour les autres en-têtes, les cookies doivent être envoyés avant toute autre sortie (c'est une restriction du protocole HTTP, pas de PHP). Cela vous impose d'appeler cette fonction avant toute balise <html> ou <head>.*/

/*EXO: Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.*/?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Partie8_Exo5</title>
  <h1>Traitement des cookies envoyées par formulaire</h1>
</head>
<body>
  <form action="modifier.php" method="post">
        <label for="login">Login: </label>
          <input type="text" name="login">
          <label for="password">Password: </label>
            <input type="password" name="password">
            <button type="submit" name="button">Submit</button>
            </form>
            <p>Les cookies login et password vont etre modifiés.</p>
            <a href="affichage.php">Cliquez ici pour le vérifier</a>
      </body>
      </html>
