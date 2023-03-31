<?php
session_start();

require 'elements/header.php'
?>
<!-- section to display success -->
<div class="container  text-center my-3">
    <div class="row alert alert-success text-center">
        <h3 class="text-center"><?= $_SESSION['contact'] ?></h3>
    </div>
    <!-- section with a button to return to the home page -->
    <div class="row">
        <div>
        <a href="index.php" class="btn btn-primary" tabindex="-1" role="button">Page d'accueil</a>

        </div>
    </div>
</div>


<?php require 'elements/footer.php';?>