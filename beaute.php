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
                        src="https://img.ltwebstatic.com/images3_pi/2021/07/29/16275498223a2a3537fba14dda51889c5f8e896053_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2021/12/17/1639742972c8ef96c1602043d93662311d868dc24c_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/11/15/1668495389808b2307a0701511c4883df1ab3e9ba7_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>

                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2021/01/18/16109543340e1bfcbe56abb0d31c1cb810a6433900_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/03/15/164732613021b59964b3c14d79915a265179fc97fe_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/10/12/16655566625b7ca66a94d2bbc9cc18c554dbfffc18_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>


                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/03/29/164854528154358fe405cf33a7f94b42b692179fab_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/10/08/16652127416f3731e34c5d4ba42a9a51cf7d2df0d9_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2021/06/07/162305306282ec210464eb577984ba2758add0c6e7_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <p>Surchemise <span>Prix:50&euro;</span></p>

                </div>

        </div>
    


    </div>
</body>

</html>