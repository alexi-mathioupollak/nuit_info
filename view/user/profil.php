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
  <div class="mb-3"><label class="form-label" for="email"><strong>Identifiant</strong><br></label><?php $_SESSION['id'] ?></div>
  <div class="mb-3"><label class="form-label" for="email"><strong>Pseudo</strong><br></label><?php $_SESSION['pseudo'] ?></div>
  <div class="mb-3"><label class="form-label" for="email"><strong>Adresse Email</strong><br></label><?php $_SESSION['email'] ?></div>


<a class="nav-link active" href="./index.php?action=resetmdp">Changer de mot de passe</a>
<a class="nav-link active" href="./index.php?action=resetpseudo">Changer le pseudo</a>
<a class="nav-link active" href="./index.php?action=resetemail">Changer l'adresse mail</a>
</form>

<p>test</p>