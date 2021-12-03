<?php

require_once './config/BDD.php';



  
  if(!empty($_POST)){ // Si la variable "$_Post" contient des informations alors on les traites
    extract($_POST); //extrait les valeurs du form en 2 variables $nomsondage $lien
    
    $ok = true;


  if (isset($_POST['createpage'])){ 

    	$titre = htmlentities(trim($titre));
    	$type = htmlentities(trim($type));
    	$introduction = htmlentities(trim($introduction));
    	$texte = htmlentities(trim($texte));
    	$annexe = htmlentities(trim($annexe));
    	$medaille = htmlentities(trim($medaille));
    	$action = htmlentities(trim($action));
    	$presse = htmlentities(trim($presse));
    	$bateau = htmlentities(trim($bateau));
    	$cadrage = htmlentities(trim($cadrage));
    	$equipage = htmlentities(trim($saved));
    	$saved = htmlentities(trim($saved));
    	$moyen_technique = htmlentities(trim($moyen_technique));
       

        if(empty($titre)){ //test si titre est vide
      $ok = false;
      $er_titre = "Remplissez un titre pour la page";
    }

    if(empty($type)){ 
      $ok = false;
      $er_contenu = "La page doit contenir du texte";
    }

    $stmt = $pdo->prepare("SELECT * FROM NDI__WIKI WHERE titre=?");
    $stmt->execute([$titre]); 
    $req_lien = $stmt->fetch();
    if ($req_lien) {
      $ok = false;
      $er_titre = "Cette page existe déjà";
        }



    if ($ok){

      $req = $pdo->prepare("INSERT INTO NDI__wiki SET titre_page = :titre, type_page = :type, auteur_page = :auteur");
      $req->execute(array('titre' => $titre, 'type' => $type, 'auteur' => $_SESSION['pseudo']));

      $req2 = $pdo->prepare("SELECT * FROM NDI__wiki WHERE titre_page = :titre");
      $req2->execute(array('titre' => $titre));
      $req2 = $req2->fetch();

      $idWiki=$req2['id'];

      if(isset($texte)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionIntroduction SET content = :introduction, idWiki = :id");
      $req->execute(array('introduction' => $introduction, 'id' => $idWiki));}

  	  if(isset($texte)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionTexte SET content = :texte, idWiki = :id");
      $req->execute(array('texte' => $texte, 'id' => $idWiki));}

      if(isset($annexe)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionAnnexe SET content = :annexe, idWiki = :id");
      $req->execute(array('annexe' => $annexe, 'id' => $idWiki));}

      if(isset($medaille)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionMedailles SET content = :medaille, idWiki = :id");
      $req->execute(array('medaille' => $medaille, 'id' => $idWiki));}

      if(isset($action)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionActions SET content = :action, idWiki = :id");
      $req->execute(array('action' => $action, 'id' => $idWiki));}

      if(isset($presse)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionPresse SET content = :presse, idWiki = :id");
      $req->execute(array('presse' => $presse, 'id' => $idWiki));}

      if(isset($bateau)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionCaracteristiques SET content = :bateau, idWiki = :id");
      $req->execute(array('bateau' => $bateau, 'id' => $idWiki));}

      if(isset($cadrage)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionCadrage SET content = :cadrage, idWiki = :id");
      $req->execute(array('cadrage' => $cadrage, 'id' => $idWiki));}

      if(isset($equipage)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionEquipage SET content = :equipage, idWiki = :id");
      $req->execute(array('equipage' => $equipage, 'id' => $idWiki));}

      if(isset($saved)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionEquipageSauve SET content = :saved, idWiki = :id");
      $req->execute(array('saved' => $saved, 'id' => $idWiki));}

      if(isset($moyen_technique)){

      $req = $pdo->prepare("INSERT INTO NDI__SectionMoyenTechnique SET content = :moyen_technique, idWiki = :id");
      $req->execute(array('moyen_technique' => $moyen_technique, 'id' => $idWiki));}



      }
          
   
          header('Location: ./index.php'); //redirection vers la page index.php
          exit;
    }
  }

?>

