<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=confirmation_email;', 'root', '');
if (isset($_GET['id']) and !empty($_GET['id']) and isset($_GET['cle']) and !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $getcle = $_GET['cle'];
    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ? AND cle = ?');
    $recupUser->execute(array($getid, $getcle));
    if ($recupUser->rowCount() > 0) {
        $userInfo = $recupUser->fetch();
        if ($userInfo['confirme'] = 1) {
            $updateConfirmation = $bdd->prepare('UPDATE users SET confirme = ? WHERE id = ?');
            $updateConfirmation->execute(array(1, $getid));
            $_SESSION['cle'] = $getcle;
            header('Location: index.php');
        } else {
            $_SESSION['cle'] = $getcle;
            header('Location: index.php');
        }
    } else {
        echo "Votre clé ou identifiant est incorrect";
    }
} else {
    echo "Aucun utilisateur trouvé";
}
?>