<?php
session_start();


require 'header.php'; 
?>
<h1 class="text-center">Bonjour <?= $_SESSION['name'] ?></h1>
    
<?php require 'footer.php'; ?>