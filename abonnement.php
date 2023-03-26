<?php
/*
session_start();
$_SESSION = array();
session_destroy();
header("location:Acces_au_compte.php");

*/
?> 





<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="Acces_au_compte.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" async></script>
</head>

<body>
  <nav class="nav">
    <button onclick="fct()"><img src="pngegg.png" alt="menuBarre" class="menuBarre" id="menuBarre"></button>
    <a href="" class="nomEntreprise">Top Vêtement</a></button>
    <div class="compte">
      <ul>
        <li><a href="Acces_au_compte.php">Se connecter</a></li>
        <li><a href="abonnement.php">S'abonner</a></li>
        <li><a href="">Mon panier</a></li>
        <li><a href="">Langue</a></li>
      </ul>
    </div>
  </nav>
  <div style="display:flex">
    <div class="typeVetements">
      <ul>
        <li><a href="">Vêtements femmes</a></li>
        <li><a href="">Vêtements hommes</a></li>
        <li><a href="">sport</a></li>
        <li><a href="">Accéssoires</a></li>
        <li><a href="">Beauté</a></li>
      </ul>
    </div>


    <div class="divform">
      <form method='POST' action="">

        <h1>S'abonner</h1>


        <div class="inputs">
          <p style="margin:auto;text-align:center;font-family:roboto;padding:15px;font-size:19px">Votre compte vous donne 10% sur tous nos produit et coûte 5$ par moi.<br><br>Vous devez avoir un compte.</p>
          <input type="email" placeholder="Email" name="Email" />
          <hr>
          <br>
          <input type="password" placeholder="Mot de passe" name="Password">

        </div>
        <div align="center">
          <p>Pas de compte?<a href="Creation_de_compte.php">Créer un compte ici.</a></p>
          <input type="submit" name="connexion">Se connecter</input>
        </div>
      </form>

    </div>
  </div>
</body>

</html>