<?php

session_start();

require './logic/logicMessage.php';
require './elements/header.php'; 

?>
<h1 class="text-center">Bonjour <?= $_SESSION['name'] ?></h1>
    <table class="table table-striped mx-auto shadow-lg">
        <tbody>
           <?php foreach($lignes as $l):?>
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