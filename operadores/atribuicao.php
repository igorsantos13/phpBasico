<?php
    //operadores de atribuição servem para salvar um dado a uma variavel na memoria
    $pontos = 21;


    //tbm podemos utilizar operadores aritmeticos com atribuição
    $pontos +=3; //adiciona +3 pontos
    echo $pontos . PHP_EOL;

    $pontos -=1; //subtrai um ponto
    echo $pontos . PHP_EOL;

    $pontos *=2; //multiplica por 2
    echo $pontos . PHP_EOL;

    $pontos /=3; // divide por 3
    echo $pontos . PHP_EOL;

    $pontos /=1; //retorna o resto da divisao
    echo $pontos . PHP_EOL;

    //operadores de incremento e decremento
    //++ e --

    //adicionar o incremento ou decremento antes da variavel ou depois trás resultados diferentes
    $pontos = 10;
    $pontos++; //adiciona +1
    echo $pontos . PHP_EOL;

    ++$pontos;
    echo $pontos . PHP_EOL;

    $pontos--; //remove 1
    echo $pontos . PHP_EOL;

    --$pontos;
    echo $pontos . PHP_EOL;



?>