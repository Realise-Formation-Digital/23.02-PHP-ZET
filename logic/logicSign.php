<?php
require_once './login/checkInput.php';

$username = $password = $usernameError = $passwordError = $hash = $messageSucces = "";

if(!empty($_POST))
{
    $username = checkInput($_POST['name']);
    $password = checkInput($_POST['password']);
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

        // link button inscription 
         header ('Location: login.php');
         exit;
     }
}
?>