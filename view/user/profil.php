<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<form method="post">
  <div class="mb-3"><label class="form-label" for="email"><strong style="margin-right: 10px;">Identifiant</strong><br></label><?= $_SESSION['id'] ?></div>
  <div class="mb-3"><label class="form-label" for="email"><strong style="margin-right: 10px;">Pseudo</strong><br></label><?= $_SESSION['pseudo'] ?></div>
  <div class="mb-3"><label class="form-label" for="email"><strong style="margin-right: 10px;">Adresse Email</strong><br></label><?= $_SESSION['email'] ?></div>
</form>

<a class="nav-link active" href="./index.php?action=resetmdp">Changer de mot de passe</a>
<a class="nav-link active" href="./index.php?action=resetpseudo">Changer le pseudo</a>
<a class="nav-link active" href="./index.php?action=resetemail">Changer l'adresse mail</a>
<a class="nav-link active" href="./index.php?action=deletedaccount">Supprimer le compte et ses données associées</a>
<a class="nav-link active" href="./index.php?action=downloaded">Recevoir mes données par mail</a>
<p>test</p>