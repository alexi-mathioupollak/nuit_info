<?php 
require_once './config/BDD.php';

if(!empty($_POST)){
	extract($_POST);
	$ok = true;

	if (isset($_POST['resetemail'])){
        $req = $pdo->prepare("UPDATE NDI__User SET email = :email WHER idUser:idu");
        $req->execute(array(
            'email' => $_POST['email'],
            'idu' => $_SESSION['id']
        ));
        $req = $req->fetch();
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
    <br/><br/>
    <br/><br/>
    <br/><br/>
    <div>Changement d'adresse email</div>
        <form method="post">
            <!-- <?php
                //if (isset($er_email)){
            ?>
            <div><?//= $er_email ?></div>
            <?php         
                //}
            ?> -->
            <label class="form-label" for="email"><strong>Adresse Email</strong><br></label>
            <input type="email" placeholder="Nouvelle Adresse email" name="email" value="<?php if(isset($email)){ echo $email; }?>" required>
            <button type="submit" name="resetemail">Valider</button>
        </form>
        <div></div><small><a href="./index.php?action=profil">Retour sur votre profil</a></small>

          </body>
</html>