<?php require './header.php'; ?>

<div class="container-md mx-auto">
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput" placeholder="votre nom" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votre email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="votre email" name="email">
        </div>
        <button type="submit">soumettre</button>
    </form>
</div>

<?php require './footer.php'; ?>