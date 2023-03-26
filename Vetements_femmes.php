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
    <title>Vêtements femmes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vetements_femmes.css">
    <script src="script.js" async></script>


</head>

<body>
    <nav class="nav">
        <button onclick="fct()" class="bouton"><img src="pngegg.png" alt="menuBarre" class="menuBarre"
                id="menuBarre"></button>
        <a href="" class="nomEntreprise">Top Vêtement</a></button>
        <div class="compte">
            <ul>
                <li><a href="Acces_au_compte.php">Se connecter</a></li>
                <li><a href="abonnement.php">S'abonner</a></li>
                <li><a href="">Mon panier</a></li>
                <li><a href="">Langue</a></li>
            </ul>
        </div>

    </nav></br></br></br>



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
        <div class="haut_vers_bas">

                <div class="vetement"><img
                        src="https://img01.ztat.net/article/spp-media-p1/ed990b123ebf3f0994c209dcddec8165/f13f979d4dcc4fad8dde2b4ce6a3fcf9.jpg?imwidth=300"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img01.ztat.net/article/spp-media-p1/1a4332dabbe04b7c8b3c63f84c0fd3c7/ce392bade73242b4a0de28956ce0e80c.jpg?imwidth=300"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                </div>
                <div class="vetement"><img
                        src="https://img01.ztat.net/article/spp-media-p1/3c557687a62740728eebc1abc6030ad4/83b584c38b5d417497b9616cc6d9f2fb.jpg?imwidth=300"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>

                <div class="vetement"><img
                        src="https://img01.ztat.net/article/spp-media-p1/ed990b123ebf3f0994c209dcddec8165/f13f979d4dcc4fad8dde2b4ce6a3fcf9.jpg?imwidth=300"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>
                <div class="vetement"><img
                        src="https://img01.ztat.net/article/spp-media-p1/ed990b123ebf3f0994c209dcddec8165/f13f979d4dcc4fad8dde2b4ce6a3fcf9.jpg?imwidth=300"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img01.ztat.net/article/spp-media-p1/ed990b123ebf3f0994c209dcddec8165/f13f979d4dcc4fad8dde2b4ce6a3fcf9.jpg?imwidth=300"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>


                <div class="vetement"><img
                        src="https://img01.ztat.net/article/spp-media-p1/1a4332dabbe04b7c8b3c63f84c0fd3c7/ce392bade73242b4a0de28956ce0e80c.jpg?imwidth=300"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img01.ztat.net/article/spp-media-p1/1a4332dabbe04b7c8b3c63f84c0fd3c7/ce392bade73242b4a0de28956ce0e80c.jpg?imwidth=300"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img01.ztat.net/article/spp-media-p1/1a4332dabbe04b7c8b3c63f84c0fd3c7/ce392bade73242b4a0de28956ce0e80c.jpg?imwidth=300"
                        alt="" class="img_vetement">
                        <p>Surchemise <span>Prix:50&euro;</span></p>

                </div>

        </div>
    


    </div>
</body>

</html>