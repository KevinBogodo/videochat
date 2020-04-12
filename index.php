<?php require 'php/header.php'; ?>



<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email/mobile</label>
    <input type="email" class="form-control col-md-4-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or mobile">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Je ne suis pas un robot</label>
  </div>
  <div class="form-group">
    <label for="inscription"><a href="inscription.php">Inscrition</a></label>
    <label for="inscription"><a href="resetmdp.php">Mot de passe oublier</a></label>
  </div>
  <button type="submit" class="btn btn-primary">Connexion</button>
</form>

<?php require 'php/footer.php'; ?>
