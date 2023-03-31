<?php
session_start();

require 'elements/header.php'
?>

<div class="container  text-center my-3">
    <div class="row alert alert-success text-center">
        <h3 class="text-center"><?= $_SESSION['contact'] ?></h3>
    </div>
    <div class="row">
        <div>
        <a href="index.php" class="btn btn-primary" tabindex="-1" role="button">Page d'accueil</a>

        </div>
    </div>
</div>


<?php require 'elements/footer.php';?>