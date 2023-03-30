<?php
session_start();

require 'header.php'
?>

<div class="container">
    <div class="row">
        <?= $_SESSION['contact'] ?>
    </div>
</div>


<?php require 'footer.php';?>