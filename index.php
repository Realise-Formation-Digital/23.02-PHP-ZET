
<?php 
//on include le fichier header.php
require_once "header.php";



// On écrir le contenu  de la page
?>

<p>Page de connextion</p>
<?php
    require_once "connect.php";
    $username = "demo";
    $password = "qsdfgh";

    $sql ="SELECT * FROM 'users' WHERE úsername'=:username AND 'pass'=:pass";

    //On prépare la requete
    $requete = $db ->prepare($sql);

    //on injecte les valeurs "bindValue"
    $requete->bindParam(":username", $username, PDO::PARAM_STR);
    $requete->bindValue(":pass", $password, PDO::PARAM_STR);

    $username ="admin";

    // on exécut
    $requete->execute();
    $user = $requet->fetchAll();

    echo "<pre>";
    var_dump($user);
    echo "<pre>";

    //on inclut le footer.php
    require_once "footer.php";

