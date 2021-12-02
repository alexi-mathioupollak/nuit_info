    <?php

    require_once '/home/ann2/gaidot/public_html/PollExpress/config/BDD.php';

    if (!isset($_SESSION['id'])){   //Si l'utilisateur n'est pas connecté ou pas validé, il est redirigé automatiquement vers la page de login
    header('Location: https://webinfo.iutmontp.univ-montp2.fr/~gaidot/PollExpress/index.php?action=login');
    exit;
  }

  if((isset($_SESSION['id'])) && ($_SESSION['confirmation_token']==0)){
        header('Location: https://webinfo.iutmontp.univ-montp2.fr/~gaidot/PollExpress/index.php?action=login');
        exit;
  }



      header('Location: ./index.php'); //on redirige l'utilisateur vers la page d'accueil
      exit;
    }
  }
}
?>
?>
            <div>
    <main class="page landing-page">
        <section class="clean-block clean-info dark" style="background: #dcdde1; padding-bottom: 10px;">
            <div class="container">
                <div class="block-heading"><br><br>
                    <h2 class="text-info" style="color: #0c2461;"> <?php  echo 'Bienvenue, ' . $_SESSION['pseudo'] . '</h2>'; ?>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        
                    </div>

                </div>
            </div>
            <section></section>
        </section>
        <section class="clean-block clean-info dark" style="height: 133px;background: rgb(255,255,255);">
            <div class="container">
               
        </section>
        <section class="clean-block about-us">
            <div class="container">
                
        </section>
    </main>
</div>
