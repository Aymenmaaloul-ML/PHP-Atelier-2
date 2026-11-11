<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container mt-5">
    <?php
        include "affichage.php";
        $tabpays1 = ["Tunisie", "France", "Italie", "Espagne", "Allemagne"];
        echo "<h3>Question 1</h3>"; 
        afficher($tabpays1); 
        echo "<h3>Question 2 - Croissant</h3>"; 
        sort($tabpays1); 
        afficher($tabpays1); 
        echo "<h3>Question 2 - Décroissant</h3>"; 
        rsort($tabpays1); 
        afficher($tabpays1);
        $tabpays2 = ["Tunis" => "Tunisie","Paris" => "France","Rome" => "Italie","Madrid" => "Espagne","Berlin" => "Allemagne"];
        echo "<h3>Question 4</h3>"; 
        afficherAssoc($tabpays2); 
        echo "<h3>Question 4 - Valeurs croissantes</h3>"; 
        asort($tabpays2); afficherAssoc($tabpays2); 
        echo "<h3>Question 4 - Valeurs décroissantes</h3>"; 
        arsort($tabpays2); afficherAssoc($tabpays2); 
        echo "<h3>Question 5 - Indices croissants</h3>"; 
        ksort($tabpays2); afficherAssoc($tabpays2); 
        echo "<h3>Question 5 - Indices décroissants</h3>"; 
        krsort($tabpays2); afficherAssoc($tabpays2); 
        echo "<h3>Question 6</h3>";
        include "table.php"; 
        include "table2.php"; 
        afficherTable($tabpays1); 
        afficherTable2($tabpays2);
    ?>
    
</body>

</html>