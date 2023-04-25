<?php
    session_start();
    if(!$_SESSION['Password']){
        header('Location: Acces_au_compte.php');
    }
    if(isset($_POST['Ajouter'])){
        $con = mysqli_connect("localhost","root","","utilisateurs");

        $nom = $_POST['nom'];
        $prix = $_POST['Prix'];
        $type_de_produit= $_POST['type_de_produit'];
        if(!empty($nom) && !empty($prix) && !empty($type_de_produit)){
            $req1 = mysqli_query($con, "SELECT nom ,prix FROM $type_de_produit WHERE nom ='$nom' AND prix = '$prix'");
            if(mysqli_num_rows($req1) > 0) {
                //si le produit existe déjà:
                $message = '<p style="color:red" >Le produit existe déjà</p>';
            }else {
                if(isset($_FILES['image'])){
                    $img_nom = $_FILES['image']['name'];
                  $tmp_nom = $_FILES['image']['tmp_name'];
                  $time =time();

                  $nouveau_nom_img = $time.$img_nom ;


                  $deplacer_image = move_uploaded_file($tmp_nom,$nouveau_nom_img);
                  if($deplacer_image){
                    
                    $req2 = mysqli_query($con,"INSERT INTO $type_de_produit(nom,prix,emplacement_image) VALUES ('$nom','$prix','$nouveau_nom_img')") ;
                     
                }
                }
            }
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
  <title>Ajouter un produit</title>
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
      <form method='POST' action="" enctype="multipart/form-data">

        <h1>Ajouter un produit</h1>


        <div class="inputs">
          <input type="text" placeholder="Nom du produit" name="nom" />

          <hr>
          <br>
          <input type="text" placeholder="Prix en euros" name="Prix">
          <select name="type_de_produit">
            <option value="femmes">Vetements femmes</option>
            <option value="hommes">Vetements hommes</option>
            <option value="accessoire">Accessoire</option>
            <option value="beaute">Beaute</option>
          </select>
        </div>
        <label>Ajouter une image</label>
            <input type="file" name="image">
        <div align="center">
          <input type="submit" name="Ajouter">Ajouter</input>
        </div>
      </form>

    </div>
  </div>
</body>

</html>