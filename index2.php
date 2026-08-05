<?php
//Arquivo responsavel pela inicialização do sistema

// Busca a partir da pasta atual do script de forma segura:
require_once __DIR__ . '/sistema/configuracao.php';
include_once __DIR__ . '/sistema/helpers.php';


echo contarTempo('2026-08-04 23:40:50');
//strtotime();

?>