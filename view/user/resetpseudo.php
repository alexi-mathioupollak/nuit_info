<?php 

session_name('pollexpress');
session_start();

require_once '/home/ann2/gaidot/public_html/PollExpress/config/BDD.php';

if(!empty($_POST)){
	extract($_POST);
	$ok = true;

	if (isset($_POST['resetpseudo'])){
        $req = $pdo->prepare("UPDATE `NDI__User` SET pseudo = :pseudo WHER idUser:idu");
        $req->execute(array(
            'pseudo' => $_POST['pseudo'],
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
        <title>Changement de pseudo</title>
    </head>
    <body>
    <br/><br/>
    <br/><br/>
    <div>Changement de pseudo</div>
        <form method="post">
            <!-- <?php
            //if (isset($er_email)){
            ?>
            <div><?//= $er_email ?></div>
            <?php         
                //}
            ?> -->
            <label class="form-label" for="pseudo"><strong>Pseudo</strong><br></label>
            <input type="Text" placeholder="Nouvelle Pseudo" name="pseudo" value="<?php if(isset($email)){ echo $email; }?>" required>
            <button type="submit" name="resetemail">Valider</button>
        </form>
        <div></div><small><a href="./index.php?action=profil">Retour sur votre profil</a></small>

          </body>
</html>