<body><br><br>
    <section class="clean-block clean-form dark" style="height: 830.188px;">
        <div class="container text-start" style="height: 459px;">
            <div class="block-heading" style="height: -5px;">
                <h2 class="text-info" style="text-align: center;"><strong>Créez une page</strong></h2>
            </div>
            <p style="text-align: center;">Créez une page sur SauveteurExpress<br></p>
            <form method="post">


            	<p style="text-align: center;"><strong>Commun :</strong><br></p>


            	<?php
                    if (isset($er_titre)){ 
                    ?>
                       <div><?= $er_titre ?></div>
                    <?php
                      }
                    ?>
                <div class="mb-3"><label class="form-label" for="titre"><strong>Titre de la page</strong><br></label>
                  <input class="form-control item" type="text" id="titre" placeholder="Titre de la page" name="titre" value="<?php if(isset($titre)){ echo $titre; }?>" required></div>

                  <div class="mb-3"><label class="form-label" for="type"><strong>Type de la page :</strong><br></label><br>
                  <select name="type" >
                    <option value="">Choisir un type</option>
                    <option value="Sauveteur">Sauveteur</option>
                    <option value="Victime">Sauvetage</option>
                    <option value="Mission">Bateau</option>
                </select>

                <div class="mb-3"><label class="form-label" for="introduction"><strong>Introduction :</strong><br></label>
                  <textarea rows="3" cols="40" id="introduction" name="introduction"></textarea>

                  <div class="mb-3"><label class="form-label" for="texte"><strong>Texte :</strong><br></label>
                  <textarea rows="6" cols="40" id="texte" name="texte"></textarea>

                  <div class="mb-3"><label class="form-label" for="annexe"><strong>Annexe :</strong><br></label>
                  <textarea rows="3" cols="40" id="annexe" name="annexe"></textarea>

                  <hr>
                  <p style="text-align: center;"><strong>Sauveteurs :</strong><br></p>

                  <div class="mb-3"><label class="form-label" for="medaille"><strong>Médailles :</strong><br></label>
                  <textarea rows="3" cols="40" id="medaille" name="medaille"></textarea>

                  <div class="mb-3"><label class="form-label" for="action"><strong>Actions :</strong><br></label>
                  <textarea rows="3" cols="40" id="action" name="action"></textarea>

                  <div class="mb-3"><label class="form-label" for="presse"><strong>Presse :</strong><br></label>
                  <textarea rows="3" cols="40" id="presse" name="presse"></textarea>

                  <hr>

                  <p style="text-align: center;"><strong>Bateau :</strong><br></p>

                  <div class="mb-3"><label class="form-label" for="bateau"><strong>Caractéristique du bateau :</strong><br></label>
                  <textarea rows="3" cols="40" id="bateau" name="bateau"></textarea>

                  <hr>

                  <p style="text-align: center;"><strong>Sauvetage :</strong><br></p>

                  <div class="mb-3"><label class="form-label" for="cadrage"><strong>Cadrage :</strong><br></label>
                  <textarea rows="3" cols="40" id="cadrage" name="cadrage"></textarea>

                  <div class="mb-3"><label class="form-label" for="equipage"><strong>Equipage :</strong><br></label>
                  <textarea rows="3" cols="40" id="equipage" name="equipage"></textarea>

                  <div class="mb-3"><label class="form-label" for="saved"><strong>Equipage sauvé :</strong><br></label>
                  <textarea rows="3" cols="40" id="saved" name="saved"></textarea>

                  <div class="mb-3"><label class="form-label" for="moyen_technique"><strong>Moyen Technique :</strong><br></label>
                  <textarea rows="3" cols="40" id="moyen_technique" name="moyen_technique"></textarea>
      

                <div class="mb-3" style="width: 435px;height: -65px;margin: 20px;padding: 0px;"></div><button class="btn btn-primary text-center" name="createpage" type="submit" style="background: rgb(12,36,97);border-radius: 13px;border-color: rgb(12,36,97);margin: 5px;height: 39px;padding: 7px 12px;transform: scale(1.13);font-size: 14px;font-weight: bold;">Créer une page</button>
            </form>
        </div>
    </section>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="./assets/js/vanilla-zoom.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>

