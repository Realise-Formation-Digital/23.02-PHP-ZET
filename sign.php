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


<form action="" method="post">
    <input type="text" name="name" ><br><br>
    <?php if($usernameError): ?>
        <p><?= $usernameError ?></p>
    <?php endif; ?>

    <input type="password"  name="password" ><br><br>
    <?php if($passwordError): ?>
        <p><?= $passwordError?></p>
       <?php endif; ?>
    <input type="submit" value="Submit">
</form> 
<?php if($messageSucces): ?>
    <p><?= $messageSucces?></p>
<?php endif; ?>




<?php require './footer.php'; ?>