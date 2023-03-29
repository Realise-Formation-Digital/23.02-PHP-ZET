<?php
session_start();

$handle = fopen("message.csv", "r");

while (($data = fgetcsv($handle, null,";"))!== FALSE) {
    var_dump($data);
}

require 'header.php'; 
?>
<?php while(($data = fgetcsv($handle, null,";"))!== FALSE): ?>
    <p><?= $data ?></p><p><?= $data[1] ?></p><p><?= $data[2] ?></p>
<?php endwhile; ?>


<?php require 'footer.php'; ?>