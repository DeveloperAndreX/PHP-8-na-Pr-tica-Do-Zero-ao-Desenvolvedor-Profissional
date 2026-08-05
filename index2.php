<?php
//Arquivo responsavel pela inicialização do sistema

// Busca a partir da pasta atual do script de forma segura:
require_once __DIR__ . '/sistema/configuracao.php';
include_once __DIR__ . '/sistema/helpers.php';

(int)$month = 8 ;
(int)$year = 2026;
(int)$day = 4;

(string)$data = date('d/m/Y H:i:s');
echo $data;

if(isset($date1)):
$verifyDate = checkdate($month, $year, $day);
echo " retorna: " . $verifyDate . "<br>";
endif;

















?>