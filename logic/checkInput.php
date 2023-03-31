<?php

/**
 * function pour controler les entres
 * @param{string} -parametre vient d'inmput
 * 
 */

function checkInput (string $value){
$value = trim($value);

$value = htmlspecialchars($value);

$value = htmlentities($value);
return $value;

}


?>