<?php require 'php/header.php'; ?>

<?php
  if (!empty($_POST)) {


    $errors = array();

    if (empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])) {

      $errors['pseudo'] = "votre pseudo n'est pas valide";
    }

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Votre email n'est pas valide";
    }
    if (empty($_POST['password']) || $_POST['password'] != $_POST['confpassword']) {
      $errors['password'] = "vous devez rentrer un mot de passe valide";
    }




    debug($errors);
  }
 ?>



<form action="" method="POST">

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="insPseudo">Pseudo</label>
      <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="pseudo">
    </div>
    <div class="form-group col-md-4">
      <label for="mobile">numero de telephone</label>
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="xxx xxx xxx">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Sexe</label>
      <select id="sexe" name="sexe" class="form-control">
        <option value="M">Masculin</option>
        <option value="F">Feminin</option>
        <option value="ND">Non definit</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="insMail">Email</label>
      <input type="email" class="form-control" name="email" id="Email" placeholder="Email">
    </div>
    <div class="form-group col-md-4">
      <label for="insPassword">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
    </div>
    <div class="form-group col-md-4">
      <label for="insConfPassword">Confirmez votre mot de passe</label>
      <input type="password" class="form-control" name="confpassword" id="confpassword" placeholder="Confirme Password"/>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="check">
      <label class="form-check-label" for="gridCheck">
        Je ne suis pqs un robot
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Inscription</button>
</form>



<?php require 'php/footer.php'; ?>
