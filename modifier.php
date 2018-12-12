<?php
if (isset($_POST['login'])){
setcookie("login", $_POST['login'], time()+120, null, null, false, true);
}  /* expire dans 2 minutes */
if (isset($_POST['password'])){
setcookie("password", $_POST['password'], time()+120, null, null, false, true); //indique si le cookie doit etre transmis à une connection securisée https true ou non. On l'initialise a true pour eviter les attaques de type XSS.
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Partie8_Exo5</title>
</head>
<body>
  <p>Modifier les Cookies</p>
  <form action="modifier.php" method="post">
    <label for="login">Login: </label>
    <input type="text" name="login">
    <label for="password">Password: </label>
    <input type="password" name="password">
    <button type="submit" name="button">Submit</button>
  </form>
  <?php
  if (isset($_COOKIE['login']) && isset($_COOKIE['password'])){
 ?>
  <p>Le cookie login à pour valeur<?= htmlspecialchars($_COOKIE['login']);?></p>
  <p>Le cookie password à pour valeur<?= htmlspecialchars($_COOKIE['password']);?></p>
  <?php
}
   ?>
</body>
</html>
