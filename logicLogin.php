<?php
session_start();
$name = $password = $passwordError = $messageError = $result = "";

if(!empty($_POST))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $success = true;
    if(empty($name))
    {
        $messageError = "Vous devez rentrer un nom ou un mot de passe";
        $success = false;
    }
    if(empty($password))
    {
        $messageError = "Vous devez rentrer un nom ou un mot de passe";
        $success = false;
    }
    if($success)
    {
        if (($handle = fopen("user.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, null, ";")) !== FALSE) 
            {
                if (password_verify($password, $data[1]) && $name === $data[0]) 
                {
                    $_SESSION['name'] = $name;
                    
                    break;
                } 
                else 
                {
                    $passwordError = 'L utilisateur ou le mot de passe est invalide.';
                }
            }
            fclose($handle);
        }
    }
}
?>
