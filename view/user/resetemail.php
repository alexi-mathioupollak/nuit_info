<?php 

session_name('pollexpress');
session_start();

require_once '/home/ann2/gaidot/public_html/PollExpress/config/BDD.php';

if(!empty($_POST)){
	extract($_POST);
	$ok = true;

	if (isset($_POST['resetemail'])){
        
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Changement d'adresse email</title>
    </head>
    <body>
    <div>Changement d'adresse email</div>
        <form method="post">
            <?php
                if (isset($er_email)){
            ?>
            <div><?= $er_email ?></div>
            <?php         
                }
            ?>
            <input type="email" placeholder="Nouvelle Adresse email" name="email" value="<?php if(isset($email)){ echo $email; }?>" required>
            <button type="submit" name="resetemail">Valider</button>
        </form>
        <div></div><small><a href="./index.php?action=profil">Retour sur votre profil</a></small>

          </body>
</html>