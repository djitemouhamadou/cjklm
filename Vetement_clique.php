<?php
session_start();
echo $_SESSION['id'];
echo $_GET['nom'];
if(isset($_POST['acheter'])){
    $con = mysqli_connect("localhost","root","","utilisateurs");
    $nom = $_GET['nom'];
    $prix = $_GET['prix'];
    $idUser = $_SESSION['id'];
    $vendeur = $_GET['vendeur'];
    if(!empty($nom) && !empty($prix) && !empty($idUser) && !empty($vendeur)){
        $req2 = mysqli_query($con,"INSERT INTO achats(nom,prix,idUser,vendeur) VALUES ('$nom','$prix','$idUser','$vendeur')") ;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Acces_au_compte.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achat</title>
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
                <li><a href="">Mon panier</a></li>
                <li><a href="">Langue</a></li>
            </ul>
        </div>
    </nav>
    <div style="display:flex">
        <div class="typeVetements">
            <ul>
                <li><a href="Vetements_femmes.php">Vêtements femmes</a></li>
                <li><a href="Vetements_hommes.php">Vêtements hommes</a></li>
                <li><a href="">sport</a></li>
                <li><a href="accessoire.php">Accéssoires</a></li>
                <li><a href="beaute.php">Beauté</a></li>
            </ul>
        </div>


        <div class="divform">
            <form method='POST' action="">

                <h1>Acheter</h1>

                <?php
                echo '<img
                            src="' . $_GET['image'] . '" alt=""
                            class="img_vetement">
                        <span class="prix">' . $_GET['prix'] . '$</span>';
                ?>



                <div align="center">
                    <input type="submit" name="acheter">Acheter</input>
                </div>
            </form>

        </div>
    </div>
</body>

</html>