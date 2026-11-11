<?php

function afficherTable($tableau)
{
?>

<table class="table table-hover">
    <tr class="table-primary">
        <th>Les Pays</th>
    </tr>

    <?php
    foreach ($tableau as $pays) {
    ?>
        <tr>
            <td><?= $pays ?></td>
        </tr>
    <?php
    }
    ?>

</table>

<?php
}
?>