<?php
session_start();

require './elements/header.php';
?>

<div class="container">
    <div class="row">
        <?= $_SESSION['name'] ?>
        <?= $_SESSION['email'] ?>
        <?= $_SESSION['sujet'] ?>
        <?= $_SESSION['mot'] ?>
        <?= $_SESSION['message'] ?>
    </div>
</div>

<?php require './elements/footer.php'; ?>