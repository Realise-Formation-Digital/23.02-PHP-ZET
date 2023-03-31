<?php
//stocke le fichier dans une variable
$filename = "message.csv";
$notFiles = "Vous n'avez pas de message";
//vérifie si le fichier existe
if(file_exists($filename))
{
    // lecture avec la fonction file() et ouverture
    $lignes = file($filename);
}
else
{
    $lignes = array();
    $_SESSION['notFiles'] = $notFiles; 
}
?>