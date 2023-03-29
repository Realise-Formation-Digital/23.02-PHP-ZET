<?php 
$name = $password = $passwordError = $messageError = $result = "";

if(!empty($_POST))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $success = true;
    if(empty($name))
    {
        $messageError = "Vous devez rentrer un nom ou un mot de passe";
        $success = false;
    }
    if(empty($password))
    {
        $messageError = "Vous devez rentrer un nom ou un mot de passe";
        $success = false;
    }
    if($success)
    {
        if (($handle = fopen("user.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) 
            {
                if (password_verify($password, $data[1])) {
                    $passwordError = "mot de passe valid $data[0]";
                } else {
                    $passwordError = 'L utilisateur ou le mot de passe est invalide.';
                }
            }
            fclose($handle);
        }
    }
}


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
<?php if($result): ?>
    <div class="alert alert-success text-center">
        <?= $result ?>
    </div>
<?php endif; ?>

<?php if($passwordError): ?>
    <div class="alert alert-primary text-center">
        <?= $passwordError ?>
    </div>
<?php endif; ?>

<?php require './footer.php'; ?>