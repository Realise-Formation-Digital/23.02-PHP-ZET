<?php
require_once './login/checkInput.php';
$name = $email = $sujet = $message = $nameError = $emailError = $sujetError = $messageError = $msgsuccess = $typeEmail = "";

function isEmail(string $value)
{
    return filter_var($value, FILTER_VALIDATE_EMAIL);
}

if(!empty($_POST)){
    
    $name= checkInput($_POST['name']);
    $email= checkInput($_POST['email']);
    $sujet= checkInput($_POST['sujet']);
    $message= checkInput($_POST['message']);
    $filename = 'message.csv';
    $messageCsv = ('');
    $success = true;
    $msgsuccess = "Votre message à été envoye.";
    $existed = 0;
    $_SESSION['email'] =$email;
    

    //checking if the field is filled
    if(empty($name)){
        $nameError = "J'ai besoin d'un nom";
        $success = false;
    }

    if(empty($email)){
        $emailError= "entrer un email";
        $success = false;
    }
    if(!isEmail($email))
    {
        $typeEmail = "Ce n'est pas un email";
        $success = false;
    }
    if(empty($sujet)){
        $sujetError = "on parle de quel sujet";
        $success = false;
    }
    if(empty($message)){
        $messageError = "Quel est votre message";
        $success = false;
    }

    if($success===true){

        if (file_exists($filename))
        {
            $existed = 1;
        }
        // creating a file if it doesn't exist
        $messageCsv = fopen('message.csv', 'a');

        
        if(!$existed)
        {
        fputcsv($messageCsv, array('Nom; Mail; Sujet; Message'));
        }
    
        // saving data to file
        fputcsv($messageCsv, array($name.";".$email.";".$sujet.";".$message));
        
        
        //  close file
        fclose($messageCsv);


            $_SESSION['contact'] = $msgsuccess;
            header('Location: message.php');
            exit;
                

    }
}

?>