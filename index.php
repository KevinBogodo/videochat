<?php require 'php/header.php'; ?>

<?php

if (!empty($_POST)) {

  $errors = array();

  if (empty($_POST['login'])) {
    $errors['login'] = "Login incorrecte";
  }
  if (empty($_POST['password'])) {
    $errors['password'] = " mot de passe";
  }
 debug($errors);
}
 ?>


<form action="" method="POST" >
  <div class="form-group">
    <label for="loginmail">Email/mobile</label>
    <input type="email" name="login" class="form-control col-md-4-sm-4" id="email" aria-describedby="emailHelp" placeholder="Enter email or mobile">

  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="checkbox">
    <label class="form-check-label" for="exampleCheck1">Je ne suis pas un robot</label>
  </div>
  <div class="form-group">
    <label for="inscription"><a href="inscription.php">Inscrition | </a></label>
    <label for="inscription"><a href="resetmdp.php">Mot de passe oublier</a></label>
  </div>
  <button type="submit" name="connexion" class="btn btn-primary">Connexion</button>
</form>

<?php require 'php/footer.php'; ?>
