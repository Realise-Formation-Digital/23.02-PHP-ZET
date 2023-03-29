<?php
session_start();

$handle = fopen("message.csv", "r");
while (($data = fgetcsv($handle, null,";")) !== FALSE) {
    var_dump($data);
}

require 'header.php'; 
?>

<?php require 'footer.php'; ?>