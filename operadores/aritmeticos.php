<?php
    /**
        Operadores:
        (+, -, *, /, %)
    */

    //adição
    $a = 5;
    $b = 11;

    var_dump(value: $a + $b);

    //subtração
    $a = 10;
    $b = 7;

    var_dump(value: $a - $b);
    var_dump(value: $b - $a);

    //multiplicação
    $a = 8;
    $b = 7;

    var_dump(value: $a * $b);

    //divisão
    $a = 100;
    $b = 40;

    var_dump(value: $a / $b);

    //modulo
    $a = 20;
    $b = 4;

    var_dump(value: $a % $b);

    //exponencial
    $a = 5;
    $b = 2;

    var_dump(value: $a ** $b);

    //expressoes
    var_dump(value: (50/ 25 + 11) * (24 + 7 * 100 / 2));

    //ao colocar o subtrair antes de um varaivel aquele numero se torna o valor negativo
    $a = 10;
    var_dump(value: -$a);
?>
