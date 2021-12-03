<head>
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
  <link rel="stylesheet" href="./assets/css/vanilla-zoom.min.css">
</head>

<br/><br/>
<br/><br/>
<br/><br/>


<form method="post">
  <div class="mb-3"><label class="form-label" for="email"><strong style="margin-right: 10px;">Identifiant</strong><br></label><?= $_SESSION['id'] ?></div>
  <div class="mb-3"><label class="form-label" for="email"><strong style="margin-right: 10px;">Pseudo</strong><br></label><?= $_SESSION['pseudo'] ?></div>
  <div class="mb-3"><label class="form-label" for="email"><strong style="margin-right: 10px;">Adresse Email</strong><br></label><?= $_SESSION['email'] ?></div>
</form>

<a class="nav-link active" href="./index.php?action=resetmdp">Changer de mot de passe</a>
<a class="nav-link active" href="./index.php?action=resetpseudo">Changer le pseudo</a>
<a class="nav-link active" href="./index.php?action=resetemail">Changer l'adresse mail</a>
<a class="nav-link active" href="./index.php?action=deletedaccount">Supprimer le compte et ses données associées</a>
<p>test</p>
