<?php
$username = $password = $usernameError = $passwordError = $hash = $messageSucces = "";

if(!empty($_POST))
{
    $username = $_POST['name'];
    $password = $_POST['password'];
    $validation = true;
    $filename = 'user.csv';
    $existe = 0;
     if(empty($username))
     {
        $usernameError = 'mettre un nom';
        $validation = false;
     } 
     if(empty($password))
     {
        $passwordError = 'Add your password';
        $validation = false;
     }
     if($validation)
     {
        $hash = crypt($password, '$1$rasmusle$');
        if(file_exists($filename))
        {
            $existe = 1;
        }
        $userCsv = fopen('user.csv', 'a');
        if(!$existe)
        {
            fputcsv($userCsv,array('username;password'));
        }
        fputcsv($userCsv,array($username.";".$hash));

        fclose($userCsv);

        $messageSucces = 'Vos donnees sont bien enregistrer';
     }
}


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