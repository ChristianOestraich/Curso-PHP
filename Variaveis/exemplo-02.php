<?php

    $sobrenome = "Rangel";

    $nome = "João";

    $nomeCompleto = $nome ." ". $sobrenome;
    
    echo $nomeCompleto;
    
    exit;
    
    $nome2 = "João";

    unset($nome2);

    if(isset($nome2)){

        echo $nome2;
    }
?>