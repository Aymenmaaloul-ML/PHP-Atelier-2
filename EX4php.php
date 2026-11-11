<?php  
    if (isset($_POST["chaine"])){
        $chaine=$_POST["chaine"];
        $long=strlen($chaine);
        echo "la longeur de chaine est:$long";
    }
?>