<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Acces_au_compte.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon panier</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" async></script>
</head>

<body>
    <nav class="nav">
        <button onclick="fct()"><img src="pngegg.png" alt="menuBarre" class="menuBarre" id="menuBarre"></button>
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
                <li><a href="Vetements_femmes.php">Vêtements femmes</a></li>
                <li><a href="Vetements_hommes.php">Vêtements hommes</a></li>
                <li><a href="">sport</a></li>
                <li><a href="accessoire.php">Accéssoires</a></li>
                <li><a href="beaute.php">Beauté</a></li>
            </ul>
        </div>
        

        
    <div class="divform">
            <form method='POST' action="" enctype="multipart/form-data">

                <h1 style="padding: 20px;">Votre panier</h1>


                
    <?php
    session_start();
        $con = mysqli_connect("localhost", "root", "", "utilisateurs");
        $session=$_SESSION['id'];
        if (!empty($session)) {
            $req1 = mysqli_query($con, "SELECT nom ,prix, vendeur FROM achats WHERE idUser ='$session'");
            
            if (mysqli_num_rows($req1) == 0) {
                //si la base de donnée ne contient aucun produit , alors affichons :
                echo " <center><p>Aucun produit trouvé</p></center>";
            } else { //si oui
                echo '
            <table style="margin-left: auto;
            margin-right: auto;">
     <thead>
         <tr>
             <th>nom de l\'article</th>
             <th>prix</th>
             <th>vendeur</th>
         </tr>
     </thead>
     <tbody>';
     $total = 0;
                while ($row = mysqli_fetch_assoc($req1)) {
                        $total+=$row['prix'];
                    echo '      
        <tr>
            <td style="text-align: center; vertical-align: middle;">' . $row['nom'] . '</td>
            <td style="text-align: center; vertical-align: middle;">' . $row['prix'] . '&euro;</td>
            <td style="text-align: center; vertical-align: middle;">' . $row['vendeur'] . '</td>
        </tr>';
                }
                echo '
                <tr>
                    <td style="text-align: center; vertical-align: middle;">TOTAL</td>
                    <td colspan="2" style="text-align: center; vertical-align: middle;">' . $total . '&euro;</td>
                </tr>
                
                </tbody>
</table>
           ';

            }
        }

    ?>
    
    </form>

</div>
</body>

</html>