<?php
$name = $email = $sujet = $message = $nameError = $emailError = $sujetError = $messageError = $msgsuccess = "";

if(!empty($_POST)){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $sujet= $_POST['sujet'];
    $message= $_POST['message'];
    $filename = 'message.csv';
    $messageCsv = ('');
    $success = true;
    $msgsuccess = "";
    $existed = 0;


    //checking if the field is filled
    if(empty($name)){
        $nameError = "J'ai besoin d'un nom";
        $success = false;
    }

    if(empty($email)){
        $emailError= "entrer un email";
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
    var_dump($success);
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
    var_dump($existed);
    // saving data to file
    fputcsv($messageCsv, array($name.";".$email.";".$sujet.";".$message));
    
    
    //  close file
    fclose($messageCsv);


    $msgsuccess = "Votre message à été envoye.";
    }
}

?>