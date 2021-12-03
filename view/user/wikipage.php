<?php 

require_once './config/BDD.php'; 


$page_id = $_GET['id'];
echo '<br><br><br><br><br>';

		$req = $pdo->prepare("SELECT * FROM NDI__wiki WHERE id = :id");
      	$req->execute(array('id' => $page_id));
      	$req = $req->fetch();

		$reqAction = $pdo->prepare("SELECT * FROM NDI__SectionActions WHERE idWiki = :id");
      	$reqAction->execute(array('id' => $page_id));
      	$reqAction = $reqAction->fetch();

      	$reqAnnexe = $pdo->prepare("SELECT * FROM NDI__SectionAnnexe WHERE idWiki = :id");
      	$reqAnnexe->execute(array('id' => $page_id));
      	$reqAnnexe = $reqAnnexe->fetch();

      	$reqCadrage = $pdo->prepare("SELECT * FROM NDI__SectionCadrage WHERE idWiki = :id");
      	$reqCadrage->execute(array('id' => $page_id));
      	$reqCadrage = $reqCadrage->fetch();

      	$reqCaracteristique = $pdo->prepare("SELECT * FROM NDI__SectionCaracteristiques WHERE idWiki = :id");
      	$reqCaracteristique->execute(array('id' => $page_id));
      	$reqCaracteristique = $reqCaracteristique->fetch();

      	$reqEquipage = $pdo->prepare("SELECT * FROM NDI__SectionEquipage WHERE idWiki = :id");
      	$reqEquipage->execute(array('id' => $page_id));
      	$reqEquipage = $reqEquipage->fetch();

      	$reqEquipageSauve = $pdo->prepare("SELECT * FROM NDI__SectionEquipageSauve WHERE idWiki = :id");
      	$reqEquipageSauve->execute(array('id' => $page_id));
      	$reqEquipageSauve = $reqEquipageSauve->fetch();

      	$reqIntro = $pdo->prepare("SELECT * FROM NDI__SectionIntroduction WHERE idWiki = :id");
      	$reqIntro->execute(array('id' => $page_id));
      	$reqIntro = $reqIntro->fetch();

      	$reqMedaille = $pdo->prepare("SELECT * FROM NDI__SectionMedailles WHERE idWiki = :id");
      	$reqMedaille->execute(array('id' => $page_id));
      	$reqMedaille = $reqMedaille->fetch();

      	$reqMoyenTechnique = $pdo->prepare("SELECT * FROM NDI__SectionMoyenTechnique WHERE idWiki = :id");
      	$reqMoyenTechnique->execute(array('id' => $page_id));
      	$reqMoyenTechnique = $reqMoyenTechnique->fetch();

      	$reqPresse = $pdo->prepare("SELECT * FROM NDI__SectionPresse WHERE idWiki = :id");
      	$reqPresse->execute(array('id' => $page_id));
      	$reqPresse = $reqPresse->fetch();

      	$reqTexte = $pdo->prepare("SELECT * FROM NDI__SectionTexte WHERE idWiki = :id");
      	$reqTexte->execute(array('id' => $page_id));
      	$reqTexte = $reqTexte->fetch();






?>

<div>
    <main class="page landing-page">
        <section class="clean-block clean-info dark" style="background: #dcdde1; padding-bottom: 10px;">
            <div class="container">
                <div class="block-heading"><br><br>
                    <h2 class="text-info" style="color: #0c2461; text-align: center;"><?php echo $req['titre_page'] ?> </h2><br>
                </div>
                <p class="clean-block" style="text-align: center;"><?php echo $reqIntro['content'] ?></p>
            </div>
        </section>
        <?php 
        	if($req['type_page']=='Sauveteur'){
        		?>
        		<section class="clean-block clean-info dark" style="background: #dcdde1; padding-bottom: 10px;">
        		    <div class="container">
        		        <div class="block-heading">
        		            <h2 class="text-info" style="color: #0c2461; text-align: center;">Médailles :</h2><br>
        		        </div>
        		        <p class="clean-block" style="text-align: center;"><?php echo $reqMedaille['content'] ?></p>
        		    </div>
        		    <div class="block-heading">
        		            <h2 class="text-info" style="color: #0c2461; text-align: center;">Actions :</h2><br>
        		        </div>
        		        <p class="clean-block" style="text-align: center;"><?php echo $reqAction['content'] ?></p>
        		    </div>
        		    <div class="block-heading">
        		            <h2 class="text-info" style="color: #0c2461; text-align: center;">Presse :</h2><br>
        		        </div>
        		        <p class="clean-block" style="text-align: center;"><?php echo $reqPresse['content'] ?></p>
        		    </div>
        		

        		<?php 
        	}
        ?>
        </section>
        <?php 
        	if($req['type_page']=='Bateau'){
        		?>
        		<section class="clean-block clean-info dark" style="background: #dcdde1; padding-bottom: 10px;">
        		    <div class="container">
        		        <div class="block-heading"><br><br>
        		            <h2 class="text-info" style="color: #0c2461; text-align: center;">Caractéristiques :</h2><br>
        		        </div>
        		        <p class="clean-block" style="text-align: center;"><?php echo $reqCaracteristique['content'] ?></p>
        		    </div>     
        		</section>

        		<?php 
        	}
        ?>
        <?php 
        	if($req['type_page']=='Sauvetage'){
        		?>
        		<section class="clean-block clean-info dark" style="background: #dcdde1; padding-bottom: 10px;">
        		    <div class="container">
        		        <div class="block-heading"><br><br>
        		            <h2 class="text-info" style="color: #0c2461; text-align: center;">Cadrage :</h2><br>
        		        </div>
        		        <p class="clean-block" style="text-align: center;"><?php echo $reqCadrage['content'] ?></p>
        		    </div>
        		    <div class="block-heading"><br><br>
        		            <h2 class="text-info" style="color: #0c2461; text-align: center;">Equipage :</h2><br>
        		        </div>
        		        <p class="clean-block" style="text-align: center;"><?php echo $reqEquipage['content'] ?></p>
        		    </div>
        		    <div class="block-heading"><br><br>
        		            <h2 class="text-info" style="color: #0c2461;text-align: center;">Equipage sauvé :</h2><br>
        		        </div>
        		        <p class="clean-block" style="text-align: center;"><?php echo $reqEquipageSauve['content'] ?></p>
        		    </div>
        		    <div class="block-heading"><br><br>
        		            <h2 class="text-info" style="color: #0c2461;text-align: center;">Moyen Technique :</h2><br>
        		        </div>
        		        <p class="clean-block" style="text-align: center;"><?php echo $reqMoyenTechnique['content'] ?></p>
        		    </div>
        		</section>

        		<?php 
        	}
        ?>
        <section>
        	<div class="block-heading"><br><br>
        	        <h2 class="text-info" style="color: #0c2461;text-align: center;">Annexes :</h2><br>
        	    </div>
        	    <p class="clean-block" style="text-align: center;"><?php echo $reqAnnexe['content'] ?></p>
        	</div>
        </section>
        <section class="clean-block clean-info dark" style="height: 133px;background: rgb(255,255,255);">
            <div class="container">
               
        </section>
        <section class="clean-block about-us">
            <div class="container">
                
        </section>
    </main>
</div>




