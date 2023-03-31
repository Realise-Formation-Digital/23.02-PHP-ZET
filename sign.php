<?php
session_start();
require_once './logic/logicSign.php';


require './elements/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'inscription</title>
</head>
<body>
  
<!-- Fust-Version-Bootstrap -->
<!-- <form action="" method="post" class ="text-center">
  <div class="mb-3" >
  <label  for="exampleInputEmail1" class="form-label">username</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <?php if($usernameError): ?>
        <p><?= $usernameError ?></p>
    <?php endif; ?>
  </div>
  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password"type="password" class="form-control" id="exampleInputPassword1">
    <?php if($passwordError): ?>
        <p class="alert alert-danger"><?= $passwordError?></p>
       <?php endif; ?>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

<?php if($messageSucces): ?>
    <p><?= $messageSucces?></p>
<?php endif; ?>
</form> -->

<!-- Final-Version-Bootstrap -->
<div class="container text-center my-5 w-50 border border-secondary rounded shadow-lg
">
<form class="was-validated text-center" action="" method="post">
  <div class="mb-3 mx-4">
    <label for="validationTextarea" class="form-label mt-2">E-mail, nom d'utilisateur ou numéro de téléphone</label>
    <input name="name" type="text"class="form-control text-center" id="validationTextarea" placeholder="Saisir le nom d'utilisateur">
    <div class="invalid-feedback">

<!-- error username-->
    <?php if($usernameError): ?>
    <p><?= $usernameError ?></p>
    <?php endif; ?>
    </div>
  </div>

  <!--Saisir le mot de passe-->
  <div class="mb-3 mx-4">
    <label for="validationTextarea" class="form-label">Saisir le mot de passe</label>
    <input name="password" type="password" class="form-control" id="validationTextarea" placeholder="">
    <div class="invalid-feedback">

<!--passwordError -->
    <?php if($passwordError): ?>
        <p><?= $passwordError?></p>
       <?php endif; ?>
    </div>
  </div>
  <!--Bouton inscription-->
  <div class="mb-3">
    <button class="btn btn-primary" type="submit">inscription</button>
  </div>
</form>
</div>
<?php require './elements/footer.php'; ?>