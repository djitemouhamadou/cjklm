<?php

session_start();
if(!$_SESSION['cle'] OR !$_SESSION['Password']){
    echo $_SESSION['cle'];
    header('Location: Acces_au_compte.php');
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site de vêtements</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" async></script>
    <script src="test.js" async></script>


</head>

<body>
        <nav class="nav">
            <button onclick="fct()" class="bouton"><img src="pngegg.png" alt="menuBarre" class="menuBarre" id="menuBarre"></button>
            <a href="" class="nomEntreprise">Top Vêtement</a></button>
            <div class="compte">
                <ul>
                    <li><a href="Acces_au_compte.php">Se connecter</a></li>
                    <li><a href="">Mon panier</a></li>
                    <li><a href="">Langue</a></li>
                </ul>
            </div>

        </nav>
        


    <div class="slide-menu">
    <div class="typeVetements">
            <ul>
                <li><a href="Vetements_femmes.php">Femmes</a>
                    <ul>
                        <li>Robes</li>
                        <li>Jupes</li>
                    </ul>
                </li>
                <li><a href="Vetements_hommes.php">Hommes</a></li>
                <li><a href="">sport</a></li>
                <li><a href="accessoire.php">Accéssoires</a></li>
                <li><a href="beaute.php">Beauté</a></li>
            </ul>
        </div>

        



<a href="http://www.google.com" style="display:block;">
        <div id="slider">
    <ul id="slideWrap"> 
      <li><img src="photo.jpg" alt=""></li>
      <li><img src="photo.jpg" alt=""></li>
      <li><img src="photo.jpg" alt=""></li>
      <li><img src="photo.jpg" alt=""></li>
      <li><img src="photo.jpg" alt=""></li>
    </ul>
    <a id="prev" href="#">&#8810;</a>
    <a id="next" href="#">&#8811;</a>
  </div>
</a>








    </div>
</body>

</html>