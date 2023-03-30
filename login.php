<?php 
require './logicLogin.php';
require './header.php';
?>
<?php if($messageError): ?>
    <div class="alert alert-danger text-center">
        <?= $messageError ?>
    </div>
<?php endif; ?>
<div class="container-sm mx-auto my-2">
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput" placeholder="votre nom" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votre mot de passe</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="votre mot de passe" name="password">
        </div>
        <button type="submit" class="btn btn-primary mx-auto">soumettre</button>
    </form>
</div>
<?php if($passwordError): ?>
    <div class="alert alert-primary text-center">
        <?= $passwordError ?>
    </div>
<?php endif; ?>

<?php require './footer.php'; ?>