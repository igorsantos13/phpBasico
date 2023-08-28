<?php 
    
    //E (and)
    $a = true;
    $b = true;
    
    //retorna true se ambos forem condizentes
    var_dump($a && $b);

    //Ou (or)
    $a = false;
    $b = true;

    //basta 1 verdadeiro para validar
    var_dump($a || $b);

    $a = true;
    $b = true;

    //OU Exclusivo "XOR" retorna true se apenas 1 do paremetros for verdadeiro
    //mas não todos
    var_dump($a ^ $b);

    //Não
    $a = true;
    //retorna o inverso
    var_dump(!$a);

    //"and" "or" e "xor" também são permitidos mas é recomendado os simbolos
?>