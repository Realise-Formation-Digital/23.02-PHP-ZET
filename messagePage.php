<?php
require './logic/logicMessage.php';
require './elements/header.php'; 
var_dump($_SESSION);
?>
<h1 class="text-center">Bonjour <?= $_SESSION['name'] ?></h1>
    <table class="table-info table-striped">
        <tbody>
           <?php foreach($lignes as $l):?>
            <?php $tab = explode(";", $l) ?>
                <table class="table">
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
                </table>
           <?php endforeach; ?>
        </tbody>
    </table>
<?php require './elements/footer.php'; ?>