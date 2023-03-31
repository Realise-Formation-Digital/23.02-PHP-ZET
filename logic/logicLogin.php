<?php
require_once './logic/checkInput.php';
// déclaration des variables pour les conditions de traitement du formulaire de login et initialisation
$name = $password = $passwordError = $messageError = "";

// Action du moment ou on appel la variable global POST
if(!empty($_POST))
{
    // attribution des valeurs au variable déclaré.
    $name = checkInput($_POST['name']);
    $password = checkInput($_POST['password']);
    $success = true;

    // si pas de name on arrete et on envoi un message d'erreur
    if(empty($name))
    {
        $messageError = "Vous devez rentrer un nom ou un mot de passe";
        $success = false;
    }

    //si pas de mot de passe on arrete et on envoi un message d'erreur
    if(empty($password))
    {
        $messageError = "Vous devez rentrer un nom ou un mot de passe";
        $success = false;
    }

    // si succes est restè à vrai on traite les imformations
    if($success)
    {
        // ouverture de user.csv en mode lecture et fonctionne 
        if (($handle = fopen("user.csv", "r")) !== FALSE) {
            // tant qu'il y a des informations je les lis ligne par ligne
            while (($data = fgetcsv($handle, null, ";")) !== FALSE) 
            {
                //si un mot de passe coorespond et un utilisateur je stocke dans session le nom et j'ouvre la page privée
                if (password_verify($password, $data[1]) && $name === $data[0]) 
                {
                    $_SESSION['name'] = $name;
                    header('Location: messagePage.php');
                    exit;
                } 
                //sinon message d'erreur
                else 
                {
                    $passwordError = 'L utilisateur ou le mot de passe est invalide.';
                }
            }
            //onferme le fichier
            fclose($handle);
        }
    }
}
?>
