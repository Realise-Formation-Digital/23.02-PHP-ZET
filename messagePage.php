<?php
session_start();

$file = fopen('message.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
    $array = explode(";",$line[$i]);
    var_dump($array);
}
fclose($file);
require 'header.php'; 
?>
<h1 class="text-center">Bonjour <?= $_SESSION['name'] ?></h1>
    <table class="table table-striped">
        <?php foreach($row as $r): ?>
            <tr>
                <td><?= $r[0] ?></td>
                <td><?= $r[1] ?></td>
                <td><?= $r[2] ?></td>
                <td><?= $r[3] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php require 'footer.php'; ?>