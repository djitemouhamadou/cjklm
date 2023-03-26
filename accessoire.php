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
    <link rel="stylesheet" href="vetements_hommes.css">
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
                        src="https://img.ltwebstatic.com/images3_pi/2022/10/28/16669211336f99e36ee0c6d162adba56441841164e_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/02/08/16443135213a002fa2bffb701532b40d67b881930a_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/08/24/16613263816ec1a78bebcbe14b6241c41d04085d6a_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>

                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/11/01/1667289373d68c1955495f00d9b9a0f872c351b799_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/06/10/1654855307464bca8f89852cac090adc77a778986a_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2021/07/17/1626502142e917758370ddaaf5edd73a7a439ee47e_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>


                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2023/01/06/167297147041cc951289397915b4c9aeaf7c0efd6b_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2021/06/30/1625035948d6a45e2157f4458c8ad8874d0cb2aff7_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2023/02/08/167584188007d6abd4147ee2a4999103f1891d63ab_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <p>Surchemise <span>Prix:50&euro;</span></p>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/07/20/1658321778aa0ccf47d6c7770bf475d303ea7d2305_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <p>Surchemise <span>Prix:50&euro;</span></p>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/11/28/1669609517cf010383532f2a7c64737e5203b73b05_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <p>Surchemise <span>Prix:50&euro;</span></p>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/07/29/165907803575af53749959109336a37c50df3da139_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <p>Surchemise <span>Prix:50&euro;</span></p>

                </div>

        </div>
    


    </div>
</body>

</html>