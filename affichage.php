<?php

function afficher($tableau)
{
    foreach ($tableau as $element) {
        echo $element . "<br>";
    }
}

function afficherAssoc($tableau)
{
    foreach ($tableau as $indice => $valeur) {
        echo $indice . " : " . $valeur . "<br>";
    }
}
?>