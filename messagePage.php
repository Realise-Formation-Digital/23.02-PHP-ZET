<?php
session_start();

$file = "message.csv";
$openfile = fopen($file,"r");
$content = fread($openfile, filesize($file));
var_dump($content);
$str = explode(';', $content);
var_dump($str);

require 'header.php'; 
?>
<h1 class="text-center">Bonjour <?= $_SESSION['name'] ?></h1>
<div class="container-grid-message">
    <?php for($i=0;$i < count($str); $i++ ): ?>
      
    <?php endfor; ?>
</div>
<?php require 'footer.php'; ?>