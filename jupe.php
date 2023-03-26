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
    <link rel="stylesheet" href="jupe.css">
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
                        <li>Robes</li>
                        <li><a href="jupes.php">Jupes</a></li>
                    </ul>
                </li>
                <li><a href="vetements_hommes.php">Hommes</a></li>
                <li><a href="">sport</a></li>
                <li><a href="">Accéssoires</a></li>
                <li><a href="beaute.php">Beauté</a></li>
            </ul>
        </div>
        <div class="haut_vers_bas">

                <div class="vetement"><img
                        src="https://i.pinimg.com/236x/61/f2/5f/61f25f7fb51c77426ebd5394d3e0f09d.jpg"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://i.pinimg.com/236x/69/fa/78/69fa78b380ca9009718fffa180ea94d4.jpg"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                </div>
                <div class="vetement"><img
                        src="https://i.pinimg.com/236x/71/ea/0a/71ea0abee7802ab3974d93011bccadd6.jpg"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>

                <div class="vetement"><img
                        src="https://i.pinimg.com/236x/08/03/4f/08034f9788b2d22082ad13f98c39cbfc.jpg"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>
                <div class="vetement"><img
                        src="https://i.pinimg.com/236x/c8/f6/65/c8f6658483c8db3d7a030ab69ec21276.jpg"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://i.pinimg.com/236x/24/e5/54/24e554e0b06f0e9cd17ff41e2d97d226.jpg"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>


                <div class="vetement"><img
                        src="https://i.pinimg.com/236x/a1/a6/26/a1a626537e33fed677fdff39fe613556.jpg"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://i.pinimg.com/236x/14/b8/08/14b8086d90b6b511f8f44d6d799bf919.jpg"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://i.pinimg.com/236x/33/da/4b/33da4bafa70b8cc2145e9a88e583d203.jpg"
                        alt="" class="img_vetement">
                        <p>Surchemise <span>Prix:50&euro;</span></p>

                </div>

        </div>
    


    </div>
</body>

</html>