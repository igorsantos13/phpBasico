<?php
    //Booleanos
    var_dump(value: true);
    var_dump(value: false);
    var_dump(value: tRUe); //nau fasa
    var_dump(value: FaLSe);//a issooo :(

    //Inteiros
    var_dump(1234); // número decimal
    var_dump(-123); // um número negativo
    var_dump(0123); // número octal (equivalente a 83 em decimal)
    var_dump(0x1A); // número hexadecimal (equivalente a 26 em decimal)
    var_dump(0b11111111); // número binário (equivalente ao 255 decimal)

    //Flutuantes (Double, float, números reais)
    $a = 1.234;
    $b = 1.2e3;
    $c = 7E-10;

    echo $a . "\n";
    echo $b . "\n";
    echo $c . "\n";

    //String
    echo "He4rtDevs <3 \n";
    echo "éus guri da catequese néãmnnn \n";

    //Arrays
    $array1 = array(
        'Driver' => 'Hamilton',
        'Team' => 'Mercedes'
    );

    $array2 = [
        'Player' => 'Messi',
        'Team' => 'Inter Miami',
        'teste', //index[0]
        123 //index[1]
    ];

    //se o dado for inserido sem uma chave ele assume o valor do index iniciando por 0
    var_dump($array1);
    var_dump($array2)
?>