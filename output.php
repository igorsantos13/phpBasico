<?php

    //ja usado
    echo 'salve!';

    //usamos . para concatenar valores
    //PHP_EOL ('end of line') usado para quebras de linha no echo
    echo 'id: ' . 12 . PHP_EOL;

    //alem de mostrar o valor tbm diz o tipo da variavel
    var_dump(value: 'string');
    var_dump(value: 12); //number
    var_dump(value:12.121212); //double
    var_dump([1,2,3,4]); //array

    //ao utilizar var_dump não é necessario o uso do PHP_EOL
?>