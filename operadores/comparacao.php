<?php
    //igualdade
    echo (0 == false) . PHP_EOL; //true
    echo (123 == '123') . PHP_EOL; //true
    echo (123.0 == 123) . PHP_EOL; //true
    //diferença
    echo (0 != false) . PHP_EOL; //false
    echo ('777' != 777) . PHP_EOL; //false
    echo (123.0 != 123) . PHP_EOL; //false
    //identico
    echo (0 === false) . PHP_EOL; //false
    echo (123 === '123') . PHP_EOL; //false
    echo (123.0 === 123) . PHP_EOL; //false
    //nao identico
    echo (0 !== false) . PHP_EOL; //true
    echo ('123' !== 123) . PHP_EOL; //true
    echo (123.0 !== 123) . PHP_EOL; //true
    //maior e menor que
    echo (2 < 3) . PHP_EOL; //true
    echo (2 > 3) . PHP_EOL; //false
    echo (2 <= 3) . PHP_EOL; //true
    echo (2 >= 3) . PHP_EOL; //false

?>