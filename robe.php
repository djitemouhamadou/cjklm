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
    <link rel="stylesheet" href="robe.css">
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
                        src="https://img.ltwebstatic.com/images3_pi/2021/12/13/1639363780b59f0a9ed25b0bef1c3d07bc8e586ab7_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2021/11/19/16373062310b553d5fb29dae7b3c04bd124eb2aae9_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/11/20/16688736321291d18eb7920f64fd02f8b6a234b9d9_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>

                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2023/01/06/1672934474604be9781ba9412dd9cb94540ca61ad0_thumbnail_405x552.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>
                        
                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2023/02/24/1677216186b0ea5db9e766556f467f0d7eb8d6c78b_thumbnail_900x.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/02/25/1645766223424212a0d91f8645e95eddd681d9fcb8_thumbnail_900x.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>


                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2021/06/24/16244980505ec2e5a76e82c75feea18d012ecc03b5_thumbnail_900x.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2021/11/23/16376605151acd7db9d36cd2ad364f2b6c685ba593_thumbnail_900x.webp"
                        alt="" class="img_vetement">
                        <span class="prix">100$</span>

                </div>
                <div class="vetement"><img
                        src="https://img.ltwebstatic.com/images3_pi/2022/11/14/1668402169be8a1cecc7cf964ec8a4793d38c63f04_thumbnail_900x.webp"
                        alt="" class="img_vetement">
                        <p>Surchemise <span>Prix:50&euro;</span></p>

                </div>

        </div>
    


    </div>
</body>

</html>