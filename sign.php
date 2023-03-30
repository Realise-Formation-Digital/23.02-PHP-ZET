<?php
require_once 'logicSign.php';

require 'header.php';
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
<!-- Fust Version Bootstrap -->
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
        <p><?= $passwordError?></p>
       <?php endif; ?>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

<?php if($messageSucces): ?>
    <p><?= $messageSucces?></p>
<?php endif; ?>
</form> -->

<form class="was-validated">
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Username</label>
    <input name="name" type="text"class="form-control" id="validationTextarea" placeholder="username" required>
    <div class="invalid-feedback">
      
    </div>
  </div>

  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="validationTextarea" placeholder="Password" required>
    <div class="invalid-feedback">
      Please enter your password.
    </div>
  </div>


  <div class="mb-3">
    <button class="btn btn-primary" type="submit">inscription</button>
  </div>
</form>





































<?php require './footer.php'; ?>