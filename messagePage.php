<?php

session_start();

require './logic/logicMessage.php';
require './elements/header.php'; 

?>
<h1 class="text-center">Bonjour <?= $_SESSION['name'] ?></h1>
<!-- si pas de message renvoi l'information -->
    <?php if(isset($_SESSION['notFiles'])): ?>
        <div class="alert alert-info text-center">
            <?= $_SESSION['notFiles'] ?>
        </div>
    <?php endif; ?>
    <table class="table table-striped mx-auto shadow-lg">
        <tbody>
           <!--  boucle les lignes et stock dans la variable tab, tab est un tableau -->
           <?php foreach($lignes as $l):?>
           <!--  explode permet de séparer les lignes via dans ce cas le ";" et crée un tableau ensuite chaques lignes est traité par une boucle -->
            <?php $tab = explode(";", $l) ?>
                    <tr>
                        <?php foreach($tab as $k => $t): ?>
                            <?php if($k === 0): ?>
                                <td><?= $t ?></td>
                            <?php endif; ?>
                            <?php if($k === 1): ?>
                                <td><?= $t ?></td>
                            <?php endif; ?>
                            <?php if($k === 2): ?>
                                <td><?= $t ?></td>
                            <?php endif; ?>
                            <?php if($k === 3): ?>
                                <td><?= $t ?></td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
           <?php endforeach; ?>
        </tbody>
    </table>
<?php require './elements/footer.php'; ?>