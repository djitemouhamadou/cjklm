<?php
session_start();
echo $_SESSION['id'];
echo sha1("mdp");
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
                <a href="index.php" class="nomEntreprise">Top Vêtement</a></button>
                <div class="compte">
                        <ul>
                                <li><a href="Acces_au_compte.php">Se connecter</a></li>
                                <li><a href="mon_panier.php">Mon panier</a></li>
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

                        

                        <?php
                        $con = mysqli_connect("localhost", "root", "", "utilisateurs");
                        $req3 = mysqli_query($con, "SELECT * FROM hommes");
                        
                        if (mysqli_num_rows($req3) == 0) {
                                //si la base de donnée ne contient aucun produit , alors affichons :
                                echo " Aucun produit trouvé";
                        } else { //si oui
                        
                                while ($row = mysqli_fetch_assoc($req3)) {
                                        //affichons les informations
                                        echo '
                                        <a href="Vetement_clique.php?image='.$row['emplacement_image'].'&prix='.$row['prix'].'&nom='.$row['nom'].'&vendeur='.$row['vendeur'].'">
                           <div class="vetement"><img
                                        src="' . $row['emplacement_image'] . '"
                                        alt="" class="img_vetement">
                                <p>' . $row['nom'] . ' <span>Prix:' . $row['prix'] . '&euro;</span></p>

                        </div>
                        </a>
                           ';
                                }
                        }

                        ?>

                </div>



        </div>
</body>

</html>