<?php
require "PHPMailer/PHPMailerAutoload.php";
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=confirmation_email;', 'root', '');
if (isset($_POST['valider'])) {
    if (!empty($_POST['email'])) {
        $cle = rand(1000000, 9000000);
        $email = $_POST['email'];
        $insererUser = $bdd->prepare('INSERT INTO users (email, cle, confirme) VALUES (?, ?, ?)');
        $insererUser->execute(array($email, $cle, 0));
        
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $recupUser->execute(array($email));
        if ($recupUser->rowCount() > 0) {
            $userInfos = $recupUser->fetch();
            $_SESSION['id'] = $userInfos['id'];



            function smtpmailer($to, $from, $from_name, $subject, $body)
            {
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true;

                $mail->SMTPSecure = 'TLS';
                $mail->Host = 'smtp-mail.outlook.com';
                $mail->Port = '587';
                $mail->Username = 'ant_charlet@hotmail.fr';
                $mail->Password = 'Azertya04';

                //   $path = 'reseller.pdf';
                //   $mail->AddAttachment($path);

                $mail->IsHTML(true);
                $mail->From = "ant_charlet@hotmail.fr";
                $mail->FromName = $from_name;
                $mail->Sender = $from;
                $mail->AddReplyTo($from, $from_name);
                $mail->Subject = $subject;
                $mail->Body = $body;
                $mail->AddAddress($to);
                if (!$mail->Send()) {
                    $error = "Please try Later, Error Occured while Processing...";
                    return $error;
                } else {
                    $error = "Thanks You !! Your email is sent.";
                    return $error;
                }
            }

            $to = 'ant_charlet@hotmail.fr';
            $from = 'ant_charlet@hotmail.fr';
            $name = 'Antoine';
            $subj = 'PHPMailer 5.2 testing from DomainRacer';
            $msg = 'http://localhost/AWA_dev_web/confirmail/verif.php?id='.$_SESSION['id'].'&$cle'.$cle;

            $error = smtpmailer($to, $from, $name, $subj, $msg);




        }
    } else {
        echo "Veuillez mettre votre email";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <meta charset="utf-8">
</head>

<body>
    <form method="POST" action="">
        <input type="email" name="email">
        <input type="submit" name="valider">
    </form>
</body>