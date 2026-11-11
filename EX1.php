<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container mt-5">
    <ul>
        <?php

        $Notes = [
            "Rami" => 7.50,
            "Mohamed" => 19.00,
            "Amira" => 15.50,
            "Asma" => 10.00,
            "Ahmed" => 09.5,
            "Yassine" => 15.5,
            "Islem" => 12.00
        ];
        $max = $Notes["Rami"];
        $nb = count($Notes);
        $max_nom = "Rami";
        foreach ($Notes as $note => $value) {
            if ($value > $max) {
                $max = $value;
                $max_nom = $note;
            }
            if ($value >= 10) { ?>
                <li><?= $note ?></li>
        <?php
            }
        } ?>
    </ul>
    <hr>
    <?php
    echo "le nombre des etudiants est: $nb <br>";
    echo "le meuillieur etudiant est: $max_nom";
    ?>
    <table class="table table-hover">
        <tr class="table-primary">
            <th scope="col">nom</th>
            <th scope="col">note en PHP</th>
        </tr>
        <?php
        foreach ($Notes as $note => $value) {
        ?>
            <tr>
                <td><?= $note ?></td>
                <td><?= $value ?></td>
            </tr>


        <?php
        }


        ?>


    </table>
    <h3>voici le tableau trie par note</h3>
    <?php
    asort($Notes);
    foreach ($Notes as $note => $value) {
        echo $note . "<br>";
    } ?>
    <h3>voici le tableau trie par nom</h3>
    <?php
    ksort($Notes);
    $nb_moy = number_format(array_sum($Notes) / $nb, 2);
    foreach ($Notes as $note => $value) {
        echo $note . "<br>";
    }
    echo "<hr>la moyenne des notes en PHP: $nb_moy";
    ?>

</body>

</html>