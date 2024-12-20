<?php

/* declaração de variáveis;
 - atribuição de valores;
 - convenções de nomeclaturas */

# Camel Case
 $nomeCompleto = "Gil do Vigor"; // str
 # Snake Case
 $_idade = 33; // int
 $altura_metros = 1.78; // float

# diferenciação via prefixos e sufixos
$GLOBALS['user'] = "Aluno";
echo "$user" . PHP_EOL;
$alunoLocal = "Luva de Pedreiro";
echo $alunoLocal . PHP_EOL;

# considere o uso de constantes (globais por natureza)
define('ALTURA_MEDIA', 1.70);
echo ALTURA_MEDIA . PHP_EOL; // Saída: 1.7
echo number_format(ALTURA_MEDIA, 2); // Saída: 1.70
