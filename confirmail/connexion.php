<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=confirmation_email;', 'root', '');
if (isset($_POST['valider'])) {
    if (!empty($_POST['email'])) {
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $recupUser->execute(array($_POST['email']));
        if ($recupUser->rowCount() > 0) {
            $userInfo = $recupUser->fetch();
            if ($userInfo['confirme'] == 1) {
                header('Location: verif.php?id=' . $userInfo['id'] . '&cle=' . $userInfo['cle']);
            } 
            echo "Vous n'êtes pas confirmé au niveau du site";
        } else {
            echo "L'utilisateur n'existe pas";
        }
    } else {
        echo "Veuillez mettre votre e-mail";
    }
}else{echo"fail";}
?>
<html>

<head>
    <!DOCTYPE html>
    <title>Connexion </title>
    <meta charset="utf-8">
</head>

<body>
    <form method="POST" action="">
        <input type="email" name="email"> <br />
        <input type="submit" name="valider">
    </form>
</body>