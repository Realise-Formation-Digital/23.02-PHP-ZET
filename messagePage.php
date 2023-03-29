<?php
session_start();

$handle = fopen("message.csv", "r");
$lignes = file("message.csv");
var_dump($lignes);

require 'header.php'; 
?>
<?php foreach($lignes as $l): ?>
    <p><?= $l ?></p>
<?php endforeach; ?>
<?php require 'footer.php'; ?>