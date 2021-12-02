<?php

require_once './config/BDD.php';


if(!empty($_POST)){
    extract($_POST);

    $tag = '';

    if (isset($_POST['search'])){


        $recherche = htmlentities(strtolower(trim($recherche)));

                $reponse = $pdo->query('SELECT * FROM NDI__Sauveteurs WHERE nom_prenom LIKE "%' . $recherche . '%"' );
          		echo '<br><br><br><br><br><br><br><div class="row justify-content-center">';
                while ($donnees = $reponse->fetch()) {
                    ?>
                    <div class="col-sm-6 col-lg-4" style="width: 228px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="./assets/img/base.png" style="height: 120.234px;">
                    <?php
                    echo '<h4 class="card-title" style="height: 14px;">' . $donnees['nom_prenom'] . '</h4>';

                    echo '<div class="icons"><a href="./index.php?action=detail&id=' . $donnees['id'] . '"><button class="btn btn-primary" style="width: 138px;height: 43px;font-size: 10px;background: #2e86de;">Consulter la page</button></a></div>';

                    echo '<p class = "champSondage"><small style="padding: -0;text-align: left;width: 0;height: 0;margin: 0;">Sauvetages :&nbsp;' . $donnees['nb_sauvetages'] . '</small></p></div></div>';

            }
                $reponse->closeCursor();
                

            exit;
        }
    
}
?>
<br><br>
<body>
    <section class="clean-block clean-form dark" style="height: 330.188px; background-color: white;">
        <div class="container text-start" style="height: 459px;">
            <div class="block-heading" style="height: -5px;">
                <form method="post">
                <div class="mb-3"><label class="form-label" for="text"><strong>Rechercher un sauveteur</strong><br></label>
                  <input class="form-control item" type="text" id="text" placeholder="Nom du sauveteur" name="recherche"></div>

                <div class="mb-3" style="width: 435px;height: -65px;margin: 20px;padding: 0px;"></div><button class="btn btn-primary text-center" name="search" type="submit" style="background: rgb(12,36,97);border-radius: 13px;border-color: rgb(12,36,97);margin: 5px;height: 39px;padding: 7px 12px;transform: scale(1.13);font-size: 14px;font-weight: bold;width: 130.344px;">Rechercher</button>
            </form>
        </div>
    </section>


</div>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="text-align: left;color: #0c2461;">Tous les sauveteurs :</h2>
                </div>
                      <div class="row justify-content-center">
            <?php
            
                $reponse = $pdo->query('SELECT * FROM NDI__Sauveteurs ORDER BY nom_prenom ASC');
                $i = 0;
                while ($donnees = $reponse->fetch()) {
                    ?>
                   <div class="col-sm-6 col-lg-4" style="width: 228px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="./assets/img/base.png" style="height: 120.234px;">
                    <?php
                    echo '<h4 class="card-title" style="height: 14px;">' . $donnees['nom_prenom'] . '</h4>';

                    echo '<div class="icons"><a href="./index.php?action=detail&id=' . $donnees['id'] . '"><button class="btn btn-primary" style="width: 138px;height: 43px;font-size: 10px;background: #2e86de;">Consulter la page</button></a></div>';

                    echo '<p><small style="padding: -0;text-align: left;width: 0;height: 0;margin: 0;">Sauvetages :&nbsp;' . $donnees['nb_sauvetages'] . '</small></p></div></div>';

            }
                $reponse->closeCursor();

                ?>
               </div>
            </div>
        </section>
</body>
</html>