<?php

// Busca a partir da pasta atual do script de forma segura:
require_once __DIR__ . '/sistema/configuracao.php';
include_once __DIR__ . '/sistema/helpers.php';

(int)$month = 8;
(int)$year = 2026;
(int)$day = 4;

(string)$data = date('d/m/Y H:i:s');
echo $data;
echo "<hr>";

if (isset($month, $year, $day)):
    $verifyDate = checkdate($day, $month, $year);
    echo ucfirst(" <b> retorna: </b>  ") . "<br>";
    echo "Tipo de Dado e:" . gettype($verifyDate) . "<br>";
    var_dump($verifyDate); // False.
   
    // exemplos da documentação:
    echo "<hr>";

    var_dump(checkdate(12, 31, 2000)); //bool (true);
    var_dump(checkdate(2, 29, 2001)); //bool(false);

else:
    echo "FATAL ERROR";

endif;

?>