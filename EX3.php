<?php
    $TAB=["Atelier N°2","Bonjour Tout le monde","Vous êtes les bienvenus"];
    $json=json_encode($TAB,JSON_UNESCAPED_UNICODE);
    echo "Chaîne JSON :\n";
    echo $json;
    if (strpos($json, "Bonjour") !== false) {
        echo "Le mot Bonjour est présent dans la chaîne.\n";
    } else {
        echo "Le mot Bonjour n'est pas présent dans la chaîne.\n";
    }

?>
