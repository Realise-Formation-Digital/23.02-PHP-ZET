<?php
$password = '123456';
if (($handle = fopen("user.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, null, ";")) !== FALSE) 
    {
        
    }
    fclose($handle);
}
?>