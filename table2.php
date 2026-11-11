<?php

function afficherTable2($tableau)
{
?>

<table class="table table-hover">
    <tr class="table-primary">
        <th>Les Pays</th>
        <th>Les Capitals</th>
    </tr>

    <?php
    foreach ($tableau as $capitals=>$pays) {
    ?>
        <tr>
            <td><?= $pays ?></td>
            <td><?= $capitals ?></td>
        </tr>
    <?php
    }
    ?>

</table>

<?php
}
?>