<?php
/*
session_start();
$_SESSION = array();
session_destroy();
header("location:Acces_au_compte.php");

*/
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de vêtements</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" async></script>


</head>

<body>
    <header>
        <nav class="nav">
            <button onclick="fct()" class="bouton"><img src="pngegg.png" alt="menuBarre" class="menuBarre" id="menuBarre"></button>
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
                <li><a href="vetements_femmes.php">Femmes</a>
                    <ul>
                        <li><a href="robe.php">Robes</a></li>
                        <li><a href="jupe.php">Jupes</a></li>
                    </ul>
                </li>
                <li><a href="vetements_hommes.php">Hommes</a></li>
                <li><a href="sport.php">Sport</a></li>
                <li><a href="accessoire.php">Accéssoires</a></li>
                <li><a href="beaute.php">Beauté</a></li>
            </ul>
        </div>
    
    </header></br></br></br></br>
        <div class="gallery">
            <div class="image">
                  <img src="manteau.PNG" class="img1">
                  <p>Manteau vert <span>Prix:45&euro;</span></p>
            </div>
            <div class="image">
                  <img src="veste.PNG">
                  <p>Veste Noire <span>Prix:30&euro;</span></p>
            </div>
            <div class="image">
                 <img src="vestes.PNG" class="img2">
                 <p>Vestes bleu Marine <span>Prix:20&euro;</span></p>
            </div>
            <div class="image">
                 <img src="surchemise.PNG" class="img3">
                 <p>Surchemise <span>Prix:50&euro;</span></p>
            </div>

        </div>
    </div>

</body>

</html>