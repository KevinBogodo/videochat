<?php require 'php/header.php'; ?>


<form>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="insPseudo">Pseudo</label>
      <input type="text" class="form-control" id="pseudo" placeholder="pseudo">
    </div>
    <div class="form-group col-md-4">
      <label for="mobile">numero de telephone</label>
      <input type="text" class="form-control" id="mobile" placeholder="xxx xxx xxx">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Sexe</label>
      <select id="sexe" class="form-control">
        <option selected>Choose...</option>
        <option value="M">Masculin</option>
        <option value="F">Feminin</option>
        <option value="ND">Non definit</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="insMail">Email</label>
      <input type="email" class="form-control" id="Email" placeholder="Email">
    </div>
    <div class="form-group col-md-4">
      <label for="insPassword">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="form-group col-md-4">
      <label for="insConfPassword">Confirm Password</label>
      <input type="password" class="form-control" id="confpassword" placeholder="Confirme Password">
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
