<?php


//Os backticks ``, também conhecidos como backquotes, executam o conteúdo como um comando shell e são equivalentes a shell_exec(). exec(), shell_exec() e system(), todos são capazes de executar comandos no nível do shell.
$output = `ls -al`;
echo "<pre>$output</pre>";