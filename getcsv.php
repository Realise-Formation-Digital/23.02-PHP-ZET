<?php
$password = '123456';
if (($handle = fopen("user.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) 
    {
        if (password_verify($password, $data[1])) {
            echo "mot de passe valid $data[0]";
        } else {
            echo 'L utilisateur ou le mot de passe est invalide.';
        }
    }
    fclose($handle);
}
?>