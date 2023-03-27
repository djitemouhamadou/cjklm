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
                                <li><a href="">sport</a></li>
                                <li><a href="accessoire.php">Accéssoires</a></li>
                                <li><a href="beaute.php">Beauté</a></li>
                        </ul>
                </div>
                <div class="haut_vers_bas">

                        <div class="vetement"><img
                                        src="https://i.pinimg.com/564x/a9/90/b2/a990b2bb586d5d70ea3a893e5df1debe.jpg"
                                        alt="" class="img_vetement">
                                <span class="prix">100$</span>

                        </div>
                        <div class="vetement"><img
                                        src="https://i.pinimg.com/564x/a9/90/b2/a990b2bb586d5d70ea3a893e5df1debe.jpg"
                                        alt="" class="img_vetement">
                                <span class="prix">100$</span>
                        </div>
                        <div class="vetement"><img
                                        src="https://tse4.mm.bing.net/th?id=OIP.jnfZyKbtTRiW3sJ6WADcJQHaM7&pid=Api&P=0"
                                        alt="" class="img_vetement">
                                <span class="prix">100$</span>

                        </div>

                        <div class="vetement"><img
                                        src="https://i.pinimg.com/236x/6c/df/f5/6cdff57234a92256ed4df363968a8132.jpg"
                                        alt="" class="img_vetement">
                                <span class="prix">100$</span>

                        </div>
                        <div class="vetement"><img
                                        src="https://i.pinimg.com/236x/6d/1c/28/6d1c28e5e85553e9e64196bb0c1e8890.jpg"
                                        alt="" class="img_vetement">
                                <span class="prix">100$</span>

                        </div>
                        <div class="vetement"><img
                                        src="https://i.pinimg.com/236x/05/d9/3b/05d93b557e7750a93555c908dedcec29.jpg"
                                        alt="" class="img_vetement">
                                <span class="prix">100$</span>

                        </div>


                        <div class="vetement"><img
                                        src="https://i.pinimg.com/236x/f7/77/a7/f777a7a0b941f0cb5969ff4cf975c7cf.jpg"
                                        alt="" class="img_vetement">
                                <span class="prix">100$</span>

                        </div>
                        <div class="vetement"><img
                                        src="https://tse3.mm.bing.net/th?id=OIP.YXXqhIcJjzTeBiH72IQtDgHaMj&pid=Api&P=0"
                                        alt="" class="img_vetement">
                                <span class="prix">100$</span>

                        </div>
                        <div class="vetement"><img
                                        src="https://tse3.mm.bing.net/th?id=OIP.jIu_PY74J_8i_AE8iLO6fQHaNJ&pid=Api&P=0"
                                        alt="" class="img_vetement">
                                <p>Surchemise <span>Prix:50&euro;</span></p>

                        </div>

                </div>



        </div>
</body>

</html>